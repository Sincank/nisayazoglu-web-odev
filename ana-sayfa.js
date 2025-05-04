function goToPage(pageNumber) {
    document.querySelectorAll('.page').forEach(function(page) {
        page.classList.remove('active');
    });

    const targetPage= document.getElementById('page-' + pageNumber);
    if(targetPage) {
        targetPage.classList.add('active');
    }
}