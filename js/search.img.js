function updateImage()
{
	self.name = 'opener';
	remote = open('questionImage.php', 'remote', 'width=400, heigth=150,location=no,scrollbars=yes, menubars=no, toolbars=no, resizable=yes, fullscreen=no, status=yes');
	remote.focus();
}