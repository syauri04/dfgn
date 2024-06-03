<?php RenderStyle::Style() ?>
<style>
    /* MEMBER AREA */
    .member-area .img-team .pro {
        height: auto;
    }

    .member-area .info-team {
        margin-bottom: 49px;
        min-height: 566px;
    }

    .short-comm {
        margin-bottom: 26px;
    }

    .member-area .info-team .tt_of_ct h1 {
        color: #FFF;
        font-size: 25px;
        font-style: normal;
        font-weight: 700;
        line-height: 36.575px;
        /* 36.575px */
        margin-bottom: 26px;
    }

    .member-area .info-team .tt_of_ct p {
        color: #FFF;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 21px;
        /* 21px */
        margin: 0;
    }

    .boxies-team.member-area {
        min-height: 1157px;
    }

    .btn-primer-dfg {
        position: relative;
        text-align: center;
    }

    .btn-primer-dfg a {
        color: #FFF;
        text-align: center;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        border-radius: 54px;
        border: 1px solid #FFF;
        background: rgba(217, 217, 217, 0.00);
        padding: 10px 37px;
        transition: all .5s ease-in;
    }

    .btn-primer-dfg a:hover {
        background: #FFFFFF;
        color: #0C1618;
    }

    .btn-primer-dfg.email a {
        padding: 10px 27px;
        margin: 0px 5px;
    }

    /* end sec comm */
    .res_member_bx {
        width: 100%;
        min-height: 403px;
        border-radius: 96px;
        padding: 55px;
        position: relative;
        background-color: lightgray;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
        transition: background 2s ease-in;
        margin-bottom: 24px;
    }

    .res_member_bx::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, rgba(24, 34, 36, 0.00) 0%, #182224 100%);
        transition: background 2s ease-in;

    }

    .res_overly_info {
        position: absolute;
        display: flex;
        bottom: 56px;
    }

    .res_overly_info .title_res_ct {
        width: 239px;
    }

    .res_overly_info .title_res_ct h1 {
        color: #FFF;
        font-size: 22px;
        font-style: normal;
        font-weight: 500;
        line-height: 29.7px;
        /* 29.7px */
    }

    .res_overly_info .dw_rest_ct .circle_ic_dw {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background-color: #FFF;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color .5s ease-in;
    }

    .res_overly_info .dw_rest_ct .circle_ic_dw:hover {
        background-color: #FE5448;
    }

    .res_overly_info .dw_rest_ct .circle_ic_dw img {
        width: 33px;
    }

    .res_member_bx:hover::before {
        cursor: pointer;
        /* border-radius: 96px; */
        background: linear-gradient(0deg, rgba(24, 34, 36, 0.64) 0%, rgba(24, 34, 36, 0.64) 100%), linear-gradient(180deg, rgba(24, 34, 36, 0.00) 0%, #182224 100%);
    }

    .res_member_bx:hover .hover-desc {
        display: block;
    }

    .hover-desc {
        position: absolute;
        top: 19%;
        width: 70%;
        display: none;
        transition: display 2s ease-in;
    }

    .hover-desc p {
        color: #FFF;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 21px;
        /* 21px */
    }

    /* end sec resource */
    .member-area .even p {
        width: 100%;

        font-size: 14px;
    }

    .member-area .even h1 {
        width: 347px;
        color: #FE5448;
    }

    .card-guide {
        position: relative;
        padding-top: 24px;
    }

    .bx_lt_guide {
        border-radius: 108px;
        border: 1px solid #D9D9D9;

        padding: 46px 30px 46px 50px;
        min-height: 408px;
    }

    .bx_lt_guide.white {
        background: #FFF;
        border: unset;
    }

    .bx_lt_guide.red {
        background: #FE5448;
        border: unset;
    }

    .guide_ic {
        padding-bottom: 27px;
    }

    .guide_ic img {
        max-width: 95px;
        height: auto;
    }

    .guide_tx p {
        color: #FFF;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 21px;
    }

    .guide_sum {
        min-height: 84px;
        margin-bottom: 30px;
    }

    .white .guide_tx p,
    .white .guide_sum p,
    .white .guide_lk a {
        color: #0C1618;
    }

    .guide_sum p {
        color: #FFF;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 21px;
        margin: 0;
    }

    .guide_lk {
        border-radius: 54px;
        border: 1px solid #FFF;
        /* background: rgba(217, 217, 217, 0.00); */
        max-width: 137px;
        text-align: center;
        padding: 10px 0px;
        transition: all .2 ease;
    }

    .white .guide_lk {
        border: 1px solid #0C1618;
        ;
    }

    .guide_lk a {
        color: #FFF;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        transition: all .2 ease;
    }

    .guide_lk:hover {
        background: #FFF;
        color: #0C1618;
    }

    .guide_lk:hover.guide_lk a {
        color: #0C1618;
    }

    /* END MEMBER AREA */
</style>
<?php RenderStyle::EndStyle() ?>