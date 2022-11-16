function include(file) {
    const script = document.createElement('script');
    script.src = file;
    script.type = 'text/javascript';
    script.defer = true;

    document.getElementsByTagName('head').item(0).appendChild(script);
}

/* include all the components js file */

include('../constants.js');
include('./chat.js');
include('./cardsCarousel.js');
include('./botTyping.js');
include('./charts.js');
include('./collapsible.js');
include('./dropDown.js');
include('./location.js');
include('./pdfAttachment.js');
include('./quickReplies.js');
include('./suggestionButtons.js');
