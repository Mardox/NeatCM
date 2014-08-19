var editor = ace.edit("ace-editor-container");
editor.setTheme("ace/theme/neat");
editor.setFontSize(12);
editor.getSession().setMode("ace/mode/php");
editor.setShowPrintMargin(false);

var page = $('#page-view');

$('#ace-editor-container, #page-view, #snippets').css({
	'height' : $( window ).height() - $('#top-nav').height() - 1 + 'px',
});

$('#view-source').on('click', function()
{
	$('#source-view').css({ 'display' : 'block' });
	$('#page-view').css({ 'display' : 'none' });
});

$('#view-page').on('click', function()
{
	//
	$('#source-view').css({ 'display' : 'none' });
	$('#page-view').css({ 'display' : 'block' });

	page.get(0).contentWindow.document.open('text/html', 'replace');
	page.get(0).contentWindow.document.write(editor.getSession().getValue());
	page.get(0).contentWindow.document.close();

});