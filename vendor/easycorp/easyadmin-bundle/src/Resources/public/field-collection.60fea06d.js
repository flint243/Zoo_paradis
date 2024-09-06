(()=>{var __webpack_exports__={},eaCollectionHandler=function(e){document.querySelectorAll("button.field-collection-add-button").forEach((function(e){var t=e.closest("[data-ea-collection-field]");t&&!t.classList.contains("processed")&&(EaCollectionProperty.handleAddButton(e,t),EaCollectionProperty.updateCollectionItemCssClasses(t))})),document.querySelectorAll("button.field-collection-delete-button").forEach((function(e){e.addEventListener("click",(function(){var t=e.closest("[data-ea-collection-field]");e.closest(".field-collection-item").remove(),document.dispatchEvent(new Event("ea.collection.item-removed")),EaCollectionProperty.updateCollectionItemCssClasses(t)}))}))};window.addEventListener("DOMContentLoaded",eaCollectionHandler),document.addEventListener("ea.collection.item-added",eaCollectionHandler);var EaCollectionProperty={handleAddButton:function handleAddButton(addButton,collection){addButton.addEventListener("click",(function(){var isArrayCollection=collection.classList.contains("field-array"),numItems=parseInt(collection.dataset.numItems),emptyCollectionBadge=this.parentElement.querySelector(".collection-empty");null!==emptyCollectionBadge&&(emptyCollectionBadge.outerHTML=isArrayCollection?'<div class="ea-form-collection-items"></div>':'<div class="ea-form-collection-items"><div class="accordion"><div class="form-widget-compound"><div data-empty-collection></div></div></div></div>');var formTypeNamePlaceholder=collection.dataset.formTypeNamePlaceholder,labelRegexp=new RegExp(formTypeNamePlaceholder+"label__","g"),nameRegexp=new RegExp(formTypeNamePlaceholder,"g"),newItemHtml=collection.dataset.prototype.replace(labelRegexp,numItems).replace(nameRegexp,numItems);collection.dataset.numItems=++numItems;var newItemInsertionSelector=isArrayCollection?".ea-form-collection-items":".ea-form-collection-items .accordion > .form-widget-compound [data-empty-collection]",collectionItemsWrapper=collection.querySelector(newItemInsertionSelector);collectionItemsWrapper.insertAdjacentHTML("beforeend",newItemHtml);var collectionItems=collectionItemsWrapper.querySelectorAll(".field-collection-item"),lastElement=collectionItems[collectionItems.length-1];if(lastElement.querySelectorAll("script").forEach((function(script){return eval(script.innerHTML)})),!isArrayCollection){EaCollectionProperty.updateCollectionItemCssClasses(collection);var lastElementCollapseButton=lastElement.querySelector(".accordion-button");lastElementCollapseButton.classList.remove("collapsed");var lastElementBody=lastElement.querySelector(".accordion-collapse");lastElementBody.classList.add("show")}document.dispatchEvent(new CustomEvent("ea.collection.item-added",{detail:{newElement:lastElement}}))})),collection.classList.add("processed")},updateCollectionItemCssClasses:function(e){if(null!==e){var t=e.querySelectorAll(".field-collection-item");t.forEach((function(e){return e.classList.remove("field-collection-item-first","field-collection-item-last")}));var l=t[0];if(void 0!==l){l.classList.add("field-collection-item-first");var o=t[t.length-1];void 0!==o&&o.classList.add("field-collection-item-last")}}}}})();