var $ = require('jquery');

$(document).ready(function() {

    $.ajax({
        url: 'http://localhost/Boolean/php-google-faq/server.php',
        method: 'GET',
        success: function(data)
        {
            var faqs = JSON.parse(data);

            printFaqs(faqs);
        },
        error: function()
        {
            alert('Si è verificato un errore');
        }
    });

});

function printFaqs(faqs)
{
    for (var i = 0; i < faqs.length; i++) {
        // $('.container').append('<div class="faq">');
        // $('.container').append('<h2>' + faqs[i]['question'] +'</h2>');
        // $('.container').append('<p>' + faqs[i]['answer'] +'</p>');
        // $('.container').append('</div>');

        var faqTemplate = $('.templates .faq-container').clone();

        faqTemplate.find('h2').text(faqs[i]['question']);
        faqTemplate.find('p').text(faqs[i]['answer']);

        $('.container').append(faqTemplate.html());
    }
}
