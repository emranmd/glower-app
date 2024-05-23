    /*/~~~~~~~~~ scroll bars ~~~~~~~~~ /*/
    window.addEventListener('scroll', function (){
        var top_bars = document.querySelector('.header_content');
        if (top_bars) {
            top_bars.classList.toggle('top_bars', window.scrollY > 0);
        }
    });
    /*/~~~~~~~~~ scroll bars ~~~~~~~~~ /*/

    /*/~~~~~~~~~ Nav bars ~~~~~~~~~ /*/
    var nav_menu = document.querySelector('.nav_menu_items');
    if(nav_menu){
    var button = document.querySelector('.left_content');
    var menu_bar = document.querySelector('.sideBars');
    function open_menu(){
        menu_bar.classList.toggle('sideBars_open');
        nav_menu.classList.toggle('nav_background');
    };
    window.addEventListener('click', function (s){
        if(!button.contains(s.target)) menu_bar.classList.remove('sideBars_open');
        if(!button.contains(s.target)) nav_menu.classList.remove('nav_background');
    });
    };
   
    /*/~~~~~~~~~ Nav bars ~~~~~~~~~ /*/

    /*/~~~~~~~~~ Active Class ~~~~~~~~~ /*/

    // Product size Active Class Add
    const size_button = document.querySelectorAll('.form_check_label');
    if (size_button) {
    size_button.forEach( size_btn => size_btn.addEventListener('click', function (){

        size_button.forEach(size => size.classList.remove('active'));
        this.classList.add('active')

    }));
    }

    // Save Address Active Class Add

    const save_address = document.querySelectorAll('.checkbox_form_label');
    if (save_address) {
    save_address.forEach( save => save.addEventListener('click', function (){

        save_address.forEach( save => save.classList.remove('active'));
        this.classList.add('active');

    }) );
    };

    // page menu bar active class add

    const active_page = window.location.pathname;
    if (active_page) {
    const nav_link = document.querySelectorAll('.nav_link');
    nav_link.forEach(link =>{
        if(link.href.includes(`${active_page}`)){
            link.classList.add('active');
        }
    });
    };
    
    /*/~~~~~~~~~ Active Class ~~~~~~~~~ /*/

    /*/~~~~~~~~~ canvas Open  ~~~~~~~~~ /*/
    
    var netbanking_btn = document.getElementById('netbanking_btn');
    if(netbanking_btn){
    var return_btn = document.getElementById('return_btn');
    var canvas = document.querySelector('.offcanvas_main_area');
    // console.log(canvas);
    netbanking_btn.addEventListener('click', function(){
        // alert();
        canvas.classList.add('active');
    });
    return_btn.addEventListener('click', function(){
        // alert();
        canvas.classList.remove('active');
    });

    }
              
    /*/~~~~~~~~~ canvas Open ~~~~~~~~~ /*/

    /*/~~~~~~~~~ Language Add ~~~~~~~~~ /*/

    var language_btn = document.getElementById('language_btn');
    if (language_btn) {
    var language_list = document.getElementById('language');
    var close_lang = document.getElementById('close_lang');
    // console.log(language_list);
    function add_language(){
        language_list.classList.toggle('active');
    }
    window.addEventListener('click', function (s){
        if(!language_btn.contains(s.target)) language_list.classList.remove('active');
    });
    close_lang.addEventListener('click', function (){
        language_list.classList.remove('active');
    });
    };

    /*/~~~~~~~~~ Language Add ~~~~~~~~~ /*/

    /*/~~~~~~~~~ password hide and open ~~~~~~~~~ /*/

    var password =document.getElementById('password');
    if (password) {
    var open_eye =document.getElementById('open_eye');
    var hide_icon =document.getElementsByClassName('hide_icon');
        // console.log(hide_icon);
    open_eye.onclick =function (){

        if (password.type === "password") {
            password.type = "text";
            hide_icon[0].classList.add("fa-eye");
            // console.log(hide_icon);
        }else{
            password.type = "password";
            hide_icon[0].classList.remove("fa-eye");
        }
    };
    };

    /*/~~~~~~~~~ password hide and open ~~~~~~~~~ /*/

    /*/~~~~~~~~~ Increment & Decrement ~~~~~~~~~ /*/

    var buttonDiv = document.querySelectorAll('.input_btn');
    if (buttonDiv) {
        buttonDiv.forEach((button) => {
            button.addEventListener('click', () => {
            const isPlus = button.classList.contains('plus_btn');
            const input = button.parentElement.querySelector('input');
            // console.log(input);
            const value = Number(input.value);
            if (isPlus) {
                input.value = value + 1;
            } else if (value > 1) {
                input.value = value - 1;
            }
            });
        });
    };  

    /*/~~~~~~~~~ Increment & Decrement ~~~~~~~~~ /*/

    /*/~~~~~~~~~ check Box area ~~~~~~~~~ /*/

    var check_box_btn =document.querySelectorAll('.check_box_label');
    if (check_box_btn) {
    // console.log(check_box_btn);
    for (let i = 0; i < check_box_btn.length; i++) {
        
        var button = check_box_btn[i];
        // console.log(button);
        button.addEventListener('click', function(s){
            var target_div = s.target;
            // console.log(target_div);
            target_div.classList.toggle('active');
        })
        
    };
    };

    /*/~~~~~~~~~ check Box area ~~~~~~~~~ /*/

    /*/~~~~~~~~~ canvas open area ~~~~~~~~~ /*/
    
    var canvas_open_btn = document.querySelectorAll('.filter_link[data-id]');
    // console.log(canvas_open_btn);
    if (canvas_open_btn) {
    var content_box = document.querySelectorAll('.offcanvas_content_wrap');
    // console.log(content_box);
    canvas_open_btn.forEach( button => {

        button.addEventListener('click', function (){

            content_box.forEach( button =>{
                button.classList.remove('active');
            } )

            var data_id = button.getAttribute('data-id');
            console.log(data_id);
            var target_div = document.querySelector(`.${data_id}`);
            var close_btn = document.querySelector('.close_canvas');
            console.log(close_btn);
            if (target_div) {
                target_div.classList.add('active');
                
             $(document).on("click",".close_canvas",function(){
                target_div.classList.remove('active');
             })
                
            }

        })

    })

    };

    /*/~~~~~~~~~ canvas open area ~~~~~~~~~ /*/

    /*/~~~~~~~~~ checkbox active area ~~~~~~~~~ /*/
    var check_btn = document.querySelectorAll('.checkbox_label');
    if (check_btn) {
    // console.log(check_btn);
    check_btn.forEach( btn => btn.addEventListener('click', function (){

        check_btn.forEach( btn => btn.classList.remove('active'));
        this.classList.add('active'); 

    }) );     
    };
    /*/~~~~~~~~~ checkbox active area ~~~~~~~~~ /*/