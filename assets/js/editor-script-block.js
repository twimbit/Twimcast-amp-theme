/**
 * Remove squared button style
 *
 * @since 1.0.0
 */
/* global wp */
wp.domReady(function () {
    /* Twimcast custom wp-block title text area character limiting code */
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

    /* inserting exceed limit element */
    textAreaWrapper.insertBefore(exceedText, textAreaWrapper.firstChild);
    exceedText.innerHTML = textArea.value.length + "/" + maxlen;

    /* event listner on textarea */
    textArea.addEventListener("keyup", function () {
        exceedText.innerHTML = textArea.value.length + "/" + maxlen;

    });
    // (function ($) {
    //     let domain = window.location.origin;
    //     let parent = $('.edit-post-fullscreen-mode-close');
    //     parent.empty();
    //     let img = document.createElement('img');
    //     img.src = domain + '/twimbit/wp-content/themes/twimbit/assets/images/logo.png';
    //     img.style.height = '28px';
    //     img.style.width = '20px';
    //     parent[0].appendChild(img);
    // })(jQuery);


});
