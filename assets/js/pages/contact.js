jQuery(document).ready(function($){
    const field_input = $('.filebox .input');
    const field_name = $('.filebox__name');
    const tab_btn = $('.contactbox__btn');
    const tab_boxes = $('.contactbox__tab');
    const tab_select = $('.contactbox__select select');
    const local_href = $(location).attr('href');
    const local_bool = local_href.includes('#');
    const date_input = $('#form-work-date');

    const on__none = (e) => { e.addClass('d_none') };
    const off__none = (e) => { e.removeClass('d_none') };
    const on__active = (e) => { e.addClass('active') };
    const off__active = (e) => { e.removeClass('active') };

    /* NOMBRE DE ARCHIVO FILE */
    field_input.on('change', (e) => {
        let file_target = $(e.target);
        let file_value = file_target.val().split('\\').pop();
        let file_length = file_value.length;

        if(file_length >= 1) { field_name.html(file_value); } 
        else { field_name.html('Selecciona un archivo'); }
    });

    /* TABS */
    tab_btn.on('click', (e) => {
        let tab_target = $(e.target);
        let tab_attr = String(tab_target.attr('data-contactbox-open'));
        let tab_open = $(tab_attr);
        console.log(tab_open);
        if(!tab_target.hasClass('active')) {    
            off__active(tab_btn); on__active(tab_target);
            off__none(tab_boxes); on__none(tab_boxes);
            off__none(tab_open); off__active(tab_boxes);
            on__active(tab_open);
            $('.contactbox__select select option[value=' + tab_attr + ']').prop('selected', true); 
        }
    });

    tab_select.on('change', (e) => {
        let select_target = $(e.target);
        let select_val = select_target.val();
        let select_tag = $(select_val);
        let select_btn = $('[data-contactbox-open=' + select_val + ']')
        console.log(select_val);
        console.log(select_btn);
        if(!select_tag.hasClass('active')) {
            off__none(tab_boxes);
            on__none(tab_boxes); off__none(select_tag);
            off__active(tab_boxes); on__active(select_tag);
            off__active(tab_btn); on__active(select_btn);
        }
    });

    /* ABRIR TAB DESDE URL */
    if( local_bool === true ) {
        const local_split =  $(location).attr('href').split('#');
        const local_id = local_split[local_split.length - 1];
        const local_length = local_id.length;
        const local_tab = $('#' + local_id);
        const local_btn = $('[data-contactbox-open=#'+ local_id + ']');
        if (local_length > 1 && local_btn && local_tab && !local_tab.hasClass('active')) {
            off__active(tab_btn); on__active(local_btn);
            $('.contactbox__select select option[value=#' + local_id + ']').prop('selected', true);
            on__none(tab_boxes); off__none(local_tab);
            off__active(tab_boxes); on__active(local_tab);
        }
    }

    /* FECHA PARA INPUT HIDDEN */
    const date = new Date();
    const DD = String(date.getDate()).padStart(2, '0');
    const MM = String(date.getMonth() + 1).padStart(2, '0'); 
    const AAAA = date.getFullYear();
    const fecha = `${DD}/${MM}/${AAAA}`;
    date_input.val(fecha);
});