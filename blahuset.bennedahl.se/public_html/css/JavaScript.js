function gallery() {
	var galleri = document.getElementById("galleryDrop");
	var galleriVald = galleri.options[galleri.selectedIndex].value;
	$("#galleryContainder").load("_getGalleri.php?galleri="+galleriVald);
}
function galleryDef() {
	$("#galleryContainder").load("_getGalleri.php?galleri=änglar");
}
function image(ID) {
	$("#imgContainder").load("_getImg.php?imageID="+ID);
}