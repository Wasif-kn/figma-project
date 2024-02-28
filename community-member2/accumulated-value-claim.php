<?php include "header.php"; ?>

<div class="container containers">
    <style>
        .containers {
            /* width: 1109px; */
            height: 696px;
            top: 81px;
            left: 37px;
            border-radius: 10px;
            background-color: #01051D;
        }

        .header-textss {
            width: 50%;
        }

        .main-title {
            color: white;
            font-size: 25px;
            font-weight: 300;
            line-height: 34px;
            letter-spacing: 0em;
            text-align: center;

        }

        .box {
            width: 470px;
            height: 188px;
            margin-top: 20px;
            border-radius: 10px;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .box-detailss {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            position: relative;
        }

        .left-span {
            margin-left: 58px;
            font-size: 28px;
        }

        .right-span {
            margin-right: 58px;
            font-size: 28px;

        }

        .line {
            position: absolute;
            margin-top: 41px;
            left: calc(50% - 38%);
            border-bottom: 1.5px solid black;
            width: 76%;
        }

        .box-sub {

            padding: 40px;
            /* top: 104px; */
            /* left: 37px; */
            border-radius: 10px;
            background-color: #01051D;
            margin-left: 51px;
            margin-top: 20px;
        }

        .box-sub h1 {
            color: white;
            font-size: 19px;
            margin-left: 62px;
            /* text-align: center; */
            display: inline-flex;
            margin-top: 17px;
            font-weight: 600;
        }

        .box-date {
            width: 100%;
            margin-top: 7px;
            padding: 11px 8px 11px 116px;
            border-radius: 10px;
            background-color: #ffffff;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .date-details {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 12px;
            width: 100%;
            justify-content: space-between;
        }

        .box-date h3 {
            font-size: 20px;
            margin: 0;
            font-weight: 600;
        }

        .box-dates {
            width: 20%;
            margin-top: 27px;
            font-size: 20px;
            font-weight: 700;
            line-height: 27px;
            letter-spacing: 0em;
            text-align: right;
            background-color: white;
            padding: 11px 8px 11px 116px;
            border-radius: 10px;

        }


        .date-detailss {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 12px;
            width: 100%;
            justify-content: space-between;
            margin-left: 34px;
        }


        .box-dates h3 {
            font-size: 16px;
            margin: 0;
        }


        /* resonsive  */

        @media screen and (min-width: 979px) {


            .box-sub {
                width: 362px;
                height: 64px;
                /* top: 104px; */
                /* left: 37px; */
                border-radius: 10px;
                background-color: #01051D;
                margin-left: 51px;
                margin-top: 20px;
            }

            .box-sub h1 {
                color: white;
                font-size: 18px;
                margin-left: 62px;
                text-align: center;
                display: inline-flex;
                margin-top: 17px;
            }

            .date-details {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 12px;
                /* width: 100%; */
                justify-content: space-between;
            }

            .box-date h3 {
                font-size: 12px;
                margin: 0;
            }
        }

        @media screen and (min-width: 500px) {
            .box-sub {
                width: 362px;
                height: 34px;

                margin-top: 20px;
            }

            .box-sub h1 {
                color: white;
                margin-top: 8px;
                font-size: 18px;
            }

            .date-details {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 12px;
                /* width: 100%; */
                justify-content: space-between;
            }

            .box-date h3 {
                font-size: 12px;
                margin: 0;
            }
        }

        @media screen and (max-width: 480px) {
            .header-textss {
                width: 75%;
            }


            .box-date {
                width: 100%;
                margin-top: 27px;
                padding: 11px 8px 11px 11px;
                border-radius: 10px;
                background-color: #ffffff;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .box-sub {
                width: 362px;
                height: 34px;
                margin-top: 20px;
            }

            .box-sub h1 {
                color: white;
                margin-top: 8px;
                font-size: 15px;
            }

            .date-details {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 12px;
                /* width: 100%; */
                justify-content: space-between;
            }

            .box-date h3 {
                font-size: 10px;
                margin: 0;
            }
        }

        @media screen and (min-width: 360px) {
            .containers {
                /* width: 1109px; */
                height: 696px;
                border-radius: 10px;
                background-color: #01051D;
            }

            .main-title {
                font-size: 25px;
            }

            .date-details {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 12px;
                /* width: 100%; */
                justify-content: space-between;
            }

            .box-date h3 {
                font-size: 12px;
                margin: 0;
            }

            .left-span {
                margin-left: 58px;
                font-size: 25px;
            }

            .right-span {
                margin-right: 58px;
                font-size: 22px;

            }

           
        }
    </style>
        <!-- title -->
        <div class="d-flex flex-column justify-content-around align-items-center m-auto header-textss">
            <h2 class="main-title mt-4 text-xl">
                שלום אליהו, בעמוד זה תוכל להטעין את כרטיס
                <span style="color: #BC9B63; font-weight: 900;">הת”תכארד </span>האישי שלך, הכל סכום שתבחר ולממש אותו
                במגוון החנויות בהסדר.
            </h2>
            <div class="box mt-6">
                <div class="box-detailss">
                    <span class="left-span">₪</span>
                    <span class="right-span">הזן את הסכום הרצוי</span>
                    <div class="line"></div>
                </div>
                <a href="" style="font-family: Noto Sans Hebrew;
                                    font-size: 20px;
                                    font-weight: 500;
                                    line-height: 27px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    " class="btn btn-dark mt-4 p-4">← לטעינת הסכום ומעבר לתשלום </a>
                        </div>

        </div>
        <div class="mt-4">
            <div class="box-date">
                <div class="d-flex date-details">
                    <h3>תאריך: 24/07/2023</h3>
                    <h3>סכום: 250 ₪</h3>
                    <h3>סוג העסקה: ערך צבור</h3>
                </div>
            </div>
            <div class="box-date">
                <div class="d-flex date-details">
                    <h3>תאריך: 24/07/2023</h3>
                    <h3>סכום: 250 ₪</h3>
                    <h3>סוג העסקה: ערך צבור</h3>
                </div>
            </div>
        </div>


        <!-- <div class="box-dates">
            <div class="d-flex date-detailss">
                <h3>להסטוריית הטעינות לחץ כאן ←</h3>
            </div>
        </div> -->

        <a href="" class="btn bg-white mt-4">  ←להסטוריית הטעינות לחץ כאן 
        </a> 
 
        <?php include "footer.php"; ?>