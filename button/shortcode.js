(function() {
    
    tinymce.create('tinymce.plugins.kma_relativeurl', {
        init : function(ed, url) {
            ed.addButton('kma_relativeurl', {
                title : 'Corrige las url absolutas',
                image : url+'/img.jpg',
                onclick : function() {
                    contenido=ed.selection.getContent();
                    
                     ed.selection.setContent(contenido+'leer mas...');
                     
 
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        }
    });
    tinymce.PluginManager.add('kma_relativeurl', tinymce.plugins.kma_relativeurl);
})();