/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
define(["require","exports","jquery","TYPO3/CMS/Backend/FormEngine","TYPO3/CMS/Backend/Modal","jquery-ui/sortable"],(function(require,exports,$,FormEngine,Modal){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var FlexFormElement=function(){function e(t,o){this.el=t;var n=this;return this.el=t,this.$el=$(t),void 0!==this.$el.data("TYPO3.FormEngine.FlexFormElement")&&this.$el.removeData("TYPO3.FormEngine.FlexFormElement"),this.$el.data("TYPO3.FormEngine.FlexFormElement",this),o||(o=e.defaults),o.allowRestructure=this.$el.data("t3-flex-allow-restructure"),o.flexformId=this.$el.attr("id"),this.opts=$.extend({},e.defaults,o),this.initializeEvents(),this.$el.find(this.opts.sectionSelector).each((function(){n.generateSectionPreview($(this))})),this}return e.prototype.initializeEvents=function(){var e=this;return this.$el.prev(this.opts.flexFormToggleAllSectionsSelector).off("click").on("click",(function(){e.$el.find(e.opts.sectionToggleButtonSelector).trigger("click")})),this.opts.allowRestructure&&(this.createSortable(),this.$el.off("click").on("click",this.opts.deleteIconSelector,(function(t){t.preventDefault();var o=TYPO3.lang["flexform.section.delete.title"]||"Are you sure?",n=TYPO3.lang["flexform.section.delete.message"]||"Are you sure you want to delete this section?",i=Modal.confirm(o,n);i.on("confirm.button.cancel",(function(){Modal.currentModal.trigger("modal-dismiss")})),i.on("confirm.button.ok",(function(){$(t.target).closest(e.opts.sectionSelector).hide().addClass(e.opts.sectionDeletedClass),e.setActionStatus(),FormEngine.Validation.validate(),Modal.currentModal.trigger("modal-dismiss")}))})),this.$el.on("click",this.opts.sectionToggleButtonSelector,(function(t){t.preventDefault();var o=$(t.currentTarget).closest(e.opts.sectionSelector);e.toggleSection(o)})).on("click",this.opts.sectionToggleButtonSelector+" .form-irre-header-control",(function(e){e.stopPropagation()}))),this},e.prototype.createSortable=function(){var e=this;this.$el.sortable({containment:"parent",handle:".t3js-sortable-handle",axis:"y",tolerance:"pointer",stop:function(){e.setActionStatus(),$(document).trigger("flexform:sorting-changed")}})},e.prototype.setActionStatus=function(){var e=this;this.$el.find(this.opts.sectionActionInputFieldSelector).each((function(t){var o=$(this).parents(e.opts.sectionSelector).hasClass(e.opts.sectionDeletedClass)?"DELETE":t;$(this).val(o)}))},e.prototype.toggleSection=function(e){var t=e.find(this.opts.sectionContentSelector);t.toggle(),t.is(":visible")?(e.find(this.opts.sectionToggleIconOpenSelector).show(),e.find(this.opts.sectionToggleIconCloseSelector).hide(),e.find(this.opts.sectionToggleInputFieldSelector).val(0)):(e.find(this.opts.sectionToggleIconOpenSelector).hide(),e.find(this.opts.sectionToggleIconCloseSelector).show(),e.find(this.opts.sectionToggleInputFieldSelector).val(1)),this.generateSectionPreview(e)},e.prototype.generateSectionPreview=function(e){var t=e.find(this.opts.sectionContentSelector),o="";t.is(":visible")||t.find("input[type=text], textarea").each((function(){var e=$($.parseHTML($(this).val())).text();e.length>50&&(e=e.substring(0,50)+"..."),o+=(o?" / ":"")+e})),0===e.find(this.opts.sectionHeaderPreviewSelector).length&&e.find(this.opts.sectionHeaderSelector).find(".t3js-record-title").parent().append('<span class="'+this.opts.sectionHeaderPreviewSelector.replace(/\./,"")+'"></span>'),e.find(this.opts.sectionHeaderPreviewSelector).text(o)},e.defaults={deleteIconSelector:".t3js-delete",sectionSelector:".t3js-flex-section",sectionContentSelector:".t3js-flex-section-content",sectionHeaderSelector:".t3js-flex-section-header",sectionHeaderPreviewSelector:".t3js-flex-section-header-preview",sectionActionInputFieldSelector:".t3js-flex-control-action",sectionToggleInputFieldSelector:".t3js-flex-control-toggle",sectionToggleIconOpenSelector:".t3js-flex-control-toggle-icon-open",sectionToggleIconCloseSelector:".t3js-flex-control-toggle-icon-close",sectionToggleButtonSelector:'[data-toggle="formengine-flex"]',flexFormToggleAllSectionsSelector:".t3js-form-field-toggle-flexsection",sectionDeletedClass:"t3js-flex-section-deleted",allowRestructure:!1,flexformId:!1},e}();$.fn.t3FormEngineFlexFormElement=function(e){return this.each((function(){new FlexFormElement(this,e)}))},$((function(){$(".t3-flex-container").t3FormEngineFlexFormElement(),$(document).on("click",".t3js-flex-container-add",(function(e){var me=$(this);e.preventDefault(),$.ajax({url:TYPO3.settings.ajaxUrls.record_flex_container_add,type:"POST",cache:!1,data:{vanillaUid:me.data("vanillauid"),databaseRowUid:me.data("databaserowuid"),command:me.data("command"),tableName:me.data("tablename"),fieldName:me.data("fieldname"),recordTypeValue:me.data("recordtypevalue"),dataStructureIdentifier:me.data("datastructureidentifier"),flexFormSheetName:me.data("flexformsheetname"),flexFormFieldName:me.data("flexformfieldname"),flexFormContainerName:me.data("flexformcontainername")},success:function(response){me.closest(".t3-form-field-container").find(".t3-flex-container").append(response.html),$(".t3-flex-container").t3FormEngineFlexFormElement(),response.scriptCall&&response.scriptCall.length>0&&$.each(response.scriptCall,(function(index,value){eval(value)})),response.stylesheetFiles&&response.stylesheetFiles.length>0&&$.each(response.stylesheetFiles,(function(e,t){var o=document.createElement("link");o.rel="stylesheet",o.type="text/css",o.href=t,document.head.appendChild(o)})),FormEngine.reinitialize(),FormEngine.Validation.initializeInputFields(),FormEngine.Validation.validate()}})}))}))}));