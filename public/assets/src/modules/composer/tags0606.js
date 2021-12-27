"use strict";define("composer/tags",function(){var t={};var e;var a;t.init=function(o,g){var s=o.find(".tags");if(!s.length){return}e=ajaxify.data.hasOwnProperty("minTags")?ajaxify.data.minTags:config.minimumTagsPerTopic;a=ajaxify.data.hasOwnProperty("maxTags")?ajaxify.data.maxTags:config.maximumTagsPerTopic;s.tagsinput({confirmKeys:[13,44],trimValue:true});var u=o.find(".bootstrap-tagsinput input");i(o,g,ajaxify.data);app.loadJQueryUI(function(){u.autocomplete({delay:100,position:{my:"left bottom",at:"left top",collision:"flip"},appendTo:o.find(".bootstrap-tagsinput"),open:function(){$(this).autocomplete("widget").css("z-index",2e4)},source:function(t,e){socket.emit("topics.autocompleteTags",{query:t.term,cid:g.cid},function(t,a){if(t){return app.alertError(t.message)}if(a){e(a)}$(".ui-autocomplete a").attr("data-ajaxify","false")})},select:function(){n(u)}});r(g.tags,s);s.on("beforeItemAdd",function(e){var i=a&&a<=t.getTags(o.attr("data-uuid")).length;var n=utils.cleanUpTag(e.item,config.maximumTagLength);var r=n!==e.item;e.cancel=r||e.item.length<config.minimumTagLength||e.item.length>config.maximumTagLength||i;if(e.item.length<config.minimumTagLength){return app.alertError("[[error:tag-too-short, "+config.minimumTagLength+"]]")}else if(e.item.length>config.maximumTagLength){return app.alertError("[[error:tag-too-long, "+config.maximumTagLength+"]]")}else if(i){return app.alertError("[[error:too-many-tags, "+a+"]]")}if(r){s.tagsinput("add",n)}});var e=false;var i=false;s.on("itemRemoved",function(t){if(i){i=false;return}if(!t.item){return}socket.emit("topics.canRemoveTag",{tag:t.item},function(a,i){if(a){return app.alertError(a.message)}if(!i){app.alertError("[[error:cant-remove-system-tag]]");e=true;s.tagsinput("add",t.item)}})});s.on("itemAdded",function(t){if(e){e=false;return}var a=g.hasOwnProperty("cid")?g.cid:ajaxify.data.cid;socket.emit("topics.isTagAllowed",{tag:t.item,cid:a||0},function(e,n){if(e){return app.alertError(e.message)}if(!n){i=true;return s.tagsinput("remove",t.item)}$(window).trigger("action:tag.added",{cid:a,tagEl:s,tag:t.item});if(u.length){u.autocomplete("close")}})})});u.attr("tabIndex",s.attr("tabIndex"));u.on("blur",function(){n(u)});$('[component="composer/tag/dropdown"]').on("click","li",function(){var t=$(this).attr("data-tag");if(t){r([t],s)}return false})};t.isEnoughTags=function(a){return t.getTags(a).length>=e};t.minTagCount=function(){return e};t.onChangeCategory=function(t,e,a,n){var r=t.find('[component="composer/tag/dropdown"]');if(!r.length){return}i(t,e,n);r.toggleClass("hidden",!n.tagWhitelist||!n.tagWhitelist.length);if(n.tagWhitelist){app.parseAndTranslate("composer","tagWhitelist",{tagWhitelist:n.tagWhitelist},function(t){r.find(".dropdown-menu").html(t)})}};function i(t,i,n){var r=t.find(".tags");var o=t.find(".bootstrap-tagsinput input");if(!o.length){return}if(n.hasOwnProperty("minTags")){e=n.minTags}if(n.hasOwnProperty("maxTags")){a=n.maxTags}if(n.tagWhitelist&&n.tagWhitelist.length){o.attr("readonly","");o.attr("placeholder","");r.tagsinput("items").slice().forEach(function(t){if(n.tagWhitelist.indexOf(t)===-1){r.tagsinput("remove",t)}})}else{o.removeAttr("readonly");o.attr("placeholder",t.find("input.tags").attr("placeholder"))}t.find(".tags-container").toggleClass("hidden",n.privileges&&n.privileges.hasOwnProperty("topics:tag")&&!n.privileges["topics:tag"]||a===0&&!i.tags.length);if(n.privileges&&n.privileges.hasOwnProperty("topics:tag")&&!n.privileges["topics:tag"]){r.tagsinput("removeAll")}$(window).trigger("action:tag.toggleInput",{postContainer:t,tagWhitelist:n.tagWhitelist,tagsInput:o})}function n(t){var e=jQuery.Event("keypress");e.which=13;e.keyCode=13;setTimeout(function(){t.trigger(e)},100)}function r(t,e){if(t&&t.length){for(var a=0;a<t.length;++a){e.tagsinput("add",t[a])}}}t.getTags=function(t){return $('.composer[data-uuid="'+t+'"] .tags').tagsinput("items")};return t});
//# sourceMappingURL=tags.js.map