document.getElementById('image').addEventListener('click', function() {
    const textElement = document.getElementById('text');
    if (textElement.classList.contains('hidden')) {
        textElement.classList.remove('hidden');
        textElement.classList.add('show');
    } else {
        textElement.classList.remove('show');
        textElement.classList.add('hidden');
    }
});