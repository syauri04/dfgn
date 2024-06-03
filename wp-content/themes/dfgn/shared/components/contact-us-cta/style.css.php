<!-- 
need delete
.border-head-cnt
.border-head-cnt .txt-right a

 -->

<?php RenderStyle::Style(); ?>
<style>
    section.cta {
        margin-bottom: 24px;
    }

    .cta-box {
        border-radius: 108px;
        background: #142224;
        padding: 4% 4%;
    }

    .cta-box .wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
    }

    .cta-box .title {
        color: var(--White, var(--White, #FFF));
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 40px;
    }

    @media (max-width: 991px) {
        .cta-box {
            border-radius: 41px;
            padding: 70px 6%;
        }

        .cta-box .wrapper {
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .cta-box .title {
        font-size: 20px;
        }
    }

</style>
<?php RenderStyle::EndStyle(); ?>