jQuery(document).ready(function($){
    var workboxes = $('.workbox');
    var workboxes_lenght = workboxes.length;
    var workboxes_default = 8;
    var workboxes_plus = 4;
    var workload = $('.work__btn');

    const off__none = (e) => { e.removeClass('d_none') };
    const on__block = (e) => { e.addClass('d_block') };
    
    if(workboxes_lenght > workboxes_default ) { 
        off__none(workload); on__block(workload);
        workboxes.hide();
        workboxes.slice(0, workboxes_default).show();
    }
    
    workload.on('click', (e) => {
        e.preventDefault();
        workboxes.slice(0, (workboxes_default + workboxes_plus)).fadeIn(800);;
        workboxes_default = workboxes_default + workboxes_plus;
        if(workboxes_default >= workboxes_lenght) { e.preventDefault(); workload.fadeOut(500); } 
    });
});