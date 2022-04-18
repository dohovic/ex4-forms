function validateCheckBoxes() {
    var checkboxes = document.getElementsByName('interests[]');
    var checkedLength = 0;
    for(var i=0; i< checkboxes.length; i++) {
        if(checkboxes[i].checked)
            checkedLength++
    }
    if (checkedLength < 2) {
        alert("Please check at least 2 interests");
        return false;
    }
    return true;
}