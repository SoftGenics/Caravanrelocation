@extends ('layouts.app')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merienda&family=Tilt+Warp&display=swap');

        .fn {
            font-family: 'Merienda', cursive;
        }

        .fb {
            font-family: 'Tilt Warp', cursive;
        }
    </style>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <base href="/">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Purple and Pink Illustrative Charity / Non-Proft Non-Profit Website</title>
        <meta name="description"
            content="Our platform specializes in connecting businesses with freelancers, providing teaching resources, and offering recruitment solutions." />
        <link rel="icon" href="26387fa4f5b1e3f7b6217b27d79bf264.png" type="image/png" sizes="16x16">
        <link rel="icon" href="2d0b56e7e51cf11036ad8734bdb67e2d.png" type="image/png" sizes="32x32">
        <link rel="apple-touch-icon" href="725b756a69a7d4c235070e51acd85560.png" sizes="180x180">
        <style>
            :root {
                --ffsd: 0px;
                --1vw: calc((100vw - var(--sbw, 0px)) / 100);
                --1vh: var(--inner1Vh, 1vh);
            }

            @media (prefers-reduced-motion: reduce) {
                .animated {
                    animation: none !important;
                }
            }

            html {
                zoom: var(--rzf, 1);
                font-size: max(calc(min(var(--1vw, 1vw), 13.66px) * var(--rfso, 1)), var(--minfs, 0px));
                -webkit-text-size-adjust: 100%;
                scroll-behavior: smooth;
            }

            body {
                font-size: calc(1rem * var(--bfso, 1));
            }

            body,
            html,
            p,
            ul,
            ol,
            li {
                margin: 0;
                padding: 0;
                font-synthesis: none;
                font-kerning: none;
                font-variant-ligatures: none;
                font-feature-settings: "kern"0, "calt"0, "liga"0, "clig"0, "dlig"0, "hlig"0;
                font-family: unset;
                -webkit-font-smoothing: subpixel-antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-rendering: geometricprecision;
                white-space: normal;
            }

            li {
                text-align: unset;
            }

            a {
                text-decoration: none;
                color: inherit;
            }

            img {
                -webkit-user-drag: none;
                -moz-user-drag: none;
                -o-user-drag: none;
                user-drag: none;
                -webkit-touch-callout: none;
            }

            @media and screen (min:width:768px){
                .cheke-test{
                    display:column;
                }
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 400;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/450d7530ab7aee079f9640de21748c69.woff2);
                font-weight: 700;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 400;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/450d7530ab7aee079f9640de21748c69.woff2);
                font-weight: 700;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 100;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 100;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 200;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 200;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 300;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 300;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 500;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/e609efb90aabe72475bbbd19aeb1de0e.woff2);
                font-weight: 500;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/450d7530ab7aee079f9640de21748c69.woff2);
                font-weight: 600;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/450d7530ab7aee079f9640de21748c69.woff2);
                font-weight: 600;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/450d7530ab7aee079f9640de21748c69.woff2);
                font-weight: 800;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/450d7530ab7aee079f9640de21748c69.woff2);
                font-weight: 800;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/450d7530ab7aee079f9640de21748c69.woff2);
                font-weight: 900;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahSPMowE-0;
                src: url(fonts/450d7530ab7aee079f9640de21748c69.woff2);
                font-weight: 900;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 400;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/fc4ecf59d5c29b3e2d9cf723d0affa88.woff2);
                font-weight: 700;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 400;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/fc4ecf59d5c29b3e2d9cf723d0affa88.woff2);
                font-weight: 700;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 100;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 100;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 200;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 200;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 300;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 300;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 500;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/2379fff25d9a69a820a8f953d69f7539.woff2);
                font-weight: 500;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/fc4ecf59d5c29b3e2d9cf723d0affa88.woff2);
                font-weight: 600;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/fc4ecf59d5c29b3e2d9cf723d0affa88.woff2);
                font-weight: 600;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/fc4ecf59d5c29b3e2d9cf723d0affa88.woff2);
                font-weight: 800;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/fc4ecf59d5c29b3e2d9cf723d0affa88.woff2);
                font-weight: 800;
                font-style: italic;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/fc4ecf59d5c29b3e2d9cf723d0affa88.woff2);
                font-weight: 900;
                font-style: normal;
            }

            @font-face {
                font-family: YAEahQQIqj8-0;
                src: url(fonts/fc4ecf59d5c29b3e2d9cf723d0affa88.woff2);
                font-weight: 900;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
                font-weight: 400;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/98c4d2c0223fc8474641c77f923528e9.woff2);
                font-weight: 700;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
                font-weight: 400;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/1060345c54d396e76d73f1da7ee200bd.woff2);
                font-weight: 700;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
                font-weight: 100;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
                font-weight: 100;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
                font-weight: 200;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
                font-weight: 200;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
                font-weight: 300;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
                font-weight: 300;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
                font-weight: 500;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
                font-weight: 500;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/98c4d2c0223fc8474641c77f923528e9.woff2);
                font-weight: 600;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/1060345c54d396e76d73f1da7ee200bd.woff2);
                font-weight: 600;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/98c4d2c0223fc8474641c77f923528e9.woff2);
                font-weight: 800;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/1060345c54d396e76d73f1da7ee200bd.woff2);
                font-weight: 800;
                font-style: italic;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/98c4d2c0223fc8474641c77f923528e9.woff2);
                font-weight: 900;
                font-style: normal;
            }

            @font-face {
                font-family: YACgEZ1cb1Q-0;
                src: url(fonts/1060345c54d396e76d73f1da7ee200bd.woff2);
                font-weight: 900;
                font-style: italic;
            }

            #verticalMenu {
                border: 12px solid #ffffff;
                padding: 0;
                margin: 0 0 0 auto;
                z-index: 2;
                font-size: 1.5rem;
                right: 0px;
                box-sizing: border-box;
                transition: all 0.35s;
                background-color: #ffffff;
                transform: translateX(400px);
                overflow: auto;
                max-width: 80vw;
                top: 0px;
                width: 400px;
                font-family: -apple-system, BlinkMacSystemFont, sans-serif;
                position: fixed;
                height: 100%;
            }

            #menuToggle:checked~#verticalMenu {
                transform: translateX(0px);
            }

            #menuButton {
                z-index: 3;
                color: #0e1318;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #menuButton:hover {
                cursor: pointer;
                text-decoration-line: none;
                color: hsla(210, 26%, 7%, 1);
            }

            .navMenuLinkContent:hover {
                color: hsla(210, 26%, 7%, 1);
            }

            .navMenuLink {
                color: hsla(210, 26%, 7%, 0.7);
                list-style-type: none;
                white-space: nowrap;
                display: flex;
                align-items: center;
            }

            #horizontalMenu>.navMenuLink {
                max-width: 148px;
            }

            .navMenuLinkContent {
                padding: 10px 16px;
                text-decoration-line: none;
                overflow: hidden;
                color: hsla(210, 26%, 7%, 0.7);
                white-space: nowrap;
                font-weight: 700;
                display: inline-block;
                font-size: 15px;
                font-family: -apple-system, BlinkMacSystemFont, sans-serif;
                text-overflow: ellipsis;
                margin-right: auto;
            }

            #menuToggle:checked~#menuButton {
                background-color: rgba(30, 41, 51, 45);
                z-index: 2;
                top: 0px;
                width: 100vw;
                position: fixed;
                opacity: 0.55;
                height: 100vh;
            }

            #menuToggle:checked~#menuButton>#menuButtonIcon {
                display: none;
            }

            #horizontalMenu {
                display: flex;
            }

            @media (max-width: 424px) {
                #horizontalMenu {
                    display: none;
                }
            }

            @media (min-width: 425px) {

                #menuButton,
                #verticalMenu {
                    display: none;
                }
            }

            html {
                scroll-padding-top: 50px;
            }

            @media (max-width: 375px) {
                #G4l7aL7N1FbMDfuM {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #s4uNwOCaJFGxqML6 {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #c2l02T16MwrhTbuo {
                    font-size: calc(6.44218155em - var(--ffsd));
                }

                #r8nIjYLTbgEKrkoU {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 6.44218155em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #EKpWeNy9w7l6SDcT {
                    min-width: 58.58136007rem;
                }

                #b5o4ebF7ssr1Qkkp {
                    position: relative;
                    grid-area: 6 / 2 / 7 / 7;
                }

                #A8IASPl6i3HyRP7N {
                    font-size: calc(1.95885066em - var(--ffsd));
                }

                #s6niEpXEwRxqn9Md {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.95885066em;
                    margin-top: calc(var(--first-font-size) * 0.05);
                    margin-bottom: calc(var(--last-font-size) * 0.05);
                }

                #bes02DFCzIwWAzxA {
                    min-width: 41.6132431rem;
                }

                #IvAvjEZDjd7eQ9Zt {
                    position: relative;
                    grid-area: 3 / 3 / 5 / 4;
                }

                #cJkjEHhHdHmVSRIO {
                    position: relative;
                    grid-area: 8 / 5 / 11 / 10;
                }

                #R17bhaYDimXTwcAh {
                    position: relative;
                    grid-area: 4 / 6 / 10 / 8;
                }

                #os3ugdkkUKsdXIQ9 {
                    position: relative;
                    grid-area: 2 / 9 / 9 / 11;
                }

                #H07C9vocdLpTJ7Ju {
                    grid-template-columns: 2.39635553rem 6.1237347rem 41.47990977rem 2.53784268rem 6.0355494rem 2.27099019rem 12.43890693rem 1.68764658rem 17.23522229rem 0 7.79384193rem;
                    grid-template-rows: minmax(7.9691849rem, max-content) minmax(2.10211122rem, max-content) minmax(0.17882442rem, max-content) minmax(2.14004747rem, max-content) minmax(2.46928621rem, max-content) minmax(30.2898978rem, max-content) 0 minmax(1.99079264rem, max-content) 0 minmax(1.99079264rem, max-content) minmax(1.90712938rem, max-content);
                }

                #home {
                    min-height: calc(18.49686119 * var(--1vh, 1vh));
                }

                #Hcqr4CYgvr16uIum {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #e7FO5mxNwiDlgCtR {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #MhmXUsH9RGb8MMJF {
                    font-size: calc(4.6852123em - var(--ffsd));
                }

                #mZSAxlRM7Fjrv9wz {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 4.6852123em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #xL3tFEyTu3NVkabE {
                    min-width: 39.49360181rem;
                }

                #Fvf3J013o1Gr77i3 {
                    position: relative;
                    grid-area: 2 / 4 / 3 / 5;
                }

                #d0Rrp9pGU0GXJWxR {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #sQqtIxg9a2OK6DKP {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Wfau5mppeYtObS6y {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Q1p2BhE9exHpIG4b {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.70257687em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #KdJP8beQaENjc937 {
                    min-width: 96.94794255rem;
                }

                #p0lpx0VqTtJIsV66 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #i8dgZXeEuQgwGJ9d {
                    grid-template-columns: 0 96.81460922rem;
                    grid-template-rows: 0 minmax(26.18234583rem, max-content);
                }

                #UB93CX5ueuXF2jLa {
                    position: relative;
                    grid-area: 4 / 3 / 7 / 9;
                }

                #sYAbcjXlzafgA8Bq {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #B6okbpDO7kT4XQ46 {
                    font-size: calc(3.02584187em - var(--ffsd));
                }

                #LIPEbe3fMExhNmv9 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.02584187em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #s6GC8gMPydaDLoD3 {
                    min-width: 29.22282955rem;
                }

                #TrOjbk1zUKFg63gU {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #GHsC2qsSjgCDZxjE {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #p8IB0MiwqnjDng23 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #a0V9BkFyL6Ss9bsu {
                    min-width: 68.6163514rem;
                }

                #MsGu89p3A20TtZU5 {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #Inu7z5ZlN0EcGE9q {
                    grid-template-columns: 0 1.25099475rem 14.52412291rem 29.08949622rem 24.86939895rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.04376064rem, max-content) minmax(3.57442606rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.00812874rem, max-content);
                }

                #oPLDG6adJ9dLsPeJ {
                    position: relative;
                    grid-area: 5 / 2 / 9 / 6;
                }

                #NDIFJxyRnQdZIcNu {
                    position: relative;
                    grid-area: 6 / 7 / 8 / 8;
                }

                #RfIlnZptvcbkAzGB {
                    grid-template-columns: 0 1.82311677rem 23.36136287rem 39.36026848rem 6.44025945rem 4.85867325rem 18.53406443rem 4.25998074rem 1.36227402rem;
                    grid-template-rows: minmax(0.95975284rem, max-content) minmax(5.58418741rem, max-content) minmax(0.57633308rem, max-content) minmax(22.25831802rem, max-content) minmax(1.04376064rem, max-content) minmax(2.88026717rem, max-content) minmax(17.12951899rem, max-content) minmax(3.94026499rem, max-content) minmax(1.85014445rem, max-content);
                }

                #updates {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #nitwfmZdkoLqquet {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #p233HgjvGGQdF9ma {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #jMln95FvlJioKUsi {
                    position: relative;
                    grid-area: 3 / 3 / 4 / 4;
                }

                #dAotAhFM5p2TZQ9w {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #OrZUETEirgYKKytW {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #pqOqMYlwM1thUOvr {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #cpWKlBeM6iGpPT8p {
                    min-width: 34.10935956rem;
                }

                #FrzAZGed8dgEir2F {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #IbKdmTKDxznYoEtv {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #fNnmSUDXEP4mqHel {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #CUCZboBJd94nqQRQ {
                    min-width: 68.6163514rem;
                }

                #u6lJxQ0csN1DOmKo {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #spvR8Di2Vb0vQ9TI {
                    grid-template-columns: 0 1.25099475rem 17.25349592rem 33.97602623rem 17.25349592rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(3.94631464rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.6170103rem, max-content);
                }

                #dmAFEbA0TlF0Q4PB {
                    position: relative;
                    grid-area: 2 / 5 / 5 / 9;
                }

                #uwd75PcCz0Z8FUr9 {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #o2IJnD8WzDRZ5IkM {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #EZiwhchakXouq4ye {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #dQPjNu1yr19DClLk {
                    min-width: 34.73801944rem;
                }

                #jlGqJph5QgVyORMX {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #VdC9iKHVRKWb6Quu {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #wW6DtSvIwFDFmohJ {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #ncMgFN82BeIYc04P {
                    min-width: 68.6163514rem;
                }

                #EdIpMCW4NRpZdt9P {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #wxCaNHn5J9AGNdWb {
                    grid-template-columns: 0 1.25099475rem 15.32731197rem 34.60468611rem 18.55102rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.08136473rem, max-content) minmax(3.94631464rem, max-content) minmax(1.22724416rem, max-content) minmax(16.95168375rem, max-content) minmax(3.05452206rem, max-content);
                }

                #NeHAzMeBe67Eh8VA {
                    position: relative;
                    grid-area: 6 / 2 / 9 / 6;
                }

                #teH7hyyWNarWI6B9 {
                    position: relative;
                    grid-area: 7 / 7 / 8 / 8;
                }

                #efLOTBXSDpsp79zQ {
                    grid-template-columns: 0 2.52915785rem 24.29683154rem 2.18900305rem 41.97001512rem 1.83309003rem 18.13687671rem 9.0450257rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(24.09519518rem, max-content) minmax(0.8356261rem, max-content) minmax(2.27329211rem, max-content) minmax(3.05452206rem, max-content) minmax(20.15208523rem, max-content) minmax(3.05452206rem, max-content) minmax(1.08136473rem, max-content);
                }

                #services {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #A1LOjGG3CVeP5QDE {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #pW2yIDQlgzbNsT9M {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #R8bOt6EtJqwttN0u {
                    position: relative;
                    grid-area: 2 / 2 / 5 / 3;
                }

                #By7S9NCC4ZfW3gVC {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #R6N7yUjlKd7ZrJH6 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #rvRz3BbmYE5eqbPE {
                    min-width: 50.88668347rem;
                }

                #GJoWYOA2cHvaLdUA {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #lmWA7ivuZe7XVnC1 {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #BSVOLrhTlrWgW112 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #kv1vl3f1hQeuSZCy {
                    min-width: 50.88668347rem;
                }

                #lt6fLVlmzmlvIQaA {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #wqHLouz6yP7F8HJX {
                    grid-template-columns: 0 0 50.75335014rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(35.84827167rem, max-content);
                }

                #UhIg87EeJD4ejgpO {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #wOM9nuONxaY5vAGt {
                    grid-template-columns: 10.25490727rem 34.49937754rem 1.09813047rem 50.75335014rem 3.39423458rem;
                    grid-template-rows: minmax(5.62225476rem, max-content) minmax(3.57139545rem, max-content) minmax(41.40664262rem, max-content) minmax(0.26704723rem, max-content) minmax(5.35520753rem, max-content);
                }

                #join-us {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #bpUCqy7ZTg2m8nI8 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #qeIujJbNUOcwaJsZ {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #EawZebyZgdcrWBc7 {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #KLvBcDor8t3EUpvx {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #HH1TuxOcTGAn23bJ {
                    min-width: 52.9821067rem;
                }

                #Pc3GFpguJvGBKQxC {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #QTHHZ3btxi5nf7Bi {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #pKINzzCtt61BVVYf {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #CNPYKum6ha5n8PP0 {
                    min-width: 52.9821067rem;
                }

                #RbuCWfWDwvhi6uE9 {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #vw6fxuPUVHezRWEl {
                    grid-template-columns: 0 0 52.84877336rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(28.60083389rem, max-content);
                }

                #mqUneY4p4ZvKyOch {
                    position: relative;
                    grid-area: 3 / 2 / 4 / 3;
                }

                #CS4egHLw7gnDobli {
                    margin-left: 0%;
                    clip-path: polygon(calc(0% + 0%) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc(100% - ((0 * 33.31757084rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 33.31757084rem) + 0%)));
                    margin-top: 0%;
                    position: relative;
                    margin-bottom: 0%;
                    grid-area: 2 / 4 / 5 / 5;
                    margin-right: -72.68912148%;
                }

                #Wg9aYtq3wzYOD1dH {
                    grid-template-columns: 5.62225476rem 52.84877336rem 8.21140103rem 33.31757084rem;
                    grid-template-rows: minmax(8.32397711rem, max-content) minmax(2.6960692rem, max-content) minmax(34.15920484rem, max-content) minmax(11.04329643rem, max-content);
                }

                #contact {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }
            }

            @media (min-width: 375.05px) and (max-width: 480px) {
                #G4l7aL7N1FbMDfuM {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #s4uNwOCaJFGxqML6 {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #c2l02T16MwrhTbuo {
                    font-size: calc(6.44218155em - var(--ffsd));
                }

                #r8nIjYLTbgEKrkoU {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 6.44218155em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #EKpWeNy9w7l6SDcT {
                    min-width: 58.5521934rem;
                }

                #b5o4ebF7ssr1Qkkp {
                    position: relative;
                    grid-area: 6 / 2 / 7 / 7;
                }

                #A8IASPl6i3HyRP7N {
                    font-size: calc(1.95885066em - var(--ffsd));
                }

                #s6niEpXEwRxqn9Md {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.95885066em;
                    margin-top: calc(var(--first-font-size) * 0.05);
                    margin-bottom: calc(var(--last-font-size) * 0.05);
                }

                #bes02DFCzIwWAzxA {
                    min-width: 41.58407644rem;
                }

                #IvAvjEZDjd7eQ9Zt {
                    position: relative;
                    grid-area: 3 / 3 / 5 / 4;
                }

                #cJkjEHhHdHmVSRIO {
                    position: relative;
                    grid-area: 8 / 5 / 11 / 10;
                }

                #R17bhaYDimXTwcAh {
                    position: relative;
                    grid-area: 4 / 6 / 10 / 8;
                }

                #os3ugdkkUKsdXIQ9 {
                    position: relative;
                    grid-area: 2 / 9 / 9 / 11;
                }

                #H07C9vocdLpTJ7Ju {
                    grid-template-columns: 2.39635553rem 6.1237347rem 41.47990977rem 2.53784268rem 6.0355494rem 2.27099019rem 12.43890693rem 1.68764658rem 17.23522229rem 0 7.79384193rem;
                    grid-template-rows: minmax(7.9691849rem, max-content) minmax(2.10211122rem, max-content) minmax(0.17882442rem, max-content) minmax(2.14004747rem, max-content) minmax(2.46928621rem, max-content) minmax(30.2898978rem, max-content) 0 minmax(1.99079264rem, max-content) 0 minmax(1.99079264rem, max-content) minmax(1.90712938rem, max-content);
                }

                #home {
                    min-height: calc(18.49686119 * var(--1vh, 1vh));
                }

                #Hcqr4CYgvr16uIum {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #e7FO5mxNwiDlgCtR {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #MhmXUsH9RGb8MMJF {
                    font-size: calc(4.6852123em - var(--ffsd));
                }

                #mZSAxlRM7Fjrv9wz {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 4.6852123em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #xL3tFEyTu3NVkabE {
                    min-width: 39.46443514rem;
                }

                #Fvf3J013o1Gr77i3 {
                    position: relative;
                    grid-area: 2 / 4 / 3 / 5;
                }

                #d0Rrp9pGU0GXJWxR {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #sQqtIxg9a2OK6DKP {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Wfau5mppeYtObS6y {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Q1p2BhE9exHpIG4b {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.70257687em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #KdJP8beQaENjc937 {
                    min-width: 96.91877588rem;
                }

                #p0lpx0VqTtJIsV66 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #i8dgZXeEuQgwGJ9d {
                    grid-template-columns: 0 96.81460922rem;
                    grid-template-rows: 0 minmax(26.18234583rem, max-content);
                }

                #UB93CX5ueuXF2jLa {
                    position: relative;
                    grid-area: 4 / 3 / 7 / 9;
                }

                #sYAbcjXlzafgA8Bq {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #B6okbpDO7kT4XQ46 {
                    font-size: calc(3.02584187em - var(--ffsd));
                }

                #LIPEbe3fMExhNmv9 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.02584187em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #s6GC8gMPydaDLoD3 {
                    min-width: 29.19366288rem;
                }

                #TrOjbk1zUKFg63gU {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #GHsC2qsSjgCDZxjE {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #p8IB0MiwqnjDng23 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #a0V9BkFyL6Ss9bsu {
                    min-width: 68.58718474rem;
                }

                #MsGu89p3A20TtZU5 {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #Inu7z5ZlN0EcGE9q {
                    grid-template-columns: 0 1.25099475rem 14.52412291rem 29.08949622rem 24.86939895rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.04376064rem, max-content) minmax(3.57442606rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.00812874rem, max-content);
                }

                #oPLDG6adJ9dLsPeJ {
                    position: relative;
                    grid-area: 5 / 2 / 9 / 6;
                }

                #NDIFJxyRnQdZIcNu {
                    position: relative;
                    grid-area: 6 / 7 / 8 / 8;
                }

                #RfIlnZptvcbkAzGB {
                    grid-template-columns: 0 1.82311677rem 23.36136287rem 39.36026848rem 6.44025945rem 4.85867325rem 18.53406443rem 4.25998074rem 1.36227402rem;
                    grid-template-rows: minmax(0.95975284rem, max-content) minmax(5.58418741rem, max-content) minmax(0.57633308rem, max-content) minmax(22.25831802rem, max-content) minmax(1.04376064rem, max-content) minmax(2.88026717rem, max-content) minmax(17.12951899rem, max-content) minmax(3.94026499rem, max-content) minmax(1.85014445rem, max-content);
                }

                #updates {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #nitwfmZdkoLqquet {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #p233HgjvGGQdF9ma {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #jMln95FvlJioKUsi {
                    position: relative;
                    grid-area: 3 / 3 / 4 / 4;
                }

                #dAotAhFM5p2TZQ9w {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #OrZUETEirgYKKytW {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #pqOqMYlwM1thUOvr {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #cpWKlBeM6iGpPT8p {
                    min-width: 34.0801929rem;
                }

                #FrzAZGed8dgEir2F {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #IbKdmTKDxznYoEtv {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #fNnmSUDXEP4mqHel {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #CUCZboBJd94nqQRQ {
                    min-width: 68.58718474rem;
                }

                #u6lJxQ0csN1DOmKo {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #spvR8Di2Vb0vQ9TI {
                    grid-template-columns: 0 1.25099475rem 17.25349592rem 33.97602623rem 17.25349592rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(3.94631464rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.6170103rem, max-content);
                }

                #dmAFEbA0TlF0Q4PB {
                    position: relative;
                    grid-area: 2 / 5 / 5 / 9;
                }

                #uwd75PcCz0Z8FUr9 {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #o2IJnD8WzDRZ5IkM {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #EZiwhchakXouq4ye {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #dQPjNu1yr19DClLk {
                    min-width: 34.70885277rem;
                }

                #jlGqJph5QgVyORMX {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #VdC9iKHVRKWb6Quu {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #wW6DtSvIwFDFmohJ {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #ncMgFN82BeIYc04P {
                    min-width: 68.58718474rem;
                }

                #EdIpMCW4NRpZdt9P {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #wxCaNHn5J9AGNdWb {
                    grid-template-columns: 0 1.25099475rem 15.32731197rem 34.60468611rem 18.55102rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.08136473rem, max-content) minmax(3.94631464rem, max-content) minmax(1.22724416rem, max-content) minmax(16.95168375rem, max-content) minmax(3.05452206rem, max-content);
                }

                #NeHAzMeBe67Eh8VA {
                    position: relative;
                    grid-area: 6 / 2 / 9 / 6;
                }

                #teH7hyyWNarWI6B9 {
                    position: relative;
                    grid-area: 7 / 7 / 8 / 8;
                }

                #efLOTBXSDpsp79zQ {
                    grid-template-columns: 0 2.52915785rem 24.29683154rem 2.18900305rem 41.97001512rem 1.83309003rem 18.13687671rem 9.0450257rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(24.09519518rem, max-content) minmax(0.8356261rem, max-content) minmax(2.27329211rem, max-content) minmax(3.05452206rem, max-content) minmax(20.15208523rem, max-content) minmax(3.05452206rem, max-content) minmax(1.08136473rem, max-content);
                }

                #services {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #A1LOjGG3CVeP5QDE {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #pW2yIDQlgzbNsT9M {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #R8bOt6EtJqwttN0u {
                    position: relative;
                    grid-area: 2 / 2 / 5 / 3;
                }

                #By7S9NCC4ZfW3gVC {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #R6N7yUjlKd7ZrJH6 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #rvRz3BbmYE5eqbPE {
                    min-width: 50.85751681rem;
                }

                #GJoWYOA2cHvaLdUA {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #lmWA7ivuZe7XVnC1 {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #BSVOLrhTlrWgW112 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #kv1vl3f1hQeuSZCy {
                    min-width: 50.85751681rem;
                }

                #lt6fLVlmzmlvIQaA {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #wqHLouz6yP7F8HJX {
                    grid-template-columns: 0 0 50.75335014rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(35.84827167rem, max-content);
                }

                #UhIg87EeJD4ejgpO {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #wOM9nuONxaY5vAGt {
                    grid-template-columns: 10.25490727rem 34.49937754rem 1.09813047rem 50.75335014rem 3.39423458rem;
                    grid-template-rows: minmax(5.62225476rem, max-content) minmax(3.57139545rem, max-content) minmax(41.40664262rem, max-content) minmax(0.26704723rem, max-content) minmax(5.35520753rem, max-content);
                }

                #join-us {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #bpUCqy7ZTg2m8nI8 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #qeIujJbNUOcwaJsZ {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #EawZebyZgdcrWBc7 {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #KLvBcDor8t3EUpvx {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #HH1TuxOcTGAn23bJ {
                    min-width: 52.95294003rem;
                }

                #Pc3GFpguJvGBKQxC {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #QTHHZ3btxi5nf7Bi {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #pKINzzCtt61BVVYf {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #CNPYKum6ha5n8PP0 {
                    min-width: 52.95294003rem;
                }

                #RbuCWfWDwvhi6uE9 {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #vw6fxuPUVHezRWEl {
                    grid-template-columns: 0 0 52.84877336rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(28.60083389rem, max-content);
                }

                #mqUneY4p4ZvKyOch {
                    position: relative;
                    grid-area: 3 / 2 / 4 / 3;
                }

                #CS4egHLw7gnDobli {
                    margin-left: 0%;
                    clip-path: polygon(calc(0% + 0%) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc(100% - ((0 * 33.31757084rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 33.31757084rem) + 0%)));
                    margin-top: 0%;
                    position: relative;
                    margin-bottom: 0%;
                    grid-area: 2 / 4 / 5 / 5;
                    margin-right: -72.68912148%;
                }

                #Wg9aYtq3wzYOD1dH {
                    grid-template-columns: 5.62225476rem 52.84877336rem 8.21140103rem 33.31757084rem;
                    grid-template-rows: minmax(8.32397711rem, max-content) minmax(2.6960692rem, max-content) minmax(34.15920484rem, max-content) minmax(11.04329643rem, max-content);
                }

                #contact {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }
            }

            @media (min-width: 480.05px) and (max-width: 768px) {
                #G4l7aL7N1FbMDfuM {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #s4uNwOCaJFGxqML6 {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #c2l02T16MwrhTbuo {
                    font-size: calc(6.44218155em - var(--ffsd));
                }

                #r8nIjYLTbgEKrkoU {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 6.44218155em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #EKpWeNy9w7l6SDcT {
                    min-width: 58.5131309rem;
                }

                #b5o4ebF7ssr1Qkkp {
                    position: relative;
                    grid-area: 6 / 2 / 7 / 7;
                }

                #A8IASPl6i3HyRP7N {
                    font-size: calc(1.95885066em - var(--ffsd));
                }

                #s6niEpXEwRxqn9Md {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.95885066em;
                    margin-top: calc(var(--first-font-size) * 0.05);
                    margin-bottom: calc(var(--last-font-size) * 0.05);
                }

                #bes02DFCzIwWAzxA {
                    min-width: 41.54501394rem;
                }

                #IvAvjEZDjd7eQ9Zt {
                    position: relative;
                    grid-area: 3 / 3 / 5 / 4;
                }

                #cJkjEHhHdHmVSRIO {
                    position: relative;
                    grid-area: 8 / 5 / 11 / 10;
                }

                #R17bhaYDimXTwcAh {
                    position: relative;
                    grid-area: 4 / 6 / 10 / 8;
                }

                #os3ugdkkUKsdXIQ9 {
                    position: relative;
                    grid-area: 2 / 9 / 9 / 11;
                }

                #H07C9vocdLpTJ7Ju {
                    grid-template-columns: 2.39635553rem 6.1237347rem 41.47990977rem 2.53784268rem 6.0355494rem 2.27099019rem 12.43890693rem 1.68764658rem 17.23522229rem 0 7.79384193rem;
                    grid-template-rows: minmax(7.9691849rem, max-content) minmax(2.10211122rem, max-content) minmax(0.17882442rem, max-content) minmax(2.14004747rem, max-content) minmax(2.46928621rem, max-content) minmax(30.2898978rem, max-content) 0 minmax(1.99079264rem, max-content) 0 minmax(1.99079264rem, max-content) minmax(1.90712938rem, max-content);
                }

                #home {
                    min-height: calc(18.49686119 * var(--1vh, 1vh));
                }

                #Hcqr4CYgvr16uIum {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #e7FO5mxNwiDlgCtR {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #MhmXUsH9RGb8MMJF {
                    font-size: calc(4.6852123em - var(--ffsd));
                }

                #mZSAxlRM7Fjrv9wz {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 4.6852123em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #xL3tFEyTu3NVkabE {
                    min-width: 39.42537264rem;
                }

                #Fvf3J013o1Gr77i3 {
                    position: relative;
                    grid-area: 2 / 4 / 3 / 5;
                }

                #d0Rrp9pGU0GXJWxR {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #sQqtIxg9a2OK6DKP {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Wfau5mppeYtObS6y {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Q1p2BhE9exHpIG4b {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.70257687em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #KdJP8beQaENjc937 {
                    min-width: 96.87971338rem;
                }

                #p0lpx0VqTtJIsV66 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #i8dgZXeEuQgwGJ9d {
                    grid-template-columns: 0 96.81460922rem;
                    grid-template-rows: 0 minmax(26.18234583rem, max-content);
                }

                #UB93CX5ueuXF2jLa {
                    position: relative;
                    grid-area: 4 / 3 / 7 / 9;
                }

                #sYAbcjXlzafgA8Bq {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #B6okbpDO7kT4XQ46 {
                    font-size: calc(3.02584187em - var(--ffsd));
                }

                #LIPEbe3fMExhNmv9 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.02584187em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #s6GC8gMPydaDLoD3 {
                    min-width: 29.15460038rem;
                }

                #TrOjbk1zUKFg63gU {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #GHsC2qsSjgCDZxjE {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #p8IB0MiwqnjDng23 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #a0V9BkFyL6Ss9bsu {
                    min-width: 68.54812224rem;
                }

                #MsGu89p3A20TtZU5 {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #Inu7z5ZlN0EcGE9q {
                    grid-template-columns: 0 1.25099475rem 14.52412291rem 29.08949622rem 24.86939895rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.04376064rem, max-content) minmax(3.57442606rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.00812874rem, max-content);
                }

                #oPLDG6adJ9dLsPeJ {
                    position: relative;
                    grid-area: 5 / 2 / 9 / 6;
                }

                #NDIFJxyRnQdZIcNu {
                    position: relative;
                    grid-area: 6 / 7 / 8 / 8;
                }

                #RfIlnZptvcbkAzGB {
                    grid-template-columns: 0 1.82311677rem 23.36136287rem 39.36026848rem 6.44025945rem 4.85867325rem 18.53406443rem 4.25998074rem 1.36227402rem;
                    grid-template-rows: minmax(0.95975284rem, max-content) minmax(5.58418741rem, max-content) minmax(0.57633308rem, max-content) minmax(22.25831802rem, max-content) minmax(1.04376064rem, max-content) minmax(2.88026717rem, max-content) minmax(17.12951899rem, max-content) minmax(3.94026499rem, max-content) minmax(1.85014445rem, max-content);
                }

                #updates {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #nitwfmZdkoLqquet {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #p233HgjvGGQdF9ma {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #jMln95FvlJioKUsi {
                    position: relative;
                    grid-area: 3 / 3 / 4 / 4;
                }

                #dAotAhFM5p2TZQ9w {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #OrZUETEirgYKKytW {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #pqOqMYlwM1thUOvr {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #cpWKlBeM6iGpPT8p {
                    min-width: 34.0411304rem;
                }

                #FrzAZGed8dgEir2F {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #IbKdmTKDxznYoEtv {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #fNnmSUDXEP4mqHel {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #CUCZboBJd94nqQRQ {
                    min-width: 68.54812224rem;
                }

                #u6lJxQ0csN1DOmKo {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #spvR8Di2Vb0vQ9TI {
                    grid-template-columns: 0 1.25099475rem 17.25349592rem 33.97602623rem 17.25349592rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(3.94631464rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.6170103rem, max-content);
                }

                #dmAFEbA0TlF0Q4PB {
                    position: relative;
                    grid-area: 2 / 5 / 5 / 9;
                }

                #uwd75PcCz0Z8FUr9 {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #o2IJnD8WzDRZ5IkM {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #EZiwhchakXouq4ye {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #dQPjNu1yr19DClLk {
                    min-width: 34.66979027rem;
                }

                #jlGqJph5QgVyORMX {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #VdC9iKHVRKWb6Quu {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #wW6DtSvIwFDFmohJ {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #ncMgFN82BeIYc04P {
                    min-width: 68.54812224rem;
                }

                #EdIpMCW4NRpZdt9P {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #wxCaNHn5J9AGNdWb {
                    grid-template-columns: 0 1.25099475rem 15.32731197rem 34.60468611rem 18.55102rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.08136473rem, max-content) minmax(3.94631464rem, max-content) minmax(1.22724416rem, max-content) minmax(16.95168375rem, max-content) minmax(3.05452206rem, max-content);
                }

                #NeHAzMeBe67Eh8VA {
                    position: relative;
                    grid-area: 6 / 2 / 9 / 6;
                }

                #teH7hyyWNarWI6B9 {
                    position: relative;
                    grid-area: 7 / 7 / 8 / 8;
                }

                #efLOTBXSDpsp79zQ {
                    grid-template-columns: 0 2.52915785rem 24.29683154rem 2.18900305rem 41.97001512rem 1.83309003rem 18.13687671rem 9.0450257rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(24.09519518rem, max-content) minmax(0.8356261rem, max-content) minmax(2.27329211rem, max-content) minmax(3.05452206rem, max-content) minmax(20.15208523rem, max-content) minmax(3.05452206rem, max-content) minmax(1.08136473rem, max-content);
                }

                #services {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #A1LOjGG3CVeP5QDE {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #pW2yIDQlgzbNsT9M {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #R8bOt6EtJqwttN0u {
                    position: relative;
                    grid-area: 2 / 2 / 5 / 3;
                }

                #By7S9NCC4ZfW3gVC {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #R6N7yUjlKd7ZrJH6 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #rvRz3BbmYE5eqbPE {
                    min-width: 50.81845431rem;
                }

                #GJoWYOA2cHvaLdUA {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #lmWA7ivuZe7XVnC1 {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #BSVOLrhTlrWgW112 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #kv1vl3f1hQeuSZCy {
                    min-width: 50.81845431rem;
                }

                #lt6fLVlmzmlvIQaA {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #wqHLouz6yP7F8HJX {
                    grid-template-columns: 0 0 50.75335014rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(35.84827167rem, max-content);
                }

                #UhIg87EeJD4ejgpO {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #wOM9nuONxaY5vAGt {
                    grid-template-columns: 10.25490727rem 34.49937754rem 1.09813047rem 50.75335014rem 3.39423458rem;
                    grid-template-rows: minmax(5.62225476rem, max-content) minmax(3.57139545rem, max-content) minmax(41.40664262rem, max-content) minmax(0.26704723rem, max-content) minmax(5.35520753rem, max-content);
                }

                #join-us {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #bpUCqy7ZTg2m8nI8 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #qeIujJbNUOcwaJsZ {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #EawZebyZgdcrWBc7 {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #KLvBcDor8t3EUpvx {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #HH1TuxOcTGAn23bJ {
                    min-width: 52.91387753rem;
                }

                #Pc3GFpguJvGBKQxC {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #QTHHZ3btxi5nf7Bi {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #pKINzzCtt61BVVYf {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #CNPYKum6ha5n8PP0 {
                    min-width: 52.91387753rem;
                }

                #RbuCWfWDwvhi6uE9 {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #vw6fxuPUVHezRWEl {
                    grid-template-columns: 0 0 52.84877336rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(28.60083389rem, max-content);
                }

                #mqUneY4p4ZvKyOch {
                    position: relative;
                    grid-area: 3 / 2 / 4 / 3;
                }

                #CS4egHLw7gnDobli {
                    margin-left: 0%;
                    clip-path: polygon(calc(0% + 0%) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc(100% - ((0 * 33.31757084rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 33.31757084rem) + 0%)));
                    margin-top: 0%;
                    position: relative;
                    margin-bottom: 0%;
                    grid-area: 2 / 4 / 5 / 5;
                    margin-right: -72.68912148%;
                }

                #Wg9aYtq3wzYOD1dH {
                    grid-template-columns: 5.62225476rem 52.84877336rem 8.21140103rem 33.31757084rem;
                    grid-template-rows: minmax(8.32397711rem, max-content) minmax(2.6960692rem, max-content) minmax(34.15920484rem, max-content) minmax(11.04329643rem, max-content);
                }

                #contact {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }
            }

            @media (min-width: 768.05px) and (max-width: 1024px) {
                #G4l7aL7N1FbMDfuM {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #s4uNwOCaJFGxqML6 {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #c2l02T16MwrhTbuo {
                    font-size: calc(6.44218155em - var(--ffsd));
                }

                #r8nIjYLTbgEKrkoU {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 6.44218155em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #EKpWeNy9w7l6SDcT {
                    min-width: 58.49685486rem;
                }

                #b5o4ebF7ssr1Qkkp {
                    position: relative;
                    grid-area: 6 / 2 / 7 / 7;
                }

                #A8IASPl6i3HyRP7N {
                    font-size: calc(1.95885066em - var(--ffsd));
                }

                #s6niEpXEwRxqn9Md {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.95885066em;
                    margin-top: calc(var(--first-font-size) * 0.05);
                    margin-bottom: calc(var(--last-font-size) * 0.05);
                }

                #bes02DFCzIwWAzxA {
                    min-width: 41.52873789rem;
                }

                #IvAvjEZDjd7eQ9Zt {
                    position: relative;
                    grid-area: 3 / 3 / 5 / 4;
                }

                #cJkjEHhHdHmVSRIO {
                    position: relative;
                    grid-area: 8 / 5 / 11 / 10;
                }

                #R17bhaYDimXTwcAh {
                    position: relative;
                    grid-area: 4 / 6 / 10 / 8;
                }

                #os3ugdkkUKsdXIQ9 {
                    position: relative;
                    grid-area: 2 / 9 / 9 / 11;
                }

                #H07C9vocdLpTJ7Ju {
                    grid-template-columns: 2.39635553rem 6.1237347rem 41.47990977rem 2.53784268rem 6.0355494rem 2.27099019rem 12.43890693rem 1.68764658rem 17.23522229rem 0 7.79384193rem;
                    grid-template-rows: minmax(7.9691849rem, max-content) minmax(2.10211122rem, max-content) minmax(0.17882442rem, max-content) minmax(2.14004747rem, max-content) minmax(2.46928621rem, max-content) minmax(30.2898978rem, max-content) 0 minmax(1.99079264rem, max-content) 0 minmax(1.99079264rem, max-content) minmax(1.90712938rem, max-content);
                }

                #home {
                    min-height: calc(18.49686119 * var(--1vh, 1vh));
                }

                #Hcqr4CYgvr16uIum {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #e7FO5mxNwiDlgCtR {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #MhmXUsH9RGb8MMJF {
                    font-size: calc(4.6852123em - var(--ffsd));
                }

                #mZSAxlRM7Fjrv9wz {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 4.6852123em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #xL3tFEyTu3NVkabE {
                    min-width: 39.4090966rem;
                }

                #Fvf3J013o1Gr77i3 {
                    position: relative;
                    grid-area: 2 / 4 / 3 / 5;
                }

                #d0Rrp9pGU0GXJWxR {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #sQqtIxg9a2OK6DKP {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Wfau5mppeYtObS6y {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Q1p2BhE9exHpIG4b {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.70257687em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #KdJP8beQaENjc937 {
                    min-width: 96.86343734rem;
                }

                #p0lpx0VqTtJIsV66 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #i8dgZXeEuQgwGJ9d {
                    grid-template-columns: 0 96.81460922rem;
                    grid-template-rows: 0 minmax(26.18234583rem, max-content);
                }

                #UB93CX5ueuXF2jLa {
                    position: relative;
                    grid-area: 4 / 3 / 7 / 9;
                }

                #sYAbcjXlzafgA8Bq {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #B6okbpDO7kT4XQ46 {
                    font-size: calc(3.02584187em - var(--ffsd));
                }

                #LIPEbe3fMExhNmv9 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.02584187em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #s6GC8gMPydaDLoD3 {
                    min-width: 29.13832434rem;
                }

                #TrOjbk1zUKFg63gU {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #GHsC2qsSjgCDZxjE {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #p8IB0MiwqnjDng23 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #a0V9BkFyL6Ss9bsu {
                    min-width: 68.5318462rem;
                }

                #MsGu89p3A20TtZU5 {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #Inu7z5ZlN0EcGE9q {
                    grid-template-columns: 0 1.25099475rem 14.52412291rem 29.08949622rem 24.86939895rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.04376064rem, max-content) minmax(3.57442606rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.00812874rem, max-content);
                }

                #oPLDG6adJ9dLsPeJ {
                    position: relative;
                    grid-area: 5 / 2 / 9 / 6;
                }

                #NDIFJxyRnQdZIcNu {
                    position: relative;
                    grid-area: 6 / 7 / 8 / 8;
                }

                #RfIlnZptvcbkAzGB {
                    grid-template-columns: 0 1.82311677rem 23.36136287rem 39.36026848rem 6.44025945rem 4.85867325rem 18.53406443rem 4.25998074rem 1.36227402rem;
                    grid-template-rows: minmax(0.95975284rem, max-content) minmax(5.58418741rem, max-content) minmax(0.57633308rem, max-content) minmax(22.25831802rem, max-content) minmax(1.04376064rem, max-content) minmax(2.88026717rem, max-content) minmax(17.12951899rem, max-content) minmax(3.94026499rem, max-content) minmax(1.85014445rem, max-content);
                }

                #updates {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #nitwfmZdkoLqquet {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #p233HgjvGGQdF9ma {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #jMln95FvlJioKUsi {
                    position: relative;
                    grid-area: 3 / 3 / 4 / 4;
                }

                #dAotAhFM5p2TZQ9w {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #OrZUETEirgYKKytW {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #pqOqMYlwM1thUOvr {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #cpWKlBeM6iGpPT8p {
                    min-width: 34.02485436rem;
                }

                #FrzAZGed8dgEir2F {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #IbKdmTKDxznYoEtv {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #fNnmSUDXEP4mqHel {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #CUCZboBJd94nqQRQ {
                    min-width: 68.5318462rem;
                }

                #u6lJxQ0csN1DOmKo {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #spvR8Di2Vb0vQ9TI {
                    grid-template-columns: 0 1.25099475rem 17.25349592rem 33.97602623rem 17.25349592rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(3.94631464rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.6170103rem, max-content);
                }

                #dmAFEbA0TlF0Q4PB {
                    position: relative;
                    grid-area: 2 / 5 / 5 / 9;
                }

                #uwd75PcCz0Z8FUr9 {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #o2IJnD8WzDRZ5IkM {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #EZiwhchakXouq4ye {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #dQPjNu1yr19DClLk {
                    min-width: 34.65351423rem;
                }

                #jlGqJph5QgVyORMX {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #VdC9iKHVRKWb6Quu {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #wW6DtSvIwFDFmohJ {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #ncMgFN82BeIYc04P {
                    min-width: 68.5318462rem;
                }

                #EdIpMCW4NRpZdt9P {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #wxCaNHn5J9AGNdWb {
                    grid-template-columns: 0 1.25099475rem 15.32731197rem 34.60468611rem 18.55102rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.08136473rem, max-content) minmax(3.94631464rem, max-content) minmax(1.22724416rem, max-content) minmax(16.95168375rem, max-content) minmax(3.05452206rem, max-content);
                }

                #NeHAzMeBe67Eh8VA {
                    position: relative;
                    grid-area: 6 / 2 / 9 / 6;
                }

                #teH7hyyWNarWI6B9 {
                    position: relative;
                    grid-area: 7 / 7 / 8 / 8;
                }

                #efLOTBXSDpsp79zQ {
                    grid-template-columns: 0 2.52915785rem 24.29683154rem 2.18900305rem 41.97001512rem 1.83309003rem 18.13687671rem 9.0450257rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(24.09519518rem, max-content) minmax(0.8356261rem, max-content) minmax(2.27329211rem, max-content) minmax(3.05452206rem, max-content) minmax(20.15208523rem, max-content) minmax(3.05452206rem, max-content) minmax(1.08136473rem, max-content);
                }

                #services {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #A1LOjGG3CVeP5QDE {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #pW2yIDQlgzbNsT9M {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #R8bOt6EtJqwttN0u {
                    position: relative;
                    grid-area: 2 / 2 / 5 / 3;
                }

                #By7S9NCC4ZfW3gVC {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #R6N7yUjlKd7ZrJH6 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #rvRz3BbmYE5eqbPE {
                    min-width: 50.80217826rem;
                }

                #GJoWYOA2cHvaLdUA {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #lmWA7ivuZe7XVnC1 {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #BSVOLrhTlrWgW112 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #kv1vl3f1hQeuSZCy {
                    min-width: 50.80217826rem;
                }

                #lt6fLVlmzmlvIQaA {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #wqHLouz6yP7F8HJX {
                    grid-template-columns: 0 0 50.75335014rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(35.84827167rem, max-content);
                }

                #UhIg87EeJD4ejgpO {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #wOM9nuONxaY5vAGt {
                    grid-template-columns: 10.25490727rem 34.49937754rem 1.09813047rem 50.75335014rem 3.39423458rem;
                    grid-template-rows: minmax(5.62225476rem, max-content) minmax(3.57139545rem, max-content) minmax(41.40664262rem, max-content) minmax(0.26704723rem, max-content) minmax(5.35520753rem, max-content);
                }

                #join-us {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #bpUCqy7ZTg2m8nI8 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #qeIujJbNUOcwaJsZ {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #EawZebyZgdcrWBc7 {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #KLvBcDor8t3EUpvx {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #HH1TuxOcTGAn23bJ {
                    min-width: 52.89760149rem;
                }

                #Pc3GFpguJvGBKQxC {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #QTHHZ3btxi5nf7Bi {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #pKINzzCtt61BVVYf {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #CNPYKum6ha5n8PP0 {
                    min-width: 52.89760149rem;
                }

                #RbuCWfWDwvhi6uE9 {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #vw6fxuPUVHezRWEl {
                    grid-template-columns: 0 0 52.84877336rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(28.60083389rem, max-content);
                }

                #mqUneY4p4ZvKyOch {
                    position: relative;
                    grid-area: 3 / 2 / 4 / 3;
                }

                #CS4egHLw7gnDobli {
                    margin-left: 0%;
                    clip-path: polygon(calc(0% + 0%) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc(100% - ((0 * 33.31757084rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 33.31757084rem) + 0%)));
                    margin-top: 0%;
                    position: relative;
                    margin-bottom: 0%;
                    grid-area: 2 / 4 / 5 / 5;
                    margin-right: -72.68912148%;
                }

                #Wg9aYtq3wzYOD1dH {
                    grid-template-columns: 5.62225476rem 52.84877336rem 8.21140103rem 33.31757084rem;
                    grid-template-rows: minmax(8.32397711rem, max-content) minmax(2.6960692rem, max-content) minmax(34.15920484rem, max-content) minmax(11.04329643rem, max-content);
                }

                #contact {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }
            }

            @media (min-width: 1024.05px) {
                #G4l7aL7N1FbMDfuM {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #s4uNwOCaJFGxqML6 {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #c2l02T16MwrhTbuo {
                    font-size: calc(6.44218155em - var(--ffsd));
                }

                #r8nIjYLTbgEKrkoU {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 6.44218155em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #EKpWeNy9w7l6SDcT {
                    min-width: 58.48462996rem;
                }

                #b5o4ebF7ssr1Qkkp {
                    position: relative;
                    grid-area: 6 / 2 / 7 / 7;
                }

                #A8IASPl6i3HyRP7N {
                    font-size: calc(1.95885066em - var(--ffsd));
                }

                #s6niEpXEwRxqn9Md {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.95885066em;
                    margin-top: calc(var(--first-font-size) * 0.05);
                    margin-bottom: calc(var(--last-font-size) * 0.05);
                }

                #bes02DFCzIwWAzxA {
                    min-width: 41.51651299rem;
                }

                #IvAvjEZDjd7eQ9Zt {
                    position: relative;
                    grid-area: 3 / 3 / 5 / 4;
                }

                #cJkjEHhHdHmVSRIO {
                    position: relative;
                    grid-area: 8 / 5 / 11 / 10;
                }

                #R17bhaYDimXTwcAh {
                    position: relative;
                    grid-area: 4 / 6 / 10 / 8;
                }

                #os3ugdkkUKsdXIQ9 {
                    position: relative;
                    grid-area: 2 / 9 / 9 / 11;
                }

                #H07C9vocdLpTJ7Ju {
                    grid-template-columns: 2.39635553rem 6.1237347rem 41.47990977rem 2.53784268rem 6.0355494rem 2.27099019rem 12.43890693rem 1.68764658rem 17.23522229rem 0 7.79384193rem;
                    grid-template-rows: minmax(7.9691849rem, max-content) minmax(2.10211122rem, max-content) minmax(0.17882442rem, max-content) minmax(2.14004747rem, max-content) minmax(2.46928621rem, max-content) minmax(30.2898978rem, max-content) 0 minmax(1.99079264rem, max-content) 0 minmax(1.99079264rem, max-content) minmax(1.90712938rem, max-content);
                }

                #home {
                    min-height: calc(18.49686119 * var(--1vh, 1vh));
                }

                #Hcqr4CYgvr16uIum {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #e7FO5mxNwiDlgCtR {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #MhmXUsH9RGb8MMJF {
                    font-size: calc(4.6852123em - var(--ffsd));
                }

                #mZSAxlRM7Fjrv9wz {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 4.6852123em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #xL3tFEyTu3NVkabE {
                    min-width: 39.3968717rem;
                }

                #Fvf3J013o1Gr77i3 {
                    position: relative;
                    grid-area: 2 / 4 / 3 / 5;
                }

                #d0Rrp9pGU0GXJWxR {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #sQqtIxg9a2OK6DKP {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Wfau5mppeYtObS6y {
                    font-size: calc(1.70257687em - var(--ffsd));
                }

                #Q1p2BhE9exHpIG4b {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.70257687em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #KdJP8beQaENjc937 {
                    min-width: 96.85121244rem;
                }

                #p0lpx0VqTtJIsV66 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #i8dgZXeEuQgwGJ9d {
                    grid-template-columns: 0 96.81460922rem;
                    grid-template-rows: 0 minmax(26.18234583rem, max-content);
                }

                #UB93CX5ueuXF2jLa {
                    position: relative;
                    grid-area: 4 / 3 / 7 / 9;
                }

                #sYAbcjXlzafgA8Bq {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #B6okbpDO7kT4XQ46 {
                    font-size: calc(3.02584187em - var(--ffsd));
                }

                #LIPEbe3fMExhNmv9 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.02584187em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #s6GC8gMPydaDLoD3 {
                    min-width: 29.12609944rem;
                }

                #TrOjbk1zUKFg63gU {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #GHsC2qsSjgCDZxjE {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #p8IB0MiwqnjDng23 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #a0V9BkFyL6Ss9bsu {
                    min-width: 68.51962129rem;
                }

                #MsGu89p3A20TtZU5 {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #Inu7z5ZlN0EcGE9q {
                    grid-template-columns: 0 1.25099475rem 14.52412291rem 29.08949622rem 24.86939895rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.04376064rem, max-content) minmax(3.57442606rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.00812874rem, max-content);
                }

                #oPLDG6adJ9dLsPeJ {
                    position: relative;
                    grid-area: 5 / 2 / 9 / 6;
                }

                #NDIFJxyRnQdZIcNu {
                    position: relative;
                    grid-area: 6 / 7 / 8 / 8;
                }

                #RfIlnZptvcbkAzGB {
                    grid-template-columns: 0 1.82311677rem 23.36136287rem 39.36026848rem 6.44025945rem 4.85867325rem 18.53406443rem 4.25998074rem 1.36227402rem;
                    grid-template-rows: minmax(0.95975284rem, max-content) minmax(5.58418741rem, max-content) minmax(0.57633308rem, max-content) minmax(22.25831802rem, max-content) minmax(1.04376064rem, max-content) minmax(2.88026717rem, max-content) minmax(17.12951899rem, max-content) minmax(3.94026499rem, max-content) minmax(1.85014445rem, max-content);
                }

                #updates {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #nitwfmZdkoLqquet {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #p233HgjvGGQdF9ma {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #jMln95FvlJioKUsi {
                    position: relative;
                    grid-area: 3 / 3 / 4 / 4;
                }

                #dAotAhFM5p2TZQ9w {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #OrZUETEirgYKKytW {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #pqOqMYlwM1thUOvr {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #cpWKlBeM6iGpPT8p {
                    min-width: 34.01262945rem;
                }

                #FrzAZGed8dgEir2F {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #IbKdmTKDxznYoEtv {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #fNnmSUDXEP4mqHel {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #CUCZboBJd94nqQRQ {
                    min-width: 68.51962129rem;
                }

                #u6lJxQ0csN1DOmKo {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #spvR8Di2Vb0vQ9TI {
                    grid-template-columns: 0 1.25099475rem 17.25349592rem 33.97602623rem 17.25349592rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(3.94631464rem, max-content) 0 minmax(19.36749634rem, max-content) minmax(1.6170103rem, max-content);
                }

                #dmAFEbA0TlF0Q4PB {
                    position: relative;
                    grid-area: 2 / 5 / 5 / 9;
                }

                #uwd75PcCz0Z8FUr9 {
                    position: relative;
                    grid-area: 2 / 2 / 7 / 7;
                }

                #o2IJnD8WzDRZ5IkM {
                    font-size: calc(3.31866032em - var(--ffsd));
                }

                #EZiwhchakXouq4ye {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.31866032em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #dQPjNu1yr19DClLk {
                    min-width: 34.64128933rem;
                }

                #jlGqJph5QgVyORMX {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #VdC9iKHVRKWb6Quu {
                    font-size: calc(2.04978038em - var(--ffsd));
                }

                #wW6DtSvIwFDFmohJ {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 2.04978038em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #ncMgFN82BeIYc04P {
                    min-width: 68.51962129rem;
                }

                #EdIpMCW4NRpZdt9P {
                    position: relative;
                    grid-area: 5 / 3 / 6 / 6;
                }

                #wxCaNHn5J9AGNdWb {
                    grid-template-columns: 0 1.25099475rem 15.32731197rem 34.60468611rem 18.55102rem 1.25099475rem;
                    grid-template-rows: 0 minmax(1.08136473rem, max-content) minmax(3.94631464rem, max-content) minmax(1.22724416rem, max-content) minmax(16.95168375rem, max-content) minmax(3.05452206rem, max-content);
                }

                #NeHAzMeBe67Eh8VA {
                    position: relative;
                    grid-area: 6 / 2 / 9 / 6;
                }

                #teH7hyyWNarWI6B9 {
                    position: relative;
                    grid-area: 7 / 7 / 8 / 8;
                }

                #efLOTBXSDpsp79zQ {
                    grid-template-columns: 0 2.52915785rem 24.29683154rem 2.18900305rem 41.97001512rem 1.83309003rem 18.13687671rem 9.0450257rem;
                    grid-template-rows: 0 minmax(1.67594012rem, max-content) minmax(24.09519518rem, max-content) minmax(0.8356261rem, max-content) minmax(2.27329211rem, max-content) minmax(3.05452206rem, max-content) minmax(20.15208523rem, max-content) minmax(3.05452206rem, max-content) minmax(1.08136473rem, max-content);
                }

                #services {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #A1LOjGG3CVeP5QDE {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #pW2yIDQlgzbNsT9M {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #R8bOt6EtJqwttN0u {
                    position: relative;
                    grid-area: 2 / 2 / 5 / 3;
                }

                #By7S9NCC4ZfW3gVC {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #R6N7yUjlKd7ZrJH6 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #rvRz3BbmYE5eqbPE {
                    min-width: 50.78995336rem;
                }

                #GJoWYOA2cHvaLdUA {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #lmWA7ivuZe7XVnC1 {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #BSVOLrhTlrWgW112 {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #kv1vl3f1hQeuSZCy {
                    min-width: 50.78995336rem;
                }

                #lt6fLVlmzmlvIQaA {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #wqHLouz6yP7F8HJX {
                    grid-template-columns: 0 0 50.75335014rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(35.84827167rem, max-content);
                }

                #UhIg87EeJD4ejgpO {
                    position: relative;
                    grid-area: 3 / 4 / 4 / 5;
                }

                #wOM9nuONxaY5vAGt {
                    grid-template-columns: 10.25490727rem 34.49937754rem 1.09813047rem 50.75335014rem 3.39423458rem;
                    grid-template-rows: minmax(5.62225476rem, max-content) minmax(3.57139545rem, max-content) minmax(41.40664262rem, max-content) minmax(0.26704723rem, max-content) minmax(5.35520753rem, max-content);
                }

                #join-us {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }

                #bpUCqy7ZTg2m8nI8 {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 3;
                }

                #qeIujJbNUOcwaJsZ {
                    grid-template-columns: 0 100%;
                    grid-template-rows: 0 100%;
                }

                #EawZebyZgdcrWBc7 {
                    font-size: calc(3.72833089em - var(--ffsd));
                }

                #KLvBcDor8t3EUpvx {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 3.72833089em;
                    margin-top: calc(var(--first-font-size) * 0.01);
                    margin-bottom: calc(var(--last-font-size) * 0.01);
                }

                #HH1TuxOcTGAn23bJ {
                    min-width: 52.88537659rem;
                }

                #Pc3GFpguJvGBKQxC {
                    position: relative;
                    grid-area: 2 / 2 / 3 / 4;
                }

                #QTHHZ3btxi5nf7Bi {
                    font-size: calc(1.69094436em - var(--ffsd));
                }

                #pKINzzCtt61BVVYf {
                    --last-font-size: var(--first-font-size);
                    --first-font-size: 1.69094436em;
                    margin-top: calc(var(--first-font-size) * -0.115);
                    margin-bottom: calc(var(--last-font-size) * -0.115);
                }

                #CNPYKum6ha5n8PP0 {
                    min-width: 52.88537659rem;
                }

                #RbuCWfWDwvhi6uE9 {
                    position: relative;
                    grid-area: 4 / 3 / 5 / 5;
                }

                #vw6fxuPUVHezRWEl {
                    grid-template-columns: 0 0 52.84877336rem 0;
                    grid-template-rows: 0 minmax(4.46695315rem, max-content) minmax(1.0914178rem, max-content) minmax(28.60083389rem, max-content);
                }

                #mqUneY4p4ZvKyOch {
                    position: relative;
                    grid-area: 3 / 2 / 4 / 3;
                }

                #CS4egHLw7gnDobli {
                    margin-left: 0%;
                    clip-path: polygon(calc(0% + 0%) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc((0 * 33.31757084rem) + 0%), calc(100% - (42.0924728% + 0%)) calc(100% - ((0 * 33.31757084rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 33.31757084rem) + 0%)));
                    margin-top: 0%;
                    position: relative;
                    margin-bottom: 0%;
                    grid-area: 2 / 4 / 5 / 5;
                    margin-right: -72.68912148%;
                }

                #Wg9aYtq3wzYOD1dH {
                    grid-template-columns: 5.62225476rem 52.84877336rem 8.21140103rem 33.31757084rem;
                    grid-template-rows: minmax(8.32397711rem, max-content) minmax(2.6960692rem, max-content) minmax(34.15920484rem, max-content) minmax(11.04329643rem, max-content);
                }

                #contact {
                    min-height: calc(20.3757847 * var(--1vh, 1vh));
                }
            }

            @keyframes pulse {
                0% {
                    background-color: rgba(226, 226, 226, 0.05);
                }

                50% {
                    background-color: rgba(226, 226, 226, 0.1);
                }

                100% {
                    background-color: rgba(226, 226, 226, 0.05);
                }
            }
        </style><noscript>
            <style>
                .animated {
                    animation-play-state: running !important;
                }

                @keyframes pulse {}
            </style>
        </noscript>
        <script nonce='2062b210-4c54-422c-8b97-d7d9ecd446c5'>
            ! function() {
                "use strict";

                function t(t, n) {
                    let e;
                    return (...o) => {
                        clearTimeout(e), e = setTimeout((() => {
                            t(...o)
                        }), n)
                    }
                }
                class n {
                    constructor() {
                        this.callbacks = [], window.addEventListener("DOMContentLoaded", (() => this.onDOMContentLoaded()))
                    }
                    onDOMContentLoaded() {
                        this.callbacks.sort(((t, n) => t.priority - n.priority)).forEach((({
                            callback: t
                        }) => t()))
                    }
                    runOnLoad(t) {
                        "loading" === document.readyState ? this.callbacks.push(t) : t.callback()
                    }
                }

                function e(t, e = Number.MAX_VALUE) {
                    var o;
                    (window.canva_scriptExecutor = null !== (o = window.canva_scriptExecutor) && void 0 !== o ? o : new n)
                    .runOnLoad({
                        callback: t,
                        priority: e
                    })
                }
                class o {
                    constructor(t) {
                        this.items = [], this.previousWidth = document.documentElement.clientWidth, this.previousHeight =
                            window.innerHeight;
                        const n = t((() => this.onWindowResize()), 100);
                        window.addEventListener("resize", n)
                    }
                    onWindowResize() {
                        const t = document.documentElement.clientWidth,
                            n = window.innerHeight,
                            e = this.previousWidth !== t,
                            o = this.previousHeight !== n;
                        this.items.forEach((t => {
                            const n = () => {
                                t.callback(), t.executed = !0
                            };
                            (!t.executed || e && t.options.runOnWidthChange || o && t.options
                            .runOnHeightChange) && n()
                        })), this.previousWidth = t, this.previousHeight = n
                    }
                    runOnResize(t, n) {
                        this.items.push({
                            callback: t,
                            options: n,
                            executed: n.runOnLoad
                        }), this.items.sort(((t, n) => t.options.priority - n.options.priority)), n.runOnLoad && e(t, n
                            .priority)
                    }
                }

                function i(n, e, i = t) {
                    var r;
                    (window.canva_debounceResize = null !== (r = window.canva_debounceResize) && void 0 !== r ? r : new o(i))
                    .runOnResize(n, {
                        runOnLoad: !1,
                        runOnWidthChange: !0,
                        runOnHeightChange: !1,
                        priority: Number.MAX_VALUE,
                        ...e
                    })
                }

                function r(t, n, e = .001) {
                    return Math.abs(t - n) < e
                }

                function c(t, n) {
                    return window.getComputedStyle(t).getPropertyValue(n)
                }

                function u(t, n, e) {
                    t.style.setProperty(n, e)
                }

                function s(t, n) {
                    const e = document.createElement("div");
                    e.style.setProperty(t, n), document.body.append(e);
                    const o = c(e, t);
                    return e.remove(), o
                }

                function a() {
                    const t = function() {
                            const t = parseFloat(s("font-size", "0.1px"));
                            return t > 1 ? t : 0
                        }(),
                        n = function(t) {
                            const n = 2 * Math.max(t, 1);
                            return n / parseFloat(s("font-size", `${n}px`))
                        }(t);
                    if (function(t) {
                            if (0 === t) return;
                            u(document.documentElement, "--minfs", `${t}px`), i((() => {
                                const n = 100 * t,
                                    {
                                        clientWidth: e
                                    } = document.documentElement;
                                u(document.documentElement, "--rzf", n > e ? (e / n).toPrecision(4) : null)
                            }), {
                                runOnLoad: !0
                            })
                        }(t * Math.max(1, n)), r(n, 1)) return;
                    const e = r(parseFloat(c(document.documentElement, "font-size")), parseFloat(s("grid-template-columns",
                        "1rem")));
                    u(document.documentElement, e ? "--rfso" : "--bfso", n.toPrecision(4))
                }

                function d() {
                    document.querySelectorAll("img, image, video, svg").forEach((t => t.addEventListener("contextmenu", (t => t
                        .preventDefault()))))
                }
                const l = "--sbw",
                    m = "--inner1Vh";

                function h(t, n, e) {
                    t.style.setProperty(n, e)
                }

                function f() {
                    h(document.documentElement, m, window.innerHeight / 100 + "px"),
                        function() {
                            const t = window.innerWidth - document.documentElement.clientWidth;
                            h(document.documentElement, l, t >= 0 ? `${t}px` : null)
                        }()
                }
                var p;
                const g = "undefined" != typeof window ? null === (p = window.navigator) || void 0 === p ? void 0 : p
                    .userAgent : void 0;
                const w = !(!g || (v = g, !v.match(/AppleWebKit\//) || v.match(/Chrome\//) || v.match(/Chromium\//)));
                var v;

                function y() {
                    document.querySelectorAll("svg").forEach((t => t.style.background = "url('')"))
                }

                function b(t) {
                    const n = Array.from(t.children);
                    n.forEach(((t, e) => {
                        if (t.hasAttribute("data-foreign-object-container")) t.style.transformOrigin = "", t.style
                            .transform = "";
                        else {
                            const o = document.createElement("div");
                            o.setAttribute("data-foreign-object-container", ""), t.insertAdjacentElement(
                                "beforebegin", o), t.remove(), o.append(t), n[e] = o
                        }
                    }));
                    const e = t.getScreenCTM();
                    if (!e) return;
                    const {
                        a: o,
                        b: i,
                        c: r,
                        d: c
                    } = e;
                    n.forEach((t => {
                        if (!t.hasAttribute("data-foreign-object-container")) return;
                        const {
                            style: n
                        } = t;
                        n.transformOrigin = "0px 0px", n.transform = `matrix(${o}, ${i}, ${r}, ${c}, 0, 0)`
                    }))
                }
                let E;

                function O() {
                    E || (E = Array.from(document.querySelectorAll("foreignObject")).filter((t => 0 === t
                    .getBoundingClientRect().width))), Array.from(E).forEach(b)
                } [function() {
                    e(a)
                }, function() {
                    i(f, {
                        runOnLoad: !0,
                        runOnHeightChange: !0,
                        priority: 1
                    })
                }, function() {
                    w && i(O, {
                        runOnLoad: !0
                    })
                }, function() {
                    w && e(y)
                }, function() {
                    e(d)
                }].forEach((t => t()))
            }();
        </script>
        <script nonce="2062b210-4c54-422c-8b97-d7d9ecd446c5">
            window.C_CAPTCHA_IMPLEMENTATION = 'RECAPTCHA';
        </script>
        <script nonce="2062b210-4c54-422c-8b97-d7d9ecd446c5">
            window.C_CAPTCHA_KEY = '6Ldk59waAAAAAMPqkICbJjfMivZLCGtTpa6Wn6zO';
        </script>
    </head>

    <body>
        <div id="root">
            <nav
                style="background-color:#ffffff;z-index:1;top:0px;display:flex;font-family:-apple-system, BlinkMacSystemFont, sans-serif;justify-content:flex-end;position:sticky;align-items:center;text-overflow:ellipsis;box-sizing:border-box;border-bottom:1px solid rgba(0, 0, 0, 0.07);height:50px;">
                <input id="menuToggle" type="checkbox" style="display:none;"></input> <label id="menuButton"
                    for="menuToggle">
                    <div id="menuButtonIcon" style="padding:8px;width:24px;"><svg viewBox="0 0 24.0 24.0"
                            preserveAspectRatio="none" style="background:url(&#x27;&#x27;);">
                            <path
                                d="M5.75 5.25h12.5a.75.75 0 1 1 0 1.5H5.75a.75.75 0 0 1 0-1.5zm0 6h12.5a.75.75 0 1 1 0 1.5H5.75a.75.75 0 1 1 0-1.5zm0 6h12.5a.75.75 0 1 1 0 1.5H5.75a.75.75 0 1 1 0-1.5z">
                            </path>
                        </svg></div>
                </label>
                <ul id="verticalMenu">
                    <li class="navMenuLink"><a class="navMenuLinkContent"
                            href="#homeSection">Home</a></li>
                    <li class="navMenuLink"><a class="navMenuLinkContent"
                            href="#updates">Updates</a></li>
                    <li class="navMenuLink"><a class="navMenuLinkContent"
                            href="#services">Services</a></li>
                    <li class="navMenuLink"><a class="navMenuLinkContent" href="join-us">Join
                            Us</a></li>
                    <li class="navMenuLink"><a class="navMenuLinkContent"
                            href="#contact">Contact</a></li>
                </ul>
                <ul id="horizontalMenu" style="padding:0;margin:0;">
                    <li class="navMenuLink"><a class="navMenuLinkContent"
                            href="#homeSection">Home</a></li>
                    <li class="navMenuLink"><a class="navMenuLinkContent"
                            href="#updates">Updates</a></li>
                    <li class="navMenuLink"><a class="navMenuLinkContent"
                            href="#services">Services</a></li>
                    <li class="navMenuLink"><a class="navMenuLinkContent" href="#join-us">Join
                            Us</a></li>
                    <li class="navMenuLink"><a class="navMenuLinkContent"
                            href="#contact">Contact</a></li>
                </ul>
            </nav>
            
            <section id="homeSection"
                style="z-index:0;overflow:hidden;grid-template-columns:auto 100rem auto;display:grid;position:relative;align-items:center;">
                <div id="s4uNwOCaJFGxqML6"
                    style="display:grid;min-height:100%;position:absolute;grid-area:1 / 1 / 2 / 4;min-width:100%;">
                    <div id="G4l7aL7N1FbMDfuM" style="z-index:0;">
                        <div id="mE6LPoYumbLKofPj"
                            style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                            <div id="iQvfesLQVOqQrsg6" style="width:100%;opacity:1.0;height:100%;">
                                <div id="cuFVvPx30L3fQdEI"
                                    style="transform:scale(1, 1);overflow:hidden;background:linear-gradient(90deg, rgba(255, 247, 173, 1.000000) 0%, rgba(255, 169, 249, 1.000000) 100%);width:100%;position:relative;height:100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="H07C9vocdLpTJ7Ju" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                    <div id="b5o4ebF7ssr1Qkkp" style="z-index:5;">
                        <div id="EKpWeNy9w7l6SDcT"
                            style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                            <div id="r8nIjYLTbgEKrkoU"
                                style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                <p id="c2l02T16MwrhTbuo"
                                    style="margin-left:0em;color:#000000;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.17045189em;direction:ltr;">
                                    <span id="I8knjGmq3pF4nBOz" style="color:#297668;font-weight:700;">Unlocking
                                        Career</span><span id="E6d5yd3CSYk57xK8" style="color:#6f5acd;font-weight:700;">
                                    </span><span id="pTCgMmmDwkIrxOjM"
                                        style="text-decoration-line:none;color:#6f5acd;font-weight:700;font-style:normal;">
                                    </span><span id="QTGlyzlgUToW4LVS"
                                        style="text-decoration-line:none;color:#2b1392;font-style:normal;"> </span><span
                                        id="ub15dHpwusndCHmG"
                                        style="text-decoration-line:none;color:#1e134d;font-style:normal;">opportunities
                                    </span><span id="Fj2Gl32XQBRerZpL"
                                        style="text-decoration-line:none;color:#297668;font-style:normal;">and</span><span
                                        id="kVBUr5WUg1xbuxmv"
                                        style="text-decoration-line:none;color:#2b1392;font-style:normal;"> </span><span
                                        id="pg3cSbtRPRB1emwc"
                                        style="text-decoration-line:none;color:#297668;font-style:normal;">Empowering</span><span
                                        id="qmRJH6CwwMTqPAsV"
                                        style="text-decoration-line:none;color:#6f5acd;font-style:normal;"> </span><span
                                        id="aTMnxgEG6PTLkNgE"
                                        style="text-decoration-line:none;color:#1e134d;font-style:normal;">Success
                                    </span><br></p>
                            </div>
                        </div>
                    </div>
                    <div id="IvAvjEZDjd7eQ9Zt" style="z-index:4;">
                        <div id="bes02DFCzIwWAzxA"
                            style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                            <div id="s6niEpXEwRxqn9Md"
                                style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                <p id="A8IASPl6i3HyRP7N"
                                    style="text-transform:uppercase;color:#1e134d;letter-spacing:0.03em;font-family:YAEahSPMowE-0;line-height:1.08379208em;">
                                    <span id="XYVLa0uvA1NoeuwJ" style="color:#1e134d;font-weight:700;">WELCOME TO
                                        PICRUIT....</span></p>
                            </div>
                        </div>
                    </div>
                    <div id="cJkjEHhHdHmVSRIO" style="z-index:1;">
                        <div id="iJ7SZHnRmdxXBVSY" style="padding-top:10.03719276%;transform:rotate(0deg);">
                            <div id="jq51K9E3GWLkuc1e" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                <svg id="MjIjaY7zO7WNGOxE" viewBox="0 0 500.0 500.0" preserveAspectRatio="none"
                                    style="overflow:hidden;top:0%;left:0%;background:url(&#x27;&#x27;);width:100%;position:absolute;opacity:0.1;height:100%;">
                                    <g id="efk0EfLUQyRzAIWn" style="transform:scale(1, 1);">
                                        <path id="gtTAEtMqlZHHpHJs"
                                            d="M250.0,0.0 C111.9288101196289,0.0 0.0,111.9288101196289 0.0,250.0 C0.0,388.0711975097656 111.9288101196289,500.0 250.0,500.0 C388.0711975097656,500.0 500.0,388.0711975097656 500.0,250.0 C500.0,111.9288101196289 388.0711975097656,0.0 250.0,0.0"
                                            style="fill:#2b1392;opacity:1.0;"></path>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                    <div id="R17bhaYDimXTwcAh" style="z-index:3;">
                        <div id="r3QPqJl7hd0xaBTV" style="padding-top:250.78369906%;transform:rotate(0deg);">
                            <div id="MHNaCKjXW4kCB6OT" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                <div id="nRWERzqyiiTI09LL" style="width:100%;opacity:1.0;height:100%;">
                                    <div id="SivB8K0iBxv1vQc8"
                                        style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                                        <div id="jXEURS9NfxzHaWTb"
                                            style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                                            <img src="https://imagetolink.com/ib/OQNISNqDAQ.png" 
                                                alt="3D Teacher And Student Pre School Girl Speaking" loading="lazy"/>
                                               </div>  {{-- srcset="images/e49bf11ad9bf6e0ed73600ff3a29fd8d.png 177w, images/578fa3078007879a498e611d8a403fa0.png 295w"
                                                sizes="(max-width: 375px) 14.70989712vw, (min-width: 375.05px) and (max-width: 480px) 14.70989712vw, (min-width: 480.05px) and (max-width: 768px) 14.70989712vw, (min-width: 768.05px) and (max-width: 1024px) 14.70989712vw, (min-width: 1024.05px) 14.70989712vw"
                                                style="display:block;object-fit:cover;width:100%;height:100%;">--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="os3ugdkkUKsdXIQ9" style="z-index:2;">
                        <div id="pjwBP8Sbvzaoo0sM" style="padding-top:227.27272727%;transform:rotate(0deg);">
                            <div id="ZsGTBgMNIVTMVjZk" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                <div id="BkWCCfNcJWv9rK7v" style="width:100%;opacity:1.0;height:100%;">
                                    <div id="QQReNnOAzXxme5CJ"
                                        style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                                        <div id="HTOPXKKR8nWPBEw3"
                                            style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                                            <img src="https://imagetolink.com/ib/fgT5zXrQqQ.png"
                                                alt="3D Teacher And Student Pre School Boy Speaking" loading="lazy"/>
                                                {{-- srcset="images/dbb62c841919ec79ba87a98d8e6525c1.png 195w, images/6510f38845f2ba2efffcfc7435e1d575.png 325w"
                                                sizes="(max-width: 375px) 17.23522229vw, (min-width: 375.05px) and (max-width: 480px) 17.23522229vw, (min-width: 480.05px) and (max-width: 768px) 17.23522229vw, (min-width: 768.05px) and (max-width: 1024px) 17.23522229vw, (min-width: 1024.05px) 17.23522229vw"
                                                style="display:block;object-fit:cover;width:100%;height:100%;"></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 1 -->
            <section id="updates"
                style="z-index:0;overflow:hidden;grid-template-columns:auto 100rem auto;display:grid;margin-top:-1px;position:relative;align-items:center;">
                <div id="e7FO5mxNwiDlgCtR"
                    style="display:grid;min-height:100%;position:absolute;grid-area:1 / 1 / 2 / 4;min-width:100%;">
                    <div id="Hcqr4CYgvr16uIum" style="z-index:0;">
                        <div id="UyXzaYfpDqGE8SNh"
                            style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                            <div id="hLUj6IMuxm8KJw5P" style="width:100%;opacity:1.0;height:100%;">
                                <div id="RLfHyEXfISv5Lc3j"
                                    style="transform:scale(1, 1);overflow:hidden;background:radial-gradient(circle farthest-corner at 50% 50%, rgba(245, 252, 253, 1.000000) 0%, rgba(128, 230, 92, 1.000000) 100%);width:100%;position:relative;height:100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="RfIlnZptvcbkAzGB" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                    <div id="Fvf3J013o1Gr77i3" style="z-index:1;">
                        <div id="xL3tFEyTu3NVkabE"
                            style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                            <div id="mZSAxlRM7Fjrv9wz"
                                style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                <p id="MhmXUsH9RGb8MMJF"
                                    style="margin-left:0em;text-transform:none;color:#e8e2ff;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.171875em;direction:ltr;text-align:center;">
                                    <span id="sqKxT135vG0bQp3j" style="color:#297668;font-weight:700;">ABOUT US</span><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="UB93CX5ueuXF2jLa">
                        <div id="i8dgZXeEuQgwGJ9d" style="display:grid;position:relative;grid-area:4 / 3 / 7 / 9;">
                            <div id="p0lpx0VqTtJIsV66" style="z-index:3;">
                                <div id="KdJP8beQaENjc937"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                                    <div id="Q1p2BhE9exHpIG4b"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="d0Rrp9pGU0GXJWxR"
                                            style="color:#1e134d;font-family:YAEahQQIqj8-0;line-height:1.41891543em;"><span
                                                id="ZnHenXcwsNIEnQb4" style="color:#1e134d;"> Our platform specializes in
                                                connecting businesses with freelancers, providing teaching resources, and
                                                offering recruitment solutions. Our mission is to empower businesses to
                                                thrive by offering a range of services to meet their specific needs.At our
                                                core, we believe in the power of collaboration and the benefits it brings to
                                                educators, freelancers, learners, and businesses. Our platform fosters a
                                                supportive community where freelancers, learners, and businesses can
                                                connect, share knowledge, and grow together. Whether you are a freelancer
                                                looking for exciting opportunities, a business seeking specialized talent,
                                                or an individual eager to expand your skill set, our website is your go-to
                                                destination. Join us today and experience the convenience, expertise, and
                                                growth opportunities that our platform offers. We are committed to
                                                delivering exceptional value and facilitating meaningful connections in the
                                                world of freelancing, teaching, and business recruitment.</span></p>
                                        <p id="sQqtIxg9a2OK6DKP"
                                            style="color:#1e134d;white-space:pre;font-family:YAEahQQIqj8-0;line-height:1.41891543em;">
                                            <br></p>
                                        <p id="Wfau5mppeYtObS6y"
                                            style="margin-left:0em;text-transform:none;color:#1e134d;white-space:pre;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.41891543em;direction:ltr;">
                                            <br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="oPLDG6adJ9dLsPeJ">
                        <div id="Inu7z5ZlN0EcGE9q" style="display:grid;position:relative;grid-area:5 / 2 / 9 / 6;">
                            <div id="sYAbcjXlzafgA8Bq" style="z-index:4;">
                                <div id="Sk0sSrRgpx2Ivak5" style="padding-top:35.20998679%;transform:rotate(0deg);">
                                    <div id="Z5aQ0bPmMnWKjJ0f"
                                        style="top:0px;left:0px;width:100%;position:absolute;height:100%;"><svg
                                            id="zgoQcuKT2MnGMIQV" viewBox="0 0 345.9447 121.8071"
                                            style="overflow:hidden;top:0%;left:0%;background:url(&#x27;&#x27;);width:100%;position:absolute;opacity:0.4;height:100%;">
                                            <g id="Y4Wv7qZIsbMVpt0m" style="transform:scale(1, 1);">
                                                <path id="AdlkefB5qTYdgltg"
                                                    d="M336.1446888228886,121.80707834222072 L9.800000190734863,121.80707834222072 C4.400000095367432,121.80707834222072 0.0,117.40708444573634 0.0,112.00707529046291 L0.0,9.800000190734863 C0.0,4.400000095367432 4.400000095367432,0.0 9.800000190734863,0.0 L336.1447040816777,0.0 C341.54469797816205,0.0 345.9447071334355,4.400000095367432 345.9447071334355,9.800000190734863 L345.9447071334355,112.00709054925197 C345.9447071334355,117.40708444573634 341.54469797816205,121.80709360100978 336.1447040816777,121.80709360100978"
                                                    style="fill:#2b1392;opacity:1.0;"></path>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                            <div id="TrOjbk1zUKFg63gU" style="z-index:6;">
                                <div id="s6GC8gMPydaDLoD3"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                                    <div id="LIPEbe3fMExhNmv9"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="B6okbpDO7kT4XQ46"
                                            style="text-transform:none;color:#297668;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.16129969em;text-align:center;">
                                            <span id="qbECMc7ilHdauGdc"
                                                style="color:#297668;font-weight:700;font-style:normal;">Freelancer
                                                Services:</span></p>
                                    </div>
                                </div>
                            </div>
                            <div id="MsGu89p3A20TtZU5" style="z-index:5;">
                                <div id="a0V9BkFyL6Ss9bsu"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                                    <div id="p8IB0MiwqnjDng23"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="GHsC2qsSjgCDZxjE"
                                            style="text-transform:none;color:#1e134d;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.17857143em;text-align:center;">
                                            <span id="q7Hf5jxHwPOR67p7"
                                                style="color:#1e134d;font-weight:700;font-style:normal;"> We understand the
                                                value of freelancers in today&#x27;s dynamic business landscape. Our
                                                platform serves as a bridge between businesses and talented freelancers from
                                                various industries. Whether you need a graphic designer, web developer,
                                                content writer, or any other professional, our platform enables you to find
                                                the right freelancer for your project. We prioritize quality and
                                                reliability, ensuring that you have access to highly skilled and experienced
                                                freelancers who can deliver exceptional results.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="NDIFJxyRnQdZIcNu" style="z-index:7;">
                        <div id="PM1dlIff3nmwcpZ6" style="padding-top:107.96221323%;transform:rotate(0deg);">
                            <div id="PHBqchOEILxDS5S0" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                <div id="TCkjtaQPKGEW1Yc5" style="width:100%;opacity:1.0;height:100%;">
                                    <div id="F1qdDHGtaZkKJw1q"
                                        style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                                        <div id="OTSINMwGBTlFEen7"
                                            style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                                            <img src="https://imagetolink.com/ib/Ytc9usnxmB.png"
                                                alt="3D Floating Element Megaphone" loading="lazy"/>
                                                {{-- srcset="images/3a2bcb42491142d027c231a88ce7d814.png 198w, images/d80d906aaca39f5da3d4619789255de6.png 396w"
                                                sizes="(max-width: 375px) 18.53406443vw, (min-width: 375.05px) and (max-width: 480px) 18.53406443vw, (min-width: 480.05px) and (max-width: 768px) 18.53406443vw, (min-width: 768.05px) and (max-width: 1024px) 18.53406443vw, (min-width: 1024.05px) 18.53406443vw"
                                                style="display:block;object-fit:cover;width:100%;height:100%;"></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--3-->
            <section id="services"
                style="z-index:0;overflow:hidden;grid-template-columns:auto 100rem auto;display:grid;margin-top:-1px;position:relative;align-items:center;">
                <div id="p233HgjvGGQdF9ma"
                    style="display:grid;min-height:100%;position:absolute;grid-area:1 / 1 / 2 / 4;min-width:100%;">
                    <div id="nitwfmZdkoLqquet" style="z-index:0;">
                        <div id="jPN2lmgpn4rtMBpK"
                            style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                            <div id="IVe7mXvHObn85J3Q" style="width:100%;opacity:1.0;height:100%;">
                                <div id="RZNxQSJiqj4c4dtw"
                                    style="transform:scale(1, 1);overflow:hidden;background:radial-gradient(circle farthest-corner at 50% 50%, rgba(245, 252, 253, 1.000000) 0%, rgba(128, 230, 92, 1.000000) 100%);width:100%;position:relative;height:100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="efLOTBXSDpsp79zQ" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                    <div id="jMln95FvlJioKUsi" style="z-index:1;">
                        <div id="T4AxZRHNHhl5gal5" style="padding-top:99.17011256%;transform:rotate(0deg);">
                            <div id="S77TNerTTIDcUtWe" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                <div id="TY3hedE0KD56abZm" style="width:100%;opacity:1.0;height:100%;">
                                    <div id="AibM7T6af2Cy4l2m"
                                        style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                                        <div id="W1VOpV1hmFrXZGr5"
                                            style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:101.21639368%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                                            <img src="https://imagetolink.com/ib/9dZEeyfKRB.png"
                                                alt="3D Teacher And Student Pre School Boy Playing" loading="lazy"/>
                                                {{-- srcset="images/db8c6d3d6163df691fbeb337d31ccb8c.png 286w, images/6cfaa7ddaf7f835b3fac6a1881d26711.png 572w"
                                                sizes="(max-width: 375px) 24.29683154vw, (min-width: 375.05px) and (max-width: 480px) 24.29683154vw, (min-width: 480.05px) and (max-width: 768px) 24.29683154vw, (min-width: 768.05px) and (max-width: 1024px) 24.29683154vw, (min-width: 1024.05px) 24.29683154vw"
                                                style="display:block;object-fit:cover;width:100%;height:100%;"></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    
                </div>
                <!---->
                    <!--3-->
                <div class="cheke-test" style="display: flex; margin: 10px;">
                    <div id="NeHAzMeBe67Eh8VA" style="">
                        <div id="wxCaNHn5J9AGNdWb" style="display:grid;position:relative;grid-area:6 / 2 / 9 / 6; margin-left:27%">
                            <div id="uwd75PcCz0Z8FUr9" style="z-index:6;">
                                <div id="TbcQKtCoj5K2SuLg" style="padding-top:36.99531809%;transform:rotate(0deg);">
                                    <div id="MBB8NNb7IQxPR9BQ"
                                        style="top:0px;left:0px;width:100%;position:absolute;height:100%;"><svg
                                            id="ZjMJFAN8iTBlsiVt" viewBox="0 0 345.9447 127.9833"
                                            style="overflow:hidden;top:0%;left:0%;background:url(&#x27;&#x27;);width:100%;position:absolute;opacity:0.4;height:100%;">
                                            <g id="Qaq03kfSTZlhEszV" style="transform:scale(1, 1);">
                                                <path id="OIqWYmUcebzo8P9c"
                                                    d="M336.1446888228886,127.98333723848539 L9.800000190734863,127.98333723848539 C4.400000095367432,127.98333723848539 0.0,123.58334334200102 0.0,118.18333418672758 L0.0,9.800000190734863 C0.0,4.400000095367432 4.400000095367432,0.0 9.800000190734863,0.0 L336.1447040816777,0.0 C341.54469797816205,0.0 345.9447071334355,4.400000095367432 345.9447071334355,9.800000190734863 L345.9447071334355,118.18334944551664 C345.9447071334355,123.58334334200102 341.54469797816205,127.98335249727445 336.1447040816777,127.98335249727445"
                                                    style="fill:#2b1392;opacity:1.0;"></path>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                            <div id="jlGqJph5QgVyORMX" style="z-index:7;">
                                <div id="dQPjNu1yr19DClLk"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                                    <div id="EZiwhchakXouq4ye"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="o2IJnD8WzDRZ5IkM"
                                            style="text-transform:none;color:#297668;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.16912882em;text-align:center;">
                                            <span id="zgdL2yVdj8qusAPI"
                                                style="color:#297668;font-weight:700;">Recruitment</span><span
                                                id="L19psdOcTJTNRLtF"
                                                style="color:#297668;font-weight:700;font-style:normal;"> Services:</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="EdIpMCW4NRpZdt9P" style="z-index:8;">
                                <div id="ncMgFN82BeIYc04P"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                                    <div id="wW6DtSvIwFDFmohJ"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="VdC9iKHVRKWb6Quu"
                                            style="text-transform:none;color:#1e134d;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.17857143em;text-align:center;">
                                            <span id="gEO0pvxpQ7woodWw" style="color:#1e134d;font-weight:700;">Finding the
                                                right talent for your business is crucial for success. Our recruitment
                                                solutions streamline the hiring process, making it easier for businesses to
                                                identify and attract top talent. We provide a platform where businesses can
                                                post job listings, review candidate profiles, and connect with potential
                                                hires. Our extensive network of professionals ensures that you have access
                                                to a wide pool of qualified candidates, saving you time and effort in the
                                                recruitment process.</span><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- new web-->
            <div style="display:flex; padding:30px; padding-right:40px;">
                <div id="dmAFEbA0TlF0Q4PB">
                        <div id="spvR8Di2Vb0vQ9TI" style="display:grid;position:relative;grid-area:2 / 5 / 5 / 9; ">
                            <div id="dAotAhFM5p2TZQ9w" style="z-index:3;">
                                <div id="VLjwIv0wHKnSklxl" style="padding-top:37.48222662%;transform:rotate(0deg);">
                                    <div id="iM4Rdi7Daskp6q6v"
                                        style="top:0px;left:0px;width:100%;position:absolute;height:100%;"><svg
                                            id="VsYRSMEga56kTbOG" viewBox="0 0 345.9447 129.6678"
                                            style="overflow:hidden;top:0%;left:0%;background:url(&#x27;&#x27;);width:100%;position:absolute;opacity:0.4;height:100%;">
                                            <g id="xE9SEkPKo0IxaQr7" style="transform:scale(1, 1);">
                                                <path id="xHlQFf6oPHeJJxrj"
                                                    d="M336.1446888228886,129.6677714829213 L9.800000190734863,129.6677714829213 C4.400000095367432,129.6677714829213 0.0,125.2677775864369 0.0,119.86776843116347 L0.0,9.800000190734863 C0.0,4.400000095367432 4.400000095367432,0.0 9.800000190734863,0.0 L336.1447040816777,0.0 C341.54469797816205,0.0 345.9447071334355,4.400000095367432 345.9447071334355,9.800000190734863 L345.9447071334355,119.86778368995253 C345.9447071334355,125.2677775864369 341.54469797816205,129.66778674171036 336.1447040816777,129.66778674171036"
                                                    style="fill:#2b1392;opacity:1.0;"></path>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                            <div id="FrzAZGed8dgEir2F" style="z-index:4;">
                                <div id="cpWKlBeM6iGpPT8p"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                                    <div id="pqOqMYlwM1thUOvr"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="OrZUETEirgYKKytW"
                                            style="text-transform:none;color:#297668;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.16912882em;text-align:center;">
                                            <span id="lfYihPHPMirJgRlN"
                                                style="color:#297668;font-weight:700;">Educational</span><span
                                                id="fUALpkGTb0OkPZfs"
                                                style="color:#297668;font-weight:700;font-style:normal;"> Services:</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="u6lJxQ0csN1DOmKo" style="z-index:5; margin-top:20px;"> <!--mil gya-->
                                <div id="CUCZboBJd94nqQRQ"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%; margin-top:20px;">
                                    <div id="fNnmSUDXEP4mqHel margin-top:40px;"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="IbKdmTKDxznYoEtv"
                                            style="text-transform:none;color:#1e134d;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.17857143em;text-align:center;">
                                            <span id="HBBzD4uGXtbWpiHE" style="color:#1e134d;font-weight:700;">We also
                                                recognize the importance of continuous learning and development for
                                                businesses and individuals alike. Our website provides comprehensive
                                                teaching resources to help you enhance your skills and knowledge. We offer a
                                                diverse range of courses, tutorials, and educational content across various
                                                disciplines. Whether you are looking to upskill your workforce or explore
                                                new areas of expertise, our teaching resources cater to learners of all
                                                levels</span><br></p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <img src="https://imagetolink.com/ib/6Zb4dv4cuB.png"
                    alt="3D Floating Element Rocket" style="width:300px; margin-top:20px;" loading="lazy"/>
                    <!-- new end web-->    
                 </div>
            </section>
           
            <!-- 4 -->
            <section id="contact"
                style="z-index:0;overflow:hidden;grid-template-columns:auto 100rem auto;display:grid;margin-top:-1px;position:relative;align-items:center;">
                <div id="qeIujJbNUOcwaJsZ"
                    style="display:grid;min-height:100%;position:absolute;grid-area:1 / 1 / 2 / 4;min-width:100%;">
                    <div id="bpUCqy7ZTg2m8nI8" style="z-index:0;">
                        <div id="O4o7YsgZqnCK2BHQ"
                            style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                            <div id="hRTsHRok2t1Lxe1d" style="width:100%;opacity:1.0;height:100%;">
                                <div id="bCDo8e77kNJ2alhw"
                                    style="transform:scale(1, 1);overflow:hidden;background:radial-gradient(circle farthest-corner at 50% 50%, rgba(245, 252, 253, 1.000000) 0%, rgba(128, 230, 92, 1.000000) 100%);width:100%;position:relative;height:100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- down side last-->
                <div id="Wg9aYtq3wzYOD1dH" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                    <div id="mqUneY4p4ZvKyOch">
                        <div id="vw6fxuPUVHezRWEl" style="display:grid;position:relative;grid-area:3 / 2 / 4 / 3;">
                            <div id="Pc3GFpguJvGBKQxC" style="z-index:3;">
                                <div id="HH1TuxOcTGAn23bJ"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                                    <div id="KLvBcDor8t3EUpvx"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="EawZebyZgdcrWBc7"
                                            style="margin-left:0em;text-transform:none;color:#297668;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.1781107em;direction:ltr;">
                                            <span id="saeoyQS93TRWfdvI"
                                                style="color:#297668;font-weight:700;">Picruit&#x27;s</span><span
                                                id="sGG7W54tipZqug0O"
                                                style="color:#297668;white-space:pre-wrap;font-weight:700;"> </span><span
                                                id="lckB7kCf9z329IkP"
                                                style="color:#297668;font-weight:700;">MISSION</span><br></p>
                                    </div>
                                </div>
                            </div>
                            <div id="RbuCWfWDwvhi6uE9" style="z-index:4;">
                                <div id="CNPYKum6ha5n8PP0"
                                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                                    <div id="pKINzzCtt61BVVYf"
                                        style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;box-sizing:border-box;height:100%;">
                                        <p id="QTHHZ3btxi5nf7Bi"
                                            style="margin-left:0em;text-transform:none;color:#1e134d;letter-spacing:0em;font-family:YAEahQQIqj8-0;line-height:1.42867657em;direction:ltr;">
                                            <span id="BTWUsbb2dmW16GVH" style="color:#1e134d;"> Pioneer’s mission is to
                                                connect freelancers, job seekers, educators, and businesses in a seamless
                                                online platform, creating a vibrant ecosystem that fosters collaboration,
                                                learning, and growth. We strive to empower freelancers by providing them
                                                with opportunities to showcase their skills and find meaningful projects.
                                                Simultaneously, we aim to support educators in sharing their knowledge and
                                                expertise with a global community of students and learners. Furthermore, we
                                                are dedicated to assisting businesses in finding talented professionals who
                                                can contribute to their success. Through our platform, we aim to
                                                revolutionize the way freelancers, educators, and businesses interact,
                                                enabling a world of limitless possibilities.</span><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="CS4egHLw7gnDobli" style="z-index:1;" style="margin-right:10%;">
                        <div id="KeRlG7RErDmUdbGi" style="padding-top:83.25%;transform:rotate(0deg);">
                            <div id="itAH6JPJ6XJwgEIN" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                <div id="hRSUmRq1L0UZkpCa" style="width:100%;opacity:1.0;height:100%;">
                                    <div id="zWvmNJdnYROUWmnG"
                                        style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%; margin-right:200px;">
                                        <div id="kNd2kVpfsNEynELU"
                                            style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                                            <img src="https://imagetolink.com/ib/P5hL6q7K7f.png"
                                                alt="Person Working on a Couch" loading="lazy"/>
                                                {{-- srcset="images/93772f44d5a061b984fa4b74407ee213.png 446w, images/60010de44c8090ebe0b1fc7d3dcd9fa6.png 1039w"
                                                sizes="(max-width: 375px) 33.31757084vw, (min-width: 375.05px) and (max-width: 480px) 33.31757084vw, (min-width: 480.05px) and (max-width: 768px) 33.31757084vw, (min-width: 768.05px) and (max-width: 1024px) 33.31757084vw, (min-width: 1024.05px) 33.31757084vw"
                                                style="display:block;object-fit:cover;width:100%;height:100%;"></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="js/73ad2651535b7ecadd366d5fa045dc32c1cdb8fc38f8243601b62b64f4123420.js" async=""
                nonce="2062b210-4c54-422c-8b97-d7d9ecd446c5"></script>
            <script src="js/1074ae737e5ec243ce9a503e2bc61fd919e4f9de01105d8c36a3b7222fd99aeb.js" async=""
                nonce="2062b210-4c54-422c-8b97-d7d9ecd446c5"></script>
        </div>
        <script nonce="2062b210-4c54-422c-8b97-d7d9ecd446c5">
            const lang = navigator.language ? navigator.language : 'en';
            fetch('_footer?lang=' + encodeURIComponent(lang)).then(response => {
                response.text().then(footerStr => {
                    const div = document.createElement('div');
                    div.innerHTML = footerStr;
                    for (const child of [...div.children]) {
                        if (child.tagName.toLowerCase() !== 'script') {
                            document.body.append(child);
                        }
                    }

                    (() => {
                        ! function() {
                            "use strict";
                            const e = document.getElementById("modal_backdrop"),
                                t = document.getElementById("report_form"),
                                o = document.getElementById("report_button"),
                                n = document.getElementById("form_report"),
                                c = document.getElementById("form_cancel"),
                                s = document.getElementById("form_submit_reason"),
                                a = document.getElementById("form_go_back"),
                                d = document.getElementById("form_submit_captcha"),
                                l = document.getElementById("form_close"),
                                i = document.getElementById("report_reason_0"),
                                r = document.getElementById("error_message"),
                                m = document.getElementById("error_message_captcha"),
                                u = [document.getElementById("form_step_terms"), document.getElementById(
                                    "form_step_report_reason"), document.getElementById(
                                    "form_step_captcha"), document.getElementById("form_step_success")];

                            function p() {
                                e.classList.remove("active"), t.classList.remove("active"), o.classList
                                    .remove("active"), o.focus()
                            }

                            function E(e) {
                                u.forEach(((t, o) => {
                                    t.style.display = o === e ? "block" : "none"
                                }))
                            }
                            let _, y = !1;
                            const f = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? () => _ : () => {
                                const e = t.elements.namedItem("g-recaptcha-response");
                                return null == e ? void 0 : e.value
                            };
                            e.onclick = p, c.onclick = p, l.onclick = p, o.onclick = function() {
                                u.forEach(((e, t) => {
                                        e.style.display = 0 === t ? "block" : "none"
                                    })), e.classList.add("active"), t.classList.add("active"), o
                                    .classList.add("active"), i.checked = !0, setTimeout((() => {
                                        i.focus()
                                    }), 350)
                            }, n.onclick = () => E(1), s.onclick = () => {
                                E(2),
                                    function() {
                                        if (y) return;
                                        const e = document.createElement("script");
                                        console.log("our window captcha: ", window
                                                .C_CAPTCHA_IMPLEMENTATION, window.C_CAPTCHA_KEY), e
                                            .src = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ?
                                            "https://cstaticdun.126.net/load.min.js" :
                                            "https://www.google.com/recaptcha/api.js", e.async = !0, e
                                            .defer = !0, document.head.appendChild(e), y = !0, e
                                            .onload = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ?
                                        () => {
                                                var e;
                                                null === (e = window.initNECaptcha) || void 0 === e || e
                                                    .call(window, {
                                                        captchaId: window.C_CAPTCHA_KEY,
                                                        element: "#netease-captcha",
                                                        protocol: "https",
                                                        width: "auto",
                                                        onVerify: (e, t) => {
                                                            _ = t.validate
                                                        }
                                                    })
                                            } : () => {}
                                    }()
                            }, a.onclick = () => E(1), t.addEventListener("submit", (function(e) {
                                e.preventDefault(), r.style.display = "none", m.style.display =
                                    "none";
                                const t = function() {
                                        let e = "";
                                        const t = document.getElementsByName("report_reason");
                                        for (let o = 0; o < t.length; o++) {
                                            const n = t[o];
                                            !0 === n.checked && (e = n.value)
                                        }
                                        return e
                                    }(),
                                    o = f();
                                if (!o) return void(m.style.display = "block");
                                const n = {
                                        reason: t,
                                        challenge: o
                                    },
                                    c = window.location.origin + window.location.pathname +
                                    "/_api/report";
                                d.classList.add("loading"), fetch(c, {
                                    method: "POST",
                                    body: JSON.stringify(n),
                                    headers: {
                                        "Content-Type": "application/json; charset=utf-8"
                                    }
                                }).then((e => {
                                    d.classList.remove("loading"), e.ok ? E(3) : r
                                        .style.display = "block"
                                }))
                            }))
                        }();
                    })();
                    window.dispatchEvent(new Event('resize'));
                });
            });
        </script>
    </body>

    </html>

@stop
