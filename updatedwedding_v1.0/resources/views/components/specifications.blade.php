<style>
            /*!
            *  flexible-grid by @kenangundogan - https://flexible-grid.com - @flexible-grid
            *  License - https://flexible-grid.com/license (CSS: MIT License)
            */
            html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,i,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,sub,sup,tt,var,u,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
                /* border:0; */
                /* font:inherit; */
                /* font-size:100%; */
                /* margin:0; */
                /* padding:0; */
                /* vertical-align:baseline; */
            }

            article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section,img {
                display: block
            }

            body {
                line-height: 1
            }

            ol,ul {
                list-style: none
            }

            blockquote,q {
                quotes: none
            }

            blockquote:before,blockquote:after {
                content: "";
                content: none
            }

            q:before,q:after {
                content: "";
                content: none
            }

            table {
                border-collapse: collapse;
                border-spacing: 0
            }

            * {
                box-sizing: border-box
            }

            a {
                /* text-decoration:none; */
            }

            input:not([type=checkbox]),button,textarea,select {
                appearance: none;
                border: none;
                border-radius: 0;
                border-radius: 0;
                box-shadow: none;
                display: block;
                margin: 0;
                background: rgba(0,0,0,0)
            }

            input:focus,textarea:focus,select:focus,button:focus {
                outline: 0
            }

            input::-webkit-input-placeholder,input:-moz-placeholder,input::-moz-placeholder,input:-ms-input-placeholder {
                color: #fff !important
            }

            .container {
                margin: 0 auto;
                max-width: 1366px;
                padding-left: 32px;
                padding-right: 32px;
                position: relative;
                width: 100%
            }

            @media(min-width: 1023px) {
                .container {
                    width:90%
                }
            }

            .row {
                margin-left: calc(32px/-2);
                margin-right: calc(32px/-2);
                position: relative
            }

            .row.float [class*=column-] {
                float: left
            }

            .row.float::after {
                display: block;
                clear: both;
                content: ""
            }

            .row[class*=columns-] .column,.xl-12,.xl-11,.xl-10,.xl-9,.xl-8,.xl-7,.xl-6,.xl-5,.xl-4,.xl-3,.xl-2,.xl-1,.lg-12,.lg-11,.lg-10,.lg-9,.lg-8,.lg-7,.lg-6,.lg-5,.lg-4,.lg-3,.lg-2,.lg-1,.md-12,.md-11,.md-10,.md-9,.md-8,.md-7,.md-6,.md-5,.md-4,.md-3,.md-2,.md-1,.sm-12,.sm-11,.sm-10,.sm-9,.sm-8,.sm-7,.sm-6,.sm-5,.sm-4,.sm-3,.sm-2,.sm-1,.xs-12,.xs-11,.xs-10,.xs-9,.xs-8,.xs-7,.xs-6,.xs-5,.xs-4,.xs-3,.xs-2,.xs-1 {
                padding-left: calc(32px/2);
                padding-right: calc(32px/2);
                position: relative;
                width: 100%
            }

            .xs-1 {
                max-width: calc(100%/12*1);
                flex: 0 0 calc(100%/12*1)
            }

            .xs-2 {
                max-width: calc(100%/12*2);
                flex: 0 0 calc(100%/12*2)
            }

            .xs-3 {
                max-width: calc(100%/12*3);
                flex: 0 0 calc(100%/12*3)
            }

            .xs-4 {
                max-width: calc(100%/12*4);
                flex: 0 0 calc(100%/12*4)
            }

            .xs-5 {
                max-width: calc(100%/12*5);
                flex: 0 0 calc(100%/12*5)
            }

            .xs-6 {
                max-width: calc(100%/12*6);
                flex: 0 0 calc(100%/12*6)
            }

            .xs-7 {
                max-width: calc(100%/12*7);
                flex: 0 0 calc(100%/12*7)
            }

            .xs-8 {
                max-width: calc(100%/12*8);
                flex: 0 0 calc(100%/12*8)
            }

            .xs-9 {
                max-width: calc(100%/12*9);
                flex: 0 0 calc(100%/12*9)
            }

            .xs-10 {
                max-width: calc(100%/12*10);
                flex: 0 0 calc(100%/12*10)
            }

            .xs-11 {
                max-width: calc(100%/12*11);
                flex: 0 0 calc(100%/12*11)
            }

            .xs-12 {
                max-width: calc(100%/12*12);
                flex: 0 0 calc(100%/12*12)
            }

            @media(min-width: 768px) {
                .sm-1 {
                    max-width:calc(100%/12*1);
                    flex: 0 0 calc(100%/12*1)
                }

                .sm-2 {
                    max-width: calc(100%/12*2);
                    flex: 0 0 calc(100%/12*2)
                }

                .sm-3 {
                    max-width: calc(100%/12*3);
                    flex: 0 0 calc(100%/12*3)
                }

                .sm-4 {
                    max-width: calc(100%/12*4);
                    flex: 0 0 calc(100%/12*4)
                }

                .sm-5 {
                    max-width: calc(100%/12*5);
                    flex: 0 0 calc(100%/12*5)
                }

                .sm-6 {
                    max-width: calc(100%/12*6);
                    flex: 0 0 calc(100%/12*6)
                }

                .sm-7 {
                    max-width: calc(100%/12*7);
                    flex: 0 0 calc(100%/12*7)
                }

                .sm-8 {
                    max-width: calc(100%/12*8);
                    flex: 0 0 calc(100%/12*8)
                }

                .sm-9 {
                    max-width: calc(100%/12*9);
                    flex: 0 0 calc(100%/12*9)
                }

                .sm-10 {
                    max-width: calc(100%/12*10);
                    flex: 0 0 calc(100%/12*10)
                }

                .sm-11 {
                    max-width: calc(100%/12*11);
                    flex: 0 0 calc(100%/12*11)
                }

                .sm-12 {
                    max-width: calc(100%/12*12);
                    flex: 0 0 calc(100%/12*12)
                }
            }

            @media(min-width: 1023px) {
                .md-1 {
                    max-width:calc(100%/12*1);
                    flex: 0 0 calc(100%/12*1)
                }

                .md-2 {
                    max-width: calc(100%/12*2);
                    flex: 0 0 calc(100%/12*2)
                }

                .md-3 {
                    max-width: calc(100%/12*3);
                    flex: 0 0 calc(100%/12*3)
                }

                .md-4 {
                    max-width: calc(100%/12*4);
                    flex: 0 0 calc(100%/12*4)
                }

                .md-5 {
                    max-width: calc(100%/12*5);
                    flex: 0 0 calc(100%/12*5)
                }

                .md-6 {
                    max-width: calc(100%/12*6);
                    flex: 0 0 calc(100%/12*6)
                }

                .md-7 {
                    max-width: calc(100%/12*7);
                    flex: 0 0 calc(100%/12*7)
                }

                .md-8 {
                    max-width: calc(100%/12*8);
                    flex: 0 0 calc(100%/12*8)
                }

                .md-9 {
                    max-width: calc(100%/12*9);
                    flex: 0 0 calc(100%/12*9)
                }

                .md-10 {
                    max-width: calc(100%/12*10);
                    flex: 0 0 calc(100%/12*10)
                }

                .md-11 {
                    max-width: calc(100%/12*11);
                    flex: 0 0 calc(100%/12*11)
                }

                .md-12 {
                    max-width: calc(100%/12*12);
                    flex: 0 0 calc(100%/12*12)
                }
            }

            @media(min-width: 1440px) {
                .lg-1 {
                    max-width:calc(100%/12*1);
                    flex: 0 0 calc(100%/12*1)
                }

                .lg-2 {
                    max-width: calc(100%/12*2);
                    flex: 0 0 calc(100%/12*2)
                }

                .lg-3 {
                    max-width: calc(100%/12*3);
                    flex: 0 0 calc(100%/12*3)
                }

                .lg-4 {
                    max-width: calc(100%/12*4);
                    flex: 0 0 calc(100%/12*4)
                }

                .lg-5 {
                    max-width: calc(100%/12*5);
                    flex: 0 0 calc(100%/12*5)
                }

                .lg-6 {
                    max-width: calc(100%/12*6);
                    flex: 0 0 calc(100%/12*6)
                }

                .lg-7 {
                    max-width: calc(100%/12*7);
                    flex: 0 0 calc(100%/12*7)
                }

                .lg-8 {
                    max-width: calc(100%/12*8);
                    flex: 0 0 calc(100%/12*8)
                }

                .lg-9 {
                    max-width: calc(100%/12*9);
                    flex: 0 0 calc(100%/12*9)
                }

                .lg-10 {
                    max-width: calc(100%/12*10);
                    flex: 0 0 calc(100%/12*10)
                }

                .lg-11 {
                    max-width: calc(100%/12*11);
                    flex: 0 0 calc(100%/12*11)
                }

                .lg-12 {
                    max-width: calc(100%/12*12);
                    flex: 0 0 calc(100%/12*12)
                }
            }

            @media(min-width: 1968px) {
                .xl-1 {
                    max-width:calc(100%/12*1);
                    flex: 0 0 calc(100%/12*1)
                }

                .xl-2 {
                    max-width: calc(100%/12*2);
                    flex: 0 0 calc(100%/12*2)
                }

                .xl-3 {
                    max-width: calc(100%/12*3);
                    flex: 0 0 calc(100%/12*3)
                }

                .xl-4 {
                    max-width: calc(100%/12*4);
                    flex: 0 0 calc(100%/12*4)
                }

                .xl-5 {
                    max-width: calc(100%/12*5);
                    flex: 0 0 calc(100%/12*5)
                }

                .xl-6 {
                    max-width: calc(100%/12*6);
                    flex: 0 0 calc(100%/12*6)
                }

                .xl-7 {
                    max-width: calc(100%/12*7);
                    flex: 0 0 calc(100%/12*7)
                }

                .xl-8 {
                    max-width: calc(100%/12*8);
                    flex: 0 0 calc(100%/12*8)
                }

                .xl-9 {
                    max-width: calc(100%/12*9);
                    flex: 0 0 calc(100%/12*9)
                }

                .xl-10 {
                    max-width: calc(100%/12*10);
                    flex: 0 0 calc(100%/12*10)
                }

                .xl-11 {
                    max-width: calc(100%/12*11);
                    flex: 0 0 calc(100%/12*11)
                }

                .xl-12 {
                    max-width: calc(100%/12*12);
                    flex: 0 0 calc(100%/12*12)
                }
            }

            .column-1 {
                max-width: calc(100%/12*1);
                flex: 0 0 calc(100%/12*1)
            }

            .column-2 {
                max-width: calc(100%/12*2);
                flex: 0 0 calc(100%/12*2)
            }

            .column-3 {
                max-width: calc(100%/12*3);
                flex: 0 0 calc(100%/12*3)
            }

            .column-4 {
                max-width: calc(100%/12*4);
                flex: 0 0 calc(100%/12*4)
            }

            .column-5 {
                max-width: calc(100%/12*5);
                flex: 0 0 calc(100%/12*5)
            }

            .column-6 {
                max-width: calc(100%/12*6);
                flex: 0 0 calc(100%/12*6)
            }

            .column-7 {
                max-width: calc(100%/12*7);
                flex: 0 0 calc(100%/12*7)
            }

            .column-8 {
                max-width: calc(100%/12*8);
                flex: 0 0 calc(100%/12*8)
            }

            .column-9 {
                max-width: calc(100%/12*9);
                flex: 0 0 calc(100%/12*9)
            }

            .column-10 {
                max-width: calc(100%/12*10);
                flex: 0 0 calc(100%/12*10)
            }

            .column-11 {
                max-width: calc(100%/12*11);
                flex: 0 0 calc(100%/12*11)
            }

            .column-12 {
                max-width: calc(100%/12*12);
                flex: 0 0 calc(100%/12*12)
            }

            @media(min-width: 0px) {
                .columns-1-xs .column {
                    max-width:calc(100%/1);
                    flex: 0 0 calc(100%/1)
                }

                .columns-2-xs .column {
                    max-width: calc(100%/2);
                    flex: 0 0 calc(100%/2)
                }

                .columns-3-xs .column {
                    max-width: calc(100%/3);
                    flex: 0 0 calc(100%/3)
                }

                .columns-4-xs .column {
                    max-width: calc(100%/4);
                    flex: 0 0 calc(100%/4)
                }

                .columns-5-xs .column {
                    max-width: calc(100%/5);
                    flex: 0 0 calc(100%/5)
                }

                .columns-6-xs .column {
                    max-width: calc(100%/6);
                    flex: 0 0 calc(100%/6)
                }

                .columns-7-xs .column {
                    max-width: calc(100%/7);
                    flex: 0 0 calc(100%/7)
                }

                .columns-8-xs .column {
                    max-width: calc(100%/8);
                    flex: 0 0 calc(100%/8)
                }

                .columns-9-xs .column {
                    max-width: calc(100%/9);
                    flex: 0 0 calc(100%/9)
                }

                .columns-10-xs .column {
                    max-width: calc(100%/10);
                    flex: 0 0 calc(100%/10)
                }

                .columns-11-xs .column {
                    max-width: calc(100%/11);
                    flex: 0 0 calc(100%/11)
                }

                .columns-12-xs .column {
                    max-width: calc(100%/12);
                    flex: 0 0 calc(100%/12)
                }
            }

            @media(min-width: 768px) {
                .columns-1-sm .column {
                    max-width:calc(100%/1);
                    flex: 0 0 calc(100%/1)
                }

                .columns-2-sm .column {
                    max-width: calc(100%/2);
                    flex: 0 0 calc(100%/2)
                }

                .columns-3-sm .column {
                    max-width: calc(100%/3);
                    flex: 0 0 calc(100%/3)
                }

                .columns-4-sm .column {
                    max-width: calc(100%/4);
                    flex: 0 0 calc(100%/4)
                }

                .columns-5-sm .column {
                    max-width: calc(100%/5);
                    flex: 0 0 calc(100%/5)
                }

                .columns-6-sm .column {
                    max-width: calc(100%/6);
                    flex: 0 0 calc(100%/6)
                }

                .columns-7-sm .column {
                    max-width: calc(100%/7);
                    flex: 0 0 calc(100%/7)
                }

                .columns-8-sm .column {
                    max-width: calc(100%/8);
                    flex: 0 0 calc(100%/8)
                }

                .columns-9-sm .column {
                    max-width: calc(100%/9);
                    flex: 0 0 calc(100%/9)
                }

                .columns-10-sm .column {
                    max-width: calc(100%/10);
                    flex: 0 0 calc(100%/10)
                }

                .columns-11-sm .column {
                    max-width: calc(100%/11);
                    flex: 0 0 calc(100%/11)
                }

                .columns-12-sm .column {
                    max-width: calc(100%/12);
                    flex: 0 0 calc(100%/12)
                }
            }

            @media(min-width: 1023px) {
                .columns-1-md .column {
                    max-width:calc(100%/1);
                    flex: 0 0 calc(100%/1)
                }

                .columns-2-md .column {
                    max-width: calc(100%/2);
                    flex: 0 0 calc(100%/2)
                }

                .columns-3-md .column {
                    max-width: calc(100%/3);
                    flex: 0 0 calc(100%/3)
                }

                .columns-4-md .column {
                    max-width: calc(100%/4);
                    flex: 0 0 calc(100%/4)
                }

                .columns-5-md .column {
                    max-width: calc(100%/5);
                    flex: 0 0 calc(100%/5)
                }

                .columns-6-md .column {
                    max-width: calc(100%/6);
                    flex: 0 0 calc(100%/6)
                }

                .columns-7-md .column {
                    max-width: calc(100%/7);
                    flex: 0 0 calc(100%/7)
                }

                .columns-8-md .column {
                    max-width: calc(100%/8);
                    flex: 0 0 calc(100%/8)
                }

                .columns-9-md .column {
                    max-width: calc(100%/9);
                    flex: 0 0 calc(100%/9)
                }

                .columns-10-md .column {
                    max-width: calc(100%/10);
                    flex: 0 0 calc(100%/10)
                }

                .columns-11-md .column {
                    max-width: calc(100%/11);
                    flex: 0 0 calc(100%/11)
                }

                .columns-12-md .column {
                    max-width: calc(100%/12);
                    flex: 0 0 calc(100%/12)
                }
            }

            @media(min-width: 1440px) {
                .columns-1-lg .column {
                    max-width:calc(100%/1);
                    flex: 0 0 calc(100%/1)
                }

                .columns-2-lg .column {
                    max-width: calc(100%/2);
                    flex: 0 0 calc(100%/2)
                }

                .columns-3-lg .column {
                    max-width: calc(100%/3);
                    flex: 0 0 calc(100%/3)
                }

                .columns-4-lg .column {
                    max-width: calc(100%/4);
                    flex: 0 0 calc(100%/4)
                }

                .columns-5-lg .column {
                    max-width: calc(100%/5);
                    flex: 0 0 calc(100%/5)
                }

                .columns-6-lg .column {
                    max-width: calc(100%/6);
                    flex: 0 0 calc(100%/6)
                }

                .columns-7-lg .column {
                    max-width: calc(100%/7);
                    flex: 0 0 calc(100%/7)
                }

                .columns-8-lg .column {
                    max-width: calc(100%/8);
                    flex: 0 0 calc(100%/8)
                }

                .columns-9-lg .column {
                    max-width: calc(100%/9);
                    flex: 0 0 calc(100%/9)
                }

                .columns-10-lg .column {
                    max-width: calc(100%/10);
                    flex: 0 0 calc(100%/10)
                }

                .columns-11-lg .column {
                    max-width: calc(100%/11);
                    flex: 0 0 calc(100%/11)
                }

                .columns-12-lg .column {
                    max-width: calc(100%/12);
                    flex: 0 0 calc(100%/12)
                }
            }

            @media(min-width: 1968px) {
                .columns-1-xl .column {
                    max-width:calc(100%/1);
                    flex: 0 0 calc(100%/1)
                }

                .columns-2-xl .column {
                    max-width: calc(100%/2);
                    flex: 0 0 calc(100%/2)
                }

                .columns-3-xl .column {
                    max-width: calc(100%/3);
                    flex: 0 0 calc(100%/3)
                }

                .columns-4-xl .column {
                    max-width: calc(100%/4);
                    flex: 0 0 calc(100%/4)
                }

                .columns-5-xl .column {
                    max-width: calc(100%/5);
                    flex: 0 0 calc(100%/5)
                }

                .columns-6-xl .column {
                    max-width: calc(100%/6);
                    flex: 0 0 calc(100%/6)
                }

                .columns-7-xl .column {
                    max-width: calc(100%/7);
                    flex: 0 0 calc(100%/7)
                }

                .columns-8-xl .column {
                    max-width: calc(100%/8);
                    flex: 0 0 calc(100%/8)
                }

                .columns-9-xl .column {
                    max-width: calc(100%/9);
                    flex: 0 0 calc(100%/9)
                }

                .columns-10-xl .column {
                    max-width: calc(100%/10);
                    flex: 0 0 calc(100%/10)
                }

                .columns-11-xl .column {
                    max-width: calc(100%/11);
                    flex: 0 0 calc(100%/11)
                }

                .columns-12-xl .column {
                    max-width: calc(100%/12);
                    flex: 0 0 calc(100%/12)
                }
            }

            @media(min-width: 0px) {
                .d-flex-xs {
                    display:flex
                }

                .d-inline-flex-xs {
                    display: inline-flex
                }

                .flex-d-row-xs {
                    flex-direction: row
                }

                .flex-d-row-reverse-xs {
                    flex-direction: row-reverse
                }

                .flex-d-column-xs {
                    flex-direction: column
                }

                .flex-d-column-reverse-xs {
                    flex-direction: column-reverse
                }

                .flex-wrap-xs {
                    flex-wrap: wrap
                }

                .flex-wrap-reverse-xs {
                    flex-wrap: wrap-reverse
                }

                .flex-nowrap-xs {
                    flex-wrap: nowrap
                }

                .flex-flow-rw-xs {
                    flex-flow: row wrap
                }

                .flex-flow-rrw-xs {
                    flex-flow: row-reverse wrap
                }

                .flex-flow-rnw-xs {
                    flex-flow: row nowrap
                }

                .flex-flow-rrnw-xs {
                    flex-flow: row-reverse nowrap
                }

                .flex-flow-cw-xs {
                    flex-flow: column wrap
                }

                .flex-flow-crw-xs {
                    flex-flow: column-reverse wrap
                }

                .flex-flow-cnw-xs {
                    flex-flow: column nowrap
                }

                .flex-flow-crnw-xs {
                    flex-flow: column-reverse nowrap
                }

                .justify-content-start-xs {
                    justify-content: flex-start
                }

                .justify-content-end-xs {
                    justify-content: flex-end
                }

                .justify-content-center-xs {
                    justify-content: center
                }

                .justify-content-baseline-xs {
                    justify-content: baseline
                }

                .justify-content-around-xs {
                    justify-content: space-around
                }

                .justify-content-between-xs {
                    justify-content: space-between
                }

                .align-items-start-xs {
                    align-items: flex-start
                }

                .align-items-end-xs {
                    align-items: flex-end
                }

                .align-items-center-xs {
                    align-items: center
                }

                .align-items-baseline-xs {
                    align-items: baseline
                }

                .align-items-stretch-xs {
                    align-items: stretch
                }

                .align-self-start-xs {
                    align-self: flex-start
                }

                .align-self-end-xs {
                    align-self: flex-end
                }

                .align-self-center-xs {
                    align-self: center
                }

                .align-self-baseline-xs {
                    align-self: baseline
                }

                .align-self-stretch-xs {
                    align-self: stretch
                }

                .align-content-start-xs {
                    align-content: flex-start
                }

                .align-content-end-xs {
                    align-content: flex-end
                }

                .align-content-center-xs {
                    align-content: center
                }

                .align-content-between-xs {
                    align-content: space-between
                }

                .align-content-around-xs {
                    align-content: space-around
                }

                .flex-order-first-xs {
                    order: -1
                }

                .flex-order-last-xs {
                    order: 1
                }

                .flex-order-unordered-xs {
                    order: 0
                }

                .flex-ml-auto-xs {
                    margin-left: auto
                }

                .flex-mr-auto-xs {
                    margin-right: auto
                }

                .flex-mt-auto-xs {
                    margin-top: auto
                }

                .flex-mb-auto-xs {
                    margin-bottom: auto
                }
            }

            @media(min-width: 768px) {
                .d-flex-sm {
                    display:flex
                }

                .d-inline-flex-sm {
                    display: inline-flex
                }

                .flex-d-row-sm {
                    flex-direction: row
                }

                .flex-d-row-reverse-sm {
                    flex-direction: row-reverse
                }

                .flex-d-column-sm {
                    flex-direction: column
                }

                .flex-d-column-reverse-sm {
                    flex-direction: column-reverse
                }

                .flex-wrap-sm {
                    flex-wrap: wrap
                }

                .flex-wrap-reverse-sm {
                    flex-wrap: wrap-reverse
                }

                .flex-nowrap-sm {
                    flex-wrap: nowrap
                }

                .flex-flow-rw-sm {
                    flex-flow: row wrap
                }

                .flex-flow-rrw-sm {
                    flex-flow: row-reverse wrap
                }

                .flex-flow-rnw-sm {
                    flex-flow: row nowrap
                }

                .flex-flow-rrnw-sm {
                    flex-flow: row-reverse nowrap
                }

                .flex-flow-cw-sm {
                    flex-flow: column wrap
                }

                .flex-flow-crw-sm {
                    flex-flow: column-reverse wrap
                }

                .flex-flow-cnw-sm {
                    flex-flow: column nowrap
                }

                .flex-flow-crnw-sm {
                    flex-flow: column-reverse nowrap
                }

                .justify-content-start-sm {
                    justify-content: flex-start
                }

                .justify-content-end-sm {
                    justify-content: flex-end
                }

                .justify-content-center-sm {
                    justify-content: center
                }

                .justify-content-baseline-sm {
                    justify-content: baseline
                }

                .justify-content-around-sm {
                    justify-content: space-around
                }

                .justify-content-between-sm {
                    justify-content: space-between
                }

                .align-items-start-sm {
                    align-items: flex-start
                }

                .align-items-end-sm {
                    align-items: flex-end
                }

                .align-items-center-sm {
                    align-items: center
                }

                .align-items-baseline-sm {
                    align-items: baseline
                }

                .align-items-stretch-sm {
                    align-items: stretch
                }

                .align-self-start-sm {
                    align-self: flex-start
                }

                .align-self-end-sm {
                    align-self: flex-end
                }

                .align-self-center-sm {
                    align-self: center
                }

                .align-self-baseline-sm {
                    align-self: baseline
                }

                .align-self-stretch-sm {
                    align-self: stretch
                }

                .align-content-start-sm {
                    align-content: flex-start
                }

                .align-content-end-sm {
                    align-content: flex-end
                }

                .align-content-center-sm {
                    align-content: center
                }

                .align-content-between-sm {
                    align-content: space-between
                }

                .align-content-around-sm {
                    align-content: space-around
                }

                .flex-order-first-sm {
                    order: -1
                }

                .flex-order-last-sm {
                    order: 1
                }

                .flex-order-unordered-sm {
                    order: 0
                }

                .flex-ml-auto-sm {
                    margin-left: auto
                }

                .flex-mr-auto-sm {
                    margin-right: auto
                }

                .flex-mt-auto-sm {
                    margin-top: auto
                }

                .flex-mb-auto-sm {
                    margin-bottom: auto
                }
            }

            @media(min-width: 1023px) {
                .d-flex-md {
                    display:flex
                }

                .d-inline-flex-md {
                    display: inline-flex
                }

                .flex-d-row-md {
                    flex-direction: row
                }

                .flex-d-row-reverse-md {
                    flex-direction: row-reverse
                }

                .flex-d-column-md {
                    flex-direction: column
                }

                .flex-d-column-reverse-md {
                    flex-direction: column-reverse
                }

                .flex-wrap-md {
                    flex-wrap: wrap
                }

                .flex-wrap-reverse-md {
                    flex-wrap: wrap-reverse
                }

                .flex-nowrap-md {
                    flex-wrap: nowrap
                }

                .flex-flow-rw-md {
                    flex-flow: row wrap
                }

                .flex-flow-rrw-md {
                    flex-flow: row-reverse wrap
                }

                .flex-flow-rnw-md {
                    flex-flow: row nowrap
                }

                .flex-flow-rrnw-md {
                    flex-flow: row-reverse nowrap
                }

                .flex-flow-cw-md {
                    flex-flow: column wrap
                }

                .flex-flow-crw-md {
                    flex-flow: column-reverse wrap
                }

                .flex-flow-cnw-md {
                    flex-flow: column nowrap
                }

                .flex-flow-crnw-md {
                    flex-flow: column-reverse nowrap
                }

                .justify-content-start-md {
                    justify-content: flex-start
                }

                .justify-content-end-md {
                    justify-content: flex-end
                }

                .justify-content-center-md {
                    justify-content: center
                }

                .justify-content-baseline-md {
                    justify-content: baseline
                }

                .justify-content-around-md {
                    justify-content: space-around
                }

                .justify-content-between-md {
                    justify-content: space-between
                }

                .align-items-start-md {
                    align-items: flex-start
                }

                .align-items-end-md {
                    align-items: flex-end
                }

                .align-items-center-md {
                    align-items: center
                }

                .align-items-baseline-md {
                    align-items: baseline
                }

                .align-items-stretch-md {
                    align-items: stretch
                }

                .align-self-start-md {
                    align-self: flex-start
                }

                .align-self-end-md {
                    align-self: flex-end
                }

                .align-self-center-md {
                    align-self: center
                }

                .align-self-baseline-md {
                    align-self: baseline
                }

                .align-self-stretch-md {
                    align-self: stretch
                }

                .align-content-start-md {
                    align-content: flex-start
                }

                .align-content-end-md {
                    align-content: flex-end
                }

                .align-content-center-md {
                    align-content: center
                }

                .align-content-between-md {
                    align-content: space-between
                }

                .align-content-around-md {
                    align-content: space-around
                }

                .flex-order-first-md {
                    order: -1
                }

                .flex-order-last-md {
                    order: 1
                }

                .flex-order-unordered-md {
                    order: 0
                }

                .flex-ml-auto-md {
                    margin-left: auto
                }

                .flex-mr-auto-md {
                    margin-right: auto
                }

                .flex-mt-auto-md {
                    margin-top: auto
                }

                .flex-mb-auto-md {
                    margin-bottom: auto
                }
            }

            @media(min-width: 1440px) {
                .d-flex-lg {
                    display:flex
                }

                .d-inline-flex-lg {
                    display: inline-flex
                }

                .flex-d-row-lg {
                    flex-direction: row
                }

                .flex-d-row-reverse-lg {
                    flex-direction: row-reverse
                }

                .flex-d-column-lg {
                    flex-direction: column
                }

                .flex-d-column-reverse-lg {
                    flex-direction: column-reverse
                }

                .flex-wrap-lg {
                    flex-wrap: wrap
                }

                .flex-wrap-reverse-lg {
                    flex-wrap: wrap-reverse
                }

                .flex-nowrap-lg {
                    flex-wrap: nowrap
                }

                .flex-flow-rw-lg {
                    flex-flow: row wrap
                }

                .flex-flow-rrw-lg {
                    flex-flow: row-reverse wrap
                }

                .flex-flow-rnw-lg {
                    flex-flow: row nowrap
                }

                .flex-flow-rrnw-lg {
                    flex-flow: row-reverse nowrap
                }

                .flex-flow-cw-lg {
                    flex-flow: column wrap
                }

                .flex-flow-crw-lg {
                    flex-flow: column-reverse wrap
                }

                .flex-flow-cnw-lg {
                    flex-flow: column nowrap
                }

                .flex-flow-crnw-lg {
                    flex-flow: column-reverse nowrap
                }

                .justify-content-start-lg {
                    justify-content: flex-start
                }

                .justify-content-end-lg {
                    justify-content: flex-end
                }

                .justify-content-center-lg {
                    justify-content: center
                }

                .justify-content-baseline-lg {
                    justify-content: baseline
                }

                .justify-content-around-lg {
                    justify-content: space-around
                }

                .justify-content-between-lg {
                    justify-content: space-between
                }

                .align-items-start-lg {
                    align-items: flex-start
                }

                .align-items-end-lg {
                    align-items: flex-end
                }

                .align-items-center-lg {
                    align-items: center
                }

                .align-items-baseline-lg {
                    align-items: baseline
                }

                .align-items-stretch-lg {
                    align-items: stretch
                }

                .align-self-start-lg {
                    align-self: flex-start
                }

                .align-self-end-lg {
                    align-self: flex-end
                }

                .align-self-center-lg {
                    align-self: center
                }

                .align-self-baseline-lg {
                    align-self: baseline
                }

                .align-self-stretch-lg {
                    align-self: stretch
                }

                .align-content-start-lg {
                    align-content: flex-start
                }

                .align-content-end-lg {
                    align-content: flex-end
                }

                .align-content-center-lg {
                    align-content: center
                }

                .align-content-between-lg {
                    align-content: space-between
                }

                .align-content-around-lg {
                    align-content: space-around
                }

                .flex-order-first-lg {
                    order: -1
                }

                .flex-order-last-lg {
                    order: 1
                }

                .flex-order-unordered-lg {
                    order: 0
                }

                .flex-ml-auto-lg {
                    margin-left: auto
                }

                .flex-mr-auto-lg {
                    margin-right: auto
                }

                .flex-mt-auto-lg {
                    margin-top: auto
                }

                .flex-mb-auto-lg {
                    margin-bottom: auto
                }
            }

            @media(min-width: 1968px) {
                .d-flex-xl {
                    display:flex
                }

                .d-inline-flex-xl {
                    display: inline-flex
                }

                .flex-d-row-xl {
                    flex-direction: row
                }

                .flex-d-row-reverse-xl {
                    flex-direction: row-reverse
                }

                .flex-d-column-xl {
                    flex-direction: column
                }

                .flex-d-column-reverse-xl {
                    flex-direction: column-reverse
                }

                .flex-wrap-xl {
                    flex-wrap: wrap
                }

                .flex-wrap-reverse-xl {
                    flex-wrap: wrap-reverse
                }

                .flex-nowrap-xl {
                    flex-wrap: nowrap
                }

                .flex-flow-rw-xl {
                    flex-flow: row wrap
                }

                .flex-flow-rrw-xl {
                    flex-flow: row-reverse wrap
                }

                .flex-flow-rnw-xl {
                    flex-flow: row nowrap
                }

                .flex-flow-rrnw-xl {
                    flex-flow: row-reverse nowrap
                }

                .flex-flow-cw-xl {
                    flex-flow: column wrap
                }

                .flex-flow-crw-xl {
                    flex-flow: column-reverse wrap
                }

                .flex-flow-cnw-xl {
                    flex-flow: column nowrap
                }

                .flex-flow-crnw-xl {
                    flex-flow: column-reverse nowrap
                }

                .justify-content-start-xl {
                    justify-content: flex-start
                }

                .justify-content-end-xl {
                    justify-content: flex-end
                }

                .justify-content-center-xl {
                    justify-content: center
                }

                .justify-content-baseline-xl {
                    justify-content: baseline
                }

                .justify-content-around-xl {
                    justify-content: space-around
                }

                .justify-content-between-xl {
                    justify-content: space-between
                }

                .align-items-start-xl {
                    align-items: flex-start
                }

                .align-items-end-xl {
                    align-items: flex-end
                }

                .align-items-center-xl {
                    align-items: center
                }

                .align-items-baseline-xl {
                    align-items: baseline
                }

                .align-items-stretch-xl {
                    align-items: stretch
                }

                .align-self-start-xl {
                    align-self: flex-start
                }

                .align-self-end-xl {
                    align-self: flex-end
                }

                .align-self-center-xl {
                    align-self: center
                }

                .align-self-baseline-xl {
                    align-self: baseline
                }

                .align-self-stretch-xl {
                    align-self: stretch
                }

                .align-content-start-xl {
                    align-content: flex-start
                }

                .align-content-end-xl {
                    align-content: flex-end
                }

                .align-content-center-xl {
                    align-content: center
                }

                .align-content-between-xl {
                    align-content: space-between
                }

                .align-content-around-xl {
                    align-content: space-around
                }

                .flex-order-first-xl {
                    order: -1
                }

                .flex-order-last-xl {
                    order: 1
                }

                .flex-order-unordered-xl {
                    order: 0
                }

                .flex-ml-auto-xl {
                    margin-left: auto
                }

                .flex-mr-auto-xl {
                    margin-right: auto
                }

                .flex-mt-auto-xl {
                    margin-top: auto
                }

                .flex-mb-auto-xl {
                    margin-bottom: auto
                }
            }

            .d-flex {
                display: flex
            }

            .d-inline-flex {
                display: inline-flex
            }

            .flex-d-row {
                flex-direction: row
            }

            .flex-d-row-reverse {
                flex-direction: row-reverse
            }

            .flex-d-column {
                flex-direction: column
            }

            .flex-d-column-reverse {
                flex-direction: column-reverse
            }

            .flex-wrap {
                flex-wrap: wrap
            }

            .flex-wrap-reverse {
                flex-wrap: wrap-reverse
            }

            .flex-nowrap {
                flex-wrap: nowrap
            }

            .flex-flow-rw {
                flex-flow: row wrap
            }

            .flex-flow-rrw {
                flex-flow: row-reverse wrap
            }

            .flex-flow-rnw {
                flex-flow: row nowrap
            }

            .flex-flow-rrnw {
                flex-flow: row-reverse nowrap
            }

            .flex-flow-cw {
                flex-flow: column wrap
            }

            .flex-flow-crw {
                flex-flow: column-reverse wrap
            }

            .flex-flow-cnw {
                flex-flow: column nowrap
            }

            .flex-flow-crnw {
                flex-flow: column-reverse nowrap
            }

            .justify-content-start {
                justify-content: flex-start
            }

            .justify-content-end {
                justify-content: flex-end
            }

            .justify-content-center {
                justify-content: center
            }

            .justify-content-baseline {
                justify-content: baseline
            }

            .justify-content-around {
                justify-content: space-around
            }

            .justify-content-between {
                justify-content: space-between
            }

            .align-items-start {
                align-items: flex-start
            }

            .align-items-end {
                align-items: flex-end
            }

            .align-items-center {
                align-items: center
            }

            .align-items-baseline {
                align-items: baseline
            }

            .align-items-stretch {
                align-items: stretch
            }

            .align-self-start {
                align-self: flex-start
            }

            .align-self-end {
                align-self: flex-end
            }

            .align-self-center {
                align-self: center
            }

            .align-self-baseline {
                align-self: baseline
            }

            .align-self-stretch {
                align-self: stretch
            }

            .align-content-start {
                align-content: flex-start
            }

            .align-content-end {
                align-content: flex-end
            }

            .align-content-center {
                align-content: center
            }

            .align-content-between {
                align-content: space-between
            }

            .align-content-around {
                align-content: space-around
            }

            .flex-order-first {
                order: -1
            }

            .flex-order-last {
                order: 1
            }

            .flex-order-unordered {
                order: 0
            }

            .flex-ml-auto {
                margin-left: auto
            }

            .flex-mr-auto {
                margin-right: auto
            }

            .flex-mt-auto {
                margin-top: auto
            }

            .flex-mb-auto {
                margin-bottom: auto
            }

            .order-0 {
                order: 0
            }

            .order-1 {
                order: 1
            }

            .order-2 {
                order: 2
            }

            .order-3 {
                order: 3
            }

            .order-4 {
                order: 4
            }

            .order-5 {
                order: 5
            }

            .order-6 {
                order: 6
            }

            .order-7 {
                order: 7
            }

            .order-8 {
                order: 8
            }

            .order-9 {
                order: 9
            }

            .order-10 {
                order: 10
            }

            .order-11 {
                order: 11
            }

            .order-12 {
                order: 12
            }

            @media(min-width: 0px) {
                .hidden-xs {
                    display:none
                }

                .opacity-0-xs {
                    opacity: 0
                }
            }

            @media(min-width: 768px) {
                .hidden-sm {
                    display:none
                }

                .opacity-0-sm {
                    opacity: 0
                }
            }

            @media(min-width: 1023px) {
                .hidden-md {
                    display:none
                }

                .opacity-0-md {
                    opacity: 0
                }
            }

            @media(min-width: 1440px) {
                .hidden-lg {
                    display:none
                }

                .opacity-0-lg {
                    opacity: 0
                }
            }

            @media(min-width: 1968px) {
                .hidden-xl {
                    display:none
                }

                .opacity-0-xl {
                    opacity: 0
                }
            }

            @media(max-width: 0px) {
                .xs-hidden {
                    display:none
                }

                .xs-0-opacity {
                    opacity: 0
                }
            }

            @media(max-width: 768px) {
                .sm-hidden {
                    display:none
                }

                .sm-0-opacity {
                    opacity: 0
                }
            }

            @media(max-width: 1023px) {
                .md-hidden {
                    display:none
                }

                .md-0-opacity {
                    opacity: 0
                }
            }

            @media(max-width: 1440px) {
                .lg-hidden {
                    display:none
                }

                .lg-0-opacity {
                    opacity: 0
                }
            }

            @media(max-width: 1968px) {
                .xl-hidden {
                    display:none
                }

                .xl-0-opacity {
                    opacity: 0
                }
            }

            .pt-1-1 {
                padding-top: 100%
            }

            .pt-1-2 {
                padding-top: 200%
            }

            .pt-1-3 {
                padding-top: 300%
            }

            .pt-16-9 {
                padding-top: 56%
            }

            .br-100 {
                border-radius: 100%;
                overflow: hidden
            }

            .br-20 {
                border-radius: 20px;
                overflow: hidden
            }

            .br-10 {
                border-radius: 10px;
                overflow: hidden
            }

            .br-5 {
                border-radius: 5px;
                overflow: hidden
            }

            .ta-c {
                text-align: center
            }

            .ta-l {
                text-align: left
            }

            .ta-r {
                text-align: right
            }

            .text-maroon,.h1-heading.text-maroon,.h2-heading.text-maroon,.h3-heading.text-maroon,.h4-heading.text-maroon {
                color: #99103d
            }

            .text-primary,.h1-heading.text-primary,.h2-heading.text-primary,.h3-heading.text-primary,.h4-heading.text-primary {
                color: #99103d
            }

            .text-dark-maroon,.h1-heading.text-dark-maroon,.h2-heading.text-dark-maroon,.h3-heading.text-dark-maroon,.h4-heading.text-dark-maroon {
                color: #5f0c27
            }

            .text-black,.h1-heading.text-black,.h2-heading.text-black,.h3-heading.text-black,.h4-heading.text-black {
                color: #333
            }

            .text-white,.h1-heading.text-white,.h2-heading.text-white,.h3-heading.text-white,.h4-heading.text-white {
                color: #fff
            }

            .text-dark-grey,.h1-heading.text-dark-grey,.h2-heading.text-dark-grey,.h3-heading.text-dark-grey,.h4-heading.text-dark-grey {
                color: #4a4a4a
            }

            .text-mid-grey,.h1-heading.text-mid-grey,.h2-heading.text-mid-grey,.h3-heading.text-mid-grey,.h4-heading.text-mid-grey {
                color: #66605c
            }

            .text-blue-grey,.h1-heading.text-blue-grey,.h2-heading.text-blue-grey,.h3-heading.text-blue-grey,.h4-heading.text-blue-grey {
                color: #262a33
            }

            .w-100 {
                width: 100%
            }

            .w-75 {
                width: 75%
            }

            .w-50 {
                width: 50%
            }

            .w-25 {
                width: 25%
            }

            .w-auto {
                width: auto
            }

            .h-100 {
                height: 100%
            }

            .h-75 {
                height: 75%
            }

            .h-50 {
                height: 50%
            }

            .h-25 {
                height: 25%
            }

            .h-auto {
                height: auto
            }

            .overflow-hidden {
                overflow: hidden
            }

            .opacity-0 {
                opacity: 0
            }

            .opacity-25 {
                opacity: .25
            }

            .opacity-50 {
                opacity: .50
            }

            .opacity-75 {
                opacity: .75
            }

            .opacity-100 {
                opacity: 1
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .top {
                top: 0
            }

            .right {
                right: 0
            }

            .bottom {
                bottom: 0
            }

            .left {
                left: 0
            }

            .m--100 {
                margin: -100px
            }

            .m--90 {
                margin: -90px
            }

            .m--80 {
                margin: -80px
            }

            .m--70 {
                margin: -70px
            }

            .m--60 {
                margin: -60px
            }

            .m--50 {
                margin: -50px
            }

            .m--40 {
                margin: -40px
            }

            .m--30 {
                margin: -30px
            }

            .m--20 {
                margin: -20px
            }

            .m--10 {
                margin: -10px
            }

            .m-0 {
                margin: 0px
            }

            .m-10 {
                margin: 10px
            }

            .m-20 {
                margin: 20px
            }

            .m-30 {
                margin: 30px
            }

            .m-40 {
                margin: 40px
            }

            .m-50 {
                margin: 50px
            }

            .m-60 {
                margin: 60px
            }

            .m-70 {
                margin: 70px
            }

            .m-80 {
                margin: 80px
            }

            .m-90 {
                margin: 90px
            }

            .m-100 {
                margin: 100px
            }

            .mt--100 {
                margin-top: -100px
            }

            .mt--90 {
                margin-top: -90px
            }

            .mt--80 {
                margin-top: -80px
            }

            .mt--70 {
                margin-top: -70px
            }

            .mt--60 {
                margin-top: -60px
            }

            .mt--50 {
                margin-top: -50px
            }

            .mt--40 {
                margin-top: -40px
            }

            .mt--30 {
                margin-top: -30px
            }

            .mt--20 {
                margin-top: -20px
            }

            .mt--10 {
                margin-top: -10px
            }

            .mt-0 {
                margin-top: 0px
            }

            .mt-10 {
                margin-top: 10px
            }

            .mt-20 {
                margin-top: 20px
            }

            .mt-30 {
                margin-top: 30px
            }

            .mt-40 {
                margin-top: 40px
            }

            .mt-50 {
                margin-top: 50px
            }

            .mt-60 {
                margin-top: 60px
            }

            .mt-70 {
                margin-top: 70px
            }

            .mt-80 {
                margin-top: 80px
            }

            .mt-90 {
                margin-top: 90px
            }

            .mt-100 {
                margin-top: 100px
            }

            .mr--100 {
                margin-right: -100px
            }

            .mr--90 {
                margin-right: -90px
            }

            .mr--80 {
                margin-right: -80px
            }

            .mr--70 {
                margin-right: -70px
            }

            .mr--60 {
                margin-right: -60px
            }

            .mr--50 {
                margin-right: -50px
            }

            .mr--40 {
                margin-right: -40px
            }

            .mr--30 {
                margin-right: -30px
            }

            .mr--20 {
                margin-right: -20px
            }

            .mr--10 {
                margin-right: -10px
            }

            .mr-0 {
                margin-right: 0px
            }

            .mr-10 {
                margin-right: 10px
            }

            .mr-20 {
                margin-right: 20px
            }

            .mr-30 {
                margin-right: 30px
            }

            .mr-40 {
                margin-right: 40px
            }

            .mr-50 {
                margin-right: 50px
            }

            .mr-60 {
                margin-right: 60px
            }

            .mr-70 {
                margin-right: 70px
            }

            .mr-80 {
                margin-right: 80px
            }

            .mr-90 {
                margin-right: 90px
            }

            .mr-100 {
                margin-right: 100px
            }

            .mb--100 {
                margin-bottom: -100px
            }

            .mb--90 {
                margin-bottom: -90px
            }

            .mb--80 {
                margin-bottom: -80px
            }

            .mb--70 {
                margin-bottom: -70px
            }

            .mb--60 {
                margin-bottom: -60px
            }

            .mb--50 {
                margin-bottom: -50px
            }

            .mb--40 {
                margin-bottom: -40px
            }

            .mb--30 {
                margin-bottom: -30px
            }

            .mb--20 {
                margin-bottom: -20px
            }

            .mb--10 {
                margin-bottom: -10px
            }

            .mb-0 {
                margin-bottom: 0px
            }

            .mb-10 {
                margin-bottom: 10px
            }

            .mb-20 {
                margin-bottom: 20px
            }

            .mb-30 {
                margin-bottom: 30px
            }

            .mb-40 {
                margin-bottom: 40px
            }

            .mb-50 {
                margin-bottom: 50px
            }

            .mb-60 {
                margin-bottom: 60px
            }

            .mb-70 {
                margin-bottom: 70px
            }

            .mb-80 {
                margin-bottom: 80px
            }

            .mb-90 {
                margin-bottom: 90px
            }

            .mb-100 {
                margin-bottom: 100px
            }

            .ml--100 {
                margin-left: -100px
            }

            .ml--90 {
                margin-left: -90px
            }

            .ml--80 {
                margin-left: -80px
            }

            .ml--70 {
                margin-left: -70px
            }

            .ml--60 {
                margin-left: -60px
            }

            .ml--50 {
                margin-left: -50px
            }

            .ml--40 {
                margin-left: -40px
            }

            .ml--30 {
                margin-left: -30px
            }

            .ml--20 {
                margin-left: -20px
            }

            .ml--10 {
                margin-left: -10px
            }

            .ml-0 {
                margin-left: 0px
            }

            .ml-10 {
                margin-left: 10px
            }

            .ml-20 {
                margin-left: 20px
            }

            .ml-30 {
                margin-left: 30px
            }

            .ml-40 {
                margin-left: 40px
            }

            .ml-50 {
                margin-left: 50px
            }

            .ml-60 {
                margin-left: 60px
            }

            .ml-70 {
                margin-left: 70px
            }

            .ml-80 {
                margin-left: 80px
            }

            .ml-90 {
                margin-left: 90px
            }

            .ml-100 {
                margin-left: 100px
            }

            .m-10 {
                margin: 10px
            }

            .m-20 {
                margin: 20px
            }

            .m-30 {
                margin: 30px
            }

            .m-40 {
                margin: 40px
            }

            .m-50 {
                margin: 50px
            }

            .m-60 {
                margin: 60px
            }

            .m-70 {
                margin: 70px
            }

            .m-80 {
                margin: 80px
            }

            .m-90 {
                margin: 90px
            }

            .m-100 {
                margin: 100px
            }

            .p--100 {
                padding: -100px
            }

            .p--90 {
                padding: -90px
            }

            .p--80 {
                padding: -80px
            }

            .p--70 {
                padding: -70px
            }

            .p--60 {
                padding: -60px
            }

            .p--50 {
                padding: -50px
            }

            .p--40 {
                padding: -40px
            }

            .p--30 {
                padding: -30px
            }

            .p--20 {
                padding: -20px
            }

            .p--10 {
                padding: -10px
            }

            .p-0 {
                padding: 0px
            }

            .p-10 {
                padding: 10px
            }

            .p-20 {
                padding: 20px
            }

            .p-30 {
                padding: 30px
            }

            .p-40 {
                padding: 40px
            }

            .p-50 {
                padding: 50px
            }

            .p-60 {
                padding: 60px
            }

            .p-70 {
                padding: 70px
            }

            .p-80 {
                padding: 80px
            }

            .p-90 {
                padding: 90px
            }

            .p-100 {
                padding: 100px
            }

            .pt--100 {
                padding-top: -100px
            }

            .pt--90 {
                padding-top: -90px
            }

            .pt--80 {
                padding-top: -80px
            }

            .pt--70 {
                padding-top: -70px
            }

            .pt--60 {
                padding-top: -60px
            }

            .pt--50 {
                padding-top: -50px
            }

            .pt--40 {
                padding-top: -40px
            }

            .pt--30 {
                padding-top: -30px
            }

            .pt--20 {
                padding-top: -20px
            }

            .pt--10 {
                padding-top: -10px
            }

            .pt-0 {
                padding-top: 0px
            }

            .pt-10 {
                padding-top: 10px
            }

            .pt-20 {
                padding-top: 20px
            }

            .pt-30 {
                padding-top: 30px
            }

            .pt-40 {
                padding-top: 40px
            }

            .pt-50 {
                padding-top: 50px
            }

            .pt-60 {
                padding-top: 60px
            }

            .pt-70 {
                padding-top: 70px
            }

            .pt-80 {
                padding-top: 80px
            }

            .pt-90 {
                padding-top: 90px
            }

            .pt-100 {
                padding-top: 100px
            }

            .pr--100 {
                padding-right: -100px
            }

            .pr--90 {
                padding-right: -90px
            }

            .pr--80 {
                padding-right: -80px
            }

            .pr--70 {
                padding-right: -70px
            }

            .pr--60 {
                padding-right: -60px
            }

            .pr--50 {
                padding-right: -50px
            }

            .pr--40 {
                padding-right: -40px
            }

            .pr--30 {
                padding-right: -30px
            }

            .pr--20 {
                padding-right: -20px
            }

            .pr--10 {
                padding-right: -10px
            }

            .pr-0 {
                padding-right: 0px
            }

            .pr-10 {
                padding-right: 10px
            }

            .pr-20 {
                padding-right: 20px
            }

            .pr-30 {
                padding-right: 30px
            }

            .pr-40 {
                padding-right: 40px
            }

            .pr-50 {
                padding-right: 50px
            }

            .pr-60 {
                padding-right: 60px
            }

            .pr-70 {
                padding-right: 70px
            }

            .pr-80 {
                padding-right: 80px
            }

            .pr-90 {
                padding-right: 90px
            }

            .pr-100 {
                padding-right: 100px
            }

            .pb--100 {
                padding-bottom: -100px
            }

            .pb--90 {
                padding-bottom: -90px
            }

            .pb--80 {
                padding-bottom: -80px
            }

            .pb--70 {
                padding-bottom: -70px
            }

            .pb--60 {
                padding-bottom: -60px
            }

            .pb--50 {
                padding-bottom: -50px
            }

            .pb--40 {
                padding-bottom: -40px
            }

            .pb--30 {
                padding-bottom: -30px
            }

            .pb--20 {
                padding-bottom: -20px
            }

            .pb--10 {
                padding-bottom: -10px
            }

            .pb-0 {
                padding-bottom: 0px
            }

            .pb-10 {
                padding-bottom: 10px
            }

            .pb-20 {
                padding-bottom: 20px
            }

            .pb-30 {
                padding-bottom: 30px
            }

            .pb-40 {
                padding-bottom: 40px
            }

            .pb-50 {
                padding-bottom: 50px
            }

            .pb-60 {
                padding-bottom: 60px
            }

            .pb-70 {
                padding-bottom: 70px
            }

            .pb-80 {
                padding-bottom: 80px
            }

            .pb-90 {
                padding-bottom: 90px
            }

            .pb-100 {
                padding-bottom: 100px
            }

            .pl--100 {
                padding-left: -100px
            }

            .pl--90 {
                padding-left: -90px
            }

            .pl--80 {
                padding-left: -80px
            }

            .pl--70 {
                padding-left: -70px
            }

            .pl--60 {
                padding-left: -60px
            }

            .pl--50 {
                padding-left: -50px
            }

            .pl--40 {
                padding-left: -40px
            }

            .pl--30 {
                padding-left: -30px
            }

            .pl--20 {
                padding-left: -20px
            }

            .pl--10 {
                padding-left: -10px
            }

            .pl-0 {
                padding-left: 0px
            }

            .pl-10 {
                padding-left: 10px
            }

            .pl-20 {
                padding-left: 20px
            }

            .pl-30 {
                padding-left: 30px
            }

            .pl-40 {
                padding-left: 40px
            }

            .pl-50 {
                padding-left: 50px
            }

            .pl-60 {
                padding-left: 60px
            }

            .pl-70 {
                padding-left: 70px
            }

            .pl-80 {
                padding-left: 80px
            }

            .pl-90 {
                padding-left: 90px
            }

            .pl-100 {
                padding-left: 100px
            }

            .p-10 {
                padding: 10px
            }

            .p-20 {
                padding: 20px
            }

            .p-30 {
                padding: 30px
            }

            .p-40 {
                padding: 40px
            }

            .p-50 {
                padding: 50px
            }

            .p-60 {
                padding: 60px
            }

            .p-70 {
                padding: 70px
            }

            .p-80 {
                padding: 80px
            }

            .p-90 {
                padding: 90px
            }

            .p-100 {
                padding: 100px
            }

            @media(min-width: 0px) {
                .m--100-xs {
                    margin:-100px
                }

                .m--90-xs {
                    margin: -90px
                }

                .m--80-xs {
                    margin: -80px
                }

                .m--70-xs {
                    margin: -70px
                }

                .m--60-xs {
                    margin: -60px
                }

                .m--50-xs {
                    margin: -50px
                }

                .m--40-xs {
                    margin: -40px
                }

                .m--30-xs {
                    margin: -30px
                }

                .m--20-xs {
                    margin: -20px
                }

                .m--10-xs {
                    margin: -10px
                }

                .m-0-xs {
                    margin: 0px
                }

                .m-10-xs {
                    margin: 10px
                }

                .m-20-xs {
                    margin: 20px
                }

                .m-30-xs {
                    margin: 30px
                }

                .m-40-xs {
                    margin: 40px
                }

                .m-50-xs {
                    margin: 50px
                }

                .m-60-xs {
                    margin: 60px
                }

                .m-70-xs {
                    margin: 70px
                }

                .m-80-xs {
                    margin: 80px
                }

                .m-90-xs {
                    margin: 90px
                }

                .m-100-xs {
                    margin: 100px
                }

                .mt--100-xs {
                    margin-top: -100px
                }

                .mt--90-xs {
                    margin-top: -90px
                }

                .mt--80-xs {
                    margin-top: -80px
                }

                .mt--70-xs {
                    margin-top: -70px
                }

                .mt--60-xs {
                    margin-top: -60px
                }

                .mt--50-xs {
                    margin-top: -50px
                }

                .mt--40-xs {
                    margin-top: -40px
                }

                .mt--30-xs {
                    margin-top: -30px
                }

                .mt--20-xs {
                    margin-top: -20px
                }

                .mt--10-xs {
                    margin-top: -10px
                }

                .mt-0-xs {
                    margin-top: 0px
                }

                .mt-10-xs {
                    margin-top: 10px
                }

                .mt-20-xs {
                    margin-top: 20px
                }

                .mt-30-xs {
                    margin-top: 30px
                }

                .mt-40-xs {
                    margin-top: 40px
                }

                .mt-50-xs {
                    margin-top: 50px
                }

                .mt-60-xs {
                    margin-top: 60px
                }

                .mt-70-xs {
                    margin-top: 70px
                }

                .mt-80-xs {
                    margin-top: 80px
                }

                .mt-90-xs {
                    margin-top: 90px
                }

                .mt-100-xs {
                    margin-top: 100px
                }

                .mr--100-xs {
                    margin-right: -100px
                }

                .mr--90-xs {
                    margin-right: -90px
                }

                .mr--80-xs {
                    margin-right: -80px
                }

                .mr--70-xs {
                    margin-right: -70px
                }

                .mr--60-xs {
                    margin-right: -60px
                }

                .mr--50-xs {
                    margin-right: -50px
                }

                .mr--40-xs {
                    margin-right: -40px
                }

                .mr--30-xs {
                    margin-right: -30px
                }

                .mr--20-xs {
                    margin-right: -20px
                }

                .mr--10-xs {
                    margin-right: -10px
                }

                .mr-0-xs {
                    margin-right: 0px
                }

                .mr-10-xs {
                    margin-right: 10px
                }

                .mr-20-xs {
                    margin-right: 20px
                }

                .mr-30-xs {
                    margin-right: 30px
                }

                .mr-40-xs {
                    margin-right: 40px
                }

                .mr-50-xs {
                    margin-right: 50px
                }

                .mr-60-xs {
                    margin-right: 60px
                }

                .mr-70-xs {
                    margin-right: 70px
                }

                .mr-80-xs {
                    margin-right: 80px
                }

                .mr-90-xs {
                    margin-right: 90px
                }

                .mr-100-xs {
                    margin-right: 100px
                }

                .mb--100-xs {
                    margin-bottom: -100px
                }

                .mb--90-xs {
                    margin-bottom: -90px
                }

                .mb--80-xs {
                    margin-bottom: -80px
                }

                .mb--70-xs {
                    margin-bottom: -70px
                }

                .mb--60-xs {
                    margin-bottom: -60px
                }

                .mb--50-xs {
                    margin-bottom: -50px
                }

                .mb--40-xs {
                    margin-bottom: -40px
                }

                .mb--30-xs {
                    margin-bottom: -30px
                }

                .mb--20-xs {
                    margin-bottom: -20px
                }

                .mb--10-xs {
                    margin-bottom: -10px
                }

                .mb-0-xs {
                    margin-bottom: 0px
                }

                .mb-10-xs {
                    margin-bottom: 10px
                }

                .mb-20-xs {
                    margin-bottom: 20px
                }

                .mb-30-xs {
                    margin-bottom: 30px
                }

                .mb-40-xs {
                    margin-bottom: 40px
                }

                .mb-50-xs {
                    margin-bottom: 50px
                }

                .mb-60-xs {
                    margin-bottom: 60px
                }

                .mb-70-xs {
                    margin-bottom: 70px
                }

                .mb-80-xs {
                    margin-bottom: 80px
                }

                .mb-90-xs {
                    margin-bottom: 90px
                }

                .mb-100-xs {
                    margin-bottom: 100px
                }

                .ml--100-xs {
                    margin-left: -100px
                }

                .ml--90-xs {
                    margin-left: -90px
                }

                .ml--80-xs {
                    margin-left: -80px
                }

                .ml--70-xs {
                    margin-left: -70px
                }

                .ml--60-xs {
                    margin-left: -60px
                }

                .ml--50-xs {
                    margin-left: -50px
                }

                .ml--40-xs {
                    margin-left: -40px
                }

                .ml--30-xs {
                    margin-left: -30px
                }

                .ml--20-xs {
                    margin-left: -20px
                }

                .ml--10-xs {
                    margin-left: -10px
                }

                .ml-0-xs {
                    margin-left: 0px
                }

                .ml-10-xs {
                    margin-left: 10px
                }

                .ml-20-xs {
                    margin-left: 20px
                }

                .ml-30-xs {
                    margin-left: 30px
                }

                .ml-40-xs {
                    margin-left: 40px
                }

                .ml-50-xs {
                    margin-left: 50px
                }

                .ml-60-xs {
                    margin-left: 60px
                }

                .ml-70-xs {
                    margin-left: 70px
                }

                .ml-80-xs {
                    margin-left: 80px
                }

                .ml-90-xs {
                    margin-left: 90px
                }

                .ml-100-xs {
                    margin-left: 100px
                }

                .m-xs-10 {
                    margin: 10px
                }

                .m-xs-20 {
                    margin: 20px
                }

                .m-xs-30 {
                    margin: 30px
                }

                .m-xs-40 {
                    margin: 40px
                }

                .m-xs-50 {
                    margin: 50px
                }

                .m-xs-60 {
                    margin: 60px
                }

                .m-xs-70 {
                    margin: 70px
                }

                .m-xs-80 {
                    margin: 80px
                }

                .m-xs-90 {
                    margin: 90px
                }

                .m-xs-100 {
                    margin: 100px
                }

                .p--100-xs {
                    padding: -100px
                }

                .p--90-xs {
                    padding: -90px
                }

                .p--80-xs {
                    padding: -80px
                }

                .p--70-xs {
                    padding: -70px
                }

                .p--60-xs {
                    padding: -60px
                }

                .p--50-xs {
                    padding: -50px
                }

                .p--40-xs {
                    padding: -40px
                }

                .p--30-xs {
                    padding: -30px
                }

                .p--20-xs {
                    padding: -20px
                }

                .p--10-xs {
                    padding: -10px
                }

                .p-0-xs {
                    padding: 0px
                }

                .p-10-xs {
                    padding: 10px
                }

                .p-20-xs {
                    padding: 20px
                }

                .p-30-xs {
                    padding: 30px
                }

                .p-40-xs {
                    padding: 40px
                }

                .p-50-xs {
                    padding: 50px
                }

                .p-60-xs {
                    padding: 60px
                }

                .p-70-xs {
                    padding: 70px
                }

                .p-80-xs {
                    padding: 80px
                }

                .p-90-xs {
                    padding: 90px
                }

                .p-100-xs {
                    padding: 100px
                }

                .pt--100-xs {
                    padding-top: -100px
                }

                .pt--90-xs {
                    padding-top: -90px
                }

                .pt--80-xs {
                    padding-top: -80px
                }

                .pt--70-xs {
                    padding-top: -70px
                }

                .pt--60-xs {
                    padding-top: -60px
                }

                .pt--50-xs {
                    padding-top: -50px
                }

                .pt--40-xs {
                    padding-top: -40px
                }

                .pt--30-xs {
                    padding-top: -30px
                }

                .pt--20-xs {
                    padding-top: -20px
                }

                .pt--10-xs {
                    padding-top: -10px
                }

                .pt-0-xs {
                    padding-top: 0px
                }

                .pt-10-xs {
                    padding-top: 10px
                }

                .pt-20-xs {
                    padding-top: 20px
                }

                .pt-30-xs {
                    padding-top: 30px
                }

                .pt-40-xs {
                    padding-top: 40px
                }

                .pt-50-xs {
                    padding-top: 50px
                }

                .pt-60-xs {
                    padding-top: 60px
                }

                .pt-70-xs {
                    padding-top: 70px
                }

                .pt-80-xs {
                    padding-top: 80px
                }

                .pt-90-xs {
                    padding-top: 90px
                }

                .pt-100-xs {
                    padding-top: 100px
                }

                .pr--100-xs {
                    padding-right: -100px
                }

                .pr--90-xs {
                    padding-right: -90px
                }

                .pr--80-xs {
                    padding-right: -80px
                }

                .pr--70-xs {
                    padding-right: -70px
                }

                .pr--60-xs {
                    padding-right: -60px
                }

                .pr--50-xs {
                    padding-right: -50px
                }

                .pr--40-xs {
                    padding-right: -40px
                }

                .pr--30-xs {
                    padding-right: -30px
                }

                .pr--20-xs {
                    padding-right: -20px
                }

                .pr--10-xs {
                    padding-right: -10px
                }

                .pr-0-xs {
                    padding-right: 0px
                }

                .pr-10-xs {
                    padding-right: 10px
                }

                .pr-20-xs {
                    padding-right: 20px
                }

                .pr-30-xs {
                    padding-right: 30px
                }

                .pr-40-xs {
                    padding-right: 40px
                }

                .pr-50-xs {
                    padding-right: 50px
                }

                .pr-60-xs {
                    padding-right: 60px
                }

                .pr-70-xs {
                    padding-right: 70px
                }

                .pr-80-xs {
                    padding-right: 80px
                }

                .pr-90-xs {
                    padding-right: 90px
                }

                .pr-100-xs {
                    padding-right: 100px
                }

                .pb--100-xs {
                    padding-bottom: -100px
                }

                .pb--90-xs {
                    padding-bottom: -90px
                }

                .pb--80-xs {
                    padding-bottom: -80px
                }

                .pb--70-xs {
                    padding-bottom: -70px
                }

                .pb--60-xs {
                    padding-bottom: -60px
                }

                .pb--50-xs {
                    padding-bottom: -50px
                }

                .pb--40-xs {
                    padding-bottom: -40px
                }

                .pb--30-xs {
                    padding-bottom: -30px
                }

                .pb--20-xs {
                    padding-bottom: -20px
                }

                .pb--10-xs {
                    padding-bottom: -10px
                }

                .pb-0-xs {
                    padding-bottom: 0px
                }

                .pb-10-xs {
                    padding-bottom: 10px
                }

                .pb-20-xs {
                    padding-bottom: 20px
                }

                .pb-30-xs {
                    padding-bottom: 30px
                }

                .pb-40-xs {
                    padding-bottom: 40px
                }

                .pb-50-xs {
                    padding-bottom: 50px
                }

                .pb-60-xs {
                    padding-bottom: 60px
                }

                .pb-70-xs {
                    padding-bottom: 70px
                }

                .pb-80-xs {
                    padding-bottom: 80px
                }

                .pb-90-xs {
                    padding-bottom: 90px
                }

                .pb-100-xs {
                    padding-bottom: 100px
                }

                .pl--100-xs {
                    padding-left: -100px
                }

                .pl--90-xs {
                    padding-left: -90px
                }

                .pl--80-xs {
                    padding-left: -80px
                }

                .pl--70-xs {
                    padding-left: -70px
                }

                .pl--60-xs {
                    padding-left: -60px
                }

                .pl--50-xs {
                    padding-left: -50px
                }

                .pl--40-xs {
                    padding-left: -40px
                }

                .pl--30-xs {
                    padding-left: -30px
                }

                .pl--20-xs {
                    padding-left: -20px
                }

                .pl--10-xs {
                    padding-left: -10px
                }

                .pl-0-xs {
                    padding-left: 0px
                }

                .pl-10-xs {
                    padding-left: 10px
                }

                .pl-20-xs {
                    padding-left: 20px
                }

                .pl-30-xs {
                    padding-left: 30px
                }

                .pl-40-xs {
                    padding-left: 40px
                }

                .pl-50-xs {
                    padding-left: 50px
                }

                .pl-60-xs {
                    padding-left: 60px
                }

                .pl-70-xs {
                    padding-left: 70px
                }

                .pl-80-xs {
                    padding-left: 80px
                }

                .pl-90-xs {
                    padding-left: 90px
                }

                .pl-100-xs {
                    padding-left: 100px
                }

                .p-xs-10 {
                    padding: 10px
                }

                .p-xs-20 {
                    padding: 20px
                }

                .p-xs-30 {
                    padding: 30px
                }

                .p-xs-40 {
                    padding: 40px
                }

                .p-xs-50 {
                    padding: 50px
                }

                .p-xs-60 {
                    padding: 60px
                }

                .p-xs-70 {
                    padding: 70px
                }

                .p-xs-80 {
                    padding: 80px
                }

                .p-xs-90 {
                    padding: 90px
                }

                .p-xs-100 {
                    padding: 100px
                }

                .opacity-0-xs {
                    opacity: 0
                }

                .opacity-25-xs {
                    opacity: .25
                }

                .opacity-50-xs {
                    opacity: .50
                }

                .opacity-75-xs {
                    opacity: .75
                }

                .opacity-100-xs {
                    opacity: 1
                }

                .absolute-xs {
                    position: absolute
                }

                .relative-xs {
                    position: relative
                }

                .top-xs {
                    top: 0
                }

                .right-xs {
                    right: 0
                }

                .bottom-xs {
                    bottom: 0
                }

                .left-xs {
                    left: 0
                }
            }

            @media(min-width: 768px) {
                .m--100-sm {
                    margin:-100px
                }

                .m--90-sm {
                    margin: -90px
                }

                .m--80-sm {
                    margin: -80px
                }

                .m--70-sm {
                    margin: -70px
                }

                .m--60-sm {
                    margin: -60px
                }

                .m--50-sm {
                    margin: -50px
                }

                .m--40-sm {
                    margin: -40px
                }

                .m--30-sm {
                    margin: -30px
                }

                .m--20-sm {
                    margin: -20px
                }

                .m--10-sm {
                    margin: -10px
                }

                .m-0-sm {
                    margin: 0px
                }

                .m-10-sm {
                    margin: 10px
                }

                .m-20-sm {
                    margin: 20px
                }

                .m-30-sm {
                    margin: 30px
                }

                .m-40-sm {
                    margin: 40px
                }

                .m-50-sm {
                    margin: 50px
                }

                .m-60-sm {
                    margin: 60px
                }

                .m-70-sm {
                    margin: 70px
                }

                .m-80-sm {
                    margin: 80px
                }

                .m-90-sm {
                    margin: 90px
                }

                .m-100-sm {
                    margin: 100px
                }

                .mt--100-sm {
                    margin-top: -100px
                }

                .mt--90-sm {
                    margin-top: -90px
                }

                .mt--80-sm {
                    margin-top: -80px
                }

                .mt--70-sm {
                    margin-top: -70px
                }

                .mt--60-sm {
                    margin-top: -60px
                }

                .mt--50-sm {
                    margin-top: -50px
                }

                .mt--40-sm {
                    margin-top: -40px
                }

                .mt--30-sm {
                    margin-top: -30px
                }

                .mt--20-sm {
                    margin-top: -20px
                }

                .mt--10-sm {
                    margin-top: -10px
                }

                .mt-0-sm {
                    margin-top: 0px
                }

                .mt-10-sm {
                    margin-top: 10px
                }

                .mt-20-sm {
                    margin-top: 20px
                }

                .mt-30-sm {
                    margin-top: 30px
                }

                .mt-40-sm {
                    margin-top: 40px
                }

                .mt-50-sm {
                    margin-top: 50px
                }

                .mt-60-sm {
                    margin-top: 60px
                }

                .mt-70-sm {
                    margin-top: 70px
                }

                .mt-80-sm {
                    margin-top: 80px
                }

                .mt-90-sm {
                    margin-top: 90px
                }

                .mt-100-sm {
                    margin-top: 100px
                }

                .mr--100-sm {
                    margin-right: -100px
                }

                .mr--90-sm {
                    margin-right: -90px
                }

                .mr--80-sm {
                    margin-right: -80px
                }

                .mr--70-sm {
                    margin-right: -70px
                }

                .mr--60-sm {
                    margin-right: -60px
                }

                .mr--50-sm {
                    margin-right: -50px
                }

                .mr--40-sm {
                    margin-right: -40px
                }

                .mr--30-sm {
                    margin-right: -30px
                }

                .mr--20-sm {
                    margin-right: -20px
                }

                .mr--10-sm {
                    margin-right: -10px
                }

                .mr-0-sm {
                    margin-right: 0px
                }

                .mr-10-sm {
                    margin-right: 10px
                }

                .mr-20-sm {
                    margin-right: 20px
                }

                .mr-30-sm {
                    margin-right: 30px
                }

                .mr-40-sm {
                    margin-right: 40px
                }

                .mr-50-sm {
                    margin-right: 50px
                }

                .mr-60-sm {
                    margin-right: 60px
                }

                .mr-70-sm {
                    margin-right: 70px
                }

                .mr-80-sm {
                    margin-right: 80px
                }

                .mr-90-sm {
                    margin-right: 90px
                }

                .mr-100-sm {
                    margin-right: 100px
                }

                .mb--100-sm {
                    margin-bottom: -100px
                }

                .mb--90-sm {
                    margin-bottom: -90px
                }

                .mb--80-sm {
                    margin-bottom: -80px
                }

                .mb--70-sm {
                    margin-bottom: -70px
                }

                .mb--60-sm {
                    margin-bottom: -60px
                }

                .mb--50-sm {
                    margin-bottom: -50px
                }

                .mb--40-sm {
                    margin-bottom: -40px
                }

                .mb--30-sm {
                    margin-bottom: -30px
                }

                .mb--20-sm {
                    margin-bottom: -20px
                }

                .mb--10-sm {
                    margin-bottom: -10px
                }

                .mb-0-sm {
                    margin-bottom: 0px
                }

                .mb-10-sm {
                    margin-bottom: 10px
                }

                .mb-20-sm {
                    margin-bottom: 20px
                }

                .mb-30-sm {
                    margin-bottom: 30px
                }

                .mb-40-sm {
                    margin-bottom: 40px
                }

                .mb-50-sm {
                    margin-bottom: 50px
                }

                .mb-60-sm {
                    margin-bottom: 60px
                }

                .mb-70-sm {
                    margin-bottom: 70px
                }

                .mb-80-sm {
                    margin-bottom: 80px
                }

                .mb-90-sm {
                    margin-bottom: 90px
                }

                .mb-100-sm {
                    margin-bottom: 100px
                }

                .ml--100-sm {
                    margin-left: -100px
                }

                .ml--90-sm {
                    margin-left: -90px
                }

                .ml--80-sm {
                    margin-left: -80px
                }

                .ml--70-sm {
                    margin-left: -70px
                }

                .ml--60-sm {
                    margin-left: -60px
                }

                .ml--50-sm {
                    margin-left: -50px
                }

                .ml--40-sm {
                    margin-left: -40px
                }

                .ml--30-sm {
                    margin-left: -30px
                }

                .ml--20-sm {
                    margin-left: -20px
                }

                .ml--10-sm {
                    margin-left: -10px
                }

                .ml-0-sm {
                    margin-left: 0px
                }

                .ml-10-sm {
                    margin-left: 10px
                }

                .ml-20-sm {
                    margin-left: 20px
                }

                .ml-30-sm {
                    margin-left: 30px
                }

                .ml-40-sm {
                    margin-left: 40px
                }

                .ml-50-sm {
                    margin-left: 50px
                }

                .ml-60-sm {
                    margin-left: 60px
                }

                .ml-70-sm {
                    margin-left: 70px
                }

                .ml-80-sm {
                    margin-left: 80px
                }

                .ml-90-sm {
                    margin-left: 90px
                }

                .ml-100-sm {
                    margin-left: 100px
                }

                .m-sm-10 {
                    margin: 10px
                }

                .m-sm-20 {
                    margin: 20px
                }

                .m-sm-30 {
                    margin: 30px
                }

                .m-sm-40 {
                    margin: 40px
                }

                .m-sm-50 {
                    margin: 50px
                }

                .m-sm-60 {
                    margin: 60px
                }

                .m-sm-70 {
                    margin: 70px
                }

                .m-sm-80 {
                    margin: 80px
                }

                .m-sm-90 {
                    margin: 90px
                }

                .m-sm-100 {
                    margin: 100px
                }

                .p--100-sm {
                    padding: -100px
                }

                .p--90-sm {
                    padding: -90px
                }

                .p--80-sm {
                    padding: -80px
                }

                .p--70-sm {
                    padding: -70px
                }

                .p--60-sm {
                    padding: -60px
                }

                .p--50-sm {
                    padding: -50px
                }

                .p--40-sm {
                    padding: -40px
                }

                .p--30-sm {
                    padding: -30px
                }

                .p--20-sm {
                    padding: -20px
                }

                .p--10-sm {
                    padding: -10px
                }

                .p-0-sm {
                    padding: 0px
                }

                .p-10-sm {
                    padding: 10px
                }

                .p-20-sm {
                    padding: 20px
                }

                .p-30-sm {
                    padding: 30px
                }

                .p-40-sm {
                    padding: 40px
                }

                .p-50-sm {
                    padding: 50px
                }

                .p-60-sm {
                    padding: 60px
                }

                .p-70-sm {
                    padding: 70px
                }

                .p-80-sm {
                    padding: 80px
                }

                .p-90-sm {
                    padding: 90px
                }

                .p-100-sm {
                    padding: 100px
                }

                .pt--100-sm {
                    padding-top: -100px
                }

                .pt--90-sm {
                    padding-top: -90px
                }

                .pt--80-sm {
                    padding-top: -80px
                }

                .pt--70-sm {
                    padding-top: -70px
                }

                .pt--60-sm {
                    padding-top: -60px
                }

                .pt--50-sm {
                    padding-top: -50px
                }

                .pt--40-sm {
                    padding-top: -40px
                }

                .pt--30-sm {
                    padding-top: -30px
                }

                .pt--20-sm {
                    padding-top: -20px
                }

                .pt--10-sm {
                    padding-top: -10px
                }

                .pt-0-sm {
                    padding-top: 0px
                }

                .pt-10-sm {
                    padding-top: 10px
                }

                .pt-20-sm {
                    padding-top: 20px
                }

                .pt-30-sm {
                    padding-top: 30px
                }

                .pt-40-sm {
                    padding-top: 40px
                }

                .pt-50-sm {
                    padding-top: 50px
                }

                .pt-60-sm {
                    padding-top: 60px
                }

                .pt-70-sm {
                    padding-top: 70px
                }

                .pt-80-sm {
                    padding-top: 80px
                }

                .pt-90-sm {
                    padding-top: 90px
                }

                .pt-100-sm {
                    padding-top: 100px
                }

                .pr--100-sm {
                    padding-right: -100px
                }

                .pr--90-sm {
                    padding-right: -90px
                }

                .pr--80-sm {
                    padding-right: -80px
                }

                .pr--70-sm {
                    padding-right: -70px
                }

                .pr--60-sm {
                    padding-right: -60px
                }

                .pr--50-sm {
                    padding-right: -50px
                }

                .pr--40-sm {
                    padding-right: -40px
                }

                .pr--30-sm {
                    padding-right: -30px
                }

                .pr--20-sm {
                    padding-right: -20px
                }

                .pr--10-sm {
                    padding-right: -10px
                }

                .pr-0-sm {
                    padding-right: 0px
                }

                .pr-10-sm {
                    padding-right: 10px
                }

                .pr-20-sm {
                    padding-right: 20px
                }

                .pr-30-sm {
                    padding-right: 30px
                }

                .pr-40-sm {
                    padding-right: 40px
                }

                .pr-50-sm {
                    padding-right: 50px
                }

                .pr-60-sm {
                    padding-right: 60px
                }

                .pr-70-sm {
                    padding-right: 70px
                }

                .pr-80-sm {
                    padding-right: 80px
                }

                .pr-90-sm {
                    padding-right: 90px
                }

                .pr-100-sm {
                    padding-right: 100px
                }

                .pb--100-sm {
                    padding-bottom: -100px
                }

                .pb--90-sm {
                    padding-bottom: -90px
                }

                .pb--80-sm {
                    padding-bottom: -80px
                }

                .pb--70-sm {
                    padding-bottom: -70px
                }

                .pb--60-sm {
                    padding-bottom: -60px
                }

                .pb--50-sm {
                    padding-bottom: -50px
                }

                .pb--40-sm {
                    padding-bottom: -40px
                }

                .pb--30-sm {
                    padding-bottom: -30px
                }

                .pb--20-sm {
                    padding-bottom: -20px
                }

                .pb--10-sm {
                    padding-bottom: -10px
                }

                .pb-0-sm {
                    padding-bottom: 0px
                }

                .pb-10-sm {
                    padding-bottom: 10px
                }

                .pb-20-sm {
                    padding-bottom: 20px
                }

                .pb-30-sm {
                    padding-bottom: 30px
                }

                .pb-40-sm {
                    padding-bottom: 40px
                }

                .pb-50-sm {
                    padding-bottom: 50px
                }

                .pb-60-sm {
                    padding-bottom: 60px
                }

                .pb-70-sm {
                    padding-bottom: 70px
                }

                .pb-80-sm {
                    padding-bottom: 80px
                }

                .pb-90-sm {
                    padding-bottom: 90px
                }

                .pb-100-sm {
                    padding-bottom: 100px
                }

                .pl--100-sm {
                    padding-left: -100px
                }

                .pl--90-sm {
                    padding-left: -90px
                }

                .pl--80-sm {
                    padding-left: -80px
                }

                .pl--70-sm {
                    padding-left: -70px
                }

                .pl--60-sm {
                    padding-left: -60px
                }

                .pl--50-sm {
                    padding-left: -50px
                }

                .pl--40-sm {
                    padding-left: -40px
                }

                .pl--30-sm {
                    padding-left: -30px
                }

                .pl--20-sm {
                    padding-left: -20px
                }

                .pl--10-sm {
                    padding-left: -10px
                }

                .pl-0-sm {
                    padding-left: 0px
                }

                .pl-10-sm {
                    padding-left: 10px
                }

                .pl-20-sm {
                    padding-left: 20px
                }

                .pl-30-sm {
                    padding-left: 30px
                }

                .pl-40-sm {
                    padding-left: 40px
                }

                .pl-50-sm {
                    padding-left: 50px
                }

                .pl-60-sm {
                    padding-left: 60px
                }

                .pl-70-sm {
                    padding-left: 70px
                }

                .pl-80-sm {
                    padding-left: 80px
                }

                .pl-90-sm {
                    padding-left: 90px
                }

                .pl-100-sm {
                    padding-left: 100px
                }

                .p-sm-10 {
                    padding: 10px
                }

                .p-sm-20 {
                    padding: 20px
                }

                .p-sm-30 {
                    padding: 30px
                }

                .p-sm-40 {
                    padding: 40px
                }

                .p-sm-50 {
                    padding: 50px
                }

                .p-sm-60 {
                    padding: 60px
                }

                .p-sm-70 {
                    padding: 70px
                }

                .p-sm-80 {
                    padding: 80px
                }

                .p-sm-90 {
                    padding: 90px
                }

                .p-sm-100 {
                    padding: 100px
                }

                .opacity-0-sm {
                    opacity: 0
                }

                .opacity-25-sm {
                    opacity: .25
                }

                .opacity-50-sm {
                    opacity: .50
                }

                .opacity-75-sm {
                    opacity: .75
                }

                .opacity-100-sm {
                    opacity: 1
                }

                .absolute-sm {
                    position: absolute
                }

                .relative-sm {
                    position: relative
                }

                .top-sm {
                    top: 0
                }

                .right-sm {
                    right: 0
                }

                .bottom-sm {
                    bottom: 0
                }

                .left-sm {
                    left: 0
                }
            }

            @media(min-width: 1023px) {
                .m--100-md {
                    margin:-100px
                }

                .m--90-md {
                    margin: -90px
                }

                .m--80-md {
                    margin: -80px
                }

                .m--70-md {
                    margin: -70px
                }

                .m--60-md {
                    margin: -60px
                }

                .m--50-md {
                    margin: -50px
                }

                .m--40-md {
                    margin: -40px
                }

                .m--30-md {
                    margin: -30px
                }

                .m--20-md {
                    margin: -20px
                }

                .m--10-md {
                    margin: -10px
                }

                .m-0-md {
                    margin: 0px
                }

                .m-10-md {
                    margin: 10px
                }

                .m-20-md {
                    margin: 20px
                }

                .m-30-md {
                    margin: 30px
                }

                .m-40-md {
                    margin: 40px
                }

                .m-50-md {
                    margin: 50px
                }

                .m-60-md {
                    margin: 60px
                }

                .m-70-md {
                    margin: 70px
                }

                .m-80-md {
                    margin: 80px
                }

                .m-90-md {
                    margin: 90px
                }

                .m-100-md {
                    margin: 100px
                }

                .mt--100-md {
                    margin-top: -100px
                }

                .mt--90-md {
                    margin-top: -90px
                }

                .mt--80-md {
                    margin-top: -80px
                }

                .mt--70-md {
                    margin-top: -70px
                }

                .mt--60-md {
                    margin-top: -60px
                }

                .mt--50-md {
                    margin-top: -50px
                }

                .mt--40-md {
                    margin-top: -40px
                }

                .mt--30-md {
                    margin-top: -30px
                }

                .mt--20-md {
                    margin-top: -20px
                }

                .mt--10-md {
                    margin-top: -10px
                }

                .mt-0-md {
                    margin-top: 0px
                }

                .mt-10-md {
                    margin-top: 10px
                }

                .mt-20-md {
                    margin-top: 20px
                }

                .mt-30-md {
                    margin-top: 30px
                }

                .mt-40-md {
                    margin-top: 40px
                }

                .mt-50-md {
                    margin-top: 50px
                }

                .mt-60-md {
                    margin-top: 60px
                }

                .mt-70-md {
                    margin-top: 70px
                }

                .mt-80-md {
                    margin-top: 80px
                }

                .mt-90-md {
                    margin-top: 90px
                }

                .mt-100-md {
                    margin-top: 100px
                }

                .mr--100-md {
                    margin-right: -100px
                }

                .mr--90-md {
                    margin-right: -90px
                }

                .mr--80-md {
                    margin-right: -80px
                }

                .mr--70-md {
                    margin-right: -70px
                }

                .mr--60-md {
                    margin-right: -60px
                }

                .mr--50-md {
                    margin-right: -50px
                }

                .mr--40-md {
                    margin-right: -40px
                }

                .mr--30-md {
                    margin-right: -30px
                }

                .mr--20-md {
                    margin-right: -20px
                }

                .mr--10-md {
                    margin-right: -10px
                }

                .mr-0-md {
                    margin-right: 0px
                }

                .mr-10-md {
                    margin-right: 10px
                }

                .mr-20-md {
                    margin-right: 20px
                }

                .mr-30-md {
                    margin-right: 30px
                }

                .mr-40-md {
                    margin-right: 40px
                }

                .mr-50-md {
                    margin-right: 50px
                }

                .mr-60-md {
                    margin-right: 60px
                }

                .mr-70-md {
                    margin-right: 70px
                }

                .mr-80-md {
                    margin-right: 80px
                }

                .mr-90-md {
                    margin-right: 90px
                }

                .mr-100-md {
                    margin-right: 100px
                }

                .mb--100-md {
                    margin-bottom: -100px
                }

                .mb--90-md {
                    margin-bottom: -90px
                }

                .mb--80-md {
                    margin-bottom: -80px
                }

                .mb--70-md {
                    margin-bottom: -70px
                }

                .mb--60-md {
                    margin-bottom: -60px
                }

                .mb--50-md {
                    margin-bottom: -50px
                }

                .mb--40-md {
                    margin-bottom: -40px
                }

                .mb--30-md {
                    margin-bottom: -30px
                }

                .mb--20-md {
                    margin-bottom: -20px
                }

                .mb--10-md {
                    margin-bottom: -10px
                }

                .mb-0-md {
                    margin-bottom: 0px
                }

                .mb-10-md {
                    margin-bottom: 10px
                }

                .mb-20-md {
                    margin-bottom: 20px
                }

                .mb-30-md {
                    margin-bottom: 30px
                }

                .mb-40-md {
                    margin-bottom: 40px
                }

                .mb-50-md {
                    margin-bottom: 50px
                }

                .mb-60-md {
                    margin-bottom: 60px
                }

                .mb-70-md {
                    margin-bottom: 70px
                }

                .mb-80-md {
                    margin-bottom: 80px
                }

                .mb-90-md {
                    margin-bottom: 90px
                }

                .mb-100-md {
                    margin-bottom: 100px
                }

                .ml--100-md {
                    margin-left: -100px
                }

                .ml--90-md {
                    margin-left: -90px
                }

                .ml--80-md {
                    margin-left: -80px
                }

                .ml--70-md {
                    margin-left: -70px
                }

                .ml--60-md {
                    margin-left: -60px
                }

                .ml--50-md {
                    margin-left: -50px
                }

                .ml--40-md {
                    margin-left: -40px
                }

                .ml--30-md {
                    margin-left: -30px
                }

                .ml--20-md {
                    margin-left: -20px
                }

                .ml--10-md {
                    margin-left: -10px
                }

                .ml-0-md {
                    margin-left: 0px
                }

                .ml-10-md {
                    margin-left: 10px
                }

                .ml-20-md {
                    margin-left: 20px
                }

                .ml-30-md {
                    margin-left: 30px
                }

                .ml-40-md {
                    margin-left: 40px
                }

                .ml-50-md {
                    margin-left: 50px
                }

                .ml-60-md {
                    margin-left: 60px
                }

                .ml-70-md {
                    margin-left: 70px
                }

                .ml-80-md {
                    margin-left: 80px
                }

                .ml-90-md {
                    margin-left: 90px
                }

                .ml-100-md {
                    margin-left: 100px
                }

                .m-md-10 {
                    margin: 10px
                }

                .m-md-20 {
                    margin: 20px
                }

                .m-md-30 {
                    margin: 30px
                }

                .m-md-40 {
                    margin: 40px
                }

                .m-md-50 {
                    margin: 50px
                }

                .m-md-60 {
                    margin: 60px
                }

                .m-md-70 {
                    margin: 70px
                }

                .m-md-80 {
                    margin: 80px
                }

                .m-md-90 {
                    margin: 90px
                }

                .m-md-100 {
                    margin: 100px
                }

                .p--100-md {
                    padding: -100px
                }

                .p--90-md {
                    padding: -90px
                }

                .p--80-md {
                    padding: -80px
                }

                .p--70-md {
                    padding: -70px
                }

                .p--60-md {
                    padding: -60px
                }

                .p--50-md {
                    padding: -50px
                }

                .p--40-md {
                    padding: -40px
                }

                .p--30-md {
                    padding: -30px
                }

                .p--20-md {
                    padding: -20px
                }

                .p--10-md {
                    padding: -10px
                }

                .p-0-md {
                    padding: 0px
                }

                .p-10-md {
                    padding: 10px
                }

                .p-20-md {
                    padding: 20px
                }

                .p-30-md {
                    padding: 30px
                }

                .p-40-md {
                    padding: 40px
                }

                .p-50-md {
                    padding: 50px
                }

                .p-60-md {
                    padding: 60px
                }

                .p-70-md {
                    padding: 70px
                }

                .p-80-md {
                    padding: 80px
                }

                .p-90-md {
                    padding: 90px
                }

                .p-100-md {
                    padding: 100px
                }

                .pt--100-md {
                    padding-top: -100px
                }

                .pt--90-md {
                    padding-top: -90px
                }

                .pt--80-md {
                    padding-top: -80px
                }

                .pt--70-md {
                    padding-top: -70px
                }

                .pt--60-md {
                    padding-top: -60px
                }

                .pt--50-md {
                    padding-top: -50px
                }

                .pt--40-md {
                    padding-top: -40px
                }

                .pt--30-md {
                    padding-top: -30px
                }

                .pt--20-md {
                    padding-top: -20px
                }

                .pt--10-md {
                    padding-top: -10px
                }

                .pt-0-md {
                    padding-top: 0px
                }

                .pt-10-md {
                    padding-top: 10px
                }

                .pt-20-md {
                    padding-top: 20px
                }

                .pt-30-md {
                    padding-top: 30px
                }

                .pt-40-md {
                    padding-top: 40px
                }

                .pt-50-md {
                    padding-top: 50px
                }

                .pt-60-md {
                    padding-top: 60px
                }

                .pt-70-md {
                    padding-top: 70px
                }

                .pt-80-md {
                    padding-top: 80px
                }

                .pt-90-md {
                    padding-top: 90px
                }

                .pt-100-md {
                    padding-top: 100px
                }

                .pr--100-md {
                    padding-right: -100px
                }

                .pr--90-md {
                    padding-right: -90px
                }

                .pr--80-md {
                    padding-right: -80px
                }

                .pr--70-md {
                    padding-right: -70px
                }

                .pr--60-md {
                    padding-right: -60px
                }

                .pr--50-md {
                    padding-right: -50px
                }

                .pr--40-md {
                    padding-right: -40px
                }

                .pr--30-md {
                    padding-right: -30px
                }

                .pr--20-md {
                    padding-right: -20px
                }

                .pr--10-md {
                    padding-right: -10px
                }

                .pr-0-md {
                    padding-right: 0px
                }

                .pr-10-md {
                    padding-right: 10px
                }

                .pr-20-md {
                    padding-right: 20px
                }

                .pr-30-md {
                    padding-right: 30px
                }

                .pr-40-md {
                    padding-right: 40px
                }

                .pr-50-md {
                    padding-right: 50px
                }

                .pr-60-md {
                    padding-right: 60px
                }

                .pr-70-md {
                    padding-right: 70px
                }

                .pr-80-md {
                    padding-right: 80px
                }

                .pr-90-md {
                    padding-right: 90px
                }

                .pr-100-md {
                    padding-right: 100px
                }

                .pb--100-md {
                    padding-bottom: -100px
                }

                .pb--90-md {
                    padding-bottom: -90px
                }

                .pb--80-md {
                    padding-bottom: -80px
                }

                .pb--70-md {
                    padding-bottom: -70px
                }

                .pb--60-md {
                    padding-bottom: -60px
                }

                .pb--50-md {
                    padding-bottom: -50px
                }

                .pb--40-md {
                    padding-bottom: -40px
                }

                .pb--30-md {
                    padding-bottom: -30px
                }

                .pb--20-md {
                    padding-bottom: -20px
                }

                .pb--10-md {
                    padding-bottom: -10px
                }

                .pb-0-md {
                    padding-bottom: 0px
                }

                .pb-10-md {
                    padding-bottom: 10px
                }

                .pb-20-md {
                    padding-bottom: 20px
                }

                .pb-30-md {
                    padding-bottom: 30px
                }

                .pb-40-md {
                    padding-bottom: 40px
                }

                .pb-50-md {
                    padding-bottom: 50px
                }

                .pb-60-md {
                    padding-bottom: 60px
                }

                .pb-70-md {
                    padding-bottom: 70px
                }

                .pb-80-md {
                    padding-bottom: 80px
                }

                .pb-90-md {
                    padding-bottom: 90px
                }

                .pb-100-md {
                    padding-bottom: 100px
                }

                .pl--100-md {
                    padding-left: -100px
                }

                .pl--90-md {
                    padding-left: -90px
                }

                .pl--80-md {
                    padding-left: -80px
                }

                .pl--70-md {
                    padding-left: -70px
                }

                .pl--60-md {
                    padding-left: -60px
                }

                .pl--50-md {
                    padding-left: -50px
                }

                .pl--40-md {
                    padding-left: -40px
                }

                .pl--30-md {
                    padding-left: -30px
                }

                .pl--20-md {
                    padding-left: -20px
                }

                .pl--10-md {
                    padding-left: -10px
                }

                .pl-0-md {
                    padding-left: 0px
                }

                .pl-10-md {
                    padding-left: 10px
                }

                .pl-20-md {
                    padding-left: 20px
                }

                .pl-30-md {
                    padding-left: 30px
                }

                .pl-40-md {
                    padding-left: 40px
                }

                .pl-50-md {
                    padding-left: 50px
                }

                .pl-60-md {
                    padding-left: 60px
                }

                .pl-70-md {
                    padding-left: 70px
                }

                .pl-80-md {
                    padding-left: 80px
                }

                .pl-90-md {
                    padding-left: 90px
                }

                .pl-100-md {
                    padding-left: 100px
                }

                .p-md-10 {
                    padding: 10px
                }

                .p-md-20 {
                    padding: 20px
                }

                .p-md-30 {
                    padding: 30px
                }

                .p-md-40 {
                    padding: 40px
                }

                .p-md-50 {
                    padding: 50px
                }

                .p-md-60 {
                    padding: 60px
                }

                .p-md-70 {
                    padding: 70px
                }

                .p-md-80 {
                    padding: 80px
                }

                .p-md-90 {
                    padding: 90px
                }

                .p-md-100 {
                    padding: 100px
                }

                .opacity-0-md {
                    opacity: 0
                }

                .opacity-25-md {
                    opacity: .25
                }

                .opacity-50-md {
                    opacity: .50
                }

                .opacity-75-md {
                    opacity: .75
                }

                .opacity-100-md {
                    opacity: 1
                }

                .absolute-md {
                    position: absolute
                }

                .relative-md {
                    position: relative
                }

                .top-md {
                    top: 0
                }

                .right-md {
                    right: 0
                }

                .bottom-md {
                    bottom: 0
                }

                .left-md {
                    left: 0
                }
            }

            @media(min-width: 1440px) {
                .m--100-lg {
                    margin:-100px
                }

                .m--90-lg {
                    margin: -90px
                }

                .m--80-lg {
                    margin: -80px
                }

                .m--70-lg {
                    margin: -70px
                }

                .m--60-lg {
                    margin: -60px
                }

                .m--50-lg {
                    margin: -50px
                }

                .m--40-lg {
                    margin: -40px
                }

                .m--30-lg {
                    margin: -30px
                }

                .m--20-lg {
                    margin: -20px
                }

                .m--10-lg {
                    margin: -10px
                }

                .m-0-lg {
                    margin: 0px
                }

                .m-10-lg {
                    margin: 10px
                }

                .m-20-lg {
                    margin: 20px
                }

                .m-30-lg {
                    margin: 30px
                }

                .m-40-lg {
                    margin: 40px
                }

                .m-50-lg {
                    margin: 50px
                }

                .m-60-lg {
                    margin: 60px
                }

                .m-70-lg {
                    margin: 70px
                }

                .m-80-lg {
                    margin: 80px
                }

                .m-90-lg {
                    margin: 90px
                }

                .m-100-lg {
                    margin: 100px
                }

                .mt--100-lg {
                    margin-top: -100px
                }

                .mt--90-lg {
                    margin-top: -90px
                }

                .mt--80-lg {
                    margin-top: -80px
                }

                .mt--70-lg {
                    margin-top: -70px
                }

                .mt--60-lg {
                    margin-top: -60px
                }

                .mt--50-lg {
                    margin-top: -50px
                }

                .mt--40-lg {
                    margin-top: -40px
                }

                .mt--30-lg {
                    margin-top: -30px
                }

                .mt--20-lg {
                    margin-top: -20px
                }

                .mt--10-lg {
                    margin-top: -10px
                }

                .mt-0-lg {
                    margin-top: 0px
                }

                .mt-10-lg {
                    margin-top: 10px
                }

                .mt-20-lg {
                    margin-top: 20px
                }

                .mt-30-lg {
                    margin-top: 30px
                }

                .mt-40-lg {
                    margin-top: 40px
                }

                .mt-50-lg {
                    margin-top: 50px
                }

                .mt-60-lg {
                    margin-top: 60px
                }

                .mt-70-lg {
                    margin-top: 70px
                }

                .mt-80-lg {
                    margin-top: 80px
                }

                .mt-90-lg {
                    margin-top: 90px
                }

                .mt-100-lg {
                    margin-top: 100px
                }

                .mr--100-lg {
                    margin-right: -100px
                }

                .mr--90-lg {
                    margin-right: -90px
                }

                .mr--80-lg {
                    margin-right: -80px
                }

                .mr--70-lg {
                    margin-right: -70px
                }

                .mr--60-lg {
                    margin-right: -60px
                }

                .mr--50-lg {
                    margin-right: -50px
                }

                .mr--40-lg {
                    margin-right: -40px
                }

                .mr--30-lg {
                    margin-right: -30px
                }

                .mr--20-lg {
                    margin-right: -20px
                }

                .mr--10-lg {
                    margin-right: -10px
                }

                .mr-0-lg {
                    margin-right: 0px
                }

                .mr-10-lg {
                    margin-right: 10px
                }

                .mr-20-lg {
                    margin-right: 20px
                }

                .mr-30-lg {
                    margin-right: 30px
                }

                .mr-40-lg {
                    margin-right: 40px
                }

                .mr-50-lg {
                    margin-right: 50px
                }

                .mr-60-lg {
                    margin-right: 60px
                }

                .mr-70-lg {
                    margin-right: 70px
                }

                .mr-80-lg {
                    margin-right: 80px
                }

                .mr-90-lg {
                    margin-right: 90px
                }

                .mr-100-lg {
                    margin-right: 100px
                }

                .mb--100-lg {
                    margin-bottom: -100px
                }

                .mb--90-lg {
                    margin-bottom: -90px
                }

                .mb--80-lg {
                    margin-bottom: -80px
                }

                .mb--70-lg {
                    margin-bottom: -70px
                }

                .mb--60-lg {
                    margin-bottom: -60px
                }

                .mb--50-lg {
                    margin-bottom: -50px
                }

                .mb--40-lg {
                    margin-bottom: -40px
                }

                .mb--30-lg {
                    margin-bottom: -30px
                }

                .mb--20-lg {
                    margin-bottom: -20px
                }

                .mb--10-lg {
                    margin-bottom: -10px
                }

                .mb-0-lg {
                    margin-bottom: 0px
                }

                .mb-10-lg {
                    margin-bottom: 10px
                }

                .mb-20-lg {
                    margin-bottom: 20px
                }

                .mb-30-lg {
                    margin-bottom: 30px
                }

                .mb-40-lg {
                    margin-bottom: 40px
                }

                .mb-50-lg {
                    margin-bottom: 50px
                }

                .mb-60-lg {
                    margin-bottom: 60px
                }

                .mb-70-lg {
                    margin-bottom: 70px
                }

                .mb-80-lg {
                    margin-bottom: 80px
                }

                .mb-90-lg {
                    margin-bottom: 90px
                }

                .mb-100-lg {
                    margin-bottom: 100px
                }

                .ml--100-lg {
                    margin-left: -100px
                }

                .ml--90-lg {
                    margin-left: -90px
                }

                .ml--80-lg {
                    margin-left: -80px
                }

                .ml--70-lg {
                    margin-left: -70px
                }

                .ml--60-lg {
                    margin-left: -60px
                }

                .ml--50-lg {
                    margin-left: -50px
                }

                .ml--40-lg {
                    margin-left: -40px
                }

                .ml--30-lg {
                    margin-left: -30px
                }

                .ml--20-lg {
                    margin-left: -20px
                }

                .ml--10-lg {
                    margin-left: -10px
                }

                .ml-0-lg {
                    margin-left: 0px
                }

                .ml-10-lg {
                    margin-left: 10px
                }

                .ml-20-lg {
                    margin-left: 20px
                }

                .ml-30-lg {
                    margin-left: 30px
                }

                .ml-40-lg {
                    margin-left: 40px
                }

                .ml-50-lg {
                    margin-left: 50px
                }

                .ml-60-lg {
                    margin-left: 60px
                }

                .ml-70-lg {
                    margin-left: 70px
                }

                .ml-80-lg {
                    margin-left: 80px
                }

                .ml-90-lg {
                    margin-left: 90px
                }

                .ml-100-lg {
                    margin-left: 100px
                }

                .m-lg-10 {
                    margin: 10px
                }

                .m-lg-20 {
                    margin: 20px
                }

                .m-lg-30 {
                    margin: 30px
                }

                .m-lg-40 {
                    margin: 40px
                }

                .m-lg-50 {
                    margin: 50px
                }

                .m-lg-60 {
                    margin: 60px
                }

                .m-lg-70 {
                    margin: 70px
                }

                .m-lg-80 {
                    margin: 80px
                }

                .m-lg-90 {
                    margin: 90px
                }

                .m-lg-100 {
                    margin: 100px
                }

                .p--100-lg {
                    padding: -100px
                }

                .p--90-lg {
                    padding: -90px
                }

                .p--80-lg {
                    padding: -80px
                }

                .p--70-lg {
                    padding: -70px
                }

                .p--60-lg {
                    padding: -60px
                }

                .p--50-lg {
                    padding: -50px
                }

                .p--40-lg {
                    padding: -40px
                }

                .p--30-lg {
                    padding: -30px
                }

                .p--20-lg {
                    padding: -20px
                }

                .p--10-lg {
                    padding: -10px
                }

                .p-0-lg {
                    padding: 0px
                }

                .p-10-lg {
                    padding: 10px
                }

                .p-20-lg {
                    padding: 20px
                }

                .p-30-lg {
                    padding: 30px
                }

                .p-40-lg {
                    padding: 40px
                }

                .p-50-lg {
                    padding: 50px
                }

                .p-60-lg {
                    padding: 60px
                }

                .p-70-lg {
                    padding: 70px
                }

                .p-80-lg {
                    padding: 80px
                }

                .p-90-lg {
                    padding: 90px
                }

                .p-100-lg {
                    padding: 100px
                }

                .pt--100-lg {
                    padding-top: -100px
                }

                .pt--90-lg {
                    padding-top: -90px
                }

                .pt--80-lg {
                    padding-top: -80px
                }

                .pt--70-lg {
                    padding-top: -70px
                }

                .pt--60-lg {
                    padding-top: -60px
                }

                .pt--50-lg {
                    padding-top: -50px
                }

                .pt--40-lg {
                    padding-top: -40px
                }

                .pt--30-lg {
                    padding-top: -30px
                }

                .pt--20-lg {
                    padding-top: -20px
                }

                .pt--10-lg {
                    padding-top: -10px
                }

                .pt-0-lg {
                    padding-top: 0px
                }

                .pt-10-lg {
                    padding-top: 10px
                }

                .pt-20-lg {
                    padding-top: 20px
                }

                .pt-30-lg {
                    padding-top: 30px
                }

                .pt-40-lg {
                    padding-top: 40px
                }

                .pt-50-lg {
                    padding-top: 50px
                }

                .pt-60-lg {
                    padding-top: 60px
                }

                .pt-70-lg {
                    padding-top: 70px
                }

                .pt-80-lg {
                    padding-top: 80px
                }

                .pt-90-lg {
                    padding-top: 90px
                }

                .pt-100-lg {
                    padding-top: 100px
                }

                .pr--100-lg {
                    padding-right: -100px
                }

                .pr--90-lg {
                    padding-right: -90px
                }

                .pr--80-lg {
                    padding-right: -80px
                }

                .pr--70-lg {
                    padding-right: -70px
                }

                .pr--60-lg {
                    padding-right: -60px
                }

                .pr--50-lg {
                    padding-right: -50px
                }

                .pr--40-lg {
                    padding-right: -40px
                }

                .pr--30-lg {
                    padding-right: -30px
                }

                .pr--20-lg {
                    padding-right: -20px
                }

                .pr--10-lg {
                    padding-right: -10px
                }

                .pr-0-lg {
                    padding-right: 0px
                }

                .pr-10-lg {
                    padding-right: 10px
                }

                .pr-20-lg {
                    padding-right: 20px
                }

                .pr-30-lg {
                    padding-right: 30px
                }

                .pr-40-lg {
                    padding-right: 40px
                }

                .pr-50-lg {
                    padding-right: 50px
                }

                .pr-60-lg {
                    padding-right: 60px
                }

                .pr-70-lg {
                    padding-right: 70px
                }

                .pr-80-lg {
                    padding-right: 80px
                }

                .pr-90-lg {
                    padding-right: 90px
                }

                .pr-100-lg {
                    padding-right: 100px
                }

                .pb--100-lg {
                    padding-bottom: -100px
                }

                .pb--90-lg {
                    padding-bottom: -90px
                }

                .pb--80-lg {
                    padding-bottom: -80px
                }

                .pb--70-lg {
                    padding-bottom: -70px
                }

                .pb--60-lg {
                    padding-bottom: -60px
                }

                .pb--50-lg {
                    padding-bottom: -50px
                }

                .pb--40-lg {
                    padding-bottom: -40px
                }

                .pb--30-lg {
                    padding-bottom: -30px
                }

                .pb--20-lg {
                    padding-bottom: -20px
                }

                .pb--10-lg {
                    padding-bottom: -10px
                }

                .pb-0-lg {
                    padding-bottom: 0px
                }

                .pb-10-lg {
                    padding-bottom: 10px
                }

                .pb-20-lg {
                    padding-bottom: 20px
                }

                .pb-30-lg {
                    padding-bottom: 30px
                }

                .pb-40-lg {
                    padding-bottom: 40px
                }

                .pb-50-lg {
                    padding-bottom: 50px
                }

                .pb-60-lg {
                    padding-bottom: 60px
                }

                .pb-70-lg {
                    padding-bottom: 70px
                }

                .pb-80-lg {
                    padding-bottom: 80px
                }

                .pb-90-lg {
                    padding-bottom: 90px
                }

                .pb-100-lg {
                    padding-bottom: 100px
                }

                .pl--100-lg {
                    padding-left: -100px
                }

                .pl--90-lg {
                    padding-left: -90px
                }

                .pl--80-lg {
                    padding-left: -80px
                }

                .pl--70-lg {
                    padding-left: -70px
                }

                .pl--60-lg {
                    padding-left: -60px
                }

                .pl--50-lg {
                    padding-left: -50px
                }

                .pl--40-lg {
                    padding-left: -40px
                }

                .pl--30-lg {
                    padding-left: -30px
                }

                .pl--20-lg {
                    padding-left: -20px
                }

                .pl--10-lg {
                    padding-left: -10px
                }

                .pl-0-lg {
                    padding-left: 0px
                }

                .pl-10-lg {
                    padding-left: 10px
                }

                .pl-20-lg {
                    padding-left: 20px
                }

                .pl-30-lg {
                    padding-left: 30px
                }

                .pl-40-lg {
                    padding-left: 40px
                }

                .pl-50-lg {
                    padding-left: 50px
                }

                .pl-60-lg {
                    padding-left: 60px
                }

                .pl-70-lg {
                    padding-left: 70px
                }

                .pl-80-lg {
                    padding-left: 80px
                }

                .pl-90-lg {
                    padding-left: 90px
                }

                .pl-100-lg {
                    padding-left: 100px
                }

                .p-lg-10 {
                    padding: 10px
                }

                .p-lg-20 {
                    padding: 20px
                }

                .p-lg-30 {
                    padding: 30px
                }

                .p-lg-40 {
                    padding: 40px
                }

                .p-lg-50 {
                    padding: 50px
                }

                .p-lg-60 {
                    padding: 60px
                }

                .p-lg-70 {
                    padding: 70px
                }

                .p-lg-80 {
                    padding: 80px
                }

                .p-lg-90 {
                    padding: 90px
                }

                .p-lg-100 {
                    padding: 100px
                }

                .opacity-0-lg {
                    opacity: 0
                }

                .opacity-25-lg {
                    opacity: .25
                }

                .opacity-50-lg {
                    opacity: .50
                }

                .opacity-75-lg {
                    opacity: .75
                }

                .opacity-100-lg {
                    opacity: 1
                }

                .absolute-lg {
                    position: absolute
                }

                .relative-lg {
                    position: relative
                }

                .top-lg {
                    top: 0
                }

                .right-lg {
                    right: 0
                }

                .bottom-lg {
                    bottom: 0
                }

                .left-lg {
                    left: 0
                }
            }

            @media(min-width: 1968px) {
                .m--100-xl {
                    margin:-100px
                }

                .m--90-xl {
                    margin: -90px
                }

                .m--80-xl {
                    margin: -80px
                }

                .m--70-xl {
                    margin: -70px
                }

                .m--60-xl {
                    margin: -60px
                }

                .m--50-xl {
                    margin: -50px
                }

                .m--40-xl {
                    margin: -40px
                }

                .m--30-xl {
                    margin: -30px
                }

                .m--20-xl {
                    margin: -20px
                }

                .m--10-xl {
                    margin: -10px
                }

                .m-0-xl {
                    margin: 0px
                }

                .m-10-xl {
                    margin: 10px
                }

                .m-20-xl {
                    margin: 20px
                }

                .m-30-xl {
                    margin: 30px
                }

                .m-40-xl {
                    margin: 40px
                }

                .m-50-xl {
                    margin: 50px
                }

                .m-60-xl {
                    margin: 60px
                }

                .m-70-xl {
                    margin: 70px
                }

                .m-80-xl {
                    margin: 80px
                }

                .m-90-xl {
                    margin: 90px
                }

                .m-100-xl {
                    margin: 100px
                }

                .mt--100-xl {
                    margin-top: -100px
                }

                .mt--90-xl {
                    margin-top: -90px
                }

                .mt--80-xl {
                    margin-top: -80px
                }

                .mt--70-xl {
                    margin-top: -70px
                }

                .mt--60-xl {
                    margin-top: -60px
                }

                .mt--50-xl {
                    margin-top: -50px
                }

                .mt--40-xl {
                    margin-top: -40px
                }

                .mt--30-xl {
                    margin-top: -30px
                }

                .mt--20-xl {
                    margin-top: -20px
                }

                .mt--10-xl {
                    margin-top: -10px
                }

                .mt-0-xl {
                    margin-top: 0px
                }

                .mt-10-xl {
                    margin-top: 10px
                }

                .mt-20-xl {
                    margin-top: 20px
                }

                .mt-30-xl {
                    margin-top: 30px
                }

                .mt-40-xl {
                    margin-top: 40px
                }

                .mt-50-xl {
                    margin-top: 50px
                }

                .mt-60-xl {
                    margin-top: 60px
                }

                .mt-70-xl {
                    margin-top: 70px
                }

                .mt-80-xl {
                    margin-top: 80px
                }

                .mt-90-xl {
                    margin-top: 90px
                }

                .mt-100-xl {
                    margin-top: 100px
                }

                .mr--100-xl {
                    margin-right: -100px
                }

                .mr--90-xl {
                    margin-right: -90px
                }

                .mr--80-xl {
                    margin-right: -80px
                }

                .mr--70-xl {
                    margin-right: -70px
                }

                .mr--60-xl {
                    margin-right: -60px
                }

                .mr--50-xl {
                    margin-right: -50px
                }

                .mr--40-xl {
                    margin-right: -40px
                }

                .mr--30-xl {
                    margin-right: -30px
                }

                .mr--20-xl {
                    margin-right: -20px
                }

                .mr--10-xl {
                    margin-right: -10px
                }

                .mr-0-xl {
                    margin-right: 0px
                }

                .mr-10-xl {
                    margin-right: 10px
                }

                .mr-20-xl {
                    margin-right: 20px
                }

                .mr-30-xl {
                    margin-right: 30px
                }

                .mr-40-xl {
                    margin-right: 40px
                }

                .mr-50-xl {
                    margin-right: 50px
                }

                .mr-60-xl {
                    margin-right: 60px
                }

                .mr-70-xl {
                    margin-right: 70px
                }

                .mr-80-xl {
                    margin-right: 80px
                }

                .mr-90-xl {
                    margin-right: 90px
                }

                .mr-100-xl {
                    margin-right: 100px
                }

                .mb--100-xl {
                    margin-bottom: -100px
                }

                .mb--90-xl {
                    margin-bottom: -90px
                }

                .mb--80-xl {
                    margin-bottom: -80px
                }

                .mb--70-xl {
                    margin-bottom: -70px
                }

                .mb--60-xl {
                    margin-bottom: -60px
                }

                .mb--50-xl {
                    margin-bottom: -50px
                }

                .mb--40-xl {
                    margin-bottom: -40px
                }

                .mb--30-xl {
                    margin-bottom: -30px
                }

                .mb--20-xl {
                    margin-bottom: -20px
                }

                .mb--10-xl {
                    margin-bottom: -10px
                }

                .mb-0-xl {
                    margin-bottom: 0px
                }

                .mb-10-xl {
                    margin-bottom: 10px
                }

                .mb-20-xl {
                    margin-bottom: 20px
                }

                .mb-30-xl {
                    margin-bottom: 30px
                }

                .mb-40-xl {
                    margin-bottom: 40px
                }

                .mb-50-xl {
                    margin-bottom: 50px
                }

                .mb-60-xl {
                    margin-bottom: 60px
                }

                .mb-70-xl {
                    margin-bottom: 70px
                }

                .mb-80-xl {
                    margin-bottom: 80px
                }

                .mb-90-xl {
                    margin-bottom: 90px
                }

                .mb-100-xl {
                    margin-bottom: 100px
                }

                .ml--100-xl {
                    margin-left: -100px
                }

                .ml--90-xl {
                    margin-left: -90px
                }

                .ml--80-xl {
                    margin-left: -80px
                }

                .ml--70-xl {
                    margin-left: -70px
                }

                .ml--60-xl {
                    margin-left: -60px
                }

                .ml--50-xl {
                    margin-left: -50px
                }

                .ml--40-xl {
                    margin-left: -40px
                }

                .ml--30-xl {
                    margin-left: -30px
                }

                .ml--20-xl {
                    margin-left: -20px
                }

                .ml--10-xl {
                    margin-left: -10px
                }

                .ml-0-xl {
                    margin-left: 0px
                }

                .ml-10-xl {
                    margin-left: 10px
                }

                .ml-20-xl {
                    margin-left: 20px
                }

                .ml-30-xl {
                    margin-left: 30px
                }

                .ml-40-xl {
                    margin-left: 40px
                }

                .ml-50-xl {
                    margin-left: 50px
                }

                .ml-60-xl {
                    margin-left: 60px
                }

                .ml-70-xl {
                    margin-left: 70px
                }

                .ml-80-xl {
                    margin-left: 80px
                }

                .ml-90-xl {
                    margin-left: 90px
                }

                .ml-100-xl {
                    margin-left: 100px
                }

                .m-xl-10 {
                    margin: 10px
                }

                .m-xl-20 {
                    margin: 20px
                }

                .m-xl-30 {
                    margin: 30px
                }

                .m-xl-40 {
                    margin: 40px
                }

                .m-xl-50 {
                    margin: 50px
                }

                .m-xl-60 {
                    margin: 60px
                }

                .m-xl-70 {
                    margin: 70px
                }

                .m-xl-80 {
                    margin: 80px
                }

                .m-xl-90 {
                    margin: 90px
                }

                .m-xl-100 {
                    margin: 100px
                }

                .p--100-xl {
                    padding: -100px
                }

                .p--90-xl {
                    padding: -90px
                }

                .p--80-xl {
                    padding: -80px
                }

                .p--70-xl {
                    padding: -70px
                }

                .p--60-xl {
                    padding: -60px
                }

                .p--50-xl {
                    padding: -50px
                }

                .p--40-xl {
                    padding: -40px
                }

                .p--30-xl {
                    padding: -30px
                }

                .p--20-xl {
                    padding: -20px
                }

                .p--10-xl {
                    padding: -10px
                }

                .p-0-xl {
                    padding: 0px
                }

                .p-10-xl {
                    padding: 10px
                }

                .p-20-xl {
                    padding: 20px
                }

                .p-30-xl {
                    padding: 30px
                }

                .p-40-xl {
                    padding: 40px
                }

                .p-50-xl {
                    padding: 50px
                }

                .p-60-xl {
                    padding: 60px
                }

                .p-70-xl {
                    padding: 70px
                }

                .p-80-xl {
                    padding: 80px
                }

                .p-90-xl {
                    padding: 90px
                }

                .p-100-xl {
                    padding: 100px
                }

                .pt--100-xl {
                    padding-top: -100px
                }

                .pt--90-xl {
                    padding-top: -90px
                }

                .pt--80-xl {
                    padding-top: -80px
                }

                .pt--70-xl {
                    padding-top: -70px
                }

                .pt--60-xl {
                    padding-top: -60px
                }

                .pt--50-xl {
                    padding-top: -50px
                }

                .pt--40-xl {
                    padding-top: -40px
                }

                .pt--30-xl {
                    padding-top: -30px
                }

                .pt--20-xl {
                    padding-top: -20px
                }

                .pt--10-xl {
                    padding-top: -10px
                }

                .pt-0-xl {
                    padding-top: 0px
                }

                .pt-10-xl {
                    padding-top: 10px
                }

                .pt-20-xl {
                    padding-top: 20px
                }

                .pt-30-xl {
                    padding-top: 30px
                }

                .pt-40-xl {
                    padding-top: 40px
                }

                .pt-50-xl {
                    padding-top: 50px
                }

                .pt-60-xl {
                    padding-top: 60px
                }

                .pt-70-xl {
                    padding-top: 70px
                }

                .pt-80-xl {
                    padding-top: 80px
                }

                .pt-90-xl {
                    padding-top: 90px
                }

                .pt-100-xl {
                    padding-top: 100px
                }

                .pr--100-xl {
                    padding-right: -100px
                }

                .pr--90-xl {
                    padding-right: -90px
                }

                .pr--80-xl {
                    padding-right: -80px
                }

                .pr--70-xl {
                    padding-right: -70px
                }

                .pr--60-xl {
                    padding-right: -60px
                }

                .pr--50-xl {
                    padding-right: -50px
                }

                .pr--40-xl {
                    padding-right: -40px
                }

                .pr--30-xl {
                    padding-right: -30px
                }

                .pr--20-xl {
                    padding-right: -20px
                }

                .pr--10-xl {
                    padding-right: -10px
                }

                .pr-0-xl {
                    padding-right: 0px
                }

                .pr-10-xl {
                    padding-right: 10px
                }

                .pr-20-xl {
                    padding-right: 20px
                }

                .pr-30-xl {
                    padding-right: 30px
                }

                .pr-40-xl {
                    padding-right: 40px
                }

                .pr-50-xl {
                    padding-right: 50px
                }

                .pr-60-xl {
                    padding-right: 60px
                }

                .pr-70-xl {
                    padding-right: 70px
                }

                .pr-80-xl {
                    padding-right: 80px
                }

                .pr-90-xl {
                    padding-right: 90px
                }

                .pr-100-xl {
                    padding-right: 100px
                }

                .pb--100-xl {
                    padding-bottom: -100px
                }

                .pb--90-xl {
                    padding-bottom: -90px
                }

                .pb--80-xl {
                    padding-bottom: -80px
                }

                .pb--70-xl {
                    padding-bottom: -70px
                }

                .pb--60-xl {
                    padding-bottom: -60px
                }

                .pb--50-xl {
                    padding-bottom: -50px
                }

                .pb--40-xl {
                    padding-bottom: -40px
                }

                .pb--30-xl {
                    padding-bottom: -30px
                }

                .pb--20-xl {
                    padding-bottom: -20px
                }

                .pb--10-xl {
                    padding-bottom: -10px
                }

                .pb-0-xl {
                    padding-bottom: 0px
                }

                .pb-10-xl {
                    padding-bottom: 10px
                }

                .pb-20-xl {
                    padding-bottom: 20px
                }

                .pb-30-xl {
                    padding-bottom: 30px
                }

                .pb-40-xl {
                    padding-bottom: 40px
                }

                .pb-50-xl {
                    padding-bottom: 50px
                }

                .pb-60-xl {
                    padding-bottom: 60px
                }

                .pb-70-xl {
                    padding-bottom: 70px
                }

                .pb-80-xl {
                    padding-bottom: 80px
                }

                .pb-90-xl {
                    padding-bottom: 90px
                }

                .pb-100-xl {
                    padding-bottom: 100px
                }

                .pl--100-xl {
                    padding-left: -100px
                }

                .pl--90-xl {
                    padding-left: -90px
                }

                .pl--80-xl {
                    padding-left: -80px
                }

                .pl--70-xl {
                    padding-left: -70px
                }

                .pl--60-xl {
                    padding-left: -60px
                }

                .pl--50-xl {
                    padding-left: -50px
                }

                .pl--40-xl {
                    padding-left: -40px
                }

                .pl--30-xl {
                    padding-left: -30px
                }

                .pl--20-xl {
                    padding-left: -20px
                }

                .pl--10-xl {
                    padding-left: -10px
                }

                .pl-0-xl {
                    padding-left: 0px
                }

                .pl-10-xl {
                    padding-left: 10px
                }

                .pl-20-xl {
                    padding-left: 20px
                }

                .pl-30-xl {
                    padding-left: 30px
                }

                .pl-40-xl {
                    padding-left: 40px
                }

                .pl-50-xl {
                    padding-left: 50px
                }

                .pl-60-xl {
                    padding-left: 60px
                }

                .pl-70-xl {
                    padding-left: 70px
                }

                .pl-80-xl {
                    padding-left: 80px
                }

                .pl-90-xl {
                    padding-left: 90px
                }

                .pl-100-xl {
                    padding-left: 100px
                }

                .p-xl-10 {
                    padding: 10px
                }

                .p-xl-20 {
                    padding: 20px
                }

                .p-xl-30 {
                    padding: 30px
                }

                .p-xl-40 {
                    padding: 40px
                }

                .p-xl-50 {
                    padding: 50px
                }

                .p-xl-60 {
                    padding: 60px
                }

                .p-xl-70 {
                    padding: 70px
                }

                .p-xl-80 {
                    padding: 80px
                }

                .p-xl-90 {
                    padding: 90px
                }

                .p-xl-100 {
                    padding: 100px
                }

                .opacity-0-xl {
                    opacity: 0
                }

                .opacity-25-xl {
                    opacity: .25
                }

                .opacity-50-xl {
                    opacity: .50
                }

                .opacity-75-xl {
                    opacity: .75
                }

                .opacity-100-xl {
                    opacity: 1
                }

                .absolute-xl {
                    position: absolute
                }

                .relative-xl {
                    position: relative
                }

                .top-xl {
                    top: 0
                }

                .right-xl {
                    right: 0
                }

                .bottom-xl {
                    bottom: 0
                }

                .left-xl {
                    left: 0
                }
            }

            .mp-0 .row {
                margin: 0px
            }

            .mp-0 .row [class*=column] {
                padding: 0px
            }

            @font-face {
                src: url("https://www.ft.com/__origami/service/build/v2/files/o-fonts-assets@1.7.0/MetricWeb-Light.woff2");
                font-family: Metric;
                font-weight: 200;
                font-style: normal
            }

            @font-face {
                src: url("https://www.ft.com/__origami/service/build/v2/files/o-fonts-assets@1.7.0/MetricWeb-Regular.woff2");
                font-family: Metric;
                font-weight: 400;
                font-style: normal
            }

            @font-face {
                src: url("https://www.ft.com/__origami/service/build/v2/files/o-fonts-assets@1.7.0/MetricWeb-Medium.woff2");
                font-family: Metric;
                font-weight: 500;
                font-style: normal
            }

            @font-face {
                src: url("https://www.ft.com/__origami/service/build/v2/files/o-fonts-assets@1.7.0/MetricWeb-Semibold.woff2");
                font-family: Metric;
                font-weight: 600;
                font-style: normal
            }

            body {
                color: #333;
                font-family: Metric,sans-serif;
                font-size: 16px
            }

            .typography-eyebrow {
                color: #333;
                font-size: .875rem;
                font-weight: 600;
                font-family: Metric,sans-serif;
                margin: 20px 0 37px;
                text-transform: uppercase
            }

            .typography-eyebrow::after {
                background: #99103d;
                content: "";
                display: block;
                height: 4px;
                margin-top: 6px;
                width: 50px
            }

            .typography-eyebrow--white {
                color: #fff
            }

            .typography-eyebrow--white::after {
                background: #fff
            }

            .typography-eyebrow--black {
                color: #333
            }

            .typography-eyebrow--black::after {
                background: #333
            }

            .typography-eyebrow--large::after {
                margin-top: 5px
            }

            @media(min-width: 1023px) {
                .typography-eyebrow--large {
                    font-size:1.375rem
                }
            }

            .h1-heading {
                color: #333;
                font-size: 1.875rem;
                font-weight: 600;
                letter-spacing: -1px;
                line-height: 1.2em
            }

            @media(min-width: 768px)and (max-width: 1022px) {
                .h1-heading {
                    width:66.66%
                }
            }

            @media(min-width: 1023px) {
                .h1-heading {
                    font-size:3.75rem;
                    line-height: 4.0625rem
                }
            }

            .h1-heading--white {
                color: #fff
            }

            @media(max-width: 500px) {
                .h1-heading--white {
                    margin-bottom:32px
                }
            }

            .h1-heading--maroon {
                color: #99103d
            }

            .h1-heading--black {
                color: #333
            }

            .h1-heading--large {
                font-size: 2.5rem;
                font-weight: 600;
                line-height: 2.625rem
            }

            @media(min-width: 1023px) {
                .h1-heading--large {
                    font-size:3.75rem;
                    line-height: 4.063rem
                }
            }

            .h2-heading {
                color: #333;
                font-size: 1.875rem;
                line-height: 2.125rem;
                font-weight: 600
            }

            @media(min-width: 1023px) {
                .h2-heading {
                    font-size:3.125rem;
                    line-height: 3.375rem
                }
            }

            .h3-heading {
                color: #333;
                font-size: 1.625rem;
                font-weight: 600;
                line-height: 1.3
            }

            @media(min-width: 1023px) {
                .h3-heading {
                    font-size:2.375rem;
                    line-height: 2.625rem
                }
            }

            .h4-heading {
                color: #333;
                font-size: 1.5rem;
                font-weight: 600
            }

            @media(min-width: 1023px) {
                .h4-heading {
                    font-size:1.875rem;
                    line-height: 2.125rem
                }
            }

            p {
                font-size: 1.375rem;
                font-weight: 200;
                line-height: 1.2em;
                margin: 32px 0
            }

            @media(min-width: 1023px) {
                p {
                    font-size:1.75rem
                }
            }

            .body-p {
                font-size: 16px;
                margin: 16px 0
            }

            .body-p p {
                font-size: inherit;
                margin: 16px 0
            }

            .large-p {
                font-size: 1.375rem
            }

            .large-p p {
                font-size: inherit;
                margin: 16px 0
            }

            .large-p--h3-size {
                font-size: 1.625rem;
                font-weight: 600;
                line-height: 1.3
            }

            @media(min-width: 1023px) {
                .large-p--h3-size {
                    font-size:2.375rem;
                    line-height: 2.625rem
                }
            }

            .large-p--h3-size p {
                font-size: inherit;
                margin: 16px 0
            }

            .large-p--h3-size-sm {
                font-size: 1.25rem;
                font-weight: 600;
                line-height: 1.3
            }

            @media(min-width: 1023px) {
                .large-p--h3-size-sm {
                    font-size:1.875em;
                    line-height: 2.125rem
                }
            }

            .large-p--h3-size-sm p {
                font-size: inherit;
                margin: 16px 0
            }

            .link {
                color: #99103d;
                display: inline-block;
                font-size: .875rem;
                font-weight: 600;
                overflow: hidden;
                text-transform: uppercase
            }

            .link:hover {
                color: #5f0c27;
                overflow: hidden
            }

            .link--white {
                color: #fff
            }

            .link--white:hover {
                color: #fff
            }

            .link--white:hover.link--arrow-back::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%23FFFFFF%22%2F%3E%3C%2Fsvg%3E")
            }

            .link--white.link--arrow-back::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%23FFFFFF%22%2F%3E%3C%2Fsvg%3E")
            }

            .link--arrow {
                padding-right: 10px
            }

            .link--arrow::after {
                background-position-y: 1px;
                content: "";
                display: inline-block;
                height: 12px;
                margin-left: 8px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%2399103D%22%2F%3E%3C%2Fsvg%3E");
                width: 12px
            }

            .link--arrow:hover::after {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%235F0C27%22%2F%3E%3C%2Fsvg%3E");
                animation-duration: .55s;
                animation-name: animate-arrow-horizontal;
                animation-timing-function: ease-in-out;
                display: inline-block;
                overflow: hidden
            }

            @keyframes animate-arrow-horizontal {
                0% {
                    transform: translate(0px)
                }

                50% {
                    transform: translate(20px)
                }

                70% {
                    opacity: 0%
                }

                71% {
                    transform: translate(-20px)
                }

                100% {
                    transform: translate(0px);
                    opacity: 100%
                }
            }

            .link--arrow-back {
                white-space: nowrap
            }

            .link--arrow-back::before {
                content: "";
                display: inline-block;
                height: 12px;
                margin-right: 8px;
                transform: rotateZ(180deg);
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%2399103D%22%2F%3E%3C%2Fsvg%3E");
                width: 12px
            }

            .link--arrow-back:hover::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%235F0C27%22%2F%3E%3C%2Fsvg%3E");
                animation-duration: .55s;
                animation-name: animate-arrow-horizontal-back;
                animation-timing-function: ease-in-out;
                display: inline-block;
                overflow: hidden;
                transform: rotateZ(180deg)
            }

            @keyframes animate-arrow-horizontal-back {
                0% {
                    transform: rotateZ(180deg) translate(0px)
                }

                50% {
                    transform: rotateZ(180deg) translate(20px)
                }

                70% {
                    opacity: 0%
                }

                71% {
                    transform: rotateZ(180deg) translate(-20px)
                }

                100% {
                    transform: rotateZ(180deg) translate(0px);
                    opacity: 100%
                }
            }

            .link--arrow-back.link--arrow-back-white::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%23FFFFFF%22%2F%3E%3C%2Fsvg%3E")
            }

            .link--arrow-back.link--arrow-back-white:hover::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%23FFFFFF%22%2F%3E%3C%2Fsvg%3E")
            }

            .link--download {
                font-size: .7rem;
                height: .75rem;
                position: relative;
                white-space: nowrap
            }

            @media(min-width: 360px) {
                .link--download {
                    font-size:.875rem
                }
            }

            .link--download::before {
                border-bottom: 1px solid #99103d;
                bottom: 0px;
                content: "";
                height: 12px;
                position: absolute;
                right: 0;
                width: 10px
            }

            .link--download::after {
                content: "";
                display: inline-block;
                height: 8px;
                margin-left: 8px;
                margin-right: 1px;
                width: 8px;
                background-image: url("data:image/svg+xml,%3C%3Fxml version=%271.0%27 encoding=%27UTF-8%27%3F%3E%3Csvg width=%278px%27 height=%278px%27 viewBox=%270 0 8 8%27 version=%271.1%27 xmlns=%27http://www.w3.org/2000/svg%27 xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%3Ctitle%3EPath%3C/title%3E%3Cg id=%27Mobile%27 stroke=%27none%27 stroke-width=%271%27 fill=%27none%27 fill-rule=%27evenodd%27%3E%3Cg id=%27Product-Individual-Specs-Page_Mobile-v1%27 transform=%27translate%28-321.000000, -1151.000000%29%27 fill=%27%2399103D%27 fill-rule=%27nonzero%27%3E%3Cg id=%27Table%27 transform=%27translate%2829.000000, 1133.000000%29%27%3E%3Cg id=%27Download-CTA%27 transform=%27translate%28161.000000, 0.000000%29%27%3E%3Cg id=%27Group-3%27 transform=%27translate%2814.000000, 16.000000%29%27%3E%3Cg id=%27arrow_downward-24px%27 transform=%27translate%28115.000000, 0.000000%29%27%3E%3Cpolygon id=%27Path%27 points=%2710 6 9.295 5.295 6.5 8.085 6.5 2 5.5 2 5.5 8.085 2.71 5.29 2 6 6 10%27%3E%3C/polygon%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
            }

            .link--download:hover::before {
                border-bottom: 1px solid #5f0c27
            }

            .link--download:hover::after {
                background-image: url("data:image/svg+xml,%3C%3Fxml version=%271.0%27 encoding=%27UTF-8%27%3F%3E%3Csvg width=%278px%27 height=%278px%27 viewBox=%270 0 8 8%27 version=%271.1%27 xmlns=%27http://www.w3.org/2000/svg%27 xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%3Ctitle%3EPath%3C/title%3E%3Cg id=%27Mobile%27 stroke=%27none%27 stroke-width=%271%27 fill=%27none%27 fill-rule=%27evenodd%27%3E%3Cg id=%27Product-Individual-Specs-Page_Mobile-v1%27 transform=%27translate%28-321.000000, -1151.000000%29%27 fill=%27%235F0C27%27 fill-rule=%27nonzero%27%3E%3Cg id=%27Table%27 transform=%27translate%2829.000000, 1133.000000%29%27%3E%3Cg id=%27Download-CTA%27 transform=%27translate%28161.000000, 0.000000%29%27%3E%3Cg id=%27Group-3%27 transform=%27translate%2814.000000, 16.000000%29%27%3E%3Cg id=%27arrow_downward-24px%27 transform=%27translate%28115.000000, 0.000000%29%27%3E%3Cpolygon id=%27Path%27 points=%2710 6 9.295 5.295 6.5 8.085 6.5 2 5.5 2 5.5 8.085 2.71 5.29 2 6 6 10%27%3E%3C/polygon%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                animation-duration: .55s;
                animation-name: animate-arrow-vertical;
                animation-timing-function: ease-in-out
            }

            @keyframes animate-arrow-vertical {
                0% {
                    transform: translate(0px)
                }

                50% {
                    transform: translate(10px)
                }

                60% {
                    opacity: 0%
                }

                61% {
                    transform: translate(-10px)
                }

                100% {
                    transform: translate(0px);
                    opacity: 100%
                }
            }

            .italic {
                font-style: italic
            }

            .capability-card {
                padding: 0;
                display: flex;
                overflow-x: scroll
            }

            @media(min-width: 1023px) {
                .capability-card {
                    overflow:unset
                }
            }

            .capability-card-item {
                color: #fff;
                position: relative;
                width: 300px;
                height: 474px
            }

            @media(min-width: 1023px) {
                .capability-card-item {
                    height:550px;
                    width: 100%
                }
            }


            .audience-hp__section {
                display: flex;
                flex-direction: column;
                margin-top: 80px
            }

            @media(min-width: 1440px) {
                .audience-hp__section {
                    margin-top:120px
                }
            }

            .audience-hp__image {
                padding: 0
            }

            @media(min-width: 768px) {
                .audience-hp__image {
                    order:2
                }
            }

            .audience-hp__image .section-block__offset-image {
                height: 426px;
                margin-left: calc(-5vw - 32px);
                margin-right: auto;
                object-fit: cover
            }

            @media(min-width: 768px) {
                .audience-hp__image .section-block__offset-image {
                    height:100%;
                    margin-bottom: 0;
                    margin-left: initial;
                    width: 100%
                }
            }

            @media(min-width: 1023px) {
                .audience-hp__image .section-block__offset-image {
                    max-height:679px
                }
            }

            @media(min-width: 768px) {
                .audience-hp__stats {
                    order:1
                }
            }

            @media(min-width: 768px) {
                .audience-hp__stats .audience-page__stat-value {
                    font-size:3.75rem
                }
            }

            @media(min-width: 768px) {
                .audience-hp__stats .audience-page__stat-label {
                    font-weight:300
                }
            }

            .audience-hp__stats-section-title {
                font-weight: 600;
                font-size: 1.5rem;
                margin-bottom: 25px
            }

            @media(min-width: 768px) {
                .audience-hp__stats-section-title {
                    font-weight:500;
                    font-size: 1.875rem;
                    margin-bottom: 10px
                }
            }

            .hero__intro {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                padding-bottom: 50px;
                background: #fff1e5;
                margin-top: -101px
            }

            @media(min-width: 1023px) {
                .hero__intro {
                    padding-bottom:100px
                }
            }

            .hero__heading {
                font-size: 1.875rem;
                line-height: 2.125rem;
                font-weight: 600;
                letter-spacing: -1px
            }

            @media(min-width: 768px)and (max-width: 1022px) {
                .hero__heading {
                    width:66.66%
                }
            }

            @media(min-width: 1023px) {
                .hero__heading {
                    font-size:3.75rem;
                    line-height: 3.75rem;
                    letter-spacing: -2px
                }
            }

            .animation-blocks {
                position: relative;
                height: 350px;
                display: flex;
                width: 100%;
                justify-content: center
            }

            @media(min-width: 1023px) {
                .animation-blocks {
                    min-height:600px
                }
            }

            .animation-block-container {
                justify-content: space-between;
                width: 100%;
                max-width: 1440px;
                display: none;
                padding-top: 60px
            }

            @media(min-width: 1023px) {
                .animation-block-container {
                    position:absolute;
                    top: 4.4270833333vw;
                    height: 800px;
                    justify-content: unset;
                    align-items: unset;
                    margin: auto;
                    padding-top: 0
                }
            }

            @media(min-width: 1440px) {
                .animation-block-container {
                    top:85px
                }
            }

            .animation-block-container.show {
                display: flex
            }

            .animation-block-container>div {
                position: relative
            }

            @media(min-width: 1023px) {
                .animation-block-container>div {
                    width:33%
                }
            }

            .animation-block {
                position: absolute
            }

            .animation-block-one {
                top: 44px;
                left: 0
            }

            .animation-block-one .img {
                left: 106px
            }

            .animation-block-two {
                top: 0;
                right: -106px
            }

            .animation-block-three {
                right: 0
            }

            @media(min-width: 1023px) {
                .animation-block-three {
                    top:calc(106px*3)
                }
            }

            .animation-block-five {
                top: 106px;
                left: 106px
            }

            .animation-block-six {
                top: 106px;
                right: 106px
            }

            .animation-block-seven {
                top: 106px
            }

            .animation-block-eight {
                top: -106px
            }

            .animation-block-nine {
                right: 106px
            }

            @media(min-width: 1023px) {
                .animation-block-nine {
                    right:unset;
                    top: 106px
                }
            }

            .two,.five,.seven {
                display: none
            }

            @media(min-width: 768px) {
                .two,.five,.seven {
                    display:block
                }
            }

            .animation-image {
                visibility: hidden;
                object-fit: cover;
                position: absolute;
                width: 100%;
                height: 100%
            }

            .block-size-sm {
                width: 212px;
                height: 262px
            }

            .block-size-lg {
                width: 300px;
                height: 371px
            }

            .bottom-left-corner-x2-sm {
                bottom: 106px;
                left: calc(-106px - 44px)
            }

            .bottom-right-corner-lg {
                bottom: -106px;
                right: -106px
            }

            .bottom-right-sm {
                bottom: -44px;
                right: 0
            }

            .bottom-left-corner-sm {
                bottom: -44px;
                left: -44px
            }

            .bottom-left-corner-lg {
                bottom: -106px
            }

            .top-right-corner-sm {
                top: -44px;
                right: -44px
            }

            .top-right-corner-lg {
                top: -106px;
                right: -106px
            }

            .top-left-corner-lg {
                top: -106px;
                left: 0
            }

            .bottom-right-side-sm {
                bottom: 0;
                right: calc(106px*3)
            }

            .bottom-right-side-lg {
                left: calc(106px*3);
                bottom: 0
            }

            .bottom-left-side-lg {
                bottom: 0;
                left: -106px
            }

            .top-right-sm {
                right: 0;
                top: -44px
            }

            .top-right-lg {
                right: 0;
                top: -106px
            }

            .top-right-side-sm {
                right: -44px
            }

            .top-right-side-lg {
                right: -106px
            }

            .top-left-inner-sm {
                left: -1px;
                top: -1px
            }

            .bottom-left-inner-lg {
                left: -1px;
                bottom: -1px
            }

            .bottom-right-inner-lg {
                right: -1px;
                bottom: -1px
            }

            .square {
                visibility: hidden;
                position: absolute
            }

            .square.dark {
                background-color: #99103d
            }

            .square.light {
                background-color: #cc8293
            }

            .transparent {
                position: absolute;
                background-color: #fff1e5
            }

            .lg {
                height: 106px;
                width: 106px
            }

            .sm {
                height: 44px;
                width: 44px
            }

            .first-animation {
                animation: corner-animation 2.5s ease-in-out forwards;
                -moz-animation: corner-animation 2.5s ease-in-out forwards;
                -webkit-animation: corner-animation 2.5s ease-in-out forwards
            }

            .first-animation-reverse {
                animation: corner-animation-reverse 2.5s ease-in-out forwards;
                -moz-animation: corner-animation-reverse 2.5s ease-in-out forwards;
                -webkit-animation: corner-animation-reverse 2.5s ease-in-out forwards
            }

            .second-animation {
                animation: corner-animation 2.5s ease-in-out forwards .35s;
                -moz-animation: corner-animation 2.5s ease-in-out forwards .35s;
                -webkit-animation: corner-animation 2.5s ease-in-out forwards .35s
            }

            .second-animation-reverse {
                animation: corner-animation-reverse 2.5s ease-in-out forwards .35s;
                -moz-animation: corner-animation-reverse 2.5s ease-in-out forwards .35s;
                -webkit-animation: corner-animation-reverse 2.5s ease-in-out forwards .35s
            }

            .third-animation {
                animation: corner-animation 2.5s ease-in-out forwards .45s;
                -moz-animation: corner-animation 2.5s ease-in-out forwards .45s;
                -webkit-animation: corner-animation 2.5s ease-in-out forwards .45s
            }

            .third-animation-reverse {
                animation: corner-animation-reverse 2.5s ease-in-out forwards .45s;
                -moz-animation: corner-animation-reverse 2.5s ease-in-out forwards .45s;
                -webkit-animation: corner-animation-reverse 2.5s ease-in-out forwards .45s
            }

            @keyframes corner-animation {
                0% {
                    visibility: visible;
                    clip-path: inset(100% 0% 0% 100%)
                }

                10% {
                    clip-path: inset(0)
                }

                50% {
                    clip-path: inset(0)
                }

                90% {
                    clip-path: inset(0)
                }

                100% {
                    clip-path: inset(0% 100% 100% 0%)
                }
            }

            @keyframes corner-animation-reverse {
                0% {
                    visibility: visible;
                    clip-path: inset(0% 100% 100% 0%)
                }

                10% {
                    clip-path: inset(0)
                }

                50% {
                    clip-path: inset(0)
                }

                90% {
                    clip-path: inset(0)
                }

                100% {
                    clip-path: inset(100% 0% 0% 100%)
                }
            }

            @-webkit-keyframes corner-animation {
                0% {
                    visibility: visible;
                    clip-path: inset(100% 0% 0% 100%)
                }

                10% {
                    clip-path: inset(0)
                }

                50% {
                    clip-path: inset(0)
                }

                90% {
                    clip-path: inset(0)
                }

                100% {
                    clip-path: inset(0% 100% 100% 0%)
                }
            }

            @-webkit-keyframes corner-animation-reverse {
                0% {
                    visibility: visible;
                    clip-path: inset(0% 100% 100% 0%)
                }

                10% {
                    clip-path: inset(0)
                }

                50% {
                    clip-path: inset(0)
                }

                90% {
                    clip-path: inset(0)
                }

                100% {
                    clip-path: inset(100% 0% 0% 100%)
                }
            }

            @-moz-keyframes corner-animation {
                0% {
                    visibility: visible;
                    clip-path: inset(100% 0% 0% 100%)
                }

                10% {
                    clip-path: inset(0)
                }

                50% {
                    clip-path: inset(0)
                }

                90% {
                    clip-path: inset(0)
                }

                100% {
                    clip-path: inset(0% 100% 100% 0%)
                }
            }

            @-moz-keyframes corner-animation-reverse {
                0% {
                    visibility: visible;
                    clip-path: inset(0% 100% 100% 0%)
                }

                10% {
                    clip-path: inset(0)
                }

                50% {
                    clip-path: inset(0)
                }

                90% {
                    clip-path: inset(0)
                }

                100% {
                    clip-path: inset(100% 0% 0% 100%)
                }
            }

            .hero-video__container {
                margin: 0 0 -6px 0
            }

            @media(min-width: 1023px) {
                .hero-video__container {
                    width:100vw;
                    max-width: 2100px;
                    margin: -10px auto -6px auto;
                    height: 100%;
                    max-height: unset
                }
            }

            .hero-video__video {
                height: 100%;
                width: 100%;
                overflow: hidden;
                object-fit: cover
            }

            .our-capabilities__hp-section {
                padding-right: 0
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section {
                    padding-right:32px
                }
            }

            .our-capabilities__hp-section .capability-accordion {
                padding: 0;
                margin: 0 auto;
                display: flex;
                height: 550px;
                overflow-x: scroll;
                gap: 16px
            }

            @media(max-width: 500px) {
                .our-capabilities__hp-section .capability-accordion {
                    gap:8px
                }
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion {
                    overflow:unset
                }
            }

            .our-capabilities__hp-section .capability-accordion-item {
                color: #fff;
                position: relative;
                flex: 1 1 0;
                background-position: bottom;
                width: 315px
            }

            @media(max-width: 500px) {
                .our-capabilities__hp-section .capability-accordion-item {
                    width:300px
                }
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion-item {
                    width:100%
                }
            }

            .our-capabilities__hp-section .capability-accordion__text-overlay {
                position: absolute;
                bottom: 100px;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                transition: color .1s ease-in-out
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion__text-overlay {
                    bottom:55px
                }
            }

            .our-capabilities__hp-section .capability-accordion__text-overlay .capability-accordion__title {
                font-size: 1.5rem
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion__text-overlay .capability-accordion__title {
                    font-size:2.25rem
                }
            }

            .our-capabilities__hp-section .capability-accordion__img-container {
                overflow: hidden;
                height: 475px;
                background-color: #333
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion__img-container {
                    height:550px
                }
            }

            .our-capabilities__hp-section .capability-accordion__image {
                width: 315px;
                height: 100%;
                object-fit: cover;
                transform: scale(1.1);
                transition: filter .3s ease-in-out;
                opacity: .7
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion__image {
                    width:100%
                }
            }

            .our-capabilities__hp-section .capability-accordion__copy-container {
                background: #fff;
                color: #333;
                z-index: 99999;
                padding: 30px;
                position: absolute;
                opacity: 0;
                width: 80%;
                height: 70%;
                top: 10%;
                left: 10%;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                transition: opacity .1s ease-in-out,filter .1s ease-in-out
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion__copy-container {
                    top:250px;
                    left: 40px;
                    width: 85%;
                    height: unset;
                    min-height: 270px
                }
            }

            .our-capabilities__hp-section .capability-accordion__copy-container p {
                line-height: 1.5rem;
                font-size: 1.25rem;
                margin: 0
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion__copy-container p {
                    font-size:1.375rem;
                    line-height: 1.75rem
                }
            }

            .our-capabilities__hp-section .capability-accordion__copy-container.show {
                opacity: 1
            }

            .our-capabilities__hp-section .capability-accordion__copy-container.hide {
                opacity: 0
            }

            .our-capabilities__hp-section .capability-accordion__title {
                font-size: 2.25rem;
                font-weight: 600;
                line-height: 1.4em;
                text-transform: uppercase;
                text-align: center;
                display: flex
            }

            .our-capabilities__hp-section .capability-accordion__title--large {
                font-size: 2.5rem
            }

            .our-capabilities__hp-section .capability-accordion__number {
                font-size: 14px;
                font-weight: 600;
                margin: 0 0 10px 0
            }

            @media(min-width: 1023px) {
                .our-capabilities__hp-section .capability-accordion__number {
                    font-size:1.375rem
                }
            }

            .our-capabilities__hp-section .capability-accordion:hover .capability-accordion-item:hover .capability-accordion-item-expand {
                max-width: 655px;
                width: 66vw
            }

            .our-capabilities__hp-section .capability-accordion:hover .capability-accordion-item:hover .capability-accordion__copy-container {
                opacity: 1;
                transition: opacity .1s ease-in-out
            }

            .our-capabilities__hp-section .capability-accordion:hover .capability-accordion__text-overlay {
                color: rgba(0,0,0,0);
                transition: color .1s ease-in-out
            }

            .our-capabilities__hp-section .capability-accordion:hover .blur {
                filter: blur(12px);
                transition: filter .1s ease-in-out
            }

            .our-capabilities__hp-section .capability-accordion:hover .blur:hover {
                filter: blur(0);
                transition: filter .1s ease-in-out
            }

            .our-capabilities__hp-section .capability-accordion-item-expand,.our-capabilities__hp-section .capability-accordion:hover .capability-accordion-item-expand {
                width: 0;
                overflow: hidden
            }

            .our-capabilities__hp-section .capability-accordion__copy-container:hover+.capability-accordion__img-container .blur {
                filter: blur(0);
                transition: filter .1s ease-in-out
            }

            .agenda-hp__section {
                background-color: #99103d;
                width: 100%;
                color: #fff;
                margin-bottom: 45px;
                display: flex;
                padding: 30px 0 50px 0
            }

            @media(min-width: 1023px) {
                .agenda-hp__section {
                    padding:66px 0;
                    margin-bottom: 66px
                }
            }

            .agenda-hp__description {
                max-width: 315px;
                margin-bottom: 50px
            }

            @media(min-width: 1023px) {
                .agenda-hp__description {
                    max-width:unset
                }
            }

            .stats-slideshow__item {
                display: none
            }

            .stats-slideshow__item.active {
                display: block
            }

            .stats-slideshow__container {
                max-width: 200px;
                margin: 85px 0 15px 0
            }

            @media(min-width: 1023px) {
                .stats-slideshow__container {
                    margin:20px 0 0 100px
                }
            }

            .stats-slideshow__stat {
                font-size: 100px;
                font-weight: 600;
                margin: -15px 0
            }

            .stats-slideshow__description {
                margin: 0;
                font-size: 1rem;
                font-weight: 300;
                height: 80px
            }

            .stats-slideshow__progress-indicator {
                display: flex;
                flex-direction: row
            }

            .stats-slideshow__progress-indicator .stats-progress-line {
                width: 20px;
                border-top: 2px solid hsla(0,0%,100%,.1254901961);
                margin-right: 15px;
                position: relative;
                transition: border-color .6s ease;
                cursor: pointer
            }

            .stats-slideshow__progress-indicator .stats-progress-line::before {
                content: "";
                position: absolute;
                inset: -20px -9px -20px -7px;
                background-color: rgba(0,0,0,0);
                width: 32px
            }

            .stats-slideshow__progress-indicator .stats-progress-line:hover::before {
                cursor: pointer
            }

            .stats-slideshow__progress-indicator .active {
                border-color: #fff
            }

            .audio-and-podcast__container {
                position: relative
            }

            @media(min-width: 768px) {
                .audio-and-podcast__container {
                    margin:150px auto 80px auto
                }
            }

            .audio-and-podcast__cta {
                position: absolute;
                bottom: -375px
            }

            @media(min-width: 768px) {
                .audio-and-podcast__cta {
                    position:unset
                }
            }

            .audio-and-podcast__stat-container {
                margin-top: 25px
            }

            @media(min-width: 1023px) {
                .audio-and-podcast__stat-container {
                    margin-top:0
                }
            }

            .audio-and-podcast__stat-value {
                font-size: 3.125rem;
                font-weight: 600;
                color: #99103d
            }

            @media(min-width: 1023px) {
                .audio-and-podcast__stat-value {
                    font-size:72px
                }
            }

            .audio-and-podcast__stat-label {
                font-size: 1rem;
                line-height: 1.375rem;
                margin: 10px 0 40px 0;
                max-width: 115px
            }

            @media(min-width: 1023px) {
                .audio-and-podcast__stat-label {
                    margin:0 0 40px 0
                }
            }

            .company-logo__logo {
                display: flex;
                justify-content: center;
                height: 100px;
                margin: 15px 0;
                align-items: center
            }

            .company-logo__logo:nth-child(odd) {
                border-right: 1px solid #f2f2f2
            }

            @media(min-width: 1023px) {
                .company-logo__logo:nth-child(even) {
                    border-right:1px solid #f2f2f2
                }

                .company-logo__logo:nth-child(5n+0) {
                    border-right: none
                }

                .company-logo__logo.custom-layout-5 {
                    max-width: 20%;
                    flex: 0 0 20%
                }
            }

            .company-logo__logo img {
                width: 100%;
                max-width: 140px
            }

            .company-logo__grid {
                margin-bottom: 75px
            }

            .link-button {
                background: #99103d;
                border-radius: 28px;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-size: .75rem;
                font-weight: 400;
                line-height: 1em;
                padding: 18px 31px 14px;
                text-align: center;
                text-transform: uppercase;
                transition: background .5s,color .5s;
                user-select: none
            }

            .link-button:hover {
                background: #5f0c27;
                color: #fff
            }

            .link-button--outline {
                background: rgba(0,0,0,0);
                border: solid 1px #99103d;
                color: #99103d;
                font-weight: 600
            }

            .link-button--outline:hover {
                border-color: #5f0c27
            }

            .link-button--outline-white {
                border-color: #fff;
                color: #fff
            }

            .link-button-contact {
                height: 45px
            }

            .link-button--event {
                background: #1470cc;
                color: #fff
            }

            .link-button--event:hover {
                background: #133b77;
                color: #fff
            }

            .button {
                background: #99103d;
                border: none;
                border-radius: 28px;
                color: #fff;
                cursor: pointer;
                font-family: Metric,sans-serif;
                font-size: .75rem;
                font-weight: 500;
                padding: 18px 31px 14px;
                text-transform: uppercase;
                user-select: none;
                transition: background .5s,border-color .5s,color .5s
            }

            .button:hover {
                background: #5f0c27 !important;
                color: #fff
            }

            .button--slim {
                /* border-radius:16px; */
                padding: 8px 16px 5px;
            }

            .button--outline {
                background: rgba(0,0,0,0);
                border: solid 1px #99103d;
                color: #99103d
            }

            .button--outline:hover {
                border-color: #5f0c27
            }

            .button--white {
                background-color: #fff;
                color: #99103d
            }

            .button--event {
                background: #1470cc;
                color: #fff
            }

            .button--event:hover {
                background: #133b77 !important;
                color: #fff
            }

            .button--media-kit {
                margin-top: 37px
            }

            .button--short {
                padding-left: 20px;
                padding-right: 20px
            }

            .button--medium {
                padding-left: 38px;
                padding-right: 38px
            }

            .button--download {
                align-items: center;
                display: inline-flex;
                justify-content: center;
                padding: 13px 32px
            }

            .button--download::after {
                background-image: none;
                width: 0
            }

            .button--download:hover::after {
                background-image: none;
                width: 0
            }

            .button--download:hover .button__download-arrow-container {
                border-bottom: 1px solid #fff
            }

            .button--download:hover .button__download-arrow-container::after {
                background-image: url("data:image/svg+xml,%3C%3Fxml version=%271.0%27 encoding=%27UTF-8%27%3F%3E%3Csvg width=%278px%27 height=%278px%27 viewBox=%270 0 8 8%27 version=%271.1%27 xmlns=%27http://www.w3.org/2000/svg%27 xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%3Ctitle%3EPath%3C/title%3E%3Cg id=%27Mobile%27 stroke=%27none%27 stroke-width=%271%27 fill=%27none%27 fill-rule=%27evenodd%27%3E%3Cg id=%27Product-Individual-Specs-Page_Mobile-v1%27 transform=%27translate%28-321.000000, -1151.000000%29%27 fill=%27%23FFFFFF%27 fill-rule=%27nonzero%27%3E%3Cg id=%27Table%27 transform=%27translate%2829.000000, 1133.000000%29%27%3E%3Cg id=%27Download-CTA%27 transform=%27translate%28161.000000, 0.000000%29%27%3E%3Cg id=%27Group-3%27 transform=%27translate%2814.000000, 16.000000%29%27%3E%3Cg id=%27arrow_downward-24px%27 transform=%27translate%28115.000000, 0.000000%29%27%3E%3Cpolygon id=%27Path%27 points=%2710 6 9.295 5.295 6.5 8.085 6.5 2 5.5 2 5.5 8.085 2.71 5.29 2 6 6 10%27%3E%3C/polygon%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                animation-duration: .55s;
                animation-name: animate-arrow-vertical;
                animation-timing-function: ease-in-out;
                display: inline-block;
                overflow: hidden
            }

            @keyframes animate-arrow-vertical {
                0% {
                    transform: translateY(0px)
                }

                50% {
                    transform: translateY(10px)
                }

                60% {
                    opacity: 0%
                }

                61% {
                    transform: translateY(-10px)
                }

                100% {
                    transform: translateY(0px);
                    opacity: 100%
                }
            }

            .button__download-text {
                height: .5rem;
                margin-right: 5px
            }

            .button__download-arrow-container {
                align-items: center;
                border-bottom: 1px solid #99103d;
                display: inline-flex;
                height: 12px;
                justify-content: center;
                overflow: hidden;
                width: 10px
            }

            .button__download-arrow-container::after {
                background-image: url("data:image/svg+xml,%3C%3Fxml version=%271.0%27 encoding=%27UTF-8%27%3F%3E%3Csvg width=%278px%27 height=%278px%27 viewBox=%270 0 8 8%27 version=%271.1%27 xmlns=%27http://www.w3.org/2000/svg%27 xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%3Ctitle%3EPath%3C/title%3E%3Cg id=%27Mobile%27 stroke=%27none%27 stroke-width=%271%27 fill=%27none%27 fill-rule=%27evenodd%27%3E%3Cg id=%27Product-Individual-Specs-Page_Mobile-v1%27 transform=%27translate%28-321.000000, -1151.000000%29%27 fill=%27%2399103D%27 fill-rule=%27nonzero%27%3E%3Cg id=%27Table%27 transform=%27translate%2829.000000, 1133.000000%29%27%3E%3Cg id=%27Download-CTA%27 transform=%27translate%28161.000000, 0.000000%29%27%3E%3Cg id=%27Group-3%27 transform=%27translate%2814.000000, 16.000000%29%27%3E%3Cg id=%27arrow_downward-24px%27 transform=%27translate%28115.000000, 0.000000%29%27%3E%3Cpolygon id=%27Path%27 points=%2710 6 9.295 5.295 6.5 8.085 6.5 2 5.5 2 5.5 8.085 2.71 5.29 2 6 6 10%27%3E%3C/polygon%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                content: "";
                display: inline-block;
                height: 8px;
                margin-top: 1px;
                width: 8px
            }

            .rates-currency-selector__buttons {
                margin-left: calc(-1*calc(32px / 2));
                width: calc(100% + 32px)
            }

            .rates-currency-selector__buttons .button {
                color: #333;
                display: inline;
                margin: 0 0 calc(32px/2) calc(32px/2)
            }

            .rates-currency-selector__buttons .button:hover {
                background: #5f0c27;
                color: #fff
            }

            .rates-currency-selector__buttons .button--active-rate {
                background: #99103d;
                color: #fff
            }

            .rates-currency-selector__download-links {
                display: none
            }

            .rates-currency-selector__download-links--visible {
                display: flex
            }

            .git-cta {
                background: #fff1e5;
                margin-top: 112px;
                padding: 73px 32px 89px
            }

            .git-cta__title {
                font-size: 2.5rem;
                font-weight: 600;
                line-height: 3.375rem
            }

            @media(min-width: 1023px) {
                .git-cta__title {
                    font-size:3.125rem
                }
            }

            .git-cta p {
                font-size: 1.375rem;
                line-height: 1.75rem;
                margin: 32px 0 calc(32px*2)
            }

            @media(max-width: 768px) {
                .offering-accordion__top {
                    border-bottom:solid 1px rgba(0,0,0,.2);
                    overflow: hidden;
                    padding: 0 0 31px;
                    position: relative
                }

                .offering-accordion__expand-all {
                    background: rgba(0,0,0,0);
                    color: #99103d;
                    cursor: pointer;
                    display: inline-flex;
                    float: right
                }

                .offering-accordion__expand-all::after {
                    content: "";
                    display: inline-block;
                    height: 15px;
                    margin-left: 10px;
                    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20284.929%20284.929%22%20fill%3D%22%2399103D%22%3E%3Cpath%20d%3D%22M282.082%20195.285L149.028%2062.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567%202.856L2.856%20195.285C.95%20197.191%200%20199.378%200%20201.853c0%202.474.953%204.664%202.856%206.566l14.272%2014.271c1.903%201.903%204.093%202.854%206.567%202.854s4.664-.951%206.567-2.854l112.204-112.202%20112.208%20112.209c1.902%201.903%204.093%202.848%206.563%202.848%202.478%200%204.668-.951%206.57-2.848l14.274-14.277c1.902-1.902%202.847-4.093%202.847-6.566.001-2.476-.944-4.666-2.846-6.569z%22%2F%3E%3C%2Fsvg%3E");
                    transform: rotateX(180deg);
                    width: 15px
                }

                .offering-accordion__panel {
                    border-bottom: solid 1px rgba(0,0,0,.2);
                    position: relative
                }

                .offering-accordion__panel-title {
                    cursor: pointer;
                    font-size: 1.5rem;
                    font-weight: 600;
                    margin: 32px 0;
                    padding-right: 30px
                }

                .offering-accordion__panel-title::after {
                    content: "";
                    display: block;
                    height: 15px;
                    position: absolute;
                    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20284.929%20284.929%22%20fill%3D%22%2399103D%22%3E%3Cpath%20d%3D%22M282.082%20195.285L149.028%2062.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567%202.856L2.856%20195.285C.95%20197.191%200%20199.378%200%20201.853c0%202.474.953%204.664%202.856%206.566l14.272%2014.271c1.903%201.903%204.093%202.854%206.567%202.854s4.664-.951%206.567-2.854l112.204-112.202%20112.208%20112.209c1.902%201.903%204.093%202.848%206.563%202.848%202.478%200%204.668-.951%206.57-2.848l14.274-14.277c1.902-1.902%202.847-4.093%202.847-6.566.001-2.476-.944-4.666-2.846-6.569z%22%2F%3E%3C%2Fsvg%3E");
                    right: 0;
                    top: 0;
                    transform: rotateX(180deg);
                    width: 15px
                }

                .offering-accordion__panel-content {
                    height: 0;
                    opacity: 0;
                    overflow: hidden;
                    transition: opacity .2s linear
                }

                .offering-accordion__panel-content p {
                    font-size: 16px;
                    margin-top: 0;
                    width: 80%
                }

                .offering-accordion__panel--open .offering-accordion__panel-title::after {
                    transform: rotateX(0)
                }

                .offering-accordion__panel--open .offering-accordion__panel-content {
                    height: auto;
                    opacity: 1
                }

                .offering-accordion--all-open .offering-accordion__expand-all::after {
                    transform: rotateX(0)
                }
            }

            @media(min-width: 769px) {
                .offering-accordion {
                    display:flex;
                    flex-wrap: wrap;
                    margin-left: calc(-1*calc(32px / 2));
                    margin-top: 90px;
                    width: calc(100% + 32px)
                }

                .offering-accordion__expand-all {
                    display: none
                }

                .offering-accordion__panel {
                    border-top: solid 1px rgba(0,0,0,.2);
                    flex: 1 0 29%;
                    margin: 0 calc(32px/2);
                    max-width: calc(33% - 32px);
                    padding-bottom: 80px;
                    padding-top: 42px
                }

                .offering-accordion__panel-title {
                    font-size: 1.5rem;
                    font-weight: 600
                }

                .offering-accordion__panel-content p {
                    font-size: 16px;
                    line-height: 1.25rem
                }
            }

            .carousel__container {
                position: relative;
                display: flex;
                justify-content: center
            }

            @media(min-width: 1023px) {
                .carousel__container {
                    padding:66px 0
                }
            }

            .carousel__container.news-carousel {
                padding: 32px 0
            }

            .carousel__container.news-carousel::before {
                background: none
            }

            @media(min-width: 1023px) {
                .carousel__container.news-carousel::before {
                    background:linear-gradient(90deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.3) 3%, transparent 6%, transparent 94%, rgba(255, 255, 255, 0.3) 97%, rgba(255, 255, 255, 0.8) 100%)
                }
            }

            .carousel__container.podcast-carousel {
                padding: 110px 0 32px 0
            }

            .carousel__container.podcast-carousel::before {
                background: linear-gradient(90deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.3) 3%, transparent 6%, transparent 94%, rgba(255, 255, 255, 0.3) 97%, rgba(255, 255, 255, 0.8) 100%);
                width: 100%;
                z-index: 999;
                content: "";
                position: absolute;
                z-index: 1;
                top: 0;
                right: 0;
                bottom: 15px;
                pointer-events: none
            }

            .carousel__slider {
                display: inline-flex;
                overflow-x: scroll;
                overflow-y: hidden;
                position: relative;
                -ms-overflow-style: none;
                scrollbar-width: none
            }

            @media(min-width: 1023px) {
                .carousel__slider::after {
                    content:"";
                    flex: 0 0 1px;
                    -webkit-flex: 0 0 1px
                }
            }

            .carousel__slider::-webkit-scrollbar {
                display: none
            }

            @media(min-width: 1920px) {
                .carousel__slider {
                    overflow-x:hidden
                }
            }

            .carousel__title {
                color: #fff;
                position: absolute;
                bottom: 10px;
                text-align: center;
                text-transform: uppercase;
                font-weight: 600;
                font-size: 1rem;
                z-index: 1;
                width: 100%
            }

            .podcast-carousel .carousel__item {
                width: 300px;
                height: 100%;
                position: relative;
                margin: 0 calc(var(--standardGap)/2)
            }

            @media(min-width: 1920px) {
                .podcast-carousel .carousel__item {
                    margin:0 var(--standardGap)
                }
            }

            .podcast-carousel .carousel__item:after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                background: linear-gradient(180deg, rgba(0, 0, 0, 0), black)
            }

            @media(min-width: 1023px) {
                .news-carousel .carousel__item:first-child {
                    margin-left:calc(var(--offsetSpacing) + var(--centeredGap))
                }
            }

            @media(min-width: 1023px) {
                .news-carousel .carousel__item:last-child {
                    margin-right:calc(var(--offsetSpacing) + var(--centeredGap))
                }
            }

            .news-carousel .carousel__item img {
                height: 100%;
                max-width: 100%;
                width: 100%;
                object-fit: cover
            }

            .carousel__control-wrapper {
                display: flex;
                align-items: center
            }

            .carousel__control-wrapper button {
                background-position: center;
                background-repeat: no-repeat;
                background-size: 20px;
                cursor: pointer;
                padding: 20px
            }

            .carousel__control-container {
                align-items: center;
                display: flex;
                justify-content: space-evenly
            }

            .carousel__control-container.news-carousel {
                padding-bottom: 25px
            }

            .carousel__control__left {
                margin-right: 50px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%2399103D%22%2F%3E%3C%2Fsvg%3E");
                transform: rotate(180deg)
            }

            .carousel__control__right {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%2399103D%22%2F%3E%3C%2Fsvg%3E")
            }

            .case-studies-carousel {
                margin: 70px 0
            }

            @media(min-width: 1023px) {
                .case-studies-carousel {
                    margin:auto
                }
            }

            .case-studies-carousel__wrapper {
                display: flex;
                margin-bottom: 56px;
                margin-left: calc(-1*32px);
                overflow-x: auto;
                position: relative;
                scroll-snap-type: x mandatory;
                width: 100vw
            }

            @media(min-width: 768px) {
                .case-studies-carousel__wrapper {
                    flex-wrap:wrap;
                    margin: calc(-1*32px/4);
                    overflow: hidden;
                    padding: 0;
                    width: calc(100% + calc(32px / 2))
                }
            }

            .case-studies-carousel__example {
                min-width: calc(100vw - 32px*1.5);
                padding: 0 0 0 calc(32px/2);
                scroll-snap-align: start
            }

            @media(min-width: 768px) {
                .case-studies-carousel__example {
                    display:flex;
                    flex-direction: column;
                    margin-bottom: 64px;
                    max-width: 33.3%;
                    min-width: auto;
                    padding: 0 10px;
                    width: 33.33%
                }
            }

            .case-studies-carousel__example:last-child {
                min-width: 100vw;
                padding-right: calc(32px*1.5)
            }

            @media(min-width: 768px) {
                .case-studies-carousel__example:last-child {
                    max-width:33.3%;
                    min-width: auto;
                    padding: 0 10px;
                    width: 33.33%
                }
            }

            .case-studies-carousel__example-image {
                align-items: center;
                align-self: baseline;
                display: flex;
                margin-left: 16px;
                max-height: 73px;
                max-width: 50%
            }

            @media(min-width: 768px) {
                .case-studies-carousel__example-image {
                    margin-left:0
                }
            }

            .case-studies-carousel__example-title {
                font-size: 1.25rem;
                font-weight: 600;
                margin-left: 16px;
                margin-top: 32px
            }

            @media(min-width: 768px) {
                .case-studies-carousel__example-title {
                    margin-left:0
                }
            }

            .case-studies-carousel__example-text {
                font-size: 16px;
                margin-left: 16px
            }

            @media(min-width: 768px) {
                .case-studies-carousel__example-text {
                    flex-grow:1;
                    margin-left: 0
                }
            }

            .case-studies-carousel__example-link {
                color: #99103d;
                font-weight: 600;
                margin-left: 16px;
                text-transform: uppercase
            }

            .case-studies-carousel__example-link::after {
                content: "";
                display: inline-block;
                height: 12px;
                margin-left: 15px;
                width: 12px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%2399103D%22%2F%3E%3C%2Fsvg%3E")
            }

            @media(min-width: 768px) {
                .case-studies-carousel__example-link {
                    margin-left:0
                }
            }

            .case-studies-carousel__controls {
                margin: 32px;
                text-align: center
            }

            @media(min-width: 768px) {
                .case-studies-carousel__controls {
                    display:none
                }
            }

            .case-studies-carousel__dot {
                background: #d8d8d8;
                border-radius: 50%;
                display: inline-block;
                height: 10px;
                margin: 0 5px;
                width: 10px
            }

            .case-studies-carousel__dot--active {
                background: #99103d
            }

            .case-studies-carousel__wrapper--more {
                margin-bottom: 0
            }

            .case-studies-carousel__example--more .case-studies-carousel__example-wrapper {
                border: solid 1px #d8d8d8;
                display: flex;
                flex-direction: column;
                height: 100%;
                margin-left: 16px;
                padding: 32px 32px 32px 16px;
                width: 100%
            }

            @media(min-width: 768px) {
                .case-studies-carousel__example--more .case-studies-carousel__example-wrapper {
                    margin-left:0;
                    padding: 32px
                }
            }

            .case-studies-carousel__example--more .case-studies-carousel__example-image {
                max-width: 100px
            }

            .case-studies-carousel__example--more .case-studies-carousel__example-text {
                flex-grow: 1;
                margin-top: 10px
            }

            .case-studies-carousel__example--more .case-studies-carousel__example-arrow {
                color: #99103d;
                font-weight: 600;
                margin-left: 16px;
                text-transform: uppercase
            }

            .case-studies-carousel__example--more .case-studies-carousel__example-arrow::after {
                content: "";
                display: inline-block;
                height: 12px;
                margin-left: 15px;
                width: 12px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%2399103D%22%2F%3E%3C%2Fsvg%3E")
            }

            @media(min-width: 768px) {
                .case-studies-carousel__example--more .case-studies-carousel__example-arrow {
                    margin-left:0
                }
            }

            .case-studies-other-services {
                background: #fff1e5;
                padding: 60px 0 90px
            }

            .case-studies-other-services__block {
                background: #fff;
                margin-bottom: 40px;
                overflow: hidden;
                padding-bottom: 40px
            }

            @media(min-width: 768px) {
                .case-studies-other-services__block {
                    display:flex;
                    flex-direction: column;
                    height: 100%;
                    margin-bottom: 0
                }
            }

            @media all and (-ms-high-contrast: none),(-ms-high-contrast: active) {
                .case-studies-other-services__block {
                    display: block
                }
            }

            .case-studies-other-services__block-image {
                margin-bottom: 38px;
                width: 100%
            }

            .case-studies-other-services__block-title {
                font-size: 1.5rem;
                font-weight: 600;
                padding: 0 18px
            }

            @media(min-width: 1023px) {
                .case-studies-other-services__block-title {
                    padding:0 50px
                }
            }

            .case-studies-other-services__block-text {
                padding: 0 18px
            }

            @media(min-width: 1023px) {
                .case-studies-other-services__block-text {
                    flex-grow:1;
                    margin-bottom: 20px;
                    padding: 0 50px
                }
            }

            .case-studies-other-services__block-text p {
                font-size: 16px
            }

            .case-studies-other-services__block-link {
                color: #99103d;
                font-weight: 600;
                padding: 0 18px;
                text-transform: uppercase
            }

            @media(min-width: 1023px) {
                .case-studies-other-services__block-link {
                    padding:0 50px
                }
            }

            .case-studies-other-services__block-link:hover {
                color: #5f0c27
            }

            .case-studies-other-services__block-link::after {
                content: "";
                display: inline-block;
                height: 10px;
                margin-left: 10px;
                width: 10px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%2399103D%22%2F%3E%3C%2Fsvg%3E")
            }

            .case-studies-other-services__block-link::after:hover {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%235F0C27%22%2F%3E%3C%2Fsvg%3E")
            }

            .case-studies-other-services__block .capability-block__ident-wrapper {
                position: relative
            }

            .case-studies-other-services__block .capability-block__overlay {
                position: absolute
            }

            .case-studies-other-services__block .capability-block__overlay--shape2 {
                right: -1px;
                top: -1px
            }

            .case-studies-other-services__block .capability-block__overlay--shape3,.case-studies-other-services__block .capability-block__overlay--shape4 {
                bottom: 0px;
                max-height: 100%
            }

            @media(min-width: 1023px) {
                .case-studies-other-services__block .capability-block__overlay--shape3,.case-studies-other-services__block .capability-block__overlay--shape4 {
                    bottom:38px
                }
            }

            .capability-block__overlay--shape3,.capability-block__overlay--shape4 {
                bottom: 59px;
                right: -1px
            }

            .navbar-jumplinks {
                display: flex;
                overflow: scroll
            }

            .navbar-jumplinks__container {
                z-index: 9999;
                position: fixed;
                overflow-x: scroll;
                width: 100%;
                bottom: 0
            }

            .navbar-jumplinks__item {
                background-color: #333;
                height: 66px;
                padding: 0 27px;
                cursor: pointer
            }

            @media(min-width: 768px) {
                .navbar-jumplinks__item {
                    flex:1;
                    height: 30px;
                    padding: 0
                }
            }

            .navbar-jumplinks__item.active {
                background-color: #99103d
            }

            .navbar-jumplinks__link {
                color: #fff;
                white-space: nowrap;
                font-size: 1rem;
                display: block;
                height: 100%;
                width: 100%;
                text-align: center;
                line-height: 66px
            }

            .navbar-jumplinks__link:hover {
                color: #fff
            }

            @media(min-width: 768px) {
                .navbar-jumplinks__link {
                    font-size:11px;
                    line-height: 32px
                }
            }

            .audience-map {
                position: relative;
                padding-bottom: 50px
            }

            @media(min-width: 1023px) {
                .audience-map {
                    padding-bottom:200px
                }
            }

            @media(min-width: 1023px) {
                .audience-map__source {
                    font-size:.75rem;
                    text-align: center
                }
            }

            @media(min-width: 1023px) {
                .audience-map__total {
                    padding:150px 0 0 50px
                }
            }

            .audience-map__total-stat {
                color: #99103d;
                font-size: 3.125rem;
                font-weight: 600;
                margin: 40px 0 15px 0
            }

            @media(min-width: 1023px) {
                .audience-map__total-stat {
                    font-size:38px
                }
            }

            .audience-map__total-description {
                font-size: 16px;
                line-height: 22px;
                margin: 16px 0 4px 0
            }

            @media(min-width: 1023px) {
                .audience-map__total-description {
                    line-height:16px
                }
            }

            .audience-map__total-source {
                width: 50%;
                line-height: 18px;
                font-size: .875rem;
                margin: 0
            }

            @media(min-width: 1023px) {
                .audience-map__total-source {
                    font-size:.75rem;
                    width: 100%
                }
            }

            .audience-map__country-label {
                font-size: 1.8em
            }

            @media(min-width: 1023px) {
                .audience-map__country-label {
                    font-size:1em
                }
            }

            .sector-stats {
                display: inline-flex
            }

            .sector-stats__chart-container {
                height: calc(100% + 40px);
                position: relative;
                margin: auto;
                padding-bottom: 30px;
                width: 90%;
                max-width: 500px
            }

            @media(min-width: 1023px) {
                .sector-stats__chart-container {
                    width:calc(100% + 40px)
                }
            }

            .sector-stats__legend li {
                display: flex;
                margin-bottom: 30px
            }

            .sector-stats__legend li:last-child {
                margin-bottom: 0
            }

            @media(min-width: 1023px) {
                .sector-stats__legend li {
                    margin-bottom:25px
                }
            }

            .sector-stats__legend li.active .sector-stats__legend-color {
                transform: scale(1.5)
            }

            .sector-stats__legend li.active .sector-stats__legend-value {
                transform: scale(1.5)
            }

            .sector-stats__legend li.active .sector-stats__legend-label::after {
                width: 100%
            }

            @media(min-width: 768px) {
                .sector-stats__legend-wrapper {
                    align-items:center;
                    display: flex;
                    padding-left: 100px
                }
            }

            .sector-stats__legend-color {
                display: inline-block;
                flex-shrink: 0;
                height: 15px;
                margin-right: 15px;
                margin-top: -2px;
                transition: transform .2s ease-in-out;
                width: 15px
            }

            .sector-stats__legend-value {
                font-size: .75rem;
                font-weight: 600;
                margin-right: 15px;
                transition: transform .2s ease-in-out
            }

            .sector-stats__legend-label {
                font-size: .875rem;
                position: relative
            }

            .sector-stats__legend-label::after {
                background: #262a33;
                bottom: -6px;
                content: "";
                height: 1px;
                left: 0;
                opacity: .4;
                position: absolute;
                transition: width .2s ease-in-out;
                width: 0
            }

            @media(min-width: 1023px) {
                .growth-readership-chart__diagram {
                    display:flex;
                    flex-direction: row-reverse;
                    align-items: center;
                    width: 80%;
                    max-width: 360px;
                    margin-left: auto
                }
            }

            .growth-readership-chart__title {
                font-weight: 500;
                font-size: 1.25rem;
                line-height: 1.5rem;
                margin: 48px 0 32px
            }

            .growth-readership-chart__legend {
                margin-bottom: 32px;
                display: flex
            }

            @media(min-width: 1023px) {
                .growth-readership-chart__legend {
                    display:unset;
                    margin: 300px 0 0 0;
                    padding-left: 30px
                }
            }

            .growth-readership-chart__legend-item {
                align-items: end;
                display: flex;
                font-size: .75rem;
                margin-right: 32px;
                font-weight: 600
            }

            @media(min-width: 1023px) {
                .growth-readership-chart__legend-item {
                    margin:0 0 12px 0;
                    white-space: nowrap
                }
            }

            .growth-readership-chart__legend-item::before {
                background: #333;
                border-radius: 50%;
                content: "";
                display: inline-block;
                height: 15px;
                margin-right: 15px;
                width: 15px
            }

            .growth-readership-chart__legend-item--maroon::before {
                background: #99103d
            }

            .growth-readership-chart__source {
                font-size: .875rem;
                line-height: 1.125rem;
                margin: 28px 0 70px 0
            }

            .readership-modal__accept {
                display: flex
            }

            .readership-modal__accept input {
                flex-shrink: 0
            }

            .readership-modal__accept label {
                font-size: 16px;
                font-weight: 200;
                line-height: 1.2;
                margin: 4px 0 0 20px
            }

            .readership-modal__terms {
                padding: 0 32px
            }

            .readership-modal__terms ol {
                font-size: 16px;
                font-weight: 200;
                line-height: 1.2;
                list-style: decimal
            }

            .readership-modal__terms li {
                margin-bottom: 20px;
                padding-left: 24px
            }

            .readership-modal .button {
                padding-left: 40px;
                padding-right: 40px
            }

            .readership-modal .button[disabled] {
                opacity: .5;
                pointer-events: none
            }

            .product__additional-content h4.typography-eyebrow {
                margin-top: 64px
            }

            .product-spec__intro {
                margin-bottom: 62px
            }

            .product-spec__intro-container {
                padding: 0
            }

            .product-spec__heading {
                font-size: 2.5rem
            }

            @media(min-width: 1023px) {
                .product-spec__heading {
                    font-size:3.125rem
                }
            }

            .product-spec__table-heading {
                margin-top: 37px
            }

            .product-spec__stat-parent-container {
                margin-bottom: 60px
            }

            .product-spec__stat-inner-container {
                display: flex;
                flex-direction: column;
                height: 90%;
                justify-content: space-between
            }

            @media(min-width: 375px) {
                .product-spec__stat-inner-container {
                    padding-bottom:30px
                }
            }

            @media(min-width: 768px) {
                .product-spec__stat-inner-container {
                    padding-bottom:50px
                }
            }

            .product-spec__stat-value {
                color: #99103d;
                font-size: 2rem;
                font-weight: 600
            }

            @media(min-width: 375px) {
                .product-spec__stat-value {
                    font-size:2.75rem
                }
            }

            @media(min-width: 768px) {
                .product-spec__stat-value {
                    font-size:3.75rem
                }
            }

            .product-spec__stat-label p {
                font-size: 1rem;
                line-height: 1.125rem;
                margin: 0;
                width: 80%
            }

            @media(min-width: 375px) {
                .product-spec__stat-label p {
                    font-size:16px
                }
            }

            .product-spec__stat-source {
                font-size: .625rem;
                width: 120px
            }

            .product-spec__stat-source--wide {
                margin-bottom: 16px;
                width: 80%
            }

            .product-spec__stat-spacer {
                display: none
            }

            @media(min-width: 1023px) {
                .product-spec__stat-spacer {
                    display:block
                }
            }

            .product-spec__formats {
                margin-top: 64px;
                scroll-margin-top: 96px
            }

            @media(min-width: 1023px) {
                .product-spec__formats .contact-button-container {
                    display:flex;
                    justify-content: flex-end;
                    align-items: flex-end
                }
            }

            .jumplinks {
                background: #99103d;
                border: 1px solid #99103d;
                border-radius: 36px;
                bottom: 48px;
                height: fit-content;
                left: 50%;
                translate: -50%;
                overflow: clip;
                position: fixed;
                z-index: 2
            }

            .jumplinks__content {
                position: relative
            }

            .jumplinks__links-container {
                display: flex;
                position: relative;
                z-index: 1
            }

            .jumplinks__link {
                border-radius: 36px;
                color: #fff;
                font-size: .75rem;
                padding: 16px 24px 12px;
                text-transform: uppercase
            }

            .jumplinks__link:hover {
                color: #5f0c27
            }

            .jumplinks__link--active {
                color: #99103d
            }

            .jumplinks__link--active:hover {
                background: unset;
                color: #5f0c27
            }

            .jumplinks--background {
                background: #fff1e5;
                border-radius: 36px;
                height: 100%;
                position: absolute;
                transition: left .4s,width .4s
            }

            .spec-table__td-value ul {
                list-style: disc;
                list-style-position: outside
            }

            .spec-table__td-value li {
                margin-bottom: 5px
            }

            @media(max-width: 1023px) {
                .spec-table {
                    line-height:1.3;
                    margin: 32px 0 10px;
                    width: 100%
                }

                .spec-table--second-header .spec-table__tr:nth-child(1) {
                    display: none
                }

                .spec-table--rates .spec-table__tr:nth-child(1) {
                    display: none
                }

                .spec-table--rates.spec-table--second-header .spec-table__tr:nth-child(2) {
                    display: none
                }

                .spec-table__heading {
                    display: none
                }

                .spec-table__expand-all {
                    background: rgba(0,0,0,0);
                    float: right;
                    margin-bottom: 10px;
                    margin-right: 6px
                }

                .spec-table__expand-all::after {
                    content: "";
                    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20284.929%20284.929%22%20fill%3D%22%2399103D%22%3E%3Cpath%20d%3D%22M282.082%20195.285L149.028%2062.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567%202.856L2.856%20195.285C.95%20197.191%200%20199.378%200%20201.853c0%202.474.953%204.664%202.856%206.566l14.272%2014.271c1.903%201.903%204.093%202.854%206.567%202.854s4.664-.951%206.567-2.854l112.204-112.202%20112.208%20112.209c1.902%201.903%204.093%202.848%206.563%202.848%202.478%200%204.668-.951%206.57-2.848l14.274-14.277c1.902-1.902%202.847-4.093%202.847-6.566.001-2.476-.944-4.666-2.846-6.569z%22%2F%3E%3C%2Fsvg%3E");
                    display: inline-block;
                    height: 12px;
                    margin-left: 12px;
                    transform: rotateX(180deg);
                    width: 12px
                }

                .spec-table__body {
                    border-bottom: solid 1px #ddd;
                    border-top: solid 1px #333;
                    display: block
                }

                .spec-table__tr {
                    display: block;
                    padding: 17px 14px
                }

                .spec-table__tr:nth-child(even) {
                    background: #f4f4f4
                }

                .spec-table__tr--active .spec-table__td {
                    display: flex
                }

                .spec-table__tr--active .spec-table__td::after {
                    transform: rotateX(0)
                }

                .spec-table__td {
                    display: none;
                    margin-top: 17px;
                    width: 100%
                }

                .spec-table__td--row-title {
                    color: #99103d;
                    cursor: pointer;
                    display: flex;
                    font-weight: 600;
                    margin: 0;
                    position: relative;
                    width: 100%
                }

                .spec-table__td--row-title::after {
                    content: "";
                    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20284.929%20284.929%22%20fill%3D%22%2399103D%22%3E%3Cpath%20d%3D%22M282.082%20195.285L149.028%2062.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567%202.856L2.856%20195.285C.95%20197.191%200%20199.378%200%20201.853c0%202.474.953%204.664%202.856%206.566l14.272%2014.271c1.903%201.903%204.093%202.854%206.567%202.854s4.664-.951%206.567-2.854l112.204-112.202%20112.208%20112.209c1.902%201.903%204.093%202.848%206.563%202.848%202.478%200%204.668-.951%206.57-2.848l14.274-14.277c1.902-1.902%202.847-4.093%202.847-6.566.001-2.476-.944-4.666-2.846-6.569z%22%2F%3E%3C%2Fsvg%3E");
                    display: inline-block;
                    height: 12px;
                    position: absolute;
                    right: 0;
                    transform: rotateX(180deg);
                    width: 12px
                }

                .spec-table__td-label {
                    font-size: .875rem;
                    font-weight: 600;
                    padding-right: 10px;
                    width: 50%
                }

                .spec-table__td-sub-label {
                    font-size: 12px;
                    font-weight: 400;
                    opacity: .8
                }

                .spec-table__td-value {
                    font-size: .875rem;
                    width: 50%
                }
            }

            @media(min-width: 1023px) {
                .spec-table {
                    line-height:1.3;
                    margin: 32px 0;
                    table-layout: fixed;
                    width: 100%
                }

                .spec-table--rates .spec-table__tr:nth-child(even) {
                    background: rgba(0,0,0,0)
                }

                .spec-table--rates .spec-table__tr:nth-child(odd) {
                    background: #f4f4f4
                }

                .spec-table--rates .spec-table__tr:nth-child(1) {
                    display: none
                }

                .spec-table--rates.spec-table--second-header .spec-table__tr:nth-child(1) {
                    display: table-row
                }

                .spec-table--rates.spec-table--second-header .spec-table__tr:nth-child(1) td {
                    white-space: nowrap
                }

                .spec-table--rates.spec-table--second-header .spec-table__tr:nth-child(2) {
                    display: none
                }

                .spec-table__expand-all-container {
                    display: none
                }

                .spec-table__heading {
                    border-bottom: solid 1px #333;
                    font-size: 20px;
                    font-weight: 500;
                    margin-bottom: 10px
                }

                .spec-table__heading th {
                    padding: 18px;
                    text-align: left
                }

                .spec-table__body {
                    border-bottom: solid 1px #ddd
                }

                .spec-table__tr:nth-child(even) {
                    background: #f4f4f4
                }

                .spec-table__td {
                    padding: 18px
                }

                .spec-table__td--row-title {
                    color: #99103d;
                    font-weight: 600
                }

                .spec-table__td-label {
                    display: none
                }

                .spec-table--second-header .spec-table__tr:nth-child(even) {
                    background: rgba(0,0,0,0)
                }

                .spec-table--second-header .spec-table__tr:nth-child(odd) {
                    background: #f4f4f4
                }

                .spec-table--second-header .spec-table__tr:nth-child(1) {
                    background: rgba(0,0,0,0);
                    font-size: 12px
                }

                .spec-table--second-header .spec-table__tr:nth-child(1) td {
                    padding: 0 18px;
                    transform: translateY(-20px)
                }

                .spec-table--second-header .spec-table__tr:nth-child(2) td {
                    padding: 0 18px 18px
                }
            }

            .spec-table--rates th[data-currency-symbol],.spec-table--rates td[data-currency-symbol] {
                display: none
            }

            .spec-table--rates[data-selected-currency="GBP £"] .spec-table__tr--active th[data-currency-symbol="GBP £"],.spec-table--rates[data-selected-currency="GBP £"] .spec-table__tr--active td[data-currency-symbol="GBP £"] {
                display: flex
            }

            @media(min-width: 1023px) {
                .spec-table--rates[data-selected-currency="GBP £"] th[data-currency-symbol="GBP £"],.spec-table--rates[data-selected-currency="GBP £"] td[data-currency-symbol="GBP £"] {
                    display:table-cell !important
                }
            }

            .spec-table--rates[data-selected-currency="EUR €"] .spec-table__tr--active th[data-currency-symbol="EUR €"],.spec-table--rates[data-selected-currency="EUR €"] .spec-table__tr--active td[data-currency-symbol="EUR €"] {
                display: flex
            }

            @media(min-width: 1023px) {
                .spec-table--rates[data-selected-currency="EUR €"] th[data-currency-symbol="EUR €"],.spec-table--rates[data-selected-currency="EUR €"] td[data-currency-symbol="EUR €"] {
                    display:table-cell !important
                }
            }

            .spec-table--rates[data-selected-currency="USD $"] .spec-table__tr--active th[data-currency-symbol="USD $"],.spec-table--rates[data-selected-currency="USD $"] .spec-table__tr--active td[data-currency-symbol="USD $"] {
                display: flex
            }

            @media(min-width: 1023px) {
                .spec-table--rates[data-selected-currency="USD $"] th[data-currency-symbol="USD $"],.spec-table--rates[data-selected-currency="USD $"] td[data-currency-symbol="USD $"] {
                    display:table-cell !important
                }
            }

            .spec-table--rates[data-selected-currency="YEN ¥"] .spec-table__tr--active th[data-currency-symbol="YEN ¥"],.spec-table--rates[data-selected-currency="YEN ¥"] .spec-table__tr--active td[data-currency-symbol="YEN ¥"] {
                display: flex
            }

            @media(min-width: 1023px) {
                .spec-table--rates[data-selected-currency="YEN ¥"] th[data-currency-symbol="YEN ¥"],.spec-table--rates[data-selected-currency="YEN ¥"] td[data-currency-symbol="YEN ¥"] {
                    display:table-cell !important
                }
            }

            .more-data-table {
                line-height: 1.3;
                margin: 32px 0;
                table-layout: fixed;
                width: 100%
            }

            .more-data-table__heading {
                border-bottom: solid 1px #333;
                font-weight: 500;
                margin-bottom: 10px;
                text-align: left
            }

            @media(min-width: 768px) {
                .more-data-table__heading {
                    font-size:20px
                }
            }

            .more-data-table__heading th {
                padding: 18px
            }

            .more-data-table__body {
                border-bottom: solid 1px #ddd
            }

            .more-data-table__tr:nth-child(even) {
                background: #f4f4f4
            }

            .more-data-table__td {
                padding: 18px
            }

            .more-data-table__td-label {
                display: none
            }

            .more-data-table__td-value {
                font-size: .875rem
            }

            @media(min-width: 768px) {
                .more-data-table__td-value {
                    font-size:16px
                }
            }

            .more-data-table--second-header .more-data-table__tr:nth-child(even) {
                background: rgba(0,0,0,0)
            }

            .more-data-table--second-header .more-data-table__tr:nth-child(odd) {
                background: #f4f4f4
            }

            .more-data-table--second-header .more-data-table__tr:nth-child(1) {
                background: rgba(0,0,0,0);
                font-size: 12px
            }

            .more-data-table--second-header .more-data-table__tr:nth-child(1) td {
                padding: 0 18px;
                transform: translateY(-20px)
            }

            .more-data-table--second-header .more-data-table__tr:nth-child(2) td {
                padding: 0 18px 18px
            }

            .animated-specs__container {
                line-height: 1.3;
                margin: 32px 0 10px;
                width: 100%
            }

            .animated-specs__expand-all-container {
                display: flex;
                justify-content: flex-end
            }

            .animated-specs__expand-all-container-button {
                background: rgba(0,0,0,0);
                margin-bottom: 10px;
                margin-right: 6px
            }

            .animated-specs__expand-all-container-button::after {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20284.929%20284.929%22%20fill%3D%22%2399103D%22%3E%3Cpath%20d%3D%22M282.082%20195.285L149.028%2062.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567%202.856L2.856%20195.285C.95%20197.191%200%20199.378%200%20201.853c0%202.474.953%204.664%202.856%206.566l14.272%2014.271c1.903%201.903%204.093%202.854%206.567%202.854s4.664-.951%206.567-2.854l112.204-112.202%20112.208%20112.209c1.902%201.903%204.093%202.848%206.563%202.848%202.478%200%204.668-.951%206.57-2.848l14.274-14.277c1.902-1.902%202.847-4.093%202.847-6.566.001-2.476-.944-4.666-2.846-6.569z%22%2F%3E%3C%2Fsvg%3E");
                content: "";
                display: inline-block;
                height: 12px;
                margin-left: 12px;
                transform: rotateX(180deg);
                width: 12px
            }

            .animated-specs__all-formats-container {
                border-bottom: solid 1px #ddd;
                border-top: solid 1px #333
            }

            .animated-specs__ad-format-container {
                display: block
            }

            .animated-specs__ad-format-container--active {
                display: block
            }

            .animated-specs__ad-format-container--active .animated-specs__ad-format-dimensions,.animated-specs__ad-format-container--active .animated-specs__video-row {
                display: flex
            }

            .animated-specs__ad-format-container--active .animated-specs__ad-format-name::after {
                transform: rotateX(0deg)
            }

            .animated-specs__ad-format-container:nth-child(odd) {
                background: rgba(0,0,0,0)
            }

            .animated-specs__ad-format-container:nth-child(even) {
                background: #f4f4f4
            }

            .animated-specs__text-row {
                display: block;
                padding: 20px 14px 11px
            }

            .animated-specs__ad-format-name {
                color: #99103d;
                cursor: pointer;
                display: flex;
                font-weight: 600;
                margin: 0;
                position: relative;
                width: 100%
            }

            .animated-specs__ad-format-name::after {
                content: "";
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20284.929%20284.929%22%20fill%3D%22%2399103D%22%3E%3Cpath%20d%3D%22M282.082%20195.285L149.028%2062.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567%202.856L2.856%20195.285C.95%20197.191%200%20199.378%200%20201.853c0%202.474.953%204.664%202.856%206.566l14.272%2014.271c1.903%201.903%204.093%202.854%206.567%202.854s4.664-.951%206.567-2.854l112.204-112.202%20112.208%20112.209c1.902%201.903%204.093%202.848%206.563%202.848%202.478%200%204.668-.951%206.57-2.848l14.274-14.277c1.902-1.902%202.847-4.093%202.847-6.566.001-2.476-.944-4.666-2.846-6.569z%22%2F%3E%3C%2Fsvg%3E");
                display: inline-block;
                height: 12px;
                position: absolute;
                right: 0;
                transform: rotateX(180deg);
                width: 12px
            }

            .animated-specs__ad-format-dimensions {
                display: none;
                margin-top: 25px
            }

            .animated-specs__ad-format-dimensions-label {
                font-size: .875rem;
                width: 50%
            }

            .animated-specs__ad-format-dimensions-label--bold {
                font-weight: 600;
                padding-right: 10px
            }

            .animated-specs__desktop-header-row {
                display: none
            }

            .animated-specs__video-row {
                align-items: center;
                display: none;
                justify-content: center;
                padding: 25px 14px 45px
            }

            .animated-specs__video {
                height: 100%;
                object-fit: cover;
                width: 100%
            }

            @media all and (-ms-high-contrast: none),(-ms-high-contrast: active) {
                .animated-specs__video {
                    height: auto
                }
            }

            @media(min-width: 1023px) {
                .animated-specs__expand-all-container {
                    display:none
                }

                .animated-specs__all-formats-container {
                    border: 0;
                    display: flex;
                    flex-wrap: wrap
                }

                .animated-specs__ad-format-container {
                    display: flex;
                    flex-direction: column-reverse;
                    padding: 20px;
                    width: 50%
                }

                .animated-specs__ad-format-container:nth-child(even) {
                    background: rgba(0,0,0,0)
                }

                .animated-specs__ad-format-name {
                    cursor: text
                }

                .animated-specs__ad-format-name::after {
                    content: none
                }

                .animated-specs__ad-format-dimensions {
                    display: flex;
                    margin: 0
                }

                .animated-specs__ad-format-dimensions-label {
                    display: flex;
                    font-size: 1rem;
                    white-space: nowrap
                }

                .animated-specs__ad-format-dimensions-label--bold {
                    display: none
                }

                .animated-specs__text-row {
                    align-items: center;
                    display: flex;
                    padding: 22px 18px 10px
                }

                .animated-specs__desktop-header-row {
                    border-bottom: solid 1px #333;
                    display: flex;
                    font-size: 1.25rem;
                    font-weight: 500;
                    justify-content: space-between;
                    padding: 18px
                }

                .animated-specs__video-row {
                    display: flex;
                    height: 100%;
                    padding: 25px 14px 20px
                }

                .animated-specs__video {
                    padding: 1px
                }
            }

            @media all and (-ms-high-contrast: none),(-ms-high-contrast: active) {
                .animated-specs__video-row {
                    padding: 0
                }
            }

            .product-more__body-p {
                font-size: 16px;
                margin: 16px 0
            }

            .product-more__body-p p {
                font-size: inherit;
                margin: 16px 0
            }

            .product-more__source {
                font-size: .625rem;
                width: 120px
            }

            .reports-calendar {
                border-bottom: solid 1px #ddd;
                margin: 50px 0
            }

            .reports-calendar__item {
                align-items: center;
                display: flex;
                flex-wrap: wrap;
                font-size: .875rem;
                padding: 18px 40px 18px 15px;
                position: relative
            }

            .reports-calendar__item--heading {
                background: #fff !important;
                border-bottom: solid 1px #333;
                font-size: 1rem;
                font-weight: 500
            }

            .reports-calendar__item-wrapper {
                display: flex
            }

            .reports-calendar__item--expandable {
                cursor: pointer
            }

            .reports-calendar__item--expandable::after {
                content: "";
                display: block;
                height: 10px;
                position: absolute;
                right: 15px;
                top: 18px;
                width: 10px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%3Cpath%20fill%3D%22%2399103D%22%20d%3D%22M225.813%2048.907L128%20146.72%2030.187%2048.907%200%2079.093l128%20128%20128-128z%22%2F%3E%3C%2Fsvg%3E")
            }

            @media(min-width: 1023px) {
                .reports-calendar__item--expandable::after {
                    background-position:right 0 top 50%,0 0;
                    background-repeat: no-repeat,repeat;
                    background-size: 10px 10px,100%;
                    color: #99103d;
                    content: "View Synopsis";
                    font-size: .75rem;
                    font-weight: 600;
                    padding: 0 20px 0;
                    text-transform: uppercase;
                    width: auto
                }
            }

            .reports-calendar__item--open .reports-calendar__item-content {
                display: block
            }

            .reports-calendar__item--open::after {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20284.929%20284.929%22%20fill%3D%22%2399103D%22%3E%3Cpath%20d%3D%22M282.082%20195.285L149.028%2062.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567%202.856L2.856%20195.285C.95%20197.191%200%20199.378%200%20201.853c0%202.474.953%204.664%202.856%206.566l14.272%2014.271c1.903%201.903%204.093%202.854%206.567%202.854s4.664-.951%206.567-2.854l112.204-112.202%20112.208%20112.209c1.902%201.903%204.093%202.848%206.563%202.848%202.478%200%204.668-.951%206.57-2.848l14.274-14.277c1.902-1.902%202.847-4.093%202.847-6.566.001-2.476-.944-4.666-2.846-6.569z%22%2F%3E%3C%2Fsvg%3E")
            }

            @media(min-width: 1023px) {
                .reports-calendar__item--open::after {
                    content:"Close Synopsis"
                }
            }

            .reports-calendar__item:nth-child(odd) {
                background: #f4f4f4
            }

            .reports-calendar__item-date {
                min-width: 100px
            }

            @media(min-width: 1023px) {
                .reports-calendar__item-date {
                    min-width:150px
                }
            }

            .reports-calendar__item-title {
                font-weight: 500
            }

            .reports-calendar__item-content {
                background: #fff;
                border-top: solid 1px rgba(51,51,51,.2);
                cursor: auto;
                display: none;
                font-size: 1rem;
                margin: 17px -40px -18px -15px;
                padding: 32px 0 0
            }

            .reports-calendar__item-content p,.reports-calendar__item-content span {
                font-size: 1rem;
                font-weight: 200;
                line-height: 1.3em
            }

            .reports-calendar__item-content b,.reports-calendar__item-content b * {
                font-size: 18px;
                font-weight: 600 !important
            }

            .reports-calendar__close-wrapper {
                padding: 20px 0;
                text-align: right
            }

            .reports-calendar__close-button {
                color: #99103d;
                cursor: pointer;
                display: inline-block;
                font-family: Metric,sans-serif;
                font-size: .75rem;
                font-weight: 600;
                margin-right: 15px;
                padding-right: 20px;
                position: relative;
                text-transform: uppercase
            }

            .reports-calendar__close-button::after {
                content: "";
                display: block;
                height: 10px;
                position: absolute;
                right: 0px;
                top: 2px;
                width: 10px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20284.929%20284.929%22%20fill%3D%22%2399103D%22%3E%3Cpath%20d%3D%22M282.082%20195.285L149.028%2062.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567%202.856L2.856%20195.285C.95%20197.191%200%20199.378%200%20201.853c0%202.474.953%204.664%202.856%206.566l14.272%2014.271c1.903%201.903%204.093%202.854%206.567%202.854s4.664-.951%206.567-2.854l112.204-112.202%20112.208%20112.209c1.902%201.903%204.093%202.848%206.563%202.848%202.478%200%204.668-.951%206.57-2.848l14.274-14.277c1.902-1.902%202.847-4.093%202.847-6.566.001-2.476-.944-4.666-2.846-6.569z%22%2F%3E%3C%2Fsvg%3E")
            }

            .cookie-popup {
                background: #fff;
                padding: 22px 44px 44px
            }

            @media(min-width: 1023px) {
                .cookie-popup {
                    max-width:380px;
                    right: calc(5vw + 32px)
                }
            }

            .cookie-popup__wrapper {
                bottom: 0;
                display: none;
                justify-content: flex-end;
                left: 50%;
                position: fixed;
                transform: translateX(-50%);
                z-index: 1001
            }

            @media(max-width: 1023px) {
                .cookie-popup__wrapper {
                    padding:0
                }
            }

            .cookie-popup__wrapper.active {
                display: flex
            }

            .cookie-popup__background {
                background: #000;
                display: none;
                height: 100%;
                left: 0;
                opacity: .27;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000
            }

            .cookie-popup__background.active {
                display: block
            }

            .cookie-popup__description {
                margin: -15px 0 30px 0
            }

            .cookie-popup__description a {
                text-decoration: underline
            }

            .cookie-popup__manage {
                display: block;
                margin: 40px 0 25px;
                text-decoration: underline
            }

            #pardot-cookie-popup-finder+div {
                display: none
            }

            .site-modal {
                background: rgba(0,0,0,.8);
                bottom: 0;
                content: "";
                left: 0;
                opacity: 0;
                pointer-events: none;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 9999
            }

            @media(max-width: 1023px) {
                .site-modal .container {
                    padding-left:0;
                    padding-right: 0
                }
            }

            .site-modal--open {
                opacity: 1;
                pointer-events: all
            }

            .site-modal__content {
                background: #fff;
                height: calc(100vh - 128px);
                margin: 32px;
                overflow: auto;
                padding: 32px;
                position: relative
            }

            @media(min-width: 1023px) {
                .site-modal__content {
                    height:calc(100vh - 74px);
                    margin: 36px auto;
                    max-width: 960px
                }
            }

            .site-modal__close {
                background-color: rgba(0,0,0,0);
                background-position: right 50% top 50%,0 0;
                background-repeat: no-repeat,repeat;
                background-size: 14px auto,100%;
                border: solid 1px #333;
                border-radius: 50%;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.112%2031.112%22%3E%3Cpath%20fill%3D%22%23333333%22%20d%3D%22M31.112%201.414L29.698%200%2015.556%2014.142%201.414%200%200%201.414l14.142%2014.142L0%2029.698l1.414%201.414L15.556%2016.97l14.142%2014.142%201.414-1.414L16.97%2015.556z%22%2F%3E%3C%2Fsvg%3E");
                cursor: pointer;
                display: block;
                height: 36px;
                position: absolute;
                right: 20px;
                top: 20px;
                width: 36px;
                z-index: 100
            }

            .tabs,.tabs>li {
                list-style: none;
                margin-top: 16px;
                padding: 0
            }

            .tabs>li {
                display: inline-block
            }

            .tabs>li>button {
                cursor: pointer;
                padding: 0 10px;
                font-weight: 300;
                font-size: .8rem
            }

            .tabs>li>button::after {
                background: #99103d;
                content: "";
                display: none;
                height: 4px;
                margin-top: 6px;
                width: 50px
            }

            @media(min-width: 1023px) {
                .tabs>li>button {
                    padding:10px 30px 0;
                    font-size: .875rem
                }
            }

            .tabs>li:first-child>button {
                margin-left: -10px
            }

            @media(min-width: 1023px) {
                .tabs>li:first-child>button {
                    margin-left:-30px
                }
            }

            .tabs>li>button.is-active {
                font-weight: 600
            }

            .tabs>li>button.is-active:after {
                display: block
            }

            .tabs--content {
                display: none
            }

            .tabs--content.is-shown {
                display: block
            }

            .news-insights-item {
                background: #1470cc;
                color: #fff;
                display: flex;
                flex-direction: column;
                height: 100%;
                min-height: 420px
            }

            .news-insights-item-container {
                animation: news-item-entry .3s ease-in-out forwards;
                opacity: 0;
                transform: translateY(20px) scale(0.8)
            }

            .news-insights-item-container:nth-child(1) {
                animation-delay: .1s
            }

            .news-insights-item-container:nth-child(2) {
                animation-delay: .2s
            }

            .news-insights-item-container:nth-child(3) {
                animation-delay: .3s
            }

            .news-insights-item-container:nth-child(4) {
                animation-delay: .4s
            }

            .news-insights-item-container:nth-child(5) {
                animation-delay: .5s
            }

            .news-insights-item-container:nth-child(6) {
                animation-delay: .6s
            }

            .news-insights-item-container:nth-child(7) {
                animation-delay: .7s
            }

            .news-insights-item-container:nth-child(8) {
                animation-delay: .8s
            }

            .news-insights-item-container:nth-child(9) {
                animation-delay: .9s
            }

            .news-insights-item-container:nth-child(10) {
                animation-delay: 1s
            }

            .news-insights-item-container:nth-child(11) {
                animation-delay: 1.1s
            }

            .news-insights-item-container:nth-child(12) {
                animation-delay: 1.2s
            }

            .news-insights-item--grey {
                background: #f7f7f7;
                color: #333
            }

            .news-insights-item--blue-1 {
                background: #1470cc
            }

            .news-insights-item--salmon {
                background: #fff1e5;
                color: #333
            }

            .news-insights-item--blue-2 {
                background: #082a4d
            }

            .news-insights-item--primary {
                background: #99103d
            }

            .news-insights-item--hero-image {
                background: #000
            }

            .news-insights-item--hero-image img {
                opacity: .6
            }

            .news-insights-item--hero .news-insights-item__image {
                height: 100%;
                max-width: calc(100% - 32px);
                object-fit: cover;
                position: absolute;
                width: 100%
            }

            @media(min-width: 1023px) {
                .news-insights-item--hero .h3-heading {
                    font-size:3.125rem !important
                }
            }

            .news-insights-item-container {
                margin: 16px 0
            }

            .news-insights-item__image {
                width: 100%;
                z-index: 1
            }

            .news-insights-item__image--shrink {
                flex-shrink: 0
            }

            .news-insights-item__text-wrapper {
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                padding: 40px 32px;
                z-index: 2
            }

            .news-insights-item__type {
                font-size: .875rem;
                font-weight: 600;
                line-height: 17px;
                margin-bottom: 20px;
                text-transform: uppercase
            }

            .news-insights-item__title {
                margin-bottom: 20px;
                width: 75%
            }

            .news-insights-item__title--grow {
                flex-grow: 1
            }

            .news-insights-item__title .h3-heading {
                color: inherit;
                display: inline-block;
                font-size: 1.5rem;
                font-weight: 600;
                line-height: 1em;
                position: relative
            }

            .news-insights-item__title .h3-heading:hover::after,.news-insights-item__title .h3-heading:focus::after {
                animation: underline-entry .3s ease-in-out forwards;
                background-color: currentColor;
                content: "";
                display: block;
                height: 3px;
                position: absolute
            }

            @keyframes underline-entry {
                from {
                    opacity: 0;
                    width: 0
                }

                to {
                    opacity: 1;
                    width: calc(100% - 32px)
                }
            }

            .news-insights-item__blurb {
                flex-grow: 1
            }

            .news-insights-item__blurb p {
                font-size: 1rem;
                margin: 0
            }

            .news-insights-item__date {
                text-align: right
            }

            @keyframes news-item-entry {
                from {
                    transform: translateY(20px) scale(0.8);
                    opacity: 0
                }

                to {
                    transform: translateY(0) scale(1);
                    opacity: 1
                }
            }

            .news-insights-item-container--related:nth-child(2) .news-insights-item {
                background: #1470cc
            }

            .news-insights-item-container--related:nth-child(3) .news-insights-item {
                background: #082a4d
            }

            .news-insights-item-container--related:nth-child(4) .news-insights-item {
                background: #f7f7f7;
                color: #333
            }

            .news-insight-more-from-container {
                margin: 60px 0
            }

            @media(min-width: 1023px) {
                .news-insight-more-from-container {
                    margin:100px 0
                }
            }

            .sticky-header .news-insights__filter--sticky .news-insights__filter-wrapper {
                padding-top: 120px
            }

            .news-insights__filter {
                margin-bottom: 30px
            }

            .news-insights__filter--open .news-insights__filter-container {
                display: flex
            }

            .news-insights__filter--open .news-insights__filter-toggle {
                background: #99103d;
                color: #fff
            }

            .news-insights__filter--open .news-insights__filter-toggle::after {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20viewBox%3D%220%200%2010%207%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5.5%206a.5.5%200%2001.09.992L5.5%207h-5a.5.5%200%2001-.09-.992L.5%206h5zm2-3a.5.5%200%2001.09.992L7.5%204h-7a.5.5%200%2001-.09-.992L.5%203h7zm2-3a.5.5%200%2001.09.992L9.5%201h-9A.5.5%200%2001.41.008L.5%200h9z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%2F%3E%3C%2Fsvg%3E")
            }

            @media(max-width: 1023px) {
                .news-insights__filter--active .news-insights__filter-toggle {
                    background:#99103d;
                    color: #fff
                }

                .news-insights__filter--active .news-insights__filter-toggle::after {
                    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20viewBox%3D%220%200%2010%207%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5.5%206a.5.5%200%2001.09.992L5.5%207h-5a.5.5%200%2001-.09-.992L.5%206h5zm2-3a.5.5%200%2001.09.992L7.5%204h-7a.5.5%200%2001-.09-.992L.5%203h7zm2-3a.5.5%200%2001.09.992L9.5%201h-9A.5.5%200%2001.41.008L.5%200h9z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%2F%3E%3C%2Fsvg%3E")
                }
            }

            @media(min-width: 1023px) {
                .news-insights__filter--active .news-insights__filter-clear-facets {
                    display:inline-block
                }
            }

            .news-insights__filter--sticky {
                height: 39px
            }

            .news-insights__filter--sticky .news-insights__filter-wrapper {
                position: fixed;
                top: 20px;
                z-index: 10;
                overflow-y: hidden
            }

            @media(min-width: 1023px) {
                .news-insights__filter--sticky .news-insights__filter-wrapper {
                    background:#fff;
                    box-shadow: 0 0 5px rgba(0,0,0,.3);
                    left: 0;
                    overflow-y: hidden;
                    padding: 20px 32px;
                    top: 0;
                    width: 100%
                }

                .news-insights__filter--sticky .news-insights__filter-wrapper .news-insights__filter-toggle-container {
                    margin: 0 auto;
                    max-width: 1366px;
                    width: 90%
                }

                .news-insights__filter--sticky .news-insights__filter-wrapper .news-insights__filter-container {
                    box-shadow: none;
                    margin: 0 auto;
                    max-width: 1366px;
                    width: 90%
                }
            }

            .news-insights__filter-header {
                align-items: center;
                border-bottom: solid 1px #f7f7f7;
                display: flex;
                justify-content: space-between;
                min-height: 60px;
                padding: 22px 32px 16px
            }

            @media(min-width: 1023px) {
                .news-insights__filter-header {
                    border-bottom:none;
                    justify-content: flex-end
                }
            }

            .news-insights__filter-label {
                font-size: 12px;
                font-weight: 600
            }

            @media(min-width: 1023px) {
                .news-insights__filter-label {
                    display:none
                }
            }

            .news-insights__filter-clear {
                background: rgba(0,0,0,0);
                color: #333;
                font-size: 14px
            }

            @media(min-width: 1023px) {
                .news-insights__filter-clear {
                    display:none
                }
            }

            .news-insights__filter-close {
                display: none
            }

            @media(min-width: 1023px) {
                .news-insights__filter-close {
                    cursor:pointer;
                    display: block;
                    height: 16px;
                    padding: 0;
                    width: 16px
                }

                .news-insights__filter-close::after {
                    content: "";
                    display: block;
                    height: 16px;
                    width: 16px;
                    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.112%2031.112%22%3E%3Cpath%20fill%3D%22%23333333%22%20d%3D%22M31.112%201.414L29.698%200%2015.556%2014.142%201.414%200%200%201.414l14.142%2014.142L0%2029.698l1.414%201.414L15.556%2016.97l14.142%2014.142%201.414-1.414L16.97%2015.556z%22%2F%3E%3C%2Fsvg%3E")
                }
            }

            .news-insights__filter-container {
                animation: filter-enter-mobile .3s ease-in-out forwards;
                background: #fff;
                bottom: 0;
                display: none;
                flex-direction: column;
                left: 0;
                overflow-y: scroll;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 2000
            }

            @media(min-width: 1023px) {
                .news-insights__filter-container {
                    border-radius:3px;
                    box-shadow: 0 0 7px rgba(0,0,0,.25);
                    margin: 40px 0;
                    overflow-y: visible;
                    position: relative
                }
            }

            .news-insights__filter-toggle {
                align-items: center;
                background: #fff;
                display: inline-flex;
                padding: 16px 20px 13px
            }

            .news-insights__filter-toggle:hover::after {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20viewBox%3D%220%200%2010%207%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5.5%206a.5.5%200%2001.09.992L5.5%207h-5a.5.5%200%2001-.09-.992L.5%206h5zm2-3a.5.5%200%2001.09.992L7.5%204h-7a.5.5%200%2001-.09-.992L.5%203h7zm2-3a.5.5%200%2001.09.992L9.5%201h-9A.5.5%200%2001.41.008L.5%200h9z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%2F%3E%3C%2Fsvg%3E")
            }

            .news-insights__filter-toggle::after {
                content: "";
                height: 7px;
                margin-left: 10px;
                margin-top: -4px;
                width: 10px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20viewBox%3D%220%200%2010%207%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5.5%206a.5.5%200%2001.09.992L5.5%207h-5a.5.5%200%2001-.09-.992L.5%206h5zm2-3a.5.5%200%2001.09.992L7.5%204h-7a.5.5%200%2001-.09-.992L.5%203h7zm2-3a.5.5%200%2001.09.992L9.5%201h-9A.5.5%200%2001.41.008L.5%200h9z%22%20fill%3D%22%2399103D%22%20fill-rule%3D%22nonzero%22%2F%3E%3C%2Fsvg%3E")
            }

            .news-insights__filter-toggle-num {
                margin-left: 3px
            }

            @media(min-width: 1023px) {
                .news-insights__filter-toggle-num {
                    display:none
                }
            }

            .news-insights__filter-options {
                flex-grow: 1
            }

            @media(min-width: 1023px) {
                .news-insights__filter-options {
                    padding:0 32px
                }
            }

            .news-insights__filter-options ul {
                border-top: 2px solid #f7f7f7;
                margin-top: 10px;
                padding-top: 20px
            }

            .news-insights__filter-options ul:first-child {
                border-top: 0;
                margin-top: 0;
                padding-top: 0
            }

            @media(min-width: 1023px) {
                .news-insights__filter-options ul {
                    display:flex;
                    flex-wrap: wrap
                }
            }

            .news-insights__filter-option {
                align-items: center;
                border-bottom: solid 1px #f7f7f7;
                display: flex;
                flex-grow: 1;
                height: 46px;
                padding: 0 32px;
                user-select: none
            }

            @media(min-width: 1023px) {
                .news-insights__filter-option {
                    border-bottom:none;
                    flex-grow: 0;
                    padding: 0;
                    width: 25%
                }
            }

            .news-insights__filter-option fieldset {
                width: 100%
            }

            .news-insights__filter-option label {
                font-size: 14px;
                font-weight: 400;
                line-height: 2em;
                margin: 0
            }

            .news-insights__filter-option .checkbox {
                float: left;
                margin: 0 20px 0 0
            }

            .news-insights__filter-heading {
                font-weight: 600;
                margin-top: 10px;
                min-height: 20px;
                padding: 0 32px;
                text-transform: uppercase;
                width: 100%
            }

            @media(min-width: 1023px) {
                .news-insights__filter-heading {
                    padding:0
                }
            }

            .news-insights__filter-submit {
                padding: 32px
            }

            @media(min-width: 1023px) {
                .news-insights__filter-submit {
                    display:none
                }
            }

            .news-insights__filter-submit .button {
                width: 140px
            }

            .news-insights__filter-submit-desktop {
                display: none;
                justify-content: space-between;
                padding: 32px
            }

            @media(min-width: 1023px) {
                .news-insights__filter-submit-desktop {
                    display:flex
                }
            }

            .news-insights__filter-desktop-clear {
                text-decoration: underline
            }

            .news-insights__filter-desktop-clear:hover,.news-insights__filter-desktop-clear:focus {
                cursor: pointer
            }

            .news-insights__filter-toggle-container {
                align-items: center;
                display: flex
            }

            .news-insights__filter-facets {
                display: none
            }

            @media(min-width: 1023px) {
                .news-insights__filter-facets {
                    display:flex
                }
            }

            .news-insights__filter-facet {
                align-items: center;
                border: solid 1px #d8d8d8;
                border-radius: 20px;
                cursor: pointer;
                display: inline-flex;
                font-size: .75rem;
                font-weight: 500;
                margin-left: 20px;
                padding: 13px 24px 10px;
                text-transform: uppercase;
                user-select: none
            }

            .news-insights__filter-facet-remove {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.112%2031.112%22%3E%3Cpath%20fill%3D%22%23333333%22%20d%3D%22M31.112%201.414L29.698%200%2015.556%2014.142%201.414%200%200%201.414l14.142%2014.142L0%2029.698l1.414%201.414L15.556%2016.97l14.142%2014.142%201.414-1.414L16.97%2015.556z%22%2F%3E%3C%2Fsvg%3E");
                cursor: pointer;
                height: 11px;
                margin: -4px -5px 0 20px;
                padding: 0;
                width: 11px
            }

            .news-insights__filter-clear-facets {
                cursor: pointer;
                display: none;
                margin-left: 20px;
                text-decoration: underline
            }

            @keyframes filter-enter-mobile {
                from {
                    opacity: 0;
                    transform: translateY(100%)
                }

                to {
                    opacity: 1;
                    transform: translateY(0%)
                }
            }

            .news-insights-pagination {
                display: flex;
                justify-content: space-between;
                margin: 40px 0 -60px
            }

            @media(max-width: 768px) {
                .news-insights-pagination {
                    overflow:hidden
                }
            }

            .news-insights-pagination__pages {
                display: flex
            }

            @media(max-width: 768px) {
                .news-insights-pagination__pages {
                    position:relative;
                    overflow-x: auto;
                    padding: 0 30px 0 10px;
                    margin: 0 auto;
                    scrollbar-width: none;
                    -ms-overflow-style: none
                }

                .news-insights-pagination__pages::-webkit-scrollbar {
                    display: none
                }
            }

            .news-insights-pagination__previous-button,.news-insights-pagination__next-button,.news-insights-pagination__page-number-button {
                background: rgba(0,0,0,0);
                color: #99103d;
                cursor: pointer;
                font-size: 14px;
                text-transform: uppercase
            }

            .news-insights-pagination__previous-button span,.news-insights-pagination__next-button span,.news-insights-pagination__page-number-button span {
                display: none
            }

            @media(min-width: 768px) {
                .news-insights-pagination__previous-button span,.news-insights-pagination__next-button span,.news-insights-pagination__page-number-button span {
                    display:inline
                }
            }

            .news-insights-pagination__previous-button:disabled::after,.news-insights-pagination__previous-button:disabled::before,.news-insights-pagination__previous-button:disabled span,.news-insights-pagination__next-button:disabled::after,.news-insights-pagination__next-button:disabled::before,.news-insights-pagination__next-button:disabled span,.news-insights-pagination__page-number-button:disabled::after,.news-insights-pagination__page-number-button:disabled::before,.news-insights-pagination__page-number-button:disabled span {
                filter: grayscale(100%);
                opacity: .3;
                pointer-events: none
            }

            .news-insights-pagination__page-number-button {
                border-radius: 50%;
                height: 35px;
                padding: 0;
                width: 35px
            }

            @media(min-width: 768px) {
                .news-insights-pagination__page-number-button {
                    margin:20px
                }
            }

            .news-insights-pagination__page-number-button--active {
                border: solid 1px #99103d
            }

            .news-insights-pagination__previous-button::before,.news-insights-pagination__next-button::after {
                content: "";
                display: inline-block;
                height: 12px;
                width: 12px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.49%2031.49%22%3E%3Cpath%20d%3D%22M21.205%205.007a1.112%201.112%200%2000-1.587%200%201.12%201.12%200%20000%201.571l8.047%208.047H1.111A1.106%201.106%200%20000%2015.737c0%20.619.492%201.127%201.111%201.127h26.554l-8.047%208.032c-.429.444-.429%201.159%200%201.587a1.112%201.112%200%20001.587%200l9.952-9.952a1.093%201.093%200%20000-1.571l-9.952-9.953z%22%20fill%3D%22%2399103D%22%2F%3E%3C%2Fsvg%3E")
            }

            .news-insights-pagination__previous-button::before {
                margin-right: 5px;
                transform: rotateZ(180deg)
            }

            @media(max-width: 768px) {
                .news-insights-pagination__previous-button {
                    padding-right:0
                }
            }

            .news-insights-pagination__next-button::after {
                margin-left: 5px
            }

            @media(max-width: 767px) {
                .news-insights-pagination__next-button {
                    position:absolute;
                    right: 9px;
                    top: 33px;
                    background: #fff;
                    padding: 8px;
                    height: 50px
                }
            }

            [data-filter=container].is-open [data-filter=filters] {
                display: block
            }

            body.filtermenu-is-open #sticky-header {
                display: none
            }

            [data-action=open-filters]:before {
                content: " (" attr(data-filters-count) ")";
                display: none;
                margin-left: 4px;
                order: 1
            }

            [data-filter=container].is-filtered [data-action=open-filters]:before {
                display: block
            }

            [data-action=open-filters]:after {
                order: 2
            }

            .filters-item {
                animation: showfilteritem .3s ease-in-out forwards;
                opacity: 0;
                transform: translateY(20px) scale(0.8)
            }

            .filters-item:nth-child(1) {
                animation-delay: .1s
            }

            .filters-item.is-filtered {
                display: none
            }

            @keyframes showfilteritem {
                from {
                    opacity: 0;
                    transform: translateY(20px) scale(0.8)
                }

                to {
                    opacity: 1;
                    transform: translateY(0) scale(1)
                }
            }

            .faq-accordion {
                background-color: #fff1e5;
                padding: 60px 0;
                text-align: center
            }

            .faq-accordion__container {
                max-width: 800px;
                margin: 0 auto;
                padding: 0 20px
            }

            .faq-accordion__title {
                text-align: center;
                margin-bottom: 40px;
                color: #333;
                font-size: 28px;
                font-weight: 400
            }

            .faq-accordion__item {
                border-bottom: 1px solid rgba(0,0,0,.1)
            }

            .faq-accordion__item:first-child {
                border-top: 1px solid rgba(0,0,0,.1)
            }

            .faq-accordion__trigger {
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px 0;
                background: none;
                border: none;
                cursor: pointer;
                text-align: left;
                color: #333;
                font-weight: 400;
                font-size: 24px;
                line-height: 34px;
                transition: color .2s ease
            }

            .faq-accordion__trigger span {
                text-align: center;
                display: block;
                width: 100%
            }

            .faq-accordion__trigger:hover {
                color: #99103d
            }

            .faq-accordion__icon {
                position: relative;
                width: 12px;
                height: 12px
            }

            .faq-accordion__icon::before,.faq-accordion__icon::after {
                content: "";
                position: absolute;
                background-color: currentColor;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                transition: transform .3s ease
            }

            .faq-accordion__icon::before {
                width: 12px;
                height: 2px
            }

            .faq-accordion__icon::after {
                width: 2px;
                height: 12px
            }

            .faq-accordion__content {
                max-height: 0;
                overflow: hidden;
                transition: max-height .3s ease-out
            }

            .faq-accordion__content-inner {
                padding-bottom: 20px;
                color: #4a4a4a;
                line-height: 1.6
            }

            .faq-accordion__content-inner p {
                font-size: 18px;
                line-height: 24px
            }

            .faq-accordion__item--active .faq-accordion__icon::after {
                transform: translate(-50%, -50%) rotate(90deg)
            }

            .chart__title {
                font-size: 1.625rem;
                font-weight: 600;
                margin: 0 0 16px 0
            }

            .chart__inner {
                position: relative;
                width: 100%;
                max-width: 100%
            }

            .chart__source--small,.chart__source--small p {
                font-size: 10px;
                line-height: 11px;
                margin: 16px 0
            }

            .chart__source--small p:first-of-type {
                margin-top: 32px
            }

            .chart__source--small .rich-text ol li {
                list-style-type: decimal
            }

            .chart__source--small .rich-text li {
                list-style: inside
            }

            .chart canvas {
                display: block;
                width: 100% !important;
                height: auto !important
            }

            .chart--pie {
                position: relative;
                margin: auto auto auto 0;
                padding-bottom: 20px;
                width: 90%;
                max-width: 500px
            }

            @media(min-width: 1023px) {
                .chart--pie {
                    width:calc(100% + 40px)
                }
            }

            @media(min-width: 1440px) {
                .chart--pie {
                    margin:auto
                }

                .chart--pie.left {
                    margin: auto auto auto 0
                }
            }

            .chart--pie canvas {
                aspect-ratio: 1/1;
                height: auto !important
            }

            @media(min-width: 768px) {
                .chart--pie canvas {
                    height:auto !important;
                    aspect-ratio: unset
                }
            }

            .chart-container--pie {
                display: flex;
                flex-wrap: wrap
            }

            @media(min-width: 768px) {
                .chart-container--pie {
                    flex-wrap:nowrap
                }
            }

            .chart-container--pie .sector-stats__legend-wrapper {
                width: 100%;
                margin: 0 0 20px;
                align-items: flex-start;
                justify-content: center
            }

            @media(min-width: 768px) {
                .chart-container--pie .sector-stats__legend-wrapper {
                    width:50%;
                    margin: 0;
                    padding: 0 48px
                }
            }

            .chart--fixed-420 .chart__inner {
                height: 420px
            }

            .chart--fixed-420 canvas {
                height: 420px !important
            }

            .rates-and-specifications-hp {
                margin: 66px auto
            }

            @media(min-width: 1023px) {
                .rates-and-specifications-hp:first-child():has(h4) {
                    margin-top:160px
                }
            }

            @media(min-width: 768px) {
                .special-reports-hp {
                    margin-top:100px
                }
            }

            @media(min-width: 1023px) {
                .special-reports-hp {
                    margin-top:157px
                }
            }

            .rates-spec-cta {
                font-size: 1.25rem;
                margin-block:auto 16px;}

            .rates-spec-buttons {
                /* display:flex; */
                /* flex-wrap:wrap; */
                /* gap:8px; */
            }

            .case-studies {
                margin-top: 100px
            }

            @media(max-width: 1023px) {
                .breadcrumb--capability {
                    display:none
                }
            }

            .capability__ident-overlay {
                background-size: 100% auto;
                height: 100%;
                position: absolute;
                top: 0;
                width: 100%;
                display: flex;
                justify-content: center
            }

            .capability__ident-overlay img {
                height: 100%;
                flex-shrink: 0
            }

            .capability__ident-overlay::before,.capability__ident-overlay::after {
                content: "";
                background: #082a4b;
                opacity: .49593099;
                height: 100%;
                flex-grow: 1
            }

            .capabilities-section {
                padding: 33px 32px
            }

            @media(min-width: 1023px) {
                .capabilities-section {
                    padding:75px 32px
                }
            }

            .other-capability-section {
                padding-top: 66px
            }

            @media(min-width: 1023px) {
                .other-capability-section {
                    padding:150px 0 100px 0
                }
            }

            .capabilities-introduction__container.inset {
                margin: 33px 0 66px 0;
                position: relative
            }

            @media(min-width: 768px) {
                .capabilities-introduction__container.inset {
                    margin:150px 0
                }
            }

            .capabilities-introduction__container.inset .container {
                position: absolute;
                top: 68px;
                left: 32px;
                padding: 0;
                width: 320px
            }

            @media(min-width: 768px) {
                .capabilities-introduction__container.inset .container {
                    top:33%;
                    right: 20%;
                    left: unset;
                    width: 400px
                }
            }

            @media(min-width: 768px) {
                .capabilities-introduction__container.inset .section-block__subheader {
                    font-size:1.875rem
                }
            }

            .capabilities-introduction__container.inset .section-block__description p {
                font-size: 1rem;
                line-height: 1.25rem;
                margin-top: -15px
            }

            .capabilities-introduction__container.inset .section-block {
                padding: 10px 45px 45px
            }

            .capabilities-introduction__container.inset .capabilities-introduction__video {
                width: 90vw
            }

            .capabilities-introduction__container.bottom {
                display: flex;
                flex-direction: column-reverse;
                margin-bottom: 32px
            }

            .capabilities-introduction__container.bottom .capabilities-introduction__video {
                margin-top: 32px
            }

            @media(min-width: 768px) {
                .capabilities-introduction__container.bottom .capabilities-introduction__video {
                    margin:0 90px
                }

                .capabilities-introduction__container.bottom .section-block {
                    max-width: 66.66667%;
                    flex: 0 0 66.66667%
                }
            }

            @media(min-width: 768px) {
                .capabilities-introduction__container.left {
                    display:flex;
                    align-items: center;
                    margin: 0 90px
                }

                .capabilities-introduction__container.left>* {
                    width: 45%
                }
            }

            .capabilities-introduction__container .capabilities-introduction__video video {
                width: 100%;
                height: 100%;
                object-fit: cover;
                min-height: 550px
            }

            @media(min-width: 1023px) {
                .capabilities-introduction__container .capabilities-introduction__video video {
                    min-height:740px
                }
            }

            #articles {
                margin-top: -100px
            }

            @media(min-width: 1023px) {
                .page-case-study .section-block--header-image-overlap {
                    border-left:1px solid #fff
                }
            }

            @media(min-width: 1023px) {
                .page-case-study .section-block--header-image-overlap {
                    margin-top:-470px;
                    min-height: 370px;
                    background: #fff
                }
            }

            .case-studies {
                margin-top: 100px
            }

            .case-study-breadcrumb {
                position: absolute;
                top: 48px;
                z-index: 100
            }

            @media(max-width: 1023px) {
                .case-study-breadcrumb {
                    display:none
                }
            }

            @media(min-width: 1023px) {
                .case-study-tags {
                    display:flex;
                    justify-content: flex-start
                }
            }

            .case-study-tags__list {
                font-size: .875rem;
                margin-top: 20px;
                text-transform: uppercase
            }

            .case-study-tags__list:not(:last-child) {
                margin-right: 30px
            }

            .case-study-tags__list span::after {
                content: "|";
                margin: 0 0 0 5px
            }

            .case-study-tags__list span:last-child::after {
                content: ""
            }

            @media(min-width: 1023px) {
                .case-study__main-content {
                    margin-top:-120px;
                    z-index: 1
                }
            }

            .case-study__stats {
                display: flex;
                flex-wrap: wrap;
                padding: 0
            }

            @media(min-width: 1023px) {
                .case-study__stats {
                    align-content:baseline;
                    align-items: flex-start
                }
            }

            @media(min-width: 1023px) {
                .case-study__stats .button--download {
                    padding-left:0;
                    padding-right: 0;
                    width: 85%
                }
            }

            .case-study__stat-value {
                color: #99103d;
                font-size: 3.125rem;
                font-weight: 600
            }

            .case-study__stat-label p {
                font-size: .875rem;
                line-height: 1.3em;
                margin: 10px 0
            }

            .case-study__stat-source {
                font-size: .625rem;
                margin: 0 0 50px
            }

            .case-study__all-stats-source {
                font-size: .625rem;
                margin: 0 0 50px
            }

            .case-study .section-block--header-image-overlap {
                margin-bottom: 0
            }

            @media(min-width: 1023px) {
                .case-study .section-block--header-image-overlap {
                    margin-top:-380px
                }
            }

            .case-study__section-image {
                margin-left: -32px;
                width: 100vw
            }

            @media(min-width: 1023px) {
                .case-study__section-image {
                    margin-left:0;
                    width: 100%
                }
            }

            @media(max-width: 1022px) {
                .case-study__section-heading {
                    margin-top:37px
                }
            }

            .case-study__section-1 .rich-text img,.case-study__section-2 .rich-text img,.case-study__section-3 .rich-text img,.case-study__section-4 .rich-text img {
                height: auto;
                margin-left: -32px;
                width: calc(100vw - 32px)
            }

            @media(min-width: 1023px) {
                .case-study__section-1 .rich-text img,.case-study__section-2 .rich-text img,.case-study__section-3 .rich-text img,.case-study__section-4 .rich-text img {
                    margin:32px;
                    width: calc(50% - 32px)
                }
            }

            @media(min-width: 1023px) {
                .case-study__section-1 .rich-text img.full-width,.case-study__section-2 .rich-text img.full-width,.case-study__section-3 .rich-text img.full-width,.case-study__section-4 .rich-text img.full-width {
                    width:100%;
                    margin-left: 0;
                    margin-right: 0
                }
            }

            @media(min-width: 1023px) {
                .case-study__section-1 .rich-text img.left,.case-study__section-2 .rich-text img.left,.case-study__section-3 .rich-text img.left,.case-study__section-4 .rich-text img.left {
                    float:left;
                    margin-left: 0
                }
            }

            @media(min-width: 1023px) {
                .case-study__section-1 .rich-text img.right,.case-study__section-2 .rich-text img.right,.case-study__section-3 .rich-text img.right,.case-study__section-4 .rich-text img.right {
                    float:right;
                    margin-right: 0
                }
            }

            .case-study__solution-image {
                margin-left: -32px;
                width: calc(100vw - 32px)
            }

            .case-study__download {
                margin: 24px 0
            }

            .case-study__download-item {
                padding: 45px 0
            }

            @media(min-width: 1023px) {
                .case-study__download-item {
                    align-items:flex-start;
                    border-bottom: solid 1px #d8d8d8;
                    border-top: solid 1px #d8d8d8;
                    display: flex;
                    justify-content: space-between;
                    padding: 20px 0 0
                }
            }

            @media(min-width: 1023px) {
                .case-study__download-item-wrapper {
                    width:50%
                }
            }

            .case-study__download-item-title {
                font-size: 16px;
                font-weight: 600
            }

            .case-study__download-item-info {
                font-size: .875rem;
                font-weight: 200;
                margin: 10px 0 31px
            }

            .page-case-studies {
                background: #f7f7f7
            }

            @media(min-width: 768px) {
                .page-case-studies .h1-heading {
                    margin-top:-15px
                }
            }

            .page-case-studies .section-block--header-image-overlap {
                margin-top: -200px;
                min-height: 350px;
                padding-bottom: 20px
            }

            @media(min-width: 1023px) {
                .page-case-studies .section-block--header-image-overlap {
                    border-left:1px solid #f7f7f7;
                    margin-top: -420px
                }
            }

            .case-studies__description {
                color: #fff
            }

            .case-studies__description p {
                margin-top: 0
            }

            .contact-form {
                height: 0;
                opacity: 0;
                overflow: hidden;
                position: absolute
            }

            .contact-form p {
                font-size: 1.375rem;
                line-height: 1.75rem
            }

            .contact-form__desktop-selection {
                display: none
            }

            @media(min-width: 1023px) {
                .contact-form__desktop-selection {
                    display:block
                }
            }

            .contact-form__desktop-selection-title {
                font-size: 2.5rem;
                font-weight: 600
            }

            .contact-form__mobile-selection {
                margin-bottom: 10px
            }

            @media(min-width: 1023px) {
                .contact-form__mobile-selection {
                    display:none
                }
            }

            .contact-form__mobile-selection-title {
                font-size: xx-large;
                font-weight: 600;
                margin-bottom: 30px
            }

            .contact-form__mobile-selection-type-label {
                font-size: 1.25rem;
                margin-bottom: 30px
            }

            .contact-form__mobile-selection-input {
                align-content: center;
                align-items: center;
                display: flex;
                flex-wrap: wrap-reverse;
                margin-top: 20px
            }

            .contact-form__mobile-selection-input label {
                display: inline-block;
                margin: 7px 0 0 20px
            }

            .contact-form__mobile-selection-next {
                text-align: right
            }

            .contact-form__mobile-selection-next .button {
                display: inline-block;
                margin-top: 50px
            }

            .contact-form__mobile-selection-next .button:focus-visible {
                outline: -webkit-focus-ring-color auto 1px;
                outline-offset: 1px
            }

            .contact-form__mobile-selection-next .button:disabled {
                filter: grayscale(100%);
                opacity: .3;
                pointer-events: none
            }

            .contact-form--visible,.contact-form.dropdown--visible {
                height: auto;
                opacity: 1;
                position: relative;
                transition: opacity .2s linear;
                overflow: visible
            }

            .contact-form__wrapper {
                margin-bottom: 50px
            }

            @media(min-width: 1023px) {
                .contact-form__wrapper {
                    margin:50px 0 75px 0
                }
            }

            .contact-form__description {
                margin: 0
            }

            .contact-form__title {
                font-size: 30px;
                font-weight: 600;
                line-height: 1.2em
            }

            .contact-form__step-title span {
                display: none
            }

            @media(min-width: 1023px) {
                .contact-form__step-title {
                    display:flex;
                    align-items: center
                }

                .contact-form__step-title span {
                    display: block;
                    margin-left: 10px
                }
            }

            .contact-form__telephone {
                display: flex;
                position: relative
            }

            .contact-form__telephone select {
                padding-right: 71px;
                width: 90px
            }

            @-moz-document url-prefix() {
                .contact-form__telephone select {
                    color: #fff
                }
            }

            .contact-form__telephone input[type=tel] {
                margin-left: 20px
            }

            .contact-form__telephone-prefix {
                bottom: .8rem;
                display: inline-block;
                font-size: 16px;
                left: 35px;
                pointer-events: none;
                position: absolute;
                transform: translateX(-50%);
                top: 16px
            }

            .contact-form__telephone .generic-error-message {
                bottom: -20px;
                left: 120px
            }

            .contact-form__phone-prefix-label {
                opacity: 0;
                position: absolute
            }

            .contact-form__privacy-agreement {
                margin-top: 45px;
                padding: 0 0 0 40px;
                position: relative
            }

            .contact-form__privacy-agreement input[type=checkbox] {
                left: 0;
                position: absolute;
                top: 0
            }

            .contact-form__privacy-agreement-label,.contact-form__privacy-agreement p {
                font-size: 16px;
                font-weight: 400;
                margin: 0 0 20px
            }

            .contact-form__privacy-agreement-label {
                pointer-events: none
            }

            .contact-form__submit {
                display: none
            }

            @media(min-width: 1023px) {
                .contact-form__submit {
                    display:flex
                }
            }

            .contact-form__contact-info {
                line-height: 1.5em;
                margin-bottom: 20px
            }

            .contact-form__contact-info a {
                white-space: nowrap;
                font-weight: normal;
                font-size: 1.375rem
            }

            .contact-form__contact-info p {
                margin: 0
            }

            .contact-form__contact-info-wrapper {
                margin: 30px 0
            }

            @media(min-width: 1023px) {
                .contact-form__contact-info-wrapper {
                    margin-bottom:0
                }
            }

            @media(min-width: 1023px) {
                .contact-form__info-grid {
                    display:flex;
                    flex-direction: row
                }

                .contact-form__info-grid>* {
                    width: 25%
                }
            }

            .contact-form__other-title {
                font-weight: bold
            }

            .contact-form__section-wrapper {
                display: none;
                flex-wrap: wrap;
                width: 100%;
                z-index: 2;
                position: relative
            }

            @media(min-width: 1023px) {
                .contact-form__section-wrapper {
                    display:flex;
                    position: unset
                }
            }

            .contact-form__btn-wrapper {
                display: flex;
                flex-wrap: wrap;
                margin-top: 80px;
                width: 100%
            }

            .contact-form__btn-wrapper .button {
                width: 100%
            }

            .contact-form__btn-wrapper .button:focus-visible {
                outline: -webkit-focus-ring-color auto 1px;
                outline-offset: 5px
            }

            @media(min-width: 1023px) {
                .contact-form__btn-wrapper .button {
                    width:auto
                }
            }

            .contact-form__char-count {
                float: right;
                margin-top: -32px
            }

            .contact-form__other-texts {
                margin-top: 30px
            }

            .contact-form__other-texts>* {
                margin-bottom: 30px
            }

            .contact-form__redirect-text p:first-child {
                margin-bottom: 8px;
                font-weight: bold
            }

            .contact-form__redirect-text p {
                margin: 0
            }

            .grecaptcha-badge {
                visibility: hidden
            }

            #other-form p {
                margin: 3px 0
            }

            #other-form a {
                font-weight: 200
            }

            @media(min-width: 1023px) {
                #my-client-form .contact-form__progress-buttons {
                    display:none
                }
            }

            #my-client-form .desktop-step-btn {
                display: none
            }

            @media(min-width: 1023px) {
                #my-client-form .desktop-step-btn {
                    display:block
                }
            }

            #my-client-form .desktop-step .contact-form__btn-wrapper {
                display: none
            }

            @media(min-width: 1023px) {
                #my-client-form .desktop-step .contact-form__btn-wrapper {
                    display:flex
                }
            }

            @media(min-width: 1023px) {
                #my-client-form .contact-form__desktop-step-1.show {
                    display:flex;
                    height: auto;
                    opacity: 1;
                    position: relative;
                    transition: opacity .2s linear;
                    overflow: visible
                }
            }

            @media(min-width: 1023px) {
                .hide-desktop-step {
                    height:0;
                    opacity: 0;
                    overflow: hidden;
                    position: absolute
                }
            }

            .event-page {
                background-color: #f7f7f7
            }

            .event-page.background--grey,.event-page .background--grey {
                background-color: #f7f7f7
            }

            .event-page.background--white,.event-page .background--white {
                background-color: #fff
            }

            .event-page,.event-page .background--salmon,.event-page .background--salmon {
                background-color: #fff1e5
            }

            .event-page.background--pink,.event-page .background--pink {
                background-color: #fcd0b1
            }

            .event-page .site-header__intro-block {
                margin: 72px 0 0
            }

            @media(min-width: 768px) {
                .event-page .site-header__intro-block {
                    margin:70px 0 0
                }
            }

            @media(min-width: 500px) {
                .event-page .site-header__intro-block a {
                    margin-top:30px
                }
            }

            @media(min-width: 1023px) {
                .event-page .site-header__intro-block {
                    margin:0
                }
            }

            @media(min-width: 1280px) {
                .event-page .site-header__intro-block {
                    margin:30px 0 0
                }
            }

            .event-page .button {
                white-space: nowrap
            }

            .event-page .button.text-maroon {
                border-color: #99103d;
                color: #99103d
            }

            .event-page .button.text-maroon:hover {
                background: #99103d !important;
                color: #fff;
                border-color: #99103d
            }

            .event-page .button.text-blue-grey {
                border-color: #262a33;
                color: #262a33
            }

            .event-page .button.text-blue-grey:hover {
                background: #262a33 !important;
                color: #fff;
                border-color: #262a33
            }

            .event-page .button.text-dark {
                border-color: #fff;
                color: #fff
            }

            .event-page .button.text-dark:hover {
                background: #fff !important;
                color: #333;
                border-color: #fff
            }

            .event-page--dark {
                background-color: #000;
                color: #fff
            }

            .event-page--dark .text-dark {
                color: #fff
            }

            .event-page--dark .image-dark {
                background-color: #fff
            }

            .event-page--dark .typography-eyebrow--dark {
                color: #fff
            }

            .event-page strong {
                font-weight: 600
            }

            .event-page__content_ctas {
                gap: 10px
            }

            .event-page__image-square {
                width: 100%;
                aspect-ratio: 1/1;
                object-fit: cover
            }

            @media(min-width: 1440px) {
                .event-page__image-square {
                    height:244px
                }
            }

            .event-page__image-responsive {
                width: 100%;
                height: auto;
                display: block
            }

            .event-page__image-responsive--tall {
                height: 620px;
                width: 100%;
                object-fit: cover
            }

            .event-page__map-button {
                background: rgba(0,0,0,0);
                border-radius: 50px;
                padding: 10px 30px;
                align-self: flex-start;
                display: inline-block
            }

            @media(min-width: 1023px) {
                .event-page__panellist-image__horizontal {
                    width:50%;
                    flex-shrink: 0
                }
            }

            .event-page__panellist-content__horizontal {
                flex-shrink: 1
            }

            .event-page__panellist-name {
                margin: 0
            }

            .event-page__panellist-info {
                margin-top: 0
            }

            .event-page__panellist-info p {
                margin: 0
            }

            .event-page__map-container {
                width: 100%;
                height: 100%;
                min-height: 400px;
                background: #eee;
                background-size: cover;
                background-position: center;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #555;
                position: relative
            }

            .event-page__map-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0
            }

            @media(max-width: 767px) {
                .event-page__map-container {
                    display:none
                }
            }

            .event-page .stats-display--reversed {
                flex-direction: row-reverse
            }

            .event-page .stats-display__title {
                font-weight: 600
            }

            .event-page .stats-display__title--large {
                font-size: 1.875rem;
                line-height: 2.125rem
            }

            @media(min-width: 1023px) {
                .event-page .stats-display__title--large {
                    font-size:3.125rem;
                    line-height: 2.625rem
                }
            }

            .event-page .stats-display__value--large {
                font-size: 3.75rem;
                line-height: 5.25rem;
                font-weight: 600
            }

            @media(min-width: 1023px) {
                .event-page .stats-display__value--large {
                    font-size:7.5rem;
                    line-height: 7.5rem
                }
            }

            .event-page .stats-display__description {
                margin-top: 0;
                max-width: 75%
            }

            .event-page .stats-display__description--large {
                font-size: 1.375rem;
                line-height: 1.75rem
            }

            .event-page .stats-display__title--medium {
                font-size: 1.25rem;
                line-height: 1.5rem
            }

            @media(min-width: 768px) {
                .event-page .stats-display__title--medium {
                    font-size:1.875rem;
                    line-height: 2.125rem
                }
            }

            .event-page .stats-display__value--medium {
                font-size: 3.125rem;
                line-height: 3.375rem;
                font-weight: 600
            }

            @media(min-width: 768px) {
                .event-page .stats-display__value--medium {
                    font-size:3.75rem;
                    line-height: 5.25rem
                }
            }

            .event-page .stats-display__description--medium {
                font-size: 1rem;
                line-height: 1.375rem
            }

            @media(min-width: 768px) {
                .event-page .stats-display__description--medium {
                    font-size:1.375rem;
                    line-height: 1.75rem
                }
            }

            .event-page .stats-display__title--small {
                font-size: 1.875rem;
                line-height: 2.125rem
            }

            .event-page .stats-display__value--small {
                font-size: 3.125rem;
                line-height: 3.375rem;
                font-weight: 600
            }

            @media(min-width: 768px) {
                .event-page .stats-display__value--small {
                    font-size:3.75rem;
                    line-height: 5.25rem
                }
            }

            .event-page .stats-display__description--small {
                font-size: 1rem;
                line-height: 1.375rem
            }

            @media(min-width: 768px) {
                .event-page .stats-display__description--small {
                    font-size:1.375rem;
                    line-height: 1.75rem
                }
            }

            .event-page .highlight-paragraph .attribution {
                font-size: 24px;
                line-height: 34px;
                font-weight: 400
            }

            .event-page .column-copy__columns {
                row-gap: 20px
            }

            @media(min-width: 1023px) {
                .event-page .column-copy__columns {
                    row-gap:40px
                }
            }

            .event-page .column-copy__title--small {
                font-size: .75rem;
                line-height: 1.125rem;
                text-transform: uppercase;
                font-weight: 600;
                font-family: Metric,sans-serif
            }

            @media(min-width: 768px) {
                .event-page .column-copy__title--small {
                    font-size:.875rem
                }
            }

            .event-page .logo-grid__title {
                font-weight: 600;
                font-size: 1.875rem;
                line-height: 2.125rem
            }

            @media(min-width: 1023px) {
                .event-page .logo-grid__title {
                    font-size:3.125rem;
                    line-height: 2.625rem
                }
            }

            .event-page .logo-grid__copy,.event-page .logo-grid__copy p {
                font-weight: 500
            }

            .event-page .logo-grid--centered {
                justify-content: center;
                text-align: center
            }

            .event-page .logo-grid__logos {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 16px;
                background: rgba(0,0,0,0);
                border: none
            }

            @media(min-width: 1023px) {
                .event-page .logo-grid__logos {
                    gap:24px
                }
            }

            .event-page .logo-grid__logo {
                min-height: 110px;
                background: rgba(0,0,0,0);
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 16px;
                margin-bottom: 0;
                border: none;
                flex: 0 0 calc((100% - 32px)/3);
                max-width: calc((100% - 32px)/3)
            }

            @media(min-width: 1023px) {
                .event-page .logo-grid__logo {
                    min-height:95px;
                    padding: 18px 14px;
                    flex: 0 0 calc((100% - 144px)/7);
                    max-width: calc((100% - 144px)/7)
                }
            }

            .event-page .logo-grid__logo__img {
                max-width: 100%;
                max-height: 60px;
                width: auto;
                height: auto;
                object-fit: contain;
                display: block
            }

            .event-page .chart .rich-text b {
                font-weight: 500
            }

            .template-contact-confirmation .calendar-button-group {
                display: flex;
                flex-wrap: wrap;
                gap: 15px;
                margin-top: 20px
            }

            .template-contact-confirmation .calendar-button-group .calendar-title {
                font-size: 16px;
                font-weight: 600;
                width: 100%
            }

            .template-contact-confirmation .calendar-button-group .btn {
                display: flex;
                gap: 8px;
                align-items: center;
                font-size: 14px;
                border: 1px solid #99103d;
                border-radius: 2px;
                background-color: rgba(0,0,0,0);
                color: #99103d;
                padding: 10px 15px;
                text-decoration: none;
                font-weight: 600;
                transition: background-color .3s,color .3s
            }

            .template-contact-confirmation .calendar-button-group .btn:hover {
                background-color: rgba(94,11,38,.1019607843);
                border-color: #5f0c27
            }

            .template-contact-confirmation .calendar-button-group .btn::before {
                content: "";
                display: inline-block;
                width: 11px;
                height: 11px;
                flex-shrink: 0;
                background-repeat: no-repeat;
                background-size: contain;
                background-image: url("data:image/svg+xml,%3Csvg width=%2711%27 height=%2711%27 viewBox=%270 0 11 11%27 fill=%27none%27 xmlns=%27http://www.w3.org/2000/svg%27%3E%3Cpath fill-rule=%27evenodd%27 clip-rule=%27evenodd%27 d=%27M6.00003 0.3C6.00003 0.13432 6.13435 0 6.30003 0H9.90003C10.0657 0 10.2 0.13432 10.2 0.3V3.9C10.2 4.06568 10.0657 4.2 9.90003 4.2H9.30003C9.13435 4.2 9.00003 4.06568 9.00003 3.9V2.04853L4.83643 6.21213C4.71926 6.3293 4.52933 6.3293 4.41216 6.21213L3.9879 5.78787C3.87073 5.67073 3.87073 5.48077 3.9879 5.3636L8.1515 1.2H6.30003C6.13435 1.2 6.00003 1.06568 6.00003 0.9V0.3Z%27 fill=%27%2399103D%27/%3E%3Cpath fill-rule=%27evenodd%27 clip-rule=%27evenodd%27 d=%27M0 0.899609C0 0.733929 0.13432 0.599609 0.3 0.599609H3.9C4.06568 0.599609 4.2 0.733929 4.2 0.899609V1.49961C4.2 1.66529 4.06568 1.79961 3.9 1.79961H1.2V8.99961H8.4V6.29961C8.4 6.13393 8.53432 5.99961 8.7 5.99961H9.3C9.46568 5.99961 9.6 6.13393 9.6 6.29961V9.89961C9.6 10.0653 9.46568 10.1996 9.3 10.1996H0.3C0.13432 10.1996 0 10.0653 0 9.89961V0.899609Z%27 fill=%27%2399103D%27/%3E%3C/svg%3E")
            }

            .template-contact-confirmation .calendar-button-group .btn.download::before {
                background-image: url("data:image/svg+xml,%3Csvg width=%2711%27 height=%2711%27 viewBox=%270 0 5 6%27 fill=%27none%27 xmlns=%27http://www.w3.org/2000/svg%27%3E%3Cpath fill-rule=%27evenodd%27 clip-rule=%27evenodd%27 d=%27M4.95 5.3625C4.95 5.43844 4.88844 5.5 4.8125 5.5H0.1375C0.0615633 5.5 0 5.43844 0 5.3625V5.0875C0 5.01156 0.0615633 4.95 0.1375 4.95H4.8125C4.88844 4.95 4.95 5.01156 4.95 5.0875V5.3625Z%27 fill=%27%2399103D%27/%3E%3Cpath d=%27M2.78545 3.07227V0.1375C2.78545 0.0615633 2.72389 0 2.64795 0H2.37295C2.29701 0 2.23545 0.0615633 2.23545 0.1375V3.07227L1.58599 2.46578C1.53181 2.41521 1.44732 2.41665 1.39491 2.46905L1.19898 2.66499C1.1446 2.71936 1.14539 2.80776 1.20073 2.86116L2.41325 4.03121C2.46721 4.08328 2.55293 4.08251 2.60596 4.02949L3.77426 2.86119C3.82796 2.80749 3.82796 2.72044 3.77426 2.66674L3.57984 2.47233C3.52614 2.41863 3.43909 2.41863 3.38539 2.47233L2.78545 3.07227Z%27 fill=%27%2399103D%27/%3E%3C/svg%3E")
            }

            .data-page__intro-copy-text {
                font-weight: bold;
                color: #99103d;
                font-size: 30px;
                line-height: 1.3;
                margin: 0
            }

            @media(min-width: 1023px) {
                .data-page__intro-copy-text {
                    font-size:50px
                }
            }

            .data-page__intro-grid-inner {
                padding-left: 0
            }

            .data-page__intro-grid-item {
                margin-bottom: 24px
            }

            @media(min-width: 1023px) {
                .data-page__intro-grid-item {
                    margin-bottom:32px;
                    padding-right: 100px
                }
            }

            .data-page__intro-grid-heading {
                font-size: 12px;
                font-weight: bold;
                color: #99103d;
                text-transform: uppercase;
                letter-spacing: .02em;
                margin: 0 0 6px 0
            }

            @media(min-width: 1023px) {
                .data-page__intro-grid-heading {
                    font-size:14px;
                    margin-bottom: 8px
                }
            }

            .data-page__intro-grid-value {
                font-size: 22px;
                font-weight: 400;
                color: #4a4a4a;
                line-height: 1.4;
                margin: 0
            }

            @media(min-width: 1023px) {
                .data-page__intro-grid-value {
                    font-size:22px
                }
            }

            .data-page__consultancies {
                padding: 50px 0;
                background-color: #fff
            }

            @media(min-width: 1440px) {
                .data-page__consultancies {
                    padding:100px 0
                }
            }

            .data-page__consultancies-copy {
                background: rgba(0,0,0,0);
                color: #99103d;
                font-family: "Metric",Arial,sans-serif;
                font-weight: bold;
                font-style: normal;
                font-size: 22px;
                line-height: 28px;
                letter-spacing: 0;
                text-align: left;
                vertical-align: middle;
                padding: 30px 20px
            }

            @media(min-width: 1440px) {
                .data-page__consultancies-copy {
                    text-align:center;
                    padding: 40px 32px
                }
            }

            .data-page__consultancies-copy-paragraph {
                margin: 0 0 25px;
                font-weight: bold
            }

            .data-page__consultancies-logos {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 16px;
                background: rgba(0,0,0,0);
                border: none
            }

            @media(min-width: 1023px) {
                .data-page__consultancies-logos {
                    gap:24px
                }
            }

            .data-page__consultancies-logo {
                min-height: 110px;
                background: rgba(0,0,0,0);
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 16px;
                margin-bottom: 0;
                border: none;
                flex: 0 0 calc((100% - 32px)/3);
                max-width: calc((100% - 32px)/3)
            }

            @media(min-width: 1023px) {
                .data-page__consultancies-logo {
                    min-height:95px;
                    padding: 18px 14px;
                    flex: 0 0 calc((100% - 144px)/7);
                    max-width: calc((100% - 144px)/7)
                }
            }

            .data-page__consultancies-logo-img {
                max-width: 100%;
                max-height: 60px;
                width: auto;
                height: auto;
                object-fit: contain;
                display: block
            }

            .data-page__findings {
                padding: 50px 0;
                background-color: #f5f5f5
            }

            @media(min-width: 1440px) {
                .data-page__findings {
                    padding:100px 0
                }
            }

            .data-page__findings-header {
                font-family: "Metric",Arial,sans-serif;
                font-weight: 600;
                font-style: normal;
                font-size: 30px;
                line-height: 1.2;
                letter-spacing: 0;
                color: #333;
                margin: 0 0 50px 0;
                vertical-align: middle
            }

            @media(min-width: 1440px) {
                .data-page__findings-header {
                    font-size:50px
                }
            }

            .data-page__findings-para {
                font-family: "Metric",Arial,sans-serif;
                font-weight: 300;
                font-style: normal;
                font-size: 22px;
                line-height: 28px;
                letter-spacing: 0;
                color: #333;
                margin: 0 0 20px 0;
                vertical-align: middle
            }

            .data-page__findings-para:last-of-type {
                margin-bottom: 40px
            }

            .data-page__findings-stats {
                margin-top: 0;
                margin-bottom: 80px
            }

            .data-page__donut-chart {
                margin-bottom: 40px
            }

            .data-page__donut-chart-heading {
                font-family: "Metric",Arial,sans-serif;
                font-weight: 600;
                font-style: normal;
                font-size: 20px;
                line-height: 34px;
                letter-spacing: 0;
                color: #333;
                margin: 0 0 24px 0;
                vertical-align: middle
            }

            @media(min-width: 1440px) {
                .data-page__donut-chart-heading {
                    font-size:30px;
                    margin-bottom: 32px
                }
            }

            .data-page__donut-chart-row {
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                gap: 24px
            }

            .data-page__donut-chart-inner {
                position: relative;
                width: 90%;
                max-width: 320px
            }

            @media(min-width: 1023px) {
                .data-page__donut-chart-inner {
                    max-width:380px
                }
            }

            .data-page__donut-chart-legend-wrapper {
                flex: 1;
                min-width: 200px;
                display: flex;
                flex-direction: column;
                align-items: flex-start
            }

            @media(max-width: 767px) {
                .data-page__donut-chart-legend-wrapper {
                    order:2;
                    width: 100%;
                    margin: 0;
                    padding: 0
                }
            }

            @media(max-width: 767px) {
                .data-page__donut-chart .chart-container--pie {
                    flex-wrap:wrap;
                    align-items: flex-start
                }
            }

            @media(min-width: 768px) {
                .data-page__donut-chart .chart-container--pie {
                    flex-wrap:nowrap;
                    align-items: center
                }
            }

            @media(max-width: 767px) {
                .data-page__donut-chart .chart {
                    order:1
                }
            }

            @media(min-width: 768px) {
                .data-page__donut-chart .chart-container--pie .sector-stats__legend-wrapper.data-page__donut-chart-legend-wrapper {
                    align-self:center;
                    margin: 0 0 0 -80px;
                    padding: 0 48px 0 0
                }
            }

            .data-page__donut-chart .sector-stats__legend {
                list-style: none;
                margin: 0;
                padding: 0
            }

            .data-page__donut-chart .sector-stats__legend li {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
                font-family: "Metric",Arial,sans-serif;
                color: #333;
                transition: font-weight .15s ease
            }

            .data-page__donut-chart .sector-stats__legend li.active {
                font-weight: 700
            }

            .data-page__donut-chart .sector-stats__legend li.active .sector-stats__legend-value {
                font-weight: 700
            }

            .data-page__donut-chart .sector-stats__legend li.active .sector-stats__legend-label {
                font-weight: 700
            }

            .data-page__donut-chart .sector-stats__legend-color {
                flex-shrink: 0;
                width: 12px;
                height: 12px;
                margin-right: 12px;
                border-radius: 2px
            }

            .data-page__donut-chart .sector-stats__legend-value {
                font-size: 14px;
                font-weight: 600;
                margin-right: 8px
            }

            .data-page__donut-chart .sector-stats__legend-label {
                font-size: 14px;
                font-weight: 400
            }

            .data-page__donut-chart-source {
                margin-top: 16px;
                margin-bottom: 0;
                color: #666;
                font-size: 12px;
                line-height: 1.4
            }

            .data-page__chart-fullwidth {
                width: 100%;
                max-width: 100%
            }

            .data-page__h-bar {
                margin-top: 60px;
                width: 100%;
                max-width: 100%
            }

            .data-page__h-bar-heading {
                font-family: "Metric",Arial,sans-serif;
                font-weight: 600;
                font-style: normal;
                font-size: 20px;
                line-height: 1.2;
                letter-spacing: 0;
                color: #333;
                margin: 0 0 20px 0
            }

            @media(min-width: 1023px) {
                .data-page__h-bar-heading {
                    font-size:30px
                }
            }

            .data-page__h-bar-chart-inner {
                position: relative;
                width: 100%;
                overflow: visible
            }

            .data-page__h-bar-chart {
                width: 100%
            }

            .data-page__h-bar-source {
                margin-top: 24px;
                margin-bottom: 0;
                color: #666;
                font-size: 16px;
                line-height: 1.4
            }

            .data-page__business-priorities {
                background-color: #fcd0b1;
                padding: 60px 0
            }

            @media(min-width: 1023px) {
                .data-page__business-priorities {
                    padding:80px 0
                }
            }

            .data-page__donut-group {
                padding: 60px 0
            }

            @media(min-width: 1023px) {
                .data-page__donut-group {
                    padding:80px 0
                }
            }

            .data-page__donut-group-section-title {
                font-family: "Metric",Arial,sans-serif;
                font-weight: 600;
                font-style: normal;
                font-size: 24px;
                line-height: 1.2;
                letter-spacing: 0;
                color: #333;
                margin: 0 0 40px 0
            }

            @media(min-width: 1023px) {
                .data-page__donut-group-section-title {
                    font-size:36px;
                    margin-bottom: 48px
                }
            }

            .data-page__donut-group-item {
                margin-bottom: 60px
            }

            @media(min-width: 1023px) {
                .data-page__donut-group-item {
                    margin-bottom:80px
                }
            }

            .data-page__donut-group-item:last-child {
                margin-bottom: 0
            }

            .data-page__advice-drivers {
                background-color: #fcd0b1;
                padding: 60px 0
            }

            @media(min-width: 1023px) {
                .data-page__advice-drivers {
                    padding:80px 0
                }
            }

            .data-page__stacked-h-bar--desktop-only {
                display: none
            }

            @media(min-width: 1023px) {
                .data-page__stacked-h-bar--desktop-only {
                    display:block
                }
            }

            .data-page__stacked-h-bar--mobile-only {
                display: block
            }

            @media(min-width: 1023px) {
                .data-page__stacked-h-bar--mobile-only {
                    display:none
                }
            }

            .data-page__stacked-h-bar {
                width: 100%;
                max-width: 100%
            }

            .data-page__stacked-h-bar-heading {
                font-family: "Metric",Arial,sans-serif;
                font-weight: 600;
                font-size: 24px;
                line-height: 1.2;
                letter-spacing: 0;
                color: #333;
                margin: 0 0 24px 0
            }

            @media(max-width: 767px) {
                .data-page__stacked-h-bar-heading {
                    margin-bottom:14px
                }
            }

            @media(min-width: 1023px) {
                .data-page__stacked-h-bar-heading {
                    font-size:36px
                }
            }

            .data-page__stacked-h-bar-mobile-legend {
                margin: 0 0 25px 0
            }

            .data-page__stacked-h-bar-legend-list {
                display: flex;
                flex-wrap: wrap;
                gap: 12px 18px;
                list-style: none;
                margin: 0;
                padding: 0
            }

            .data-page__stacked-h-bar-legend-item {
                display: flex;
                align-items: center;
                gap: 8px;
                color: #333;
                font-family: "Metric",Arial,sans-serif;
                font-size: 13px;
                font-weight: 700;
                line-height: 1.2
            }

            .data-page__stacked-h-bar-legend-swatch {
                display: block;
                width: 16px;
                height: 16px;
                flex: 0 0 16px;
                border: 1px solid #000
            }

            .data-page__stacked-h-bar-chart-inner {
                position: relative;
                width: 100%;
                overflow: visible
            }

            .data-page__stacked-h-bar-chart {
                width: 100%
            }

            .data-page__stacked-h-bar-source {
                margin-top: 24px;
                margin-bottom: 0;
                color: #666;
                font-size: 14px;
                line-height: 1.5
            }

            .data-page__chart-center {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                pointer-events: none;
                min-width: 80px;
                opacity: 0;
                transition: opacity .15s ease
            }

            .data-page__chart-center.is-active {
                opacity: 1
            }

            .data-page__chart-center-value {
                font-family: "Metric",Arial,sans-serif;
                font-weight: 600;
                font-size: 2rem;
                line-height: 1.2;
                display: block
            }

            @media(min-width: 1023px) {
                .data-page__chart-center-value {
                    font-size:2.5rem
                }
            }

            @media(min-width: 1440px) {
                .data-page__chart-center-value {
                    font-weight:400
                }
            }

            .data-page__chart-center-label {
                font-family: "Metric",Arial,sans-serif;
                font-weight: 400;
                font-size: .875rem;
                color: #666;
                line-height: 1.3;
                text-align: center;
                margin-top: 4px
            }

            .section-block--audience-page {
                margin-bottom: 0;
                padding-bottom: 0
            }

            @media(min-width: 1023px) {
                .section-block--audience-page {
                    margin-bottom:90px;
                    margin-top: -181px
                }
            }

            .audience-page__intro {
                background: #fff1e5;
                padding-top: 75px
            }

            @media(min-width: 1023px) {
                .audience-page__intro {
                    padding-bottom:30px
                }
            }

            .audience-page__sub-title {
                font-size: 1.875rem;
                font-weight: 600;
                line-height: 1.875rem;
                margin-bottom: -10px;
                margin-top: 25px
            }

            @media(min-width: 1023px) {
                .audience-page__sub-title {
                    font-size:1.875rem;
                    line-height: 2.125rem
                }
            }

            .audience-page__stat-value {
                color: #99103d;
                font-size: 3.125rem;
                font-weight: 600
            }

            .audience-page__stat-label {
                font-size: 16px;
                line-height: 1.125rem;
                width: 125px;
                font-weight: 300;
                margin-bottom: 15px
            }

            .audience-page__stat-source {
                font-size: .625rem;
                margin-bottom: 15px
            }

            @media(min-width: 1023px) {
                .audience-page__sector-stats {
                    display:inline-flex;
                    width: 50%
                }
            }

            .audience-page__stats-source-container {
                max-width: 200px;
                padding: 0 20px
            }

            .audience-page__sector-stats-source {
                font-size: .625rem;
                font-weight: 400;
                margin: 50px 0 50px 32px;
                width: 160px
            }

            @media(min-width: 768px) {
                .audience-page__sector-stats-source {
                    margin:0 0 0 32px
                }
            }

            .audience-page__stats {
                margin-top: 80px
            }

            @media(min-width: 768px) {
                .audience-page__stats {
                    margin-top:120px
                }
            }

            .audience-page__corporate-stats-source,.audience-page__consumer-stats-source {
                font-size: .625rem;
                font-weight: 400;
                margin: 0 0 36px;
                width: 160px
            }

            .audience-page__tabs-section {
                padding: 30px 0px 80px 0
            }

            @media(min-width: 768px) {
                .audience-page__tabs-section {
                    padding:80px 0
                }
            }

            .audience-page__tabs-section .tabs--content.is-shown {
                margin-top: 40px
            }

            @media(min-width: 1023px) {
                .audience-page__tabs-section .tabs--content.is-shown {
                    margin-top:0
                }
            }

            .audience-page__tabs-section .audience-page__stat-label {
                margin-bottom: 30px;
                font-weight: 400;
                line-height: 22px
            }

            .audience-page__tabs.tabs {
                margin-top: 0
            }

            @media(min-width: 1023px) {
                .audience-page__tabs.tabs>li {
                    display:flex;
                    margin-top: 20px
                }

                .audience-page__tabs.tabs>li:first-child {
                    margin-top: 0
                }
            }

            .audience-page__tabs.tabs>li>button {
                text-transform: unset;
                color: rgba(51,51,51,.6);
                font-size: 1.5rem;
                font-weight: 600;
                margin: 0;
                padding: 0 20px 0 0
            }

            .audience-page__tabs.tabs>li>button::after {
                margin-top: 2px
            }

            @media(min-width: 1023px) {
                .audience-page__tabs.tabs>li>button {
                    padding:0
                }
            }

            .audience-page__tabs.tabs>li>button.is-active {
                color: #333
            }

            .audience-page__downloads {
                margin: 24px 0
            }

            .audience-page__downloads-item {
                border-bottom: solid 1px rgba(51,51,51,.2);
                padding: 45px 0;
                gap: 20px
            }

            @media(min-width: 768px) {
                .audience-page__downloads-item {
                    display:flex;
                    justify-content: space-between;
                    padding: 30px 0;
                    align-items: start
                }
            }

            .audience-page__downloads-item-info {
                font-weight: 400;
                font-size: .875rem;
                color: #66605c;
                margin: 8px 0 30px 0
            }

            @media(min-width: 768px) {
                .audience-page__downloads-item-info {
                    margin:8px 0 0 0
                }
            }

            .audience-page__downloads-item:first-child {
                border-top: solid 1px rgba(51,51,51,.2)
            }

            .audience-page__downloads-item:last-child {
                border-bottom: none
            }

            .audience-page__downloads-item-title {
                font-size: 16px;
                font-weight: 600;
                color: #4a4a4a
            }

            @media(min-width: 768px) {
                .audience-page__downloads-item-text {
                    padding-right:20px
                }
            }

            .audience-page__downloads-item-description {
                font-size: .875rem;
                font-weight: 200
            }

            .audience-page__insights {
                padding-top: 52px
            }

            .audience-page__ident-wrapper {
                position: relative
            }

            @media(min-width: 1023px) {
                .audience-page__ident-wrapper {
                    height:320px
                }
            }

            .audience-page__ident-wrapper .capability__ident-overlay {
                overflow: hidden
            }

            @media(min-width: 1023px) {
                .audience-page__ident-wrapper .capability__ident-overlay {
                    left:0;
                    width: 100%
                }
            }

            .audience-page__insight-block {
                background: #f6f6f6;
                margin-bottom: 30px;
                height: 100%
            }

            @media(min-width: 1023px) {
                .audience-page__insight-block {
                    display:flex;
                    flex-direction: column;
                    margin-bottom: 0
                }
            }

            .audience-page__insight-block-image {
                width: 100%
            }

            @media(min-width: 1023px) {
                .audience-page__insight-block-image {
                    flex-shrink:0;
                    height: 100%;
                    margin-left: 0;
                    object-fit: cover
                }
            }

            .audience-page__insight-block-text {
                padding: 20px
            }

            @media(min-width: 1023px) {
                .audience-page__insight-block-text {
                    align-content:center;
                    display: flex;
                    flex-direction: column;
                    padding: 32px
                }
            }

            @media all and (-ms-high-contrast: none),(-ms-high-contrast: active) {
                .audience-page__insight-block-text {
                    display: block
                }
            }

            .audience-page__insight-block-title {
                font-size: 1.5rem;
                font-weight: 600
            }

            .audience-page__insight-block p {
                margin: 20px 0
            }

            .audience-page__readership-reach-paragraph {
                font-size: 1.375rem;
                line-height: 1.625rem;
                margin-top: 16px
            }

            @media(min-width: 1023px) {
                .audience-page__readership-reach-paragraph {
                    font-size:1.75rem;
                    line-height: 2.125rem
                }
            }

            .audience-page__readership-reach-paragraph--small {
                font-size: 16px;
                line-height: 1.25rem
            }

            @media all and (-ms-high-contrast: none),(-ms-high-contrast: active) {
                .audience-map #audience-map-svg {
                    height: 450px
                }
            }

            .news-insight__date {
                font-size: .875rem
            }

            .news-insight__article img {
                margin: 40px 0
            }

            .news-insight__contact {
                background: #f7f7f7;
                margin-top: 120px;
                padding: 30px 0
            }

            .news-insight__contact-intro--hidden {
                display: none
            }

            .news-insight__contact-intro .button {
                display: inline-block
            }

            .news-insight__contact .contact-form {
                height: auto;
                opacity: 1;
                overflow: auto;
                position: relative
            }

            @media(min-width: 1023px) {
                .news-insight__inner-container {
                    background:#fff;
                    margin: 100px;
                    padding: 100px 0
                }
            }

            .news-insight-contact-form {
                animation: news-contact-form-entry-mobile .3s ease-in-out forwards;
                background: #fff;
                display: none;
                height: 100%;
                left: 0;
                overflow: scroll;
                padding: 32px;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 100
            }

            @media(min-width: 1023px) {
                .news-insight-contact-form {
                    height:auto;
                    padding: 0 120px;
                    position: relative;
                    z-index: 1
                }
            }

            .news-insight-contact-form--active {
                display: block
            }

            .news-insight-contact-form__close-button {
                background: rgba(0,0,0,0);
                display: block;
                position: absolute;
                right: 32px;
                top: 32px;
                z-index: 10
            }

            @media(min-width: 1023px) {
                .news-insight-contact-form__close-button {
                    border:solid 1px #333;
                    border-radius: 50%;
                    cursor: pointer;
                    height: 26px;
                    padding: 0 6px;
                    position: absolute;
                    top: 0;
                    width: 26px
                }
            }

            .news-insight-contact-form__close-button::after {
                content: "";
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2031.112%2031.112%22%3E%3Cpath%20fill%3D%22%23333333%22%20d%3D%22M31.112%201.414L29.698%200%2015.556%2014.142%201.414%200%200%201.414l14.142%2014.142L0%2029.698l1.414%201.414L15.556%2016.97l14.142%2014.142%201.414-1.414L16.97%2015.556z%22%2F%3E%3C%2Fsvg%3E");
                display: block;
                height: 12px;
                width: 12px
            }

            .news-insight-contact-form .contact-form--active-section-0 [data-action=previous-contact-screen] {
                display: none
            }

            @keyframes news-contact-form-entry-mobile {
                from {
                    opacity: 0;
                    transform: translateY(100%)
                }

                to {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .research-page__image {
                margin: 20px 0 20px -32px;
                width: calc(100% + 64px)
            }

            @media(min-width: 1023px) {
                .research-page__image {
                    margin:0;
                    width: 100%
                }
            }

            .vimeo-video {
                padding: 56.25% 0 0 0;
                position: relative
            }

            .product-index {
                margin-top: -40px
            }

            .page-our-products {
                background: #f7f7f7
            }

            @media(min-width: 1023px) {
                .product-spec__table-heading--delivery {
                    margin-top:40px
                }
            }

            .product-spec__table-heading--contact {
                margin-top: 25px
            }

            @media(min-width: 1023px) {
                .product-spec__table-heading--contact {
                    margin-top:40px
                }
            }

            .product-spec__table-heading--contact-title {
                margin-bottom: -16px !important
            }

            .product-spec__table-heading--print {
                margin-top: 25px
            }

            @media(min-width: 1023px) {
                .product-spec__table-heading--print {
                    margin-top:40px
                }
            }

            @media(min-width: 1023px) {
                .product-spec__reordering .o-1 {
                    order:1
                }

                .product-spec__reordering .o-2 {
                    order: 2
                }

                .product-spec__reordering .o-3 {
                    order: 3
                }

                .product-spec__reordering .o-4 {
                    order: 4
                }

                .product-spec__reordering .o-5 {
                    order: 5
                }
            }

            .product-spec__download-button {
                margin-bottom: 32px
            }

            .product-spec__download-button a {
                display: none
            }

            .product-spec__download-button a.active {
                display: inline-flex
            }

            .product-spec__rates-buttons {
                margin-left: -8px;
                width: calc(100% + 16px)
            }

            .product-spec__rates-buttons-label {
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 20px
            }

            .product-spec__rates-buttons .button {
                border-color: #ddd;
                color: #333;
                display: inline-block;
                font-size: .75rem;
                font-weight: 600;
                margin: 8px
            }

            .product-spec__rates-buttons .button:hover {
                border-color: #5f0c27;
                color: #fff
            }

            .product-spec__rates-buttons .button:disabled {
                opacity: .5;
                pointer-events: none
            }

            .product-spec__rates-buttons .button--active-rate {
                background: #99103d;
                border-color: #99103d;
                color: #fff
            }

            .product-spec__alignment {
                display: none
            }

            @media(min-width: 1023px) {
                .product-spec__alignment {
                    display:flex;
                    margin-top: 30px
                }

                .product-spec__alignment p {
                    font-size: 1.5rem
                }
            }

            .product-spec__table-body-text p {
                font-size: 16px
            }

            .product-spec__pagination {
                margin: 85px 0
            }

            .product-spec__pagination-title {
                flex-grow: 1;
                font-size: 20px;
                font-weight: 400;
                margin-bottom: 25px
            }

            .product-spec__pagination-previous,.product-spec__pagination-next {
                display: flex;
                flex-direction: column
            }

            .product-spec__rates p {
                font-size: initial
            }

            .product-page .intro--short {
                min-height: 300px
            }

            @media(min-width: 1023px) {
                .product-page .intro--short {
                    min-height:847px
                }
            }

            .product-page .intro--shorter {
                min-height: 250px
            }

            @media(min-width: 1023px) {
                .product-page .intro--shorter {
                    min-height:500px
                }
            }

            .product-page .intro--short>.container {
                z-index: 9
            }

            @media(min-width: 1023px) {
                .product-page .page-breadcrumb {
                    margin:0
                }
            }

            .product-page .page-breadcrumb>.link {
                color: #fff
            }

            .product-page .page-breadcrumb>.link--dark {
                color: #333
            }

            .product-page .section-block--header-image-overlap {
                margin-top: -170px;
                padding-top: 30px
            }

            @media(min-width: 1023px) {
                .product-page .section-block--header-image-overlap {
                    margin-top:-400px;
                    padding-top: 60px;
                    margin-right: 80px;
                    padding-left: 30px
                }
            }

            .rates-specifications {
                padding-top: 0
            }

            .calendar__intro-bit {
                margin-top: 30px
            }

            .calendar__intro-video {
                background: gray;
                margin: 60px 0 76px
            }

            .calendar__final {
                margin-bottom: 68px;
                margin-top: 86px
            }

            .calendar__final-block {
                background: #fff1e5;
                display: flex;
                flex-direction: column;
                margin: 22px 0;
                padding: 55px 50px 65px
            }

            @media(min-width: 1023px) {
                .calendar__final-block {
                    min-height:390px
                }
            }

            .calendar__final-block-p {
                flex-grow: 1
            }

            .campaign-header-logo {
                max-height: 64px
            }

            .campaign-page {
                background: #f7f7f7
            }

            .campaign-page .section-block {
                background: #f7f7f7
            }

            .campaign-page .section-block::after {
                background: #f7f7f7
            }

            .campaign-page .site-header__intro-block {
                margin-bottom: 40px
            }

            .campaign-page .news-insight-contact-form {
                display: block;
                position: relative
            }

            @media(min-width: 1023px) {
                .campaign-page .news-insight-contact-form {
                    margin-bottom:100px
                }
            }

            .campaign-page .news-insight-contact-form .contact-form {
                height: auto;
                opacity: 1;
                padding-bottom: 60px;
                position: relative
            }

            .campaign-page .news-insight-contact-form .news-insight-contact-form__close-button {
                display: none
            }

            .campaign-page__body-image {
                width: 100%
            }

            @media(min-width: 1023px) {
                .campaign-page--hide-md {
                    display:none
                }
            }

            .campaign-page--hide-xs {
                display: none
            }

            @media(min-width: 1023px) {
                .campaign-page--hide-xs {
                    display:flex
                }
            }

            .campaign-contact-section {
                background: #fff;
                overflow: hidden;
                padding-top: 90px
            }

            @media(min-width: 1023px) {
                .campaign-contact-section {
                    background:#f7f7f7;
                    margin: 45px 0 0
                }
            }

            @media(min-width: 1023px) {
                .campaign-contact-section__container {
                    background:#fff;
                    margin-bottom: 100px;
                    padding: 100px 80px 0
                }
            }

            .campaign-contact-section--block {
                padding-top: 0
            }

            @media(min-width: 1023px) {
                .campaign-contact-section--block {
                    margin:90px 0 0
                }
            }

            .campaign-contact-section--block__container {
                padding: 70px 0 0
            }

            @media(min-width: 1023px) {
                .campaign-contact-section--block__container {
                    margin-bottom:50px;
                    padding: 50px 40px 0
                }
            }

            .campaign-contact-section__intro {
                background: inherit;
                z-index: 10
            }

            .campaign-contact-section__iframe {
                width: 100%;
                max-width: 1000px;
                height: var(--h-mobile, 1500px)
            }

            @media(min-width: 768px) {
                .campaign-contact-section__iframe {
                    height:var(--h-tablet, 1300px)
                }
            }

            @media(min-width: 1280px) {
                .campaign-contact-section__iframe {
                    height:var(--h-desktop, 1200px)
                }
            }

            @media(min-width: 1023px) {
                .campaign-page--blue .campaign-contact-section {
                    padding-top:0;
                    margin: 45px 0
                }
            }

            .campaign-page--blue .button {
                background: #1470cc;
                border-color: #1470cc;
                color: #fff
            }

            .campaign-page--blue .button:hover {
                background: #133b77 !important
            }

            .campaign-page--blue .button--outline {
                background: #fff;
                border-color: #1470cc;
                color: #1470cc
            }

            .campaign-page--blue .button--outline:hover {
                border-color: #133b77;
                color: #fff
            }

            .campaign-page--blue .typography-eyebrow::after {
                background: #1470cc
            }

            .campaign-page--blue a {
                color: #1470cc
            }

            .campaign-page--blue input[type=checkbox]:checked {
                background-color: #1470cc;
                border-color: #1470cc
            }

            .campaign-page--blue select {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%3Cpath%20fill%3D%22%231470CC%22%20d%3D%22M225.813%2048.907L128%20146.72%2030.187%2048.907%200%2079.093l128%20128%20128-128z%22%2F%3E%3C%2Fsvg%3E")
            }

            .campaign-page--dark {
                background: #082a4d
            }

            .campaign-page--dark .section-block {
                background: #082a4d
            }

            .campaign-page--dark .section-block::after {
                background: #082a4d
            }

            .campaign-page--dark .section-block * {
                color: #fff
            }

            .campaign-page--dark .section-block a {
                font-weight: bold
            }

            .campaign-page--dark .section-block .typography-eyebrow::after {
                background: #fff
            }

            .campaign-page--dark .button {
                background: #082a4d
            }

            .campaign-page--dark .button:hover {
                background: #082a4d !important
            }

            .campaign-page--dark .news-insight-contact-form a {
                color: #082a4d
            }

            .campaign-page--dark .news-insight-contact-form input[type=checkbox]:checked {
                background-color: #082a4d;
                border-color: #082a4d
            }

            .campaign-page--dark .news-insight-contact-form select {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%3Cpath%20fill%3D%22%23082A4D%22%20d%3D%22M225.813%2048.907L128%20146.72%2030.187%2048.907%200%2079.093l128%20128%20128-128z%22%2F%3E%3C%2Fsvg%3E")
            }

            .campaign-page--salmon {
                background: #fff1e5
            }

            .campaign-page--salmon .section-block {
                background: #fff1e5
            }

            .campaign-page--salmon .section-block::after {
                background: #fff1e5
            }

            .site-header--no-campaign-image.salmon {
                background: #fff1e5
            }

            .site-header--no-campaign-image.salmon .site-header__wrapper {
                border-bottom-color: rgba(51,51,51,.18)
            }

            .campaign-page--no-campaign-image {
                background: #f7f7f7
            }

            .campaign-page--no-campaign-image.salmon .h1-heading {
                color: #333
            }

            .campaign-page--no-campaign-image.salmon .intro.intro--short {
                background: #fff1e5
            }

            .campaign-page--no-campaign-image.dark .intro.intro--short {
                background: #082a4d
            }

            .campaign-page--no-campaign-image.blue .intro.intro--short {
                background: #1470cc
            }

            .campaign-page--no-campaign-image.blue .intro.intro--short .button {
                background: #fff;
                color: #1470cc
            }

            .campaign-page--no-campaign-image.blue .intro.intro--short .button:hover {
                color: #fff
            }

            .campaign-page--no-campaign-image.dark .intro.intro--short {
                background: #082a4d
            }

            .campaign-page--no-campaign-image.dark .intro.intro--short .button {
                background: #fff;
                color: #082a4d
            }

            .campaign-page--no-campaign-image.dark .intro.intro--short .button:hover {
                background: #f7f7f7 !important
            }

            .campaign-page--no-campaign-image.dark .typography-eyebrow::after {
                background: #082a4d
            }

            .campaign-page--no-campaign-image .section-block {
                background: #f7f7f7;
                padding: 0
            }

            .campaign-page--no-campaign-image .intro.intro--short {
                min-height: auto
            }

            .campaign-page__confirmation-header {
                background: #fef4ea
            }

            .campaign-page__confirmation-header .container {
                background-image: url(/static/public/logos/thank-you-logo.svg);
                background-repeat: no-repeat;
                height: 64px
            }

            .campaign-page__confirmation-header {
                padding: 30px 0;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 10
            }

            input[type=text],input[type=email],input[type=tel] {
                background: #fff;
                border: solid 1px #ddd;
                font-size: 16px;
                padding: 14px 17px;
                width: 100%
            }

            input[type=text]:focus,input[type=email]:focus,input[type=tel]:focus {
                border-color: #262a33
            }

            input[type=text].error,input[type=email].error,input[type=tel].error {
                border-color: #fd6f89
            }

            label {
                cursor: pointer;
                display: block;
                font-size: 1.25rem;
                font-weight: 600;
                margin: 52px 0 15px
            }

            select {
                -moz-appearance: none;
                -webkit-appearance: none;
                appearance: none;
                background-color: #fff;
                background-position: right 14px top 50%,0 0;
                background-repeat: no-repeat,repeat;
                background-size: 12px 12px,100%;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%3Cpath%20fill%3D%22%2399103D%22%20d%3D%22M225.813%2048.907L128%20146.72%2030.187%2048.907%200%2079.093l128%20128%20128-128z%22%2F%3E%3C%2Fsvg%3E");
                border: solid 1px #ddd;
                cursor: pointer;
                font-size: 16px;
                padding: 14px 40px 14px 17px;
                width: 100%
            }

            select:focus {
                border-color: #262a33
            }

            select.error {
                border-color: #fd6f89
            }

            select::-ms-expand {
                display: none
            }

            textarea {
                background: #fff;
                border: solid 1px #ddd;
                font-family: sans-serif;
                font-size: 16px;
                min-height: 127px;
                padding: 14px 17px;
                width: 100%
            }

            textarea:focus {
                border-color: #262a33
            }

            textarea.error {
                border-color: #fd6f89
            }

            input[type=checkbox] {
                -moz-appearance: none;
                -webkit-appearance: none;
                appearance: none;
                background: #fff;
                border: solid 1px #ddd;
                border-radius: 3px;
                cursor: pointer;
                height: 20px;
                margin: 0;
                width: 20px
            }

            input[type=checkbox]:focus {
                border-color: #262a33
            }

            input[type=checkbox]:checked {
                background-color: #99103d;
                background-position: right 2px top 1px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%22%200%200%20448.8%20448.8%22%3E%3Cpath%20fill%3D%22%23FFFFFF%22%20d%3D%22M142.8%20323.85L35.7%20216.75%200%20252.45l142.8%20142.8%20306-306-35.7-35.7z%22%2F%3E%3C%2Fsvg%3E");
                background-repeat: no-repeat;
                background-size: 80%;
                border-color: #99103d
            }

            input[type=checkbox].error {
                border-color: #fd6f89
            }

            .generic-error-message {
                display: none
            }

            .error+.generic-error-message {
                background: #fd6f89;
                color: #fff;
                display: block;
                padding: 5px 10px 0;
                position: absolute
            }

            input[type=radio] {
                -moz-appearance: none;
                -webkit-appearance: none;
                appearance: none;
                border: solid 1px #979797;
                border-radius: 50%;
                cursor: pointer;
                height: 16px;
                width: 16px
            }

            input[type=radio]:focus {
                border-color: #262a33
            }

            input[type=radio]:checked::after {
                background: #99103d;
                border-radius: 50%;
                content: "";
                display: block;
                height: 8px;
                margin: 3px 0 0 3px;
                width: 8px
            }

            .rich-text li {
                font-weight: 200;
                list-style: outside;
                margin: .6em 0 .6em 1em
            }

            .rich-text p:not(:empty) {
                clear: both
            }

            .rich-text img {
                max-width: 100%;
                height: auto
            }

            .rich-text img.richtext-image.full-width {
                width: 100%
            }

            .rich-text img.richtext-image.right {
                float: right;
                margin-left: 16px;
                margin-bottom: 16px
            }

            .rich-text img.richtext-image.left {
                float: left;
                margin-right: 16px;
                margin-bottom: 16px
            }

            .tncs {
                margin-bottom: 80px
            }

            .tncs li {
                list-style: none;
                margin-left: 0;
                margin-top: 30px
            }

            html {
                overflow-x: hidden;
                scroll-behavior: smooth
            }

            html.fixed-state,html.modal-open {
                overflow: hidden
            }

            html.fixed-state body,html.modal-open body {
                margin: 0;
                overflow: hidden
            }

            html.fixed-state .site-header,html.modal-open .site-header {
                z-index: -1
            }

            @media(max-width: 1023px) {
                html.mobile-fixed-state {
                    overflow:hidden
                }

                html.mobile-fixed-state body {
                    overflow: hidden
                }

                html.mobile-fixed-state .site-header {
                    animation: none !important;
                    opacity: 1 !important
                }
            }

            @media(max-width: 1023px) {
                html.news-filter-open {
                    overflow:hidden
                }

                html.news-filter-open body {
                    overflow: hidden
                }

                html.news-filter-open .site-main {
                    z-index: 10
                }
            }

            /* body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                overflow-x: hidden;
                padding-top: 101px
            } */

            body.unset-overflow {
                overflow-x: unset
            }

            main {
                flex-grow: 1;
                min-height: 1px;
                position: relative;
                z-index: 1
            }

            a {
                color: #99103d;
                font-weight: 600
            }

            a:hover {
                color: #5f0c27
            }

            hr {
                margin: 30px 0;
                opacity: .2
            }

            .o-cookie-message--active {
                z-index: 1
            }

            [data-aos][data-aos][data-aos-duration="50"],body[data-aos-duration="50"] [data-aos] {
                transition-duration: 50ms
            }

            [data-aos][data-aos][data-aos-delay="50"],body[data-aos-delay="50"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="50"].aos-animate,body[data-aos-delay="50"] [data-aos].aos-animate {
                transition-delay: 50ms
            }

            [data-aos][data-aos][data-aos-duration="100"],body[data-aos-duration="100"] [data-aos] {
                transition-duration: .1s
            }

            [data-aos][data-aos][data-aos-delay="100"],body[data-aos-delay="100"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="100"].aos-animate,body[data-aos-delay="100"] [data-aos].aos-animate {
                transition-delay: .1s
            }

            [data-aos][data-aos][data-aos-duration="150"],body[data-aos-duration="150"] [data-aos] {
                transition-duration: .15s
            }

            [data-aos][data-aos][data-aos-delay="150"],body[data-aos-delay="150"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="150"].aos-animate,body[data-aos-delay="150"] [data-aos].aos-animate {
                transition-delay: .15s
            }

            [data-aos][data-aos][data-aos-duration="200"],body[data-aos-duration="200"] [data-aos] {
                transition-duration: .2s
            }

            [data-aos][data-aos][data-aos-delay="200"],body[data-aos-delay="200"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="200"].aos-animate,body[data-aos-delay="200"] [data-aos].aos-animate {
                transition-delay: .2s
            }

            [data-aos][data-aos][data-aos-duration="250"],body[data-aos-duration="250"] [data-aos] {
                transition-duration: .25s
            }

            [data-aos][data-aos][data-aos-delay="250"],body[data-aos-delay="250"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="250"].aos-animate,body[data-aos-delay="250"] [data-aos].aos-animate {
                transition-delay: .25s
            }

            [data-aos][data-aos][data-aos-duration="300"],body[data-aos-duration="300"] [data-aos] {
                transition-duration: .3s
            }

            [data-aos][data-aos][data-aos-delay="300"],body[data-aos-delay="300"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="300"].aos-animate,body[data-aos-delay="300"] [data-aos].aos-animate {
                transition-delay: .3s
            }

            [data-aos][data-aos][data-aos-duration="350"],body[data-aos-duration="350"] [data-aos] {
                transition-duration: .35s
            }

            [data-aos][data-aos][data-aos-delay="350"],body[data-aos-delay="350"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="350"].aos-animate,body[data-aos-delay="350"] [data-aos].aos-animate {
                transition-delay: .35s
            }

            [data-aos][data-aos][data-aos-duration="400"],body[data-aos-duration="400"] [data-aos] {
                transition-duration: .4s
            }

            [data-aos][data-aos][data-aos-delay="400"],body[data-aos-delay="400"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="400"].aos-animate,body[data-aos-delay="400"] [data-aos].aos-animate {
                transition-delay: .4s
            }

            [data-aos][data-aos][data-aos-duration="450"],body[data-aos-duration="450"] [data-aos] {
                transition-duration: .45s
            }

            [data-aos][data-aos][data-aos-delay="450"],body[data-aos-delay="450"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="450"].aos-animate,body[data-aos-delay="450"] [data-aos].aos-animate {
                transition-delay: .45s
            }

            [data-aos][data-aos][data-aos-duration="500"],body[data-aos-duration="500"] [data-aos] {
                transition-duration: .5s
            }

            [data-aos][data-aos][data-aos-delay="500"],body[data-aos-delay="500"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="500"].aos-animate,body[data-aos-delay="500"] [data-aos].aos-animate {
                transition-delay: .5s
            }

            [data-aos][data-aos][data-aos-duration="550"],body[data-aos-duration="550"] [data-aos] {
                transition-duration: .55s
            }

            [data-aos][data-aos][data-aos-delay="550"],body[data-aos-delay="550"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="550"].aos-animate,body[data-aos-delay="550"] [data-aos].aos-animate {
                transition-delay: .55s
            }

            [data-aos][data-aos][data-aos-duration="600"],body[data-aos-duration="600"] [data-aos] {
                transition-duration: .6s
            }

            [data-aos][data-aos][data-aos-delay="600"],body[data-aos-delay="600"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="600"].aos-animate,body[data-aos-delay="600"] [data-aos].aos-animate {
                transition-delay: .6s
            }

            [data-aos][data-aos][data-aos-duration="650"],body[data-aos-duration="650"] [data-aos] {
                transition-duration: .65s
            }

            [data-aos][data-aos][data-aos-delay="650"],body[data-aos-delay="650"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="650"].aos-animate,body[data-aos-delay="650"] [data-aos].aos-animate {
                transition-delay: .65s
            }

            [data-aos][data-aos][data-aos-duration="700"],body[data-aos-duration="700"] [data-aos] {
                transition-duration: .7s
            }

            [data-aos][data-aos][data-aos-delay="700"],body[data-aos-delay="700"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="700"].aos-animate,body[data-aos-delay="700"] [data-aos].aos-animate {
                transition-delay: .7s
            }

            [data-aos][data-aos][data-aos-duration="750"],body[data-aos-duration="750"] [data-aos] {
                transition-duration: .75s
            }

            [data-aos][data-aos][data-aos-delay="750"],body[data-aos-delay="750"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="750"].aos-animate,body[data-aos-delay="750"] [data-aos].aos-animate {
                transition-delay: .75s
            }

            [data-aos][data-aos][data-aos-duration="800"],body[data-aos-duration="800"] [data-aos] {
                transition-duration: .8s
            }

            [data-aos][data-aos][data-aos-delay="800"],body[data-aos-delay="800"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="800"].aos-animate,body[data-aos-delay="800"] [data-aos].aos-animate {
                transition-delay: .8s
            }

            [data-aos][data-aos][data-aos-duration="850"],body[data-aos-duration="850"] [data-aos] {
                transition-duration: .85s
            }

            [data-aos][data-aos][data-aos-delay="850"],body[data-aos-delay="850"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="850"].aos-animate,body[data-aos-delay="850"] [data-aos].aos-animate {
                transition-delay: .85s
            }

            [data-aos][data-aos][data-aos-duration="900"],body[data-aos-duration="900"] [data-aos] {
                transition-duration: .9s
            }

            [data-aos][data-aos][data-aos-delay="900"],body[data-aos-delay="900"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="900"].aos-animate,body[data-aos-delay="900"] [data-aos].aos-animate {
                transition-delay: .9s
            }

            [data-aos][data-aos][data-aos-duration="950"],body[data-aos-duration="950"] [data-aos] {
                transition-duration: .95s
            }

            [data-aos][data-aos][data-aos-delay="950"],body[data-aos-delay="950"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="950"].aos-animate,body[data-aos-delay="950"] [data-aos].aos-animate {
                transition-delay: .95s
            }

            [data-aos][data-aos][data-aos-duration="1000"],body[data-aos-duration="1000"] [data-aos] {
                transition-duration: 1s
            }

            [data-aos][data-aos][data-aos-delay="1000"],body[data-aos-delay="1000"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1000"].aos-animate,body[data-aos-delay="1000"] [data-aos].aos-animate {
                transition-delay: 1s
            }

            [data-aos][data-aos][data-aos-duration="1050"],body[data-aos-duration="1050"] [data-aos] {
                transition-duration: 1.05s
            }

            [data-aos][data-aos][data-aos-delay="1050"],body[data-aos-delay="1050"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1050"].aos-animate,body[data-aos-delay="1050"] [data-aos].aos-animate {
                transition-delay: 1.05s
            }

            [data-aos][data-aos][data-aos-duration="1100"],body[data-aos-duration="1100"] [data-aos] {
                transition-duration: 1.1s
            }

            [data-aos][data-aos][data-aos-delay="1100"],body[data-aos-delay="1100"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1100"].aos-animate,body[data-aos-delay="1100"] [data-aos].aos-animate {
                transition-delay: 1.1s
            }

            [data-aos][data-aos][data-aos-duration="1150"],body[data-aos-duration="1150"] [data-aos] {
                transition-duration: 1.15s
            }

            [data-aos][data-aos][data-aos-delay="1150"],body[data-aos-delay="1150"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1150"].aos-animate,body[data-aos-delay="1150"] [data-aos].aos-animate {
                transition-delay: 1.15s
            }

            [data-aos][data-aos][data-aos-duration="1200"],body[data-aos-duration="1200"] [data-aos] {
                transition-duration: 1.2s
            }

            [data-aos][data-aos][data-aos-delay="1200"],body[data-aos-delay="1200"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1200"].aos-animate,body[data-aos-delay="1200"] [data-aos].aos-animate {
                transition-delay: 1.2s
            }

            [data-aos][data-aos][data-aos-duration="1250"],body[data-aos-duration="1250"] [data-aos] {
                transition-duration: 1.25s
            }

            [data-aos][data-aos][data-aos-delay="1250"],body[data-aos-delay="1250"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1250"].aos-animate,body[data-aos-delay="1250"] [data-aos].aos-animate {
                transition-delay: 1.25s
            }

            [data-aos][data-aos][data-aos-duration="1300"],body[data-aos-duration="1300"] [data-aos] {
                transition-duration: 1.3s
            }

            [data-aos][data-aos][data-aos-delay="1300"],body[data-aos-delay="1300"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1300"].aos-animate,body[data-aos-delay="1300"] [data-aos].aos-animate {
                transition-delay: 1.3s
            }

            [data-aos][data-aos][data-aos-duration="1350"],body[data-aos-duration="1350"] [data-aos] {
                transition-duration: 1.35s
            }

            [data-aos][data-aos][data-aos-delay="1350"],body[data-aos-delay="1350"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1350"].aos-animate,body[data-aos-delay="1350"] [data-aos].aos-animate {
                transition-delay: 1.35s
            }

            [data-aos][data-aos][data-aos-duration="1400"],body[data-aos-duration="1400"] [data-aos] {
                transition-duration: 1.4s
            }

            [data-aos][data-aos][data-aos-delay="1400"],body[data-aos-delay="1400"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1400"].aos-animate,body[data-aos-delay="1400"] [data-aos].aos-animate {
                transition-delay: 1.4s
            }

            [data-aos][data-aos][data-aos-duration="1450"],body[data-aos-duration="1450"] [data-aos] {
                transition-duration: 1.45s
            }

            [data-aos][data-aos][data-aos-delay="1450"],body[data-aos-delay="1450"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1450"].aos-animate,body[data-aos-delay="1450"] [data-aos].aos-animate {
                transition-delay: 1.45s
            }

            [data-aos][data-aos][data-aos-duration="1500"],body[data-aos-duration="1500"] [data-aos] {
                transition-duration: 1.5s
            }

            [data-aos][data-aos][data-aos-delay="1500"],body[data-aos-delay="1500"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1500"].aos-animate,body[data-aos-delay="1500"] [data-aos].aos-animate {
                transition-delay: 1.5s
            }

            [data-aos][data-aos][data-aos-duration="1550"],body[data-aos-duration="1550"] [data-aos] {
                transition-duration: 1.55s
            }

            [data-aos][data-aos][data-aos-delay="1550"],body[data-aos-delay="1550"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1550"].aos-animate,body[data-aos-delay="1550"] [data-aos].aos-animate {
                transition-delay: 1.55s
            }

            [data-aos][data-aos][data-aos-duration="1600"],body[data-aos-duration="1600"] [data-aos] {
                transition-duration: 1.6s
            }

            [data-aos][data-aos][data-aos-delay="1600"],body[data-aos-delay="1600"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1600"].aos-animate,body[data-aos-delay="1600"] [data-aos].aos-animate {
                transition-delay: 1.6s
            }

            [data-aos][data-aos][data-aos-duration="1650"],body[data-aos-duration="1650"] [data-aos] {
                transition-duration: 1.65s
            }

            [data-aos][data-aos][data-aos-delay="1650"],body[data-aos-delay="1650"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1650"].aos-animate,body[data-aos-delay="1650"] [data-aos].aos-animate {
                transition-delay: 1.65s
            }

            [data-aos][data-aos][data-aos-duration="1700"],body[data-aos-duration="1700"] [data-aos] {
                transition-duration: 1.7s
            }

            [data-aos][data-aos][data-aos-delay="1700"],body[data-aos-delay="1700"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1700"].aos-animate,body[data-aos-delay="1700"] [data-aos].aos-animate {
                transition-delay: 1.7s
            }

            [data-aos][data-aos][data-aos-duration="1750"],body[data-aos-duration="1750"] [data-aos] {
                transition-duration: 1.75s
            }

            [data-aos][data-aos][data-aos-delay="1750"],body[data-aos-delay="1750"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1750"].aos-animate,body[data-aos-delay="1750"] [data-aos].aos-animate {
                transition-delay: 1.75s
            }

            [data-aos][data-aos][data-aos-duration="1800"],body[data-aos-duration="1800"] [data-aos] {
                transition-duration: 1.8s
            }

            [data-aos][data-aos][data-aos-delay="1800"],body[data-aos-delay="1800"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1800"].aos-animate,body[data-aos-delay="1800"] [data-aos].aos-animate {
                transition-delay: 1.8s
            }

            [data-aos][data-aos][data-aos-duration="1850"],body[data-aos-duration="1850"] [data-aos] {
                transition-duration: 1.85s
            }

            [data-aos][data-aos][data-aos-delay="1850"],body[data-aos-delay="1850"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1850"].aos-animate,body[data-aos-delay="1850"] [data-aos].aos-animate {
                transition-delay: 1.85s
            }

            [data-aos][data-aos][data-aos-duration="1900"],body[data-aos-duration="1900"] [data-aos] {
                transition-duration: 1.9s
            }

            [data-aos][data-aos][data-aos-delay="1900"],body[data-aos-delay="1900"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1900"].aos-animate,body[data-aos-delay="1900"] [data-aos].aos-animate {
                transition-delay: 1.9s
            }

            [data-aos][data-aos][data-aos-duration="1950"],body[data-aos-duration="1950"] [data-aos] {
                transition-duration: 1.95s
            }

            [data-aos][data-aos][data-aos-delay="1950"],body[data-aos-delay="1950"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="1950"].aos-animate,body[data-aos-delay="1950"] [data-aos].aos-animate {
                transition-delay: 1.95s
            }

            [data-aos][data-aos][data-aos-duration="2000"],body[data-aos-duration="2000"] [data-aos] {
                transition-duration: 2s
            }

            [data-aos][data-aos][data-aos-delay="2000"],body[data-aos-delay="2000"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2000"].aos-animate,body[data-aos-delay="2000"] [data-aos].aos-animate {
                transition-delay: 2s
            }

            [data-aos][data-aos][data-aos-duration="2050"],body[data-aos-duration="2050"] [data-aos] {
                transition-duration: 2.05s
            }

            [data-aos][data-aos][data-aos-delay="2050"],body[data-aos-delay="2050"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2050"].aos-animate,body[data-aos-delay="2050"] [data-aos].aos-animate {
                transition-delay: 2.05s
            }

            [data-aos][data-aos][data-aos-duration="2100"],body[data-aos-duration="2100"] [data-aos] {
                transition-duration: 2.1s
            }

            [data-aos][data-aos][data-aos-delay="2100"],body[data-aos-delay="2100"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2100"].aos-animate,body[data-aos-delay="2100"] [data-aos].aos-animate {
                transition-delay: 2.1s
            }

            [data-aos][data-aos][data-aos-duration="2150"],body[data-aos-duration="2150"] [data-aos] {
                transition-duration: 2.15s
            }

            [data-aos][data-aos][data-aos-delay="2150"],body[data-aos-delay="2150"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2150"].aos-animate,body[data-aos-delay="2150"] [data-aos].aos-animate {
                transition-delay: 2.15s
            }

            [data-aos][data-aos][data-aos-duration="2200"],body[data-aos-duration="2200"] [data-aos] {
                transition-duration: 2.2s
            }

            [data-aos][data-aos][data-aos-delay="2200"],body[data-aos-delay="2200"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2200"].aos-animate,body[data-aos-delay="2200"] [data-aos].aos-animate {
                transition-delay: 2.2s
            }

            [data-aos][data-aos][data-aos-duration="2250"],body[data-aos-duration="2250"] [data-aos] {
                transition-duration: 2.25s
            }

            [data-aos][data-aos][data-aos-delay="2250"],body[data-aos-delay="2250"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2250"].aos-animate,body[data-aos-delay="2250"] [data-aos].aos-animate {
                transition-delay: 2.25s
            }

            [data-aos][data-aos][data-aos-duration="2300"],body[data-aos-duration="2300"] [data-aos] {
                transition-duration: 2.3s
            }

            [data-aos][data-aos][data-aos-delay="2300"],body[data-aos-delay="2300"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2300"].aos-animate,body[data-aos-delay="2300"] [data-aos].aos-animate {
                transition-delay: 2.3s
            }

            [data-aos][data-aos][data-aos-duration="2350"],body[data-aos-duration="2350"] [data-aos] {
                transition-duration: 2.35s
            }

            [data-aos][data-aos][data-aos-delay="2350"],body[data-aos-delay="2350"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2350"].aos-animate,body[data-aos-delay="2350"] [data-aos].aos-animate {
                transition-delay: 2.35s
            }

            [data-aos][data-aos][data-aos-duration="2400"],body[data-aos-duration="2400"] [data-aos] {
                transition-duration: 2.4s
            }

            [data-aos][data-aos][data-aos-delay="2400"],body[data-aos-delay="2400"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2400"].aos-animate,body[data-aos-delay="2400"] [data-aos].aos-animate {
                transition-delay: 2.4s
            }

            [data-aos][data-aos][data-aos-duration="2450"],body[data-aos-duration="2450"] [data-aos] {
                transition-duration: 2.45s
            }

            [data-aos][data-aos][data-aos-delay="2450"],body[data-aos-delay="2450"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2450"].aos-animate,body[data-aos-delay="2450"] [data-aos].aos-animate {
                transition-delay: 2.45s
            }

            [data-aos][data-aos][data-aos-duration="2500"],body[data-aos-duration="2500"] [data-aos] {
                transition-duration: 2.5s
            }

            [data-aos][data-aos][data-aos-delay="2500"],body[data-aos-delay="2500"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2500"].aos-animate,body[data-aos-delay="2500"] [data-aos].aos-animate {
                transition-delay: 2.5s
            }

            [data-aos][data-aos][data-aos-duration="2550"],body[data-aos-duration="2550"] [data-aos] {
                transition-duration: 2.55s
            }

            [data-aos][data-aos][data-aos-delay="2550"],body[data-aos-delay="2550"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2550"].aos-animate,body[data-aos-delay="2550"] [data-aos].aos-animate {
                transition-delay: 2.55s
            }

            [data-aos][data-aos][data-aos-duration="2600"],body[data-aos-duration="2600"] [data-aos] {
                transition-duration: 2.6s
            }

            [data-aos][data-aos][data-aos-delay="2600"],body[data-aos-delay="2600"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2600"].aos-animate,body[data-aos-delay="2600"] [data-aos].aos-animate {
                transition-delay: 2.6s
            }

            [data-aos][data-aos][data-aos-duration="2650"],body[data-aos-duration="2650"] [data-aos] {
                transition-duration: 2.65s
            }

            [data-aos][data-aos][data-aos-delay="2650"],body[data-aos-delay="2650"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2650"].aos-animate,body[data-aos-delay="2650"] [data-aos].aos-animate {
                transition-delay: 2.65s
            }

            [data-aos][data-aos][data-aos-duration="2700"],body[data-aos-duration="2700"] [data-aos] {
                transition-duration: 2.7s
            }

            [data-aos][data-aos][data-aos-delay="2700"],body[data-aos-delay="2700"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2700"].aos-animate,body[data-aos-delay="2700"] [data-aos].aos-animate {
                transition-delay: 2.7s
            }

            [data-aos][data-aos][data-aos-duration="2750"],body[data-aos-duration="2750"] [data-aos] {
                transition-duration: 2.75s
            }

            [data-aos][data-aos][data-aos-delay="2750"],body[data-aos-delay="2750"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2750"].aos-animate,body[data-aos-delay="2750"] [data-aos].aos-animate {
                transition-delay: 2.75s
            }

            [data-aos][data-aos][data-aos-duration="2800"],body[data-aos-duration="2800"] [data-aos] {
                transition-duration: 2.8s
            }

            [data-aos][data-aos][data-aos-delay="2800"],body[data-aos-delay="2800"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2800"].aos-animate,body[data-aos-delay="2800"] [data-aos].aos-animate {
                transition-delay: 2.8s
            }

            [data-aos][data-aos][data-aos-duration="2850"],body[data-aos-duration="2850"] [data-aos] {
                transition-duration: 2.85s
            }

            [data-aos][data-aos][data-aos-delay="2850"],body[data-aos-delay="2850"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2850"].aos-animate,body[data-aos-delay="2850"] [data-aos].aos-animate {
                transition-delay: 2.85s
            }

            [data-aos][data-aos][data-aos-duration="2900"],body[data-aos-duration="2900"] [data-aos] {
                transition-duration: 2.9s
            }

            [data-aos][data-aos][data-aos-delay="2900"],body[data-aos-delay="2900"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2900"].aos-animate,body[data-aos-delay="2900"] [data-aos].aos-animate {
                transition-delay: 2.9s
            }

            [data-aos][data-aos][data-aos-duration="2950"],body[data-aos-duration="2950"] [data-aos] {
                transition-duration: 2.95s
            }

            [data-aos][data-aos][data-aos-delay="2950"],body[data-aos-delay="2950"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="2950"].aos-animate,body[data-aos-delay="2950"] [data-aos].aos-animate {
                transition-delay: 2.95s
            }

            [data-aos][data-aos][data-aos-duration="3000"],body[data-aos-duration="3000"] [data-aos] {
                transition-duration: 3s
            }

            [data-aos][data-aos][data-aos-delay="3000"],body[data-aos-delay="3000"] [data-aos] {
                transition-delay: 0s
            }

            [data-aos][data-aos][data-aos-delay="3000"].aos-animate,body[data-aos-delay="3000"] [data-aos].aos-animate {
                transition-delay: 3s
            }

            [data-aos] {
                pointer-events: none
            }

            [data-aos].aos-animate {
                pointer-events: auto
            }

            [data-aos][data-aos][data-aos-easing=linear],body[data-aos-easing=linear] [data-aos] {
                transition-timing-function: cubic-bezier(0.25, 0.25, 0.75, 0.75)
            }

            [data-aos][data-aos][data-aos-easing=ease],body[data-aos-easing=ease] [data-aos] {
                transition-timing-function: ease
            }

            [data-aos][data-aos][data-aos-easing=ease-in],body[data-aos-easing=ease-in] [data-aos] {
                transition-timing-function: ease-in
            }

            [data-aos][data-aos][data-aos-easing=ease-out],body[data-aos-easing=ease-out] [data-aos] {
                transition-timing-function: ease-out
            }

            [data-aos][data-aos][data-aos-easing=ease-in-out],body[data-aos-easing=ease-in-out] [data-aos] {
                transition-timing-function: ease-in-out
            }

            [data-aos][data-aos][data-aos-easing=ease-in-back],body[data-aos-easing=ease-in-back] [data-aos] {
                transition-timing-function: cubic-bezier(0.6, -0.28, 0.735, 0.045)
            }

            [data-aos][data-aos][data-aos-easing=ease-out-back],body[data-aos-easing=ease-out-back] [data-aos] {
                transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-out-back],body[data-aos-easing=ease-in-out-back] [data-aos] {
                transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-sine],body[data-aos-easing=ease-in-sine] [data-aos] {
                transition-timing-function: cubic-bezier(0.47, 0, 0.745, 0.715)
            }

            [data-aos][data-aos][data-aos-easing=ease-out-sine],body[data-aos-easing=ease-out-sine] [data-aos] {
                transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-out-sine],body[data-aos-easing=ease-in-out-sine] [data-aos] {
                transition-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-quad],body[data-aos-easing=ease-in-quad] [data-aos] {
                transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53)
            }

            [data-aos][data-aos][data-aos-easing=ease-out-quad],body[data-aos-easing=ease-out-quad] [data-aos] {
                transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-out-quad],body[data-aos-easing=ease-in-out-quad] [data-aos] {
                transition-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-cubic],body[data-aos-easing=ease-in-cubic] [data-aos] {
                transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53)
            }

            [data-aos][data-aos][data-aos-easing=ease-out-cubic],body[data-aos-easing=ease-out-cubic] [data-aos] {
                transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-out-cubic],body[data-aos-easing=ease-in-out-cubic] [data-aos] {
                transition-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-quart],body[data-aos-easing=ease-in-quart] [data-aos] {
                transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53)
            }

            [data-aos][data-aos][data-aos-easing=ease-out-quart],body[data-aos-easing=ease-out-quart] [data-aos] {
                transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94)
            }

            [data-aos][data-aos][data-aos-easing=ease-in-out-quart],body[data-aos-easing=ease-in-out-quart] [data-aos] {
                transition-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955)
            }

            @media screen {
                html:not(.no-js) [data-aos^=fade][data-aos^=fade] {
                    opacity: 0;
                    transition-property: opacity,-webkit-transform;
                    transition-property: opacity,transform;
                    transition-property: opacity,transform,-webkit-transform
                }

                html:not(.no-js) [data-aos^=fade][data-aos^=fade].aos-animate {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none
                }

                html:not(.no-js) [data-aos=fade-up] {
                    -webkit-transform: translate3d(0, 100px, 0);
                    transform: translate3d(0, 100px, 0)
                }

                html:not(.no-js) [data-aos=fade-down] {
                    -webkit-transform: translate3d(0, -100px, 0);
                    transform: translate3d(0, -100px, 0)
                }

                html:not(.no-js) [data-aos=fade-right] {
                    -webkit-transform: translate3d(-100px, 0, 0);
                    transform: translate3d(-100px, 0, 0)
                }

                html:not(.no-js) [data-aos=fade-left] {
                    -webkit-transform: translate3d(100px, 0, 0);
                    transform: translate3d(100px, 0, 0)
                }

                html:not(.no-js) [data-aos=fade-up-right] {
                    -webkit-transform: translate3d(-100px, 100px, 0);
                    transform: translate3d(-100px, 100px, 0)
                }

                html:not(.no-js) [data-aos=fade-up-left] {
                    -webkit-transform: translate3d(100px, 100px, 0);
                    transform: translate3d(100px, 100px, 0)
                }

                html:not(.no-js) [data-aos=fade-down-right] {
                    -webkit-transform: translate3d(-100px, -100px, 0);
                    transform: translate3d(-100px, -100px, 0)
                }

                html:not(.no-js) [data-aos=fade-down-left] {
                    -webkit-transform: translate3d(100px, -100px, 0);
                    transform: translate3d(100px, -100px, 0)
                }

                html:not(.no-js) [data-aos^=zoom][data-aos^=zoom] {
                    opacity: 0;
                    transition-property: opacity,-webkit-transform;
                    transition-property: opacity,transform;
                    transition-property: opacity,transform,-webkit-transform
                }

                html:not(.no-js) [data-aos^=zoom][data-aos^=zoom].aos-animate {
                    opacity: 1;
                    -webkit-transform: translateZ(0) scale(1);
                    transform: translateZ(0) scale(1)
                }

                html:not(.no-js) [data-aos=zoom-in] {
                    -webkit-transform: scale(0.6);
                    transform: scale(0.6)
                }

                html:not(.no-js) [data-aos=zoom-in-up] {
                    -webkit-transform: translate3d(0, 100px, 0) scale(0.6);
                    transform: translate3d(0, 100px, 0) scale(0.6)
                }

                html:not(.no-js) [data-aos=zoom-in-down] {
                    -webkit-transform: translate3d(0, -100px, 0) scale(0.6);
                    transform: translate3d(0, -100px, 0) scale(0.6)
                }

                html:not(.no-js) [data-aos=zoom-in-right] {
                    -webkit-transform: translate3d(-100px, 0, 0) scale(0.6);
                    transform: translate3d(-100px, 0, 0) scale(0.6)
                }

                html:not(.no-js) [data-aos=zoom-in-left] {
                    -webkit-transform: translate3d(100px, 0, 0) scale(0.6);
                    transform: translate3d(100px, 0, 0) scale(0.6)
                }

                html:not(.no-js) [data-aos=zoom-out] {
                    -webkit-transform: scale(1.2);
                    transform: scale(1.2)
                }

                html:not(.no-js) [data-aos=zoom-out-up] {
                    -webkit-transform: translate3d(0, 100px, 0) scale(1.2);
                    transform: translate3d(0, 100px, 0) scale(1.2)
                }

                html:not(.no-js) [data-aos=zoom-out-down] {
                    -webkit-transform: translate3d(0, -100px, 0) scale(1.2);
                    transform: translate3d(0, -100px, 0) scale(1.2)
                }

                html:not(.no-js) [data-aos=zoom-out-right] {
                    -webkit-transform: translate3d(-100px, 0, 0) scale(1.2);
                    transform: translate3d(-100px, 0, 0) scale(1.2)
                }

                html:not(.no-js) [data-aos=zoom-out-left] {
                    -webkit-transform: translate3d(100px, 0, 0) scale(1.2);
                    transform: translate3d(100px, 0, 0) scale(1.2)
                }

                html:not(.no-js) [data-aos^=slide][data-aos^=slide] {
                    transition-property: -webkit-transform;
                    transition-property: transform;
                    transition-property: transform,-webkit-transform;
                    visibility: hidden
                }

                html:not(.no-js) [data-aos^=slide][data-aos^=slide].aos-animate {
                    visibility: visible;
                    -webkit-transform: translateZ(0);
                    transform: translateZ(0)
                }

                html:not(.no-js) [data-aos=slide-up] {
                    -webkit-transform: translate3d(0, 100%, 0);
                    transform: translate3d(0, 100%, 0)
                }

                html:not(.no-js) [data-aos=slide-down] {
                    -webkit-transform: translate3d(0, -100%, 0);
                    transform: translate3d(0, -100%, 0)
                }

                html:not(.no-js) [data-aos=slide-right] {
                    -webkit-transform: translate3d(-100%, 0, 0);
                    transform: translate3d(-100%, 0, 0)
                }

                html:not(.no-js) [data-aos=slide-left] {
                    -webkit-transform: translate3d(100%, 0, 0);
                    transform: translate3d(100%, 0, 0)
                }

                html:not(.no-js) [data-aos^=flip][data-aos^=flip] {
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    transition-property: -webkit-transform;
                    transition-property: transform;
                    transition-property: transform,-webkit-transform
                }

                html:not(.no-js) [data-aos=flip-left] {
                    -webkit-transform: perspective(2500px) rotateY(-100deg);
                    transform: perspective(2500px) rotateY(-100deg)
                }

                html:not(.no-js) [data-aos=flip-left].aos-animate {
                    -webkit-transform: perspective(2500px) rotateY(0);
                    transform: perspective(2500px) rotateY(0)
                }

                html:not(.no-js) [data-aos=flip-right] {
                    -webkit-transform: perspective(2500px) rotateY(100deg);
                    transform: perspective(2500px) rotateY(100deg)
                }

                html:not(.no-js) [data-aos=flip-right].aos-animate {
                    -webkit-transform: perspective(2500px) rotateY(0);
                    transform: perspective(2500px) rotateY(0)
                }

                html:not(.no-js) [data-aos=flip-up] {
                    -webkit-transform: perspective(2500px) rotateX(-100deg);
                    transform: perspective(2500px) rotateX(-100deg)
                }

                html:not(.no-js) [data-aos=flip-up].aos-animate {
                    -webkit-transform: perspective(2500px) rotateX(0);
                    transform: perspective(2500px) rotateX(0)
                }

                html:not(.no-js) [data-aos=flip-down] {
                    -webkit-transform: perspective(2500px) rotateX(100deg);
                    transform: perspective(2500px) rotateX(100deg)
                }

                html:not(.no-js) [data-aos=flip-down].aos-animate {
                    -webkit-transform: perspective(2500px) rotateX(0);
                    transform: perspective(2500px) rotateX(0)
                }
            }

            @media (min-width: 768px) {
                .section-block--rates-specs {
                    height: 100%;
                    margin-bottom: 0;
                }
            }
            .section-block--rates-specs {
                background: #fff1e5;
                margin: 0;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .section-block {
                background: #fff;
                padding: 45px 32px;
            }
        </style>

<section class="container rates-and-specifications-hp">

    <!-- Heading -->
    <div class="row">
        <div class="column xs-12">
            <h4 class="h4-heading">SPECIFICATIONS</h4>

            <p class="metric-font">
                If you already know exactly what you need, jump straight to our specifications.
            </p>
        </div>
    </div>

    <!-- Cards -->
    <div class="row d-flex flex-wrap">
        <!-- LEFT: Rates -->
        <div class="column xs-12 sm-6 pb-20-xs pb-0-sm">
            <div class="section-block section-block--rates-specs">

                <div>
                    <h4 class="h4-heading">Rates</h4>
                    <div class="rich-text">
                        <p>
                            Whatever your needs, format or budget we have an advertising solution for you.
                        </p>
                    </div>

                    <div class="rates-spec-cta"><strong>Download our rates</strong></div>
                    <div class="rates-currency-selector__buttons pb-30-xs">
                
                        <button class="button button--slim button--outline rates-currency-selector__button button--active-rate" data-currency-selection="GBP  £" data-o-event="category:cta|action:click|text:GBP  £" data-trackable="home-change-currency" data-gadl="Home|List - Rate Currency|GBP  £">
                        GBP  £</button>
                    
                        <button class="button button--slim button--outline rates-currency-selector__button" data-currency-selection="EUR €" data-o-event="category:cta|action:click|text:EUR €" data-trackable="home-change-currency" data-gadl="Home|List - Rate Currency|EUR €">
                        EUR €</button>
                    
                        <button class="button button--slim button--outline rates-currency-selector__button" data-currency-selection="USD $" data-o-event="category:cta|action:click|text:USD $" data-trackable="home-change-currency" data-gadl="Home|List - Rate Currency|USD $">
                        USD $</button>
                    
                        <button class="button button--slim button--outline rates-currency-selector__button" data-currency-selection="YEN ¥" data-o-event="category:cta|action:click|text:YEN ¥" data-trackable="home-change-currency" data-gadl="Home|List - Rate Currency|YEN ¥">
                        YEN ¥</button>
            
                    </div>
                </div>

                <div class="rates-currency-selector__download-links rates-currency-selector__download-links--visible" id="dl_GBP  £">
                    <a class="link-button link-button--outline button--download" href="https://go.commercial.ft.com/FT_ADVERTISING_RATE_CARD_GBP" data-o-event="category:cta|action:click|href:https://go.commercial.ft.com/FT_ADVERTISING_RATE_CARD_GBP" data-trackable="home-download" data-gadl="Home|Button - Download|https://go.commercial.ft.com/FT_ADVERTISING_RATE_CARD_GBP" target="_blank">
                        <div class="button__download-text">RATE CARD</div>
                        <div class="button__download-arrow-container"></div>
                    </a>
                </div>

            </div>
        </div>

        <!-- RIGHT: Specifications -->
        <div class="column xs-12 sm-6">
            <div class="section-block section-block--rates-specs">

                <div>
                    <h4 class="h4-heading">Print & Digital Specifications</h4>
                    <div class="rich-text"><p>Find out all you need to know about supplying advertising assets for the FT print and digital products.</p></div>
                </div>

                <div>
                    <div class="rates-spec-cta"><strong>Download our specifications</strong></div>
                    <div class="rates-spec-buttons">
                    <a class="link-button link-button--outline button--download" href="https://go.commercial.ft.com/PrintSpecifications" data-o-event="category:cta|action:click|href:https://go.commercial.ft.com/PrintSpecifications" data-trackable="home-download" data-gadl="Home|Button - Download|https://go.commercial.ft.com/PrintSpecifications" target="_blank">
                        <div class="button__download-text">PRINT SPECS CARD</div>
                        <div class="button__download-arrow-container"></div>
                        </a>
                    <a class="link-button link-button--outline button--download" href="https://go.commercial.ft.com/FT_DIGITAL_SPECS_NOV_25" data-o-event="category:cta|action:click|href:https://go.commercial.ft.com/FT_DIGITAL_SPECS_NOV_25" data-trackable="home-download" data-gadl="Home|Button - Download|https://go.commercial.ft.com/FT_DIGITAL_SPECS_NOV_25" target="_blank">
                        <div class="button__download-text">DIGITAL SPECS CARD</div>
                        <div class="button__download-arrow-container"></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

