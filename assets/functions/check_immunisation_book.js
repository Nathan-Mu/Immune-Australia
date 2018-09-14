function show() {
    if (document.getElementById("immunisation_records_options").selectedIndex == 0) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/CHN.png";
        // document.getElementById("immunisation_books").href = "assets/images/immunisation_books/CHN.png";
    }
    else if (document.getElementById("immunisation_records_options").selectedIndex == 1) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/DEU.png";
        //document.getElementById("immunisation_books").href = "assets/images/immunisation_books/DEU.png";
    }
    else if (document.getElementById("immunisation_records_options").selectedIndex == 2) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/IND.jpg";
        //document.getElementById("immunisation_books").href = "assets/images/immunisation_books/IND.jpg";
    }
    else if (document.getElementById("immunisation_records_options").selectedIndex == 3) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/MYS.png";
        //document.getElementById("immunisation_books").href = "assets/images/immunisation_books/MYS.png";
    }
    else if (document.getElementById("immunisation_records_options").selectedIndex == 4) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/NZL.jpg";
        //document.getElementById("immunisation_books").href = "assets/images/immunisation_books/NZL.jpg";
    }
    else if (document.getElementById("immunisation_records_options").selectedIndex == 5) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/PHL.jpg";
        //document.getElementById("immunisation_books").href = "assets/images/immunisation_books/PHL.jpg";
    }
    else if (document.getElementById("immunisation_records_options").selectedIndex == 6) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/ZAF.png";
        //document.getElementById("immunisation_books").href = "assets/images/immunisation_books/ZAF.png";
    }


    else if (document.getElementById("immunisation_records_options").selectedIndex == 7) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/GBR.png";
        document.getElementById("immunisation_books").href = "assets/images/immunisation_books/GBR.png";
    }
    else if (document.getElementById("immunisation_records_options").selectedIndex == 8) {
        document.getElementById("immunisation_book").src = "assets/images/immunisation_books/VNM.jpg";
        document.getElementById("immunisation_books").href = "assets/images/immunisation_books/VNM.jpg";
    }
}

