/**
 * Remove squared button style
 *
 * @since 1.0.0
 */
/* global wp */
wp.domReady(function() {
  wp.blocks.unregisterBlockStyle("core/button", "squared");
  let textArea = document.querySelector(".wp-block textarea");
  textArea.setAttribute("maxlength", "100");
  let maxlen = textArea.getAttribute("maxlength");
  let textAreaWrapper = document.querySelector(".wp-block");
  let exceedText = document.createElement("h3");

  /* add styles to span */
  exceedText.style.position = "absolute";
  exceedText.style.top = "-5px";
  exceedText.style.fontSize = "15px";
  exceedText.style.color = "#000";
  exceedText.style.right = "0px";
  exceedText.style.fontWeight = "400";

  /* Adding class to element */
  exceedText.classList = "wp-block-limit";

  /* event listner on textarea */
  textArea.addEventListener("keyup", function() {
    textAreaWrapper.insertBefore(exceedText, textAreaWrapper.firstChild);
    exceedText.innerHTML = textArea.value.length + "/" + maxlen;
  });
});
