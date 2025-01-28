<style>
    /*Big Logo CSS*/
    .logo a .logo-white {
        display: none;
    }
    .logo a {
        position: absolute;
        top: 5px;
        left: 20px;
        z-index: 0;
        max-width: 250px;
        height: 100px;
    }
    .logo a::after {
        content: '';
        position: absolute;
        top: 0;
        left: -20px;
        width: calc(100% + 21px);
        height: 100%;
        background: linear-gradient(to bottom, #fff 93%, #f1f1f1 8%);
        /*border-bottom: 8px solid #F1F1F1;*/
        z-index: -2;
        box-sizing: border-box;
        border-radius: 0 0 7px 0;
    }
    .logo a::before {
        content: '';
        position: absolute;
        bottom: 8px;
        right: 0;
        width: 29px;
        height: 26px;
        /*border-bottom: 8px solid #F1F1F1;*/
        transform: translateX(50%) rotate(-45deg);
        background: linear-gradient(to bottom, #fff 71%, #f1f1f1 29%);
        z-index: -1;
        box-sizing: border-box;
        border-radius: 0 0 0 2px;
    }
    .logo {
        margin: 0;
        width: 20%;
    }
    .logo img {
        height: 100%;
        width: 100%;
    }
    header .contact a {
        padding: 10px 40px;
    }
    header .phone_number {
        font-size: 24px;
    }
    .modal_btn svg {
        height: 22px;
    }
    header .mail svg {
        height: 22px;
    }
    header .flex_wrapper {
        padding: 20px 20px 20px 0;
    }
    /**************************** FIX destination-amelia ********************************/
    .logo a {
        position: absolute;
        top: 7px;
        left: 20px;
        z-index: 0;
        max-width: 364px;
        height: 100px;
    }
    .logo img {
        height: 60px;
        width: 364px;
        top: 24px;
        position: relative;
    }
    header .flex_wrapper {
        border-bottom: none;
        /*padding: 30px 20px 20px 0;*/
        padding: 26px 20px 26px 0;
        justify-content: flex-end;
        box-shadow: 0px 3px 25px #00000029;
    }
    header nav li a {
        font: 600 15px/36px var(--paragraph_font);
        color: var(--title_color);
    }
    .logo a::after {
        background: #FFF;
        width: 393px;
        width: calc(100% + 42px);
        border-radius: 0;
        top: 10px;
        box-shadow: 0px 15px 25px -19px #00000029;
    }
    .logo a::before {
        background: #FFF;
        content: '';
        position: absolute;
        bottom: 2px;
        right: -30px;
        width: 49px;
        height: 34px;
        border-bottom: none;
        transform: translateX(50%) rotate(-41deg);
        z-index: -1;
        box-sizing: border-box;
        border-radius: 0;
    }
    header .caret {
        opacity: .5;
        transform: translateY(calc(-50% - 2px));
    }
    header nav {
        text-align: center;
        padding: 0 30px 0 0;
    }
    header .contact a {
        padding: 10px 40px 8px;
    }
    header .phone_number {
        color: var(--title_color);
        font: 500 20px/30px 'Poppins'!important;
    }
    @media (max-width: 1600px) {
        header nav li a {
            font-size: 14px;
            padding: 7px;
        }
        header .caret {
            right: 0px;
        }
        header .contact {
            margin-right: 10px;
        }
        header nav {
            padding: 0 10px 0 0;
        }
        .modal_btn {
            padding-left: 10px;
            margin-left: 10px;
        }
        header .mail {
            padding-left: 10px;
        }
        header .contact a {
            padding: 10px 15px;
            font-size: 14px;
        }
    }
    @media (max-width: 1500px) {
        header nav li a {
            font-size: 13px;
            padding: 7px;
        }
	}
    @media (max-width: 1380px) {
        .logo a::before {
            right: 75px;
        }
        .logo img {
            width: 70% !important;
        }
        .logo a::after {
            width: calc(70% + 42px);
        }
    }
    @media (max-width: 1199px) {
        .phone {
            padding: 0 0 5px;
        }
        .logo {
            width: 70% !important;
        }
        .logo img {
            height: auto;
            width: 70%;
            top: calc(50% - 40px);
            width: 270px !important;
        }
        header .rightSide .modal_btn {
            border: 0;
            margin: 0 10px 0 0;
        }
        header .mail {
            padding: 5px 15px 5px 0;
        }
    }
    @media (max-width: 767px) {
        .home header {
            position: relative;
            /*height: 101px !important;*/
            height: auto !important;
        }
        header {
            position: relative;
            /*height: 101px !important;*/
            height: auto !important;
        }
        .fixing .logo a .logo-black {
            height: auto !important;
        }
    }
    @media (max-width: 620px) {
        .fixing .logo a .logo-black {
            width: 70% !important;
            height: auto;
        }
    }
    @media (max-width: 500px) {
        .fixing .logo a .logo-black {
            width: 188px !important;
            height: auto;
        }
    }
    @media (max-width: 420px) {
        .fixing .logo a .logo-black {
            width: 140px !important;
            height: auto;
        }
    }
    /**************************** FIX peace ********************************/
    .logo img {
        height: 120px;
        width: 274px;
        top: 3px;
        position: relative;
    }
    .logo a::after {
        background: #FFF;
        width: calc(100% + 55px);
        border-radius: 0;
        top: 34px;
        box-shadow: 0px 15px 25px -19px #00000029;
    }
    .logo a::before {
        background: #FFF;
        content: '';
        position: absolute;
        bottom: -10px;
        right: -48px;
        width: 79px;
        height: 34px;
        border-bottom: none;
        transform: translateX(50%) rotate(-49deg);
        z-index: -1;
        box-sizing: border-box;
        border-radius: 0;
    }

    header .contact a {
        background: var(--main_color);
        border: none;
        color: #FFF;
        padding: 10px 23px 8px;
    }
    header .contact a:hover {
        background: var(--second_color) !important;
        color: #FFF !important;
    }
    header .phone_number {
        color: var(--title_color);
        font: 600 15px/30px var(--paragraph_font);
    }
    .fixing.activated .contact a {
        border: none;
        color: #FFF;
    }
    .fixing.activated .contact a:hover {
        background: var(--second_color) !important;
        color: #FFF !important;
    }
    @media (max-width: 1380px) {
        .logo a::before {
            bottom: 20px;
            right: 31px;
            width: 79px;
            height: 34px;
        }
        .logo a::after {
            width: calc(100% + -24px);
            top: 4px;
        }
        .logo img {
            top: -20px;
        }
        header .flex_wrapper {
            padding: 15px 20px 15px 0;
        }
        @media (max-width: 1199px) {
            .logo {
                width: 70% !important;
                height: 80px;
            }
            .logo img {
                top: -25px;
            }
        }
        @media (max-width: 767px) {
            .logo img {
                top: -21px;
            }
            .logo {
                height: 85px;
            }
        }
        @media (max-width: 420px) {
            .logo img {
                top: -16px;
            }
            .logo {
                height: 70px;
            }
        }
        /**************************** END  FIX peace ****************************/
        /**************************** END  FIX destination-amelia ****************************/
        /*Responsive*//*Responsive*//*Responsive*/
        @media (max-width: 1199px) {
            .logo img {
                width: 200px;
                height: auto;
            }
            .logo a {
                position: static;
                height: auto;
                padding: 15px 10px;
            }
            .logo {
                width: auto;
            }
            .logo a::before,
            .logo a::after {
                display: none;
            }
        }
</style>