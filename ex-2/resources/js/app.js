function init() {
  $('#delete').click(function(e) {
    if(!confirm('Vuoi eliminare questo omino?')) {
      e.preventDefault();
    };
  })
}

$(document).ready(init);
