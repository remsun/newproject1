<HTML>
<HEAD>
<TITLE>Extracting Highlighted Radio Button</TITLE>
<SCRIPT LANGUAGE="JavaScript">
function getSelectedButton(buttonGroup){
    for (var i = 0; i < buttonGroup.length; i++) {
        if (buttonGroup[i].checked) {
            return i;
        }
    }
    return 0;
}
function fullName(form) {
    var i = getSelectedButton(form.songs);
    alert("You chose " + form.songs[i].value + ".");
}
function cycle(form) {
    var i = getSelectedButton(form.songs)
    if (i+1 == form.songs.length) {
        form.songs[0].checked = true
    } else {
        form.songs[i+1].checked = true
    }
}
</SCRIPT>
</HEAD>
<BODY>
<FORM>
<B>Select your favorite song:</B>
<P><INPUT TYPE="radio" NAME="songs" VALUE="A" CHECKED>A
<INPUT TYPE="radio" NAME="songs" VALUE="B" >B
<INPUT TYPE="radio" NAME="songs" VALUE="C" >C
<INPUT TYPE="radio" NAME="songs" VALUE="D" >D</P>
<P><INPUT TYPE="button" NAME="Viewer" VALUE="View Full Name..." onClick="fullName(this.form)"></P>
<P><INPUT TYPE="button" NAME="Cycler" VALUE="Cycle Buttons" onClick="cycle(this.form)"> </P>
</FORM>
</BODY>
</HTML>