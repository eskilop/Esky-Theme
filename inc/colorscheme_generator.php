<?php
  require get_template_directory() . '/vendor/autoload.php';

  use Phim\Color;

  function esky_generate_colorscheme() {
    $colors = array(
      'red' => get_theme_mod( "esky_color_red", "#D18D8A" ),
      'green' => get_theme_mod( "esky_color_green", "#6BA272" ),
      'orange' => get_theme_mod( "esky_color_orange", "#D1AB8A" ),
      'blue' => get_theme_mod( "esky_color_blue", "#626D8D" ),
      'yellow' => get_theme_mod( "esky_color_yellow", "#D1CB8A" ),
      'purple' => get_theme_mod( "esky_color_purple", "#75628E" ),
      'lightblue' => get_theme_mod( "esky_color_lightblue", "#5C7387" ),
      'cyan' => get_theme_mod( "esky_color_cyan", "#557B7F" ),
      'pink' => get_theme_mod( "esky_color_pink", "#B7798F" ),
      'white' => get_theme_mod( "esky_foreground", "#CCD2E2" ),
      'edark' => get_theme_mod( "esky_background", "#16181E" ),
      'primary' => get_theme_mod( "esky_color_primary", "#626D8D" ),
      'complementary' => get_theme_mod( "esky_color_complementary", "#D1AB8A" ),
    );

    $base_css = '@charset "UTF-8";
    @import url("https://fonts.googleapis.com/css?family=Overpass:400,900&subset=latin-ext");
    /*! bulma.io v0.7.5 | MIT License | github.com/jgthms/bulma */
    @keyframes spinAround {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(359deg);
      }
    }
    .tabs, .pagination-previous,
    .pagination-next,
    .pagination-link,
    .pagination-ellipsis, .breadcrumb, .file, .button, .is-unselectable, .modal-close, .delete {
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    .navbar-link:not(.is-arrowless)::after, .select:not(.is-multiple):not(.is-loading)::after {
      border: 3px solid transparent;
      border-radius: 2px;
      border-right: 0;
      border-top: 0;
      content: " ";
      display: block;
      height: 0.625em;
      margin-top: -0.4375em;
      pointer-events: none;
      position: absolute;
      top: 50%;
      transform: rotate(-45deg);
      transform-origin: center;
      width: 0.625em;
    }
    
    .tabs:not(:last-child), .message:not(:last-child), .list:not(:last-child), .level:not(:last-child), .breadcrumb:not(:last-child), .highlight:not(:last-child), .block:not(:last-child), .title:not(:last-child),
    .subtitle:not(:last-child), .table-container:not(:last-child), .table:not(:last-child), .progress:not(:last-child), .notification:not(:last-child), .content:not(:last-child), .box:not(:last-child) {
      margin-bottom: 1.5rem;
    }
    
    .modal-close, .delete {
      -moz-appearance: none;
      -webkit-appearance: none;
      background-color: rgba(10, 10, 10, 0.2);
      border: none;
      border-radius: 290486px;
      cursor: pointer;
      pointer-events: auto;
      display: inline-block;
      flex-grow: 0;
      flex-shrink: 0;
      font-size: 0;
      height: 20px;
      max-height: 20px;
      max-width: 20px;
      min-height: 20px;
      min-width: 20px;
      outline: none;
      position: relative;
      vertical-align: top;
      width: 20px;
    }
    .modal-close::before, .delete::before, .modal-close::after, .delete::after {
      background-color: ' . $colors['white'] . ';
      content: "";
      display: block;
      left: 50%;
      position: absolute;
      top: 50%;
      transform: translateX(-50%) translateY(-50%) rotate(45deg);
      transform-origin: center center;
    }
    .modal-close::before, .delete::before {
      height: 2px;
      width: 50%;
    }
    .modal-close::after, .delete::after {
      height: 50%;
      width: 2px;
    }
    .modal-close:hover, .delete:hover, .modal-close:focus, .delete:focus {
      background-color: rgba(10, 10, 10, 0.3);
    }
    .modal-close:active, .delete:active {
      background-color: rgba(10, 10, 10, 0.4);
    }
    .is-small.modal-close, .is-small.delete {
      height: 16px;
      max-height: 16px;
      max-width: 16px;
      min-height: 16px;
      min-width: 16px;
      width: 16px;
    }
    .is-medium.modal-close, .is-medium.delete {
      height: 24px;
      max-height: 24px;
      max-width: 24px;
      min-height: 24px;
      min-width: 24px;
      width: 24px;
    }
    .is-large.modal-close, .is-large.delete {
      height: 32px;
      max-height: 32px;
      max-width: 32px;
      min-height: 32px;
      min-width: 32px;
      width: 32px;
    }
    
    .control.is-loading::after, .select.is-loading::after, .loader, .button.is-loading::after {
      animation: spinAround 500ms infinite linear;
      border: 2px solid #dbdbdb;
      border-radius: 290486px;
      border-right-color: transparent;
      border-top-color: transparent;
      content: "";
      display: block;
      height: 1em;
      position: relative;
      width: 1em;
    }
    
    .hero-video, .modal-background, .modal, .image.is-square img,
    .image.is-square .has-ratio, .image.is-1by1 img,
    .image.is-1by1 .has-ratio, .image.is-5by4 img,
    .image.is-5by4 .has-ratio, .image.is-4by3 img,
    .image.is-4by3 .has-ratio, .image.is-3by2 img,
    .image.is-3by2 .has-ratio, .image.is-5by3 img,
    .image.is-5by3 .has-ratio, .image.is-16by9 img,
    .image.is-16by9 .has-ratio, .image.is-2by1 img,
    .image.is-2by1 .has-ratio, .image.is-3by1 img,
    .image.is-3by1 .has-ratio, .image.is-4by5 img,
    .image.is-4by5 .has-ratio, .image.is-3by4 img,
    .image.is-3by4 .has-ratio, .image.is-2by3 img,
    .image.is-2by3 .has-ratio, .image.is-3by5 img,
    .image.is-3by5 .has-ratio, .image.is-9by16 img,
    .image.is-9by16 .has-ratio, .image.is-1by2 img,
    .image.is-1by2 .has-ratio, .image.is-1by3 img,
    .image.is-1by3 .has-ratio, .is-overlay {
      bottom: 0;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
    }
    
    .pagination-previous,
    .pagination-next,
    .pagination-link,
    .pagination-ellipsis, .file-cta,
    .file-name, .select select, .textarea, .input, .button {
      -moz-appearance: none;
      -webkit-appearance: none;
      align-items: center;
      border: 1px solid transparent;
      border-radius: 4px;
      box-shadow: none;
      display: inline-flex;
      font-size: 1rem;
      height: 2.25em;
      justify-content: flex-start;
      line-height: 1.5;
      padding-bottom: calc(0.375em - 1px);
      padding-left: calc(0.625em - 1px);
      padding-right: calc(0.625em - 1px);
      padding-top: calc(0.375em - 1px);
      position: relative;
      vertical-align: top;
    }
    .pagination-previous:focus,
    .pagination-next:focus,
    .pagination-link:focus,
    .pagination-ellipsis:focus, .file-cta:focus,
    .file-name:focus, .select select:focus, .textarea:focus, .input:focus, .button:focus, .is-focused.pagination-previous,
    .is-focused.pagination-next,
    .is-focused.pagination-link,
    .is-focused.pagination-ellipsis, .is-focused.file-cta,
    .is-focused.file-name, .select select.is-focused, .is-focused.textarea, .is-focused.input, .is-focused.button, .pagination-previous:active,
    .pagination-next:active,
    .pagination-link:active,
    .pagination-ellipsis:active, .file-cta:active,
    .file-name:active, .select select:active, .textarea:active, .input:active, .button:active, .is-active.pagination-previous,
    .is-active.pagination-next,
    .is-active.pagination-link,
    .is-active.pagination-ellipsis, .is-active.file-cta,
    .is-active.file-name, .select select.is-active, .is-active.textarea, .is-active.input, .is-active.button {
      outline: none;
    }
    [disabled].pagination-previous,
    [disabled].pagination-next,
    [disabled].pagination-link,
    [disabled].pagination-ellipsis, [disabled].file-cta,
    [disabled].file-name, .select select[disabled], [disabled].textarea, [disabled].input, [disabled].button, fieldset[disabled] .pagination-previous,
    fieldset[disabled] .pagination-next,
    fieldset[disabled] .pagination-link,
    fieldset[disabled] .pagination-ellipsis, fieldset[disabled] .file-cta,
    fieldset[disabled] .file-name, fieldset[disabled] .select select, .select fieldset[disabled] select, fieldset[disabled] .textarea, fieldset[disabled] .input, fieldset[disabled] .button {
      cursor: not-allowed;
    }
    
    /*! minireset.css v0.0.4 | MIT License | github.com/jgthms/minireset.css */
    html,
    body,
    p,
    ol,
    ul,
    li,
    dl,
    dt,
    dd,
    blockquote,
    figure,
    fieldset,
    legend,
    textarea,
    pre,
    iframe,
    hr,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      padding: 0;
    }
    
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: 100%;
      font-weight: normal;
    }
    
    ul {
      list-style: none;
    }
    
    button,
    input,
    select,
    textarea {
      margin: 0;
    }
    
    html {
      box-sizing: border-box;
    }
    
    *, *::before, *::after {
      box-sizing: inherit;
    }
    
    img,
    embed,
    iframe,
    object,
    video {
      height: auto;
      max-width: 100%;
    }
    
    audio {
      max-width: 100%;
    }
    
    iframe {
      border: 0;
    }
    
    table {
      border-collapse: collapse;
      border-spacing: 0;
    }
    
    td,
    th {
      padding: 0;
    }
    td:not([align]),
    th:not([align]) {
      text-align: left;
    }
    
    html {
      background-color: ' . $colors['edark'] . ';
      font-size: 16px;
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      min-width: 300px;
      overflow-x: hidden;
      overflow-y: scroll;
      text-rendering: optimizeLegibility;
      text-size-adjust: 100%;
    }
    
    article,
    aside,
    figure,
    footer,
    header,
    hgroup,
    section {
      display: block;
    }
    
    body,
    button,
    input,
    select,
    textarea {
      font-family: "Overpass", sans-serif;
    }
    
    code,
    pre {
      -moz-osx-font-smoothing: auto;
      -webkit-font-smoothing: auto;
      font-family: monospace;
    }
    
    body {
      color: ' . $colors['white'] . ';
      font-size: 1em;
      font-weight: 400;
      line-height: 1.5;
    }
    
    a {
      color: ' . $colors['complementary'] . ';
      cursor: pointer;
      text-decoration: none;
    }
    a strong {
      color: currentColor;
    }
    a:hover {
      color: #DDDDDD;
    }
    
    code {
      background-color: whitesmoke;
      color: ' . $colors['red'] . ';
      font-size: 0.875em;
      font-weight: normal;
      padding: 0.25em 0.5em 0.25em;
    }
    
    hr {
      background-color: whitesmoke;
      border: none;
      display: block;
      height: 2px;
      margin: 1.5rem 0;
    }
    
    img {
      height: auto;
      max-width: 100%;
    }
    
    input[type=checkbox],
    input[type=radio] {
      vertical-align: baseline;
    }
    
    small {
      font-size: 0.875em;
    }
    
    span {
      font-style: inherit;
      font-weight: inherit;
    }
    
    strong {
      color: white;
      font-weight: 700;
    }
    
    fieldset {
      border: none;
    }
    
    pre {
      -webkit-overflow-scrolling: touch;
      background-color: whitesmoke;
      color: ' . $colors['white'] . ';
      font-size: 0.875em;
      overflow-x: auto;
      padding: 1.25rem 1.5rem;
      white-space: pre;
      word-wrap: normal;
    }
    pre code {
      background-color: transparent;
      color: currentColor;
      font-size: 1em;
      padding: 0;
    }
    
    table td,
    table th {
      vertical-align: top;
    }
    table td:not([align]),
    table th:not([align]) {
      text-align: left;
    }
    table th {
      color: white;
    }
    
    .is-clearfix::after {
      clear: both;
      content: " ";
      display: table;
    }
    
    .is-pulled-left {
      float: left !important;
    }
    
    .is-pulled-right {
      float: right !important;
    }
    
    .is-clipped {
      overflow: hidden !important;
    }
    
    .is-size-1 {
      font-size: 3rem !important;
    }
    
    .is-size-2 {
      font-size: 2.5rem !important;
    }
    
    .is-size-3 {
      font-size: 2rem !important;
    }
    
    .is-size-4 {
      font-size: 1.5rem !important;
    }
    
    .is-size-5 {
      font-size: 1.25rem !important;
    }
    
    .is-size-6 {
      font-size: 1rem !important;
    }
    
    .is-size-7 {
      font-size: 0.75rem !important;
    }
    
    @media screen and (max-width: 768px) {
      .is-size-1-mobile {
        font-size: 3rem !important;
      }
    
      .is-size-2-mobile {
        font-size: 2.5rem !important;
      }
    
      .is-size-3-mobile {
        font-size: 2rem !important;
      }
    
      .is-size-4-mobile {
        font-size: 1.5rem !important;
      }
    
      .is-size-5-mobile {
        font-size: 1.25rem !important;
      }
    
      .is-size-6-mobile {
        font-size: 1rem !important;
      }
    
      .is-size-7-mobile {
        font-size: 0.75rem !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .is-size-1-tablet {
        font-size: 3rem !important;
      }
    
      .is-size-2-tablet {
        font-size: 2.5rem !important;
      }
    
      .is-size-3-tablet {
        font-size: 2rem !important;
      }
    
      .is-size-4-tablet {
        font-size: 1.5rem !important;
      }
    
      .is-size-5-tablet {
        font-size: 1.25rem !important;
      }
    
      .is-size-6-tablet {
        font-size: 1rem !important;
      }
    
      .is-size-7-tablet {
        font-size: 0.75rem !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .is-size-1-touch {
        font-size: 3rem !important;
      }
    
      .is-size-2-touch {
        font-size: 2.5rem !important;
      }
    
      .is-size-3-touch {
        font-size: 2rem !important;
      }
    
      .is-size-4-touch {
        font-size: 1.5rem !important;
      }
    
      .is-size-5-touch {
        font-size: 1.25rem !important;
      }
    
      .is-size-6-touch {
        font-size: 1rem !important;
      }
    
      .is-size-7-touch {
        font-size: 0.75rem !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .is-size-1-desktop {
        font-size: 3rem !important;
      }
    
      .is-size-2-desktop {
        font-size: 2.5rem !important;
      }
    
      .is-size-3-desktop {
        font-size: 2rem !important;
      }
    
      .is-size-4-desktop {
        font-size: 1.5rem !important;
      }
    
      .is-size-5-desktop {
        font-size: 1.25rem !important;
      }
    
      .is-size-6-desktop {
        font-size: 1rem !important;
      }
    
      .is-size-7-desktop {
        font-size: 0.75rem !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .is-size-1-widescreen {
        font-size: 3rem !important;
      }
    
      .is-size-2-widescreen {
        font-size: 2.5rem !important;
      }
    
      .is-size-3-widescreen {
        font-size: 2rem !important;
      }
    
      .is-size-4-widescreen {
        font-size: 1.5rem !important;
      }
    
      .is-size-5-widescreen {
        font-size: 1.25rem !important;
      }
    
      .is-size-6-widescreen {
        font-size: 1rem !important;
      }
    
      .is-size-7-widescreen {
        font-size: 0.75rem !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .is-size-1-fullhd {
        font-size: 3rem !important;
      }
    
      .is-size-2-fullhd {
        font-size: 2.5rem !important;
      }
    
      .is-size-3-fullhd {
        font-size: 2rem !important;
      }
    
      .is-size-4-fullhd {
        font-size: 1.5rem !important;
      }
    
      .is-size-5-fullhd {
        font-size: 1.25rem !important;
      }
    
      .is-size-6-fullhd {
        font-size: 1rem !important;
      }
    
      .is-size-7-fullhd {
        font-size: 0.75rem !important;
      }
    }
    .has-text-centered {
      text-align: center !important;
    }
    
    .has-text-justified {
      text-align: justify !important;
    }
    
    .has-text-left {
      text-align: left !important;
    }
    
    .has-text-right {
      text-align: right !important;
    }
    
    @media screen and (max-width: 768px) {
      .has-text-centered-mobile {
        text-align: center !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .has-text-centered-tablet {
        text-align: center !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .has-text-centered-tablet-only {
        text-align: center !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .has-text-centered-touch {
        text-align: center !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .has-text-centered-desktop {
        text-align: center !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .has-text-centered-desktop-only {
        text-align: center !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .has-text-centered-widescreen {
        text-align: center !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .has-text-centered-widescreen-only {
        text-align: center !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .has-text-centered-fullhd {
        text-align: center !important;
      }
    }
    @media screen and (max-width: 768px) {
      .has-text-justified-mobile {
        text-align: justify !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .has-text-justified-tablet {
        text-align: justify !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .has-text-justified-tablet-only {
        text-align: justify !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .has-text-justified-touch {
        text-align: justify !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .has-text-justified-desktop {
        text-align: justify !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .has-text-justified-desktop-only {
        text-align: justify !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .has-text-justified-widescreen {
        text-align: justify !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .has-text-justified-widescreen-only {
        text-align: justify !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .has-text-justified-fullhd {
        text-align: justify !important;
      }
    }
    @media screen and (max-width: 768px) {
      .has-text-left-mobile {
        text-align: left !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .has-text-left-tablet {
        text-align: left !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .has-text-left-tablet-only {
        text-align: left !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .has-text-left-touch {
        text-align: left !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .has-text-left-desktop {
        text-align: left !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .has-text-left-desktop-only {
        text-align: left !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .has-text-left-widescreen {
        text-align: left !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .has-text-left-widescreen-only {
        text-align: left !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .has-text-left-fullhd {
        text-align: left !important;
      }
    }
    @media screen and (max-width: 768px) {
      .has-text-right-mobile {
        text-align: right !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .has-text-right-tablet {
        text-align: right !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .has-text-right-tablet-only {
        text-align: right !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .has-text-right-touch {
        text-align: right !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .has-text-right-desktop {
        text-align: right !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .has-text-right-desktop-only {
        text-align: right !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .has-text-right-widescreen {
        text-align: right !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .has-text-right-widescreen-only {
        text-align: right !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .has-text-right-fullhd {
        text-align: right !important;
      }
    }
    .is-capitalized {
      text-transform: capitalize !important;
    }
    
    .is-lowercase {
      text-transform: lowercase !important;
    }
    
    .is-uppercase {
      text-transform: uppercase !important;
    }
    
    .is-italic {
      font-style: italic !important;
    }
    
    .has-text-white {
      color: ' . $colors['white'] . ' !important;
    }
    
    a.has-text-white:hover, a.has-text-white:focus {
      color: #e6e6e6 !important;
    }
    
    .has-background-white {
      background-color: ' . $colors['white'] . ' !important;
    }
    
    .has-text-black {
      color: #0a0a0a !important;
    }
    
    a.has-text-black:hover, a.has-text-black:focus {
      color: black !important;
    }
    
    .has-background-black {
      background-color: #0a0a0a !important;
    }
    
    .has-text-light {
      color: whitesmoke !important;
    }
    
    a.has-text-light:hover, a.has-text-light:focus {
      color: #dbdbdb !important;
    }
    
    .has-background-light {
      background-color: whitesmoke !important;
    }
    
    .has-text-dark {
      color: #363636 !important;
    }
    
    a.has-text-dark:hover, a.has-text-dark:focus {
      color: #1c1c1c !important;
    }
    
    .has-background-dark {
      background-color: #363636 !important;
    }
    
    .has-text-primary {
      color: ' . $colors['primary'] . ' !important;
    }
    
    a.has-text-primary:hover, a.has-text-primary:focus {
      color: #919191 !important;
    }
    
    .has-background-primary {
      background-color: ' . $colors['primary'] . ' !important;
    }
    
    .has-text-link {
      color: ' . $colors['complementary'] . ' !important;
    }
    
    a.has-text-link:hover, a.has-text-link:focus {
      color: #b3b3b3 !important;
    }
    
    .has-background-link {
      background-color: ' . $colors['complementary'] . ' !important;
    }
    
    .has-text-info {
      color: ' . $colors['cyan'] . ' !important;
    }
    
    a.has-text-info:hover, a.has-text-info:focus {
      color: #415d60 !important;
    }
    
    .has-background-info {
      background-color: ' . $colors['cyan'] . ' !important;
    }
    
    .has-text-success {
      color: ' . $colors['green'] . ' !important;
    }
    
    a.has-text-success:hover, a.has-text-success:focus {
      color: #54865a !important;
    }
    
    .has-background-success {
      background-color: ' . $colors['green'] . ' !important;
    }
    
    .has-text-warning {
      color: ' . $colors['yellow'] . ' !important;
    }
    
    a.has-text-warning:hover, a.has-text-warning:focus {
      color: #c3bb65 !important;
    }
    
    .has-background-warning {
      background-color: ' . $colors['yellow'] . ' !important;
    }
    
    .has-text-danger {
      color: ' . $colors['red'] . ' !important;
    }
    
    a.has-text-danger:hover, a.has-text-danger:focus {
      color: #c36965 !important;
    }
    
    .has-background-danger {
      background-color: ' . $colors['red'] . ' !important;
    }
    
    .has-text-lightblue {
      color: ' . $colors['lightblue'] . ' !important;
    }
    
    a.has-text-lightblue:hover, a.has-text-lightblue:focus {
      color: #475969 !important;
    }
    
    .has-background-lightblue {
      background-color: ' . $colors['lightblue'] . ' !important;
    }
    
    .has-text-purple {
      color: ' . $colors['purple'] . ' !important;
    }
    
    a.has-text-purple:hover, a.has-text-purple:focus {
      color: #5c4d70 !important;
    }
    
    .has-background-purple {
      background-color: ' . $colors['purple'] . ' !important;
    }
    
    .has-text-pink {
      color: ' . $colors['pink'] . ' !important;
    }
    
    a.has-text-pink:hover, a.has-text-pink:focus {
      color: #a55873 !important;
    }
    
    .has-background-pink {
      background-color: ' . $colors['pink'] . ' !important;
    }
    
    .has-text-blue {
      color: ' . $colors['blue'] . ' !important;
    }
    
    a.has-text-blue:hover, a.has-text-blue:focus {
      color: #4d566f !important;
    }
    
    .has-background-blue {
      background-color: ' . $colors['blue'] . ' !important;
    }
    
    .has-text-orange {
      color: ' . $colors['orange'] . ' !important;
    }
    
    a.has-text-orange:hover, a.has-text-orange:focus {
      color: #c39165 !important;
    }
    
    .has-background-orange {
      background-color: ' . $colors['orange'] . ' !important;
    }
    
    .has-text-red {
      color: ' . $colors['red'] . ' !important;
    }
    
    a.has-text-red:hover, a.has-text-red:focus {
      color: #c36965 !important;
    }
    
    .has-background-red {
      background-color: ' . $colors['red'] . ' !important;
    }
    
    .has-text-green {
      color: ' . $colors['green'] . ' !important;
    }
    
    a.has-text-green:hover, a.has-text-green:focus {
      color: #54865a !important;
    }
    
    .has-background-green {
      background-color: ' . $colors['green'] . ' !important;
    }
    
    .has-text-yellow {
      color: ' . $colors['yellow'] . ' !important;
    }
    
    a.has-text-yellow:hover, a.has-text-yellow:focus {
      color: #c3bb65 !important;
    }
    
    .has-background-yellow {
      background-color: ' . $colors['yellow'] . ' !important;
    }
    
    .has-text-cyan {
      color: ' . $colors['cyan'] . ' !important;
    }
    
    a.has-text-cyan:hover, a.has-text-cyan:focus {
      color: #415d60 !important;
    }
    
    .has-background-cyan {
      background-color: ' . $colors['cyan'] . ' !important;
    }
    
    .has-text-black-bis {
      color: #121212 !important;
    }
    
    .has-background-black-bis {
      background-color: #121212 !important;
    }
    
    .has-text-black-ter {
      color: #242424 !important;
    }
    
    .has-background-black-ter {
      background-color: #242424 !important;
    }
    
    .has-text-grey-darker {
      color: #363636 !important;
    }
    
    .has-background-grey-darker {
      background-color: #363636 !important;
    }
    
    .has-text-grey-dark {
      color: #4a4a4a !important;
    }
    
    .has-background-grey-dark {
      background-color: #4a4a4a !important;
    }
    
    .has-text-grey {
      color: #7a7a7a !important;
    }
    
    .has-background-grey {
      background-color: #7a7a7a !important;
    }
    
    .has-text-grey-light {
      color: #b5b5b5 !important;
    }
    
    .has-background-grey-light {
      background-color: #b5b5b5 !important;
    }
    
    .has-text-grey-lighter {
      color: #dbdbdb !important;
    }
    
    .has-background-grey-lighter {
      background-color: #dbdbdb !important;
    }
    
    .has-text-white-ter {
      color: whitesmoke !important;
    }
    
    .has-background-white-ter {
      background-color: whitesmoke !important;
    }
    
    .has-text-white-bis {
      color: #fafafa !important;
    }
    
    .has-background-white-bis {
      background-color: #fafafa !important;
    }
    
    .has-text-weight-light {
      font-weight: 300 !important;
    }
    
    .has-text-weight-normal {
      font-weight: 400 !important;
    }
    
    .has-text-weight-medium {
      font-weight: 500 !important;
    }
    
    .has-text-weight-semibold {
      font-weight: 600 !important;
    }
    
    .has-text-weight-bold {
      font-weight: 700 !important;
    }
    
    .is-family-primary {
      font-family: "Overpass", sans-serif !important;
    }
    
    .is-family-secondary {
      font-family: "Overpass", sans-serif !important;
    }
    
    .is-family-sans-serif {
      font-family: "Overpass", sans-serif !important;
    }
    
    .is-family-monospace {
      font-family: monospace !important;
    }
    
    .is-family-code {
      font-family: monospace !important;
    }
    
    .is-block {
      display: block !important;
    }
    
    @media screen and (max-width: 768px) {
      .is-block-mobile {
        display: block !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .is-block-tablet {
        display: block !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .is-block-tablet-only {
        display: block !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .is-block-touch {
        display: block !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .is-block-desktop {
        display: block !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .is-block-desktop-only {
        display: block !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .is-block-widescreen {
        display: block !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .is-block-widescreen-only {
        display: block !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .is-block-fullhd {
        display: block !important;
      }
    }
    .is-flex {
      display: flex !important;
    }
    
    @media screen and (max-width: 768px) {
      .is-flex-mobile {
        display: flex !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .is-flex-tablet {
        display: flex !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .is-flex-tablet-only {
        display: flex !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .is-flex-touch {
        display: flex !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .is-flex-desktop {
        display: flex !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .is-flex-desktop-only {
        display: flex !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .is-flex-widescreen {
        display: flex !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .is-flex-widescreen-only {
        display: flex !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .is-flex-fullhd {
        display: flex !important;
      }
    }
    .is-inline {
      display: inline !important;
    }
    
    @media screen and (max-width: 768px) {
      .is-inline-mobile {
        display: inline !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .is-inline-tablet {
        display: inline !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .is-inline-tablet-only {
        display: inline !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .is-inline-touch {
        display: inline !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .is-inline-desktop {
        display: inline !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .is-inline-desktop-only {
        display: inline !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .is-inline-widescreen {
        display: inline !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .is-inline-widescreen-only {
        display: inline !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .is-inline-fullhd {
        display: inline !important;
      }
    }
    .is-inline-block {
      display: inline-block !important;
    }
    
    @media screen and (max-width: 768px) {
      .is-inline-block-mobile {
        display: inline-block !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .is-inline-block-tablet {
        display: inline-block !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .is-inline-block-tablet-only {
        display: inline-block !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .is-inline-block-touch {
        display: inline-block !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .is-inline-block-desktop {
        display: inline-block !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .is-inline-block-desktop-only {
        display: inline-block !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .is-inline-block-widescreen {
        display: inline-block !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .is-inline-block-widescreen-only {
        display: inline-block !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .is-inline-block-fullhd {
        display: inline-block !important;
      }
    }
    .is-inline-flex {
      display: inline-flex !important;
    }
    
    @media screen and (max-width: 768px) {
      .is-inline-flex-mobile {
        display: inline-flex !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .is-inline-flex-tablet {
        display: inline-flex !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .is-inline-flex-tablet-only {
        display: inline-flex !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .is-inline-flex-touch {
        display: inline-flex !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .is-inline-flex-desktop {
        display: inline-flex !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .is-inline-flex-desktop-only {
        display: inline-flex !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .is-inline-flex-widescreen {
        display: inline-flex !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .is-inline-flex-widescreen-only {
        display: inline-flex !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .is-inline-flex-fullhd {
        display: inline-flex !important;
      }
    }
    .is-hidden {
      display: none !important;
    }
    
    .is-sr-only {
      border: none !important;
      clip: rect(0, 0, 0, 0) !important;
      height: 0.01em !important;
      overflow: hidden !important;
      padding: 0 !important;
      position: absolute !important;
      white-space: nowrap !important;
      width: 0.01em !important;
    }
    
    @media screen and (max-width: 768px) {
      .is-hidden-mobile {
        display: none !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .is-hidden-tablet {
        display: none !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .is-hidden-tablet-only {
        display: none !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .is-hidden-touch {
        display: none !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .is-hidden-desktop {
        display: none !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .is-hidden-desktop-only {
        display: none !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .is-hidden-widescreen {
        display: none !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .is-hidden-widescreen-only {
        display: none !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .is-hidden-fullhd {
        display: none !important;
      }
    }
    .is-invisible {
      visibility: hidden !important;
    }
    
    @media screen and (max-width: 768px) {
      .is-invisible-mobile {
        visibility: hidden !important;
      }
    }
    @media screen and (min-width: 769px), print {
      .is-invisible-tablet {
        visibility: hidden !important;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .is-invisible-tablet-only {
        visibility: hidden !important;
      }
    }
    @media screen and (max-width: 1023px) {
      .is-invisible-touch {
        visibility: hidden !important;
      }
    }
    @media screen and (min-width: 1024px) {
      .is-invisible-desktop {
        visibility: hidden !important;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .is-invisible-desktop-only {
        visibility: hidden !important;
      }
    }
    @media screen and (min-width: 1216px) {
      .is-invisible-widescreen {
        visibility: hidden !important;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .is-invisible-widescreen-only {
        visibility: hidden !important;
      }
    }
    @media screen and (min-width: 1408px) {
      .is-invisible-fullhd {
        visibility: hidden !important;
      }
    }
    .is-marginless {
      margin: 0 !important;
    }
    
    .is-paddingless {
      padding: 0 !important;
    }
    
    .is-radiusless {
      border-radius: 0 !important;
    }
    
    .is-shadowless {
      box-shadow: none !important;
    }
    
    .is-relative {
      position: relative !important;
    }
    
    .box {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      border-radius: 6px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      color: ' . $colors['white'] . ';
      display: block;
      padding: 1.25rem;
    }
    
    a.box:hover, a.box:focus {
      box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px ' . $colors['complementary'] . ';
    }
    a.box:active {
      box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2), 0 0 0 1px ' . $colors['complementary'] . ';
    }
    
    .button {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      border-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      border-width: 1px;
      color: ' . $colors['white'] . ';
      cursor: pointer;
      justify-content: center;
      padding-bottom: calc(0.375em - 1px);
      padding-left: 0.75em;
      padding-right: 0.75em;
      padding-top: calc(0.375em - 1px);
      text-align: center;
      white-space: nowrap;
    }
    .button strong {
      color: inherit;
    }
    .button .icon, .button .icon.is-small, .button .icon.is-medium, .button .icon.is-large {
      height: 1.5em;
      width: 1.5em;
    }
    .button .icon:first-child:not(:last-child) {
      margin-left: calc(-0.375em - 1px);
      margin-right: 0.1875em;
    }
    .button .icon:last-child:not(:first-child) {
      margin-left: 0.1875em;
      margin-right: calc(-0.375em - 1px);
    }
    .button .icon:first-child:last-child {
      margin-left: calc(-0.375em - 1px);
      margin-right: calc(-0.375em - 1px);
    }
    .button:hover, .button.is-hovered {
      border-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      color: #DDDDDD;
    }
    .button:focus, .button.is-focused {
      border-color: ' . $colors['blue'] . ';
      color: #363636;
    }
    .button:focus:not(:active), .button.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
    }
    .button:active, .button.is-active {
      border-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      color: #363636;
    }
    .button.is-text {
      background-color: transparent;
      border-color: transparent;
      color: ' . $colors['white'] . ';
      text-decoration: underline;
    }
    .button.is-text:hover, .button.is-text.is-hovered, .button.is-text:focus, .button.is-text.is-focused {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      color: white;
    }
    .button.is-text:active, .button.is-text.is-active {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      color: white;
    }
    .button.is-text[disabled], fieldset[disabled] .button.is-text {
      background-color: transparent;
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-white {
      background-color: ' . $colors['white'] . ';
      border-color: transparent;
      color: #0a0a0a;
    }
    .button.is-white:hover, .button.is-white.is-hovered {
      background-color: #f9f9f9;
      border-color: transparent;
      color: #0a0a0a;
    }
    .button.is-white:focus, .button.is-white.is-focused {
      border-color: transparent;
      color: #0a0a0a;
    }
    .button.is-white:focus:not(:active), .button.is-white.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25);
    }
    .button.is-white:active, .button.is-white.is-active {
      background-color: #f2f2f2;
      border-color: transparent;
      color: #0a0a0a;
    }
    .button.is-white[disabled], fieldset[disabled] .button.is-white {
      background-color: ' . $colors['white'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-white.is-inverted {
      background-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .button.is-white.is-inverted:hover, .button.is-white.is-inverted.is-hovered {
      background-color: black;
    }
    .button.is-white.is-inverted[disabled], fieldset[disabled] .button.is-white.is-inverted {
      background-color: #0a0a0a;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['white'] . ';
    }
    .button.is-white.is-loading::after {
      border-color: transparent transparent #0a0a0a #0a0a0a !important;
    }
    .button.is-white.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['white'] . ';
      color: ' . $colors['white'] . ';
    }
    .button.is-white.is-outlined:hover, .button.is-white.is-outlined.is-hovered, .button.is-white.is-outlined:focus, .button.is-white.is-outlined.is-focused {
      background-color: ' . $colors['white'] . ';
      border-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .button.is-white.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['white'] . ' ' . $colors['white'] . ' !important;
    }
    .button.is-white.is-outlined.is-loading:hover::after, .button.is-white.is-outlined.is-loading.is-hovered::after, .button.is-white.is-outlined.is-loading:focus::after, .button.is-white.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #0a0a0a #0a0a0a !important;
    }
    .button.is-white.is-outlined[disabled], fieldset[disabled] .button.is-white.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['white'] . ';
      box-shadow: none;
      color: ' . $colors['white'] . ';
    }
    .button.is-white.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #0a0a0a;
      color: #0a0a0a;
    }
    .button.is-white.is-inverted.is-outlined:hover, .button.is-white.is-inverted.is-outlined.is-hovered, .button.is-white.is-inverted.is-outlined:focus, .button.is-white.is-inverted.is-outlined.is-focused {
      background-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .button.is-white.is-inverted.is-outlined.is-loading:hover::after, .button.is-white.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-white.is-inverted.is-outlined.is-loading:focus::after, .button.is-white.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['white'] . ' ' . $colors['white'] . ' !important;
    }
    .button.is-white.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-white.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #0a0a0a;
      box-shadow: none;
      color: #0a0a0a;
    }
    .button.is-black {
      background-color: #0a0a0a;
      border-color: transparent;
      color: ' . $colors['white'] . ';
    }
    .button.is-black:hover, .button.is-black.is-hovered {
      background-color: #040404;
      border-color: transparent;
      color: ' . $colors['white'] . ';
    }
    .button.is-black:focus, .button.is-black.is-focused {
      border-color: transparent;
      color: ' . $colors['white'] . ';
    }
    .button.is-black:focus:not(:active), .button.is-black.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25);
    }
    .button.is-black:active, .button.is-black.is-active {
      background-color: black;
      border-color: transparent;
      color: ' . $colors['white'] . ';
    }
    .button.is-black[disabled], fieldset[disabled] .button.is-black {
      background-color: #0a0a0a;
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-black.is-inverted {
      background-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .button.is-black.is-inverted:hover, .button.is-black.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-black.is-inverted[disabled], fieldset[disabled] .button.is-black.is-inverted {
      background-color: ' . $colors['white'] . ';
      border-color: transparent;
      box-shadow: none;
      color: #0a0a0a;
    }
    .button.is-black.is-loading::after {
      border-color: transparent transparent ' . $colors['white'] . ' ' . $colors['white'] . ' !important;
    }
    .button.is-black.is-outlined {
      background-color: transparent;
      border-color: #0a0a0a;
      color: #0a0a0a;
    }
    .button.is-black.is-outlined:hover, .button.is-black.is-outlined.is-hovered, .button.is-black.is-outlined:focus, .button.is-black.is-outlined.is-focused {
      background-color: #0a0a0a;
      border-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .button.is-black.is-outlined.is-loading::after {
      border-color: transparent transparent #0a0a0a #0a0a0a !important;
    }
    .button.is-black.is-outlined.is-loading:hover::after, .button.is-black.is-outlined.is-loading.is-hovered::after, .button.is-black.is-outlined.is-loading:focus::after, .button.is-black.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['white'] . ' ' . $colors['white'] . ' !important;
    }
    .button.is-black.is-outlined[disabled], fieldset[disabled] .button.is-black.is-outlined {
      background-color: transparent;
      border-color: #0a0a0a;
      box-shadow: none;
      color: #0a0a0a;
    }
    .button.is-black.is-inverted.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['white'] . ';
      color: ' . $colors['white'] . ';
    }
    .button.is-black.is-inverted.is-outlined:hover, .button.is-black.is-inverted.is-outlined.is-hovered, .button.is-black.is-inverted.is-outlined:focus, .button.is-black.is-inverted.is-outlined.is-focused {
      background-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .button.is-black.is-inverted.is-outlined.is-loading:hover::after, .button.is-black.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-black.is-inverted.is-outlined.is-loading:focus::after, .button.is-black.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #0a0a0a #0a0a0a !important;
    }
    .button.is-black.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-black.is-inverted.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['white'] . ';
      box-shadow: none;
      color: ' . $colors['white'] . ';
    }
    .button.is-light {
      background-color: whitesmoke;
      border-color: transparent;
      color: #363636;
    }
    .button.is-light:hover, .button.is-light.is-hovered {
      background-color: #eeeeee;
      border-color: transparent;
      color: #363636;
    }
    .button.is-light:focus, .button.is-light.is-focused {
      border-color: transparent;
      color: #363636;
    }
    .button.is-light:focus:not(:active), .button.is-light.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25);
    }
    .button.is-light:active, .button.is-light.is-active {
      background-color: #e8e8e8;
      border-color: transparent;
      color: #363636;
    }
    .button.is-light[disabled], fieldset[disabled] .button.is-light {
      background-color: whitesmoke;
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-light.is-inverted {
      background-color: #363636;
      color: whitesmoke;
    }
    .button.is-light.is-inverted:hover, .button.is-light.is-inverted.is-hovered {
      background-color: #292929;
    }
    .button.is-light.is-inverted[disabled], fieldset[disabled] .button.is-light.is-inverted {
      background-color: #363636;
      border-color: transparent;
      box-shadow: none;
      color: whitesmoke;
    }
    .button.is-light.is-loading::after {
      border-color: transparent transparent #363636 #363636 !important;
    }
    .button.is-light.is-outlined {
      background-color: transparent;
      border-color: whitesmoke;
      color: whitesmoke;
    }
    .button.is-light.is-outlined:hover, .button.is-light.is-outlined.is-hovered, .button.is-light.is-outlined:focus, .button.is-light.is-outlined.is-focused {
      background-color: whitesmoke;
      border-color: whitesmoke;
      color: #363636;
    }
    .button.is-light.is-outlined.is-loading::after {
      border-color: transparent transparent whitesmoke whitesmoke !important;
    }
    .button.is-light.is-outlined.is-loading:hover::after, .button.is-light.is-outlined.is-loading.is-hovered::after, .button.is-light.is-outlined.is-loading:focus::after, .button.is-light.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #363636 #363636 !important;
    }
    .button.is-light.is-outlined[disabled], fieldset[disabled] .button.is-light.is-outlined {
      background-color: transparent;
      border-color: whitesmoke;
      box-shadow: none;
      color: whitesmoke;
    }
    .button.is-light.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #363636;
      color: #363636;
    }
    .button.is-light.is-inverted.is-outlined:hover, .button.is-light.is-inverted.is-outlined.is-hovered, .button.is-light.is-inverted.is-outlined:focus, .button.is-light.is-inverted.is-outlined.is-focused {
      background-color: #363636;
      color: whitesmoke;
    }
    .button.is-light.is-inverted.is-outlined.is-loading:hover::after, .button.is-light.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-light.is-inverted.is-outlined.is-loading:focus::after, .button.is-light.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent whitesmoke whitesmoke !important;
    }
    .button.is-light.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-light.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #363636;
      box-shadow: none;
      color: #363636;
    }
    .button.is-dark {
      background-color: #363636;
      border-color: transparent;
      color: whitesmoke;
    }
    .button.is-dark:hover, .button.is-dark.is-hovered {
      background-color: #2f2f2f;
      border-color: transparent;
      color: whitesmoke;
    }
    .button.is-dark:focus, .button.is-dark.is-focused {
      border-color: transparent;
      color: whitesmoke;
    }
    .button.is-dark:focus:not(:active), .button.is-dark.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25);
    }
    .button.is-dark:active, .button.is-dark.is-active {
      background-color: #292929;
      border-color: transparent;
      color: whitesmoke;
    }
    .button.is-dark[disabled], fieldset[disabled] .button.is-dark {
      background-color: #363636;
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-dark.is-inverted {
      background-color: whitesmoke;
      color: #363636;
    }
    .button.is-dark.is-inverted:hover, .button.is-dark.is-inverted.is-hovered {
      background-color: #e8e8e8;
    }
    .button.is-dark.is-inverted[disabled], fieldset[disabled] .button.is-dark.is-inverted {
      background-color: whitesmoke;
      border-color: transparent;
      box-shadow: none;
      color: #363636;
    }
    .button.is-dark.is-loading::after {
      border-color: transparent transparent whitesmoke whitesmoke !important;
    }
    .button.is-dark.is-outlined {
      background-color: transparent;
      border-color: #363636;
      color: #363636;
    }
    .button.is-dark.is-outlined:hover, .button.is-dark.is-outlined.is-hovered, .button.is-dark.is-outlined:focus, .button.is-dark.is-outlined.is-focused {
      background-color: #363636;
      border-color: #363636;
      color: whitesmoke;
    }
    .button.is-dark.is-outlined.is-loading::after {
      border-color: transparent transparent #363636 #363636 !important;
    }
    .button.is-dark.is-outlined.is-loading:hover::after, .button.is-dark.is-outlined.is-loading.is-hovered::after, .button.is-dark.is-outlined.is-loading:focus::after, .button.is-dark.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent whitesmoke whitesmoke !important;
    }
    .button.is-dark.is-outlined[disabled], fieldset[disabled] .button.is-dark.is-outlined {
      background-color: transparent;
      border-color: #363636;
      box-shadow: none;
      color: #363636;
    }
    .button.is-dark.is-inverted.is-outlined {
      background-color: transparent;
      border-color: whitesmoke;
      color: whitesmoke;
    }
    .button.is-dark.is-inverted.is-outlined:hover, .button.is-dark.is-inverted.is-outlined.is-hovered, .button.is-dark.is-inverted.is-outlined:focus, .button.is-dark.is-inverted.is-outlined.is-focused {
      background-color: whitesmoke;
      color: #363636;
    }
    .button.is-dark.is-inverted.is-outlined.is-loading:hover::after, .button.is-dark.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-dark.is-inverted.is-outlined.is-loading:focus::after, .button.is-dark.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #363636 #363636 !important;
    }
    .button.is-dark.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-dark.is-inverted.is-outlined {
      background-color: transparent;
      border-color: whitesmoke;
      box-shadow: none;
      color: whitesmoke;
    }
    .button.is-primary {
      background-color: ' . $colors['primary'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-primary:hover, .button.is-primary.is-hovered {
      background-color: #a4a4a4;
      border-color: transparent;
      color: #fff;
    }
    .button.is-primary:focus, .button.is-primary.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-primary:focus:not(:active), .button.is-primary.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(170, 170, 170, 0.25);
    }
    .button.is-primary:active, .button.is-primary.is-active {
      background-color: #9d9d9d;
      border-color: transparent;
      color: #fff;
    }
    .button.is-primary[disabled], fieldset[disabled] .button.is-primary {
      background-color: ' . $colors['primary'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-primary.is-inverted {
      background-color: #fff;
      color: ' . $colors['primary'] . ';
    }
    .button.is-primary.is-inverted:hover, .button.is-primary.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-primary.is-inverted[disabled], fieldset[disabled] .button.is-primary.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['primary'] . ';
    }
    .button.is-primary.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-primary.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['primary'] . ';
      color: ' . $colors['primary'] . ';
    }
    .button.is-primary.is-outlined:hover, .button.is-primary.is-outlined.is-hovered, .button.is-primary.is-outlined:focus, .button.is-primary.is-outlined.is-focused {
      background-color: ' . $colors['primary'] . ';
      border-color: ' . $colors['primary'] . ';
      color: #fff;
    }
    .button.is-primary.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['primary'] . ' ' . $colors['primary'] . ' !important;
    }
    .button.is-primary.is-outlined.is-loading:hover::after, .button.is-primary.is-outlined.is-loading.is-hovered::after, .button.is-primary.is-outlined.is-loading:focus::after, .button.is-primary.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-primary.is-outlined[disabled], fieldset[disabled] .button.is-primary.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['primary'] . ';
      box-shadow: none;
      color: ' . $colors['primary'] . ';
    }
    .button.is-primary.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-primary.is-inverted.is-outlined:hover, .button.is-primary.is-inverted.is-outlined.is-hovered, .button.is-primary.is-inverted.is-outlined:focus, .button.is-primary.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['primary'] . ';
    }
    .button.is-primary.is-inverted.is-outlined.is-loading:hover::after, .button.is-primary.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-primary.is-inverted.is-outlined.is-loading:focus::after, .button.is-primary.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['primary'] . ' ' . $colors['primary'] . ' !important;
    }
    .button.is-primary.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-primary.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-link {
      background-color: ' . $colors['complementary'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-link:hover, .button.is-link.is-hovered {
      background-color: #c6c6c6;
      border-color: transparent;
      color: #fff;
    }
    .button.is-link:focus, .button.is-link.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-link:focus:not(:active), .button.is-link.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
    }
    .button.is-link:active, .button.is-link.is-active {
      background-color: #bfbfbf;
      border-color: transparent;
      color: #fff;
    }
    .button.is-link[disabled], fieldset[disabled] .button.is-link {
      background-color: ' . $colors['complementary'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-link.is-inverted {
      background-color: #fff;
      color: ' . $colors['complementary'] . ';
    }
    .button.is-link.is-inverted:hover, .button.is-link.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-link.is-inverted[disabled], fieldset[disabled] .button.is-link.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['complementary'] . ';
    }
    .button.is-link.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-link.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['complementary'] . ';
      color: ' . $colors['complementary'] . ';
    }
    .button.is-link.is-outlined:hover, .button.is-link.is-outlined.is-hovered, .button.is-link.is-outlined:focus, .button.is-link.is-outlined.is-focused {
      background-color: ' . $colors['complementary'] . ';
      border-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    .button.is-link.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['complementary'] . ' ' . $colors['complementary'] . ' !important;
    }
    .button.is-link.is-outlined.is-loading:hover::after, .button.is-link.is-outlined.is-loading.is-hovered::after, .button.is-link.is-outlined.is-loading:focus::after, .button.is-link.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-link.is-outlined[disabled], fieldset[disabled] .button.is-link.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['complementary'] . ';
      box-shadow: none;
      color: ' . $colors['complementary'] . ';
    }
    .button.is-link.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-link.is-inverted.is-outlined:hover, .button.is-link.is-inverted.is-outlined.is-hovered, .button.is-link.is-inverted.is-outlined:focus, .button.is-link.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['complementary'] . ';
    }
    .button.is-link.is-inverted.is-outlined.is-loading:hover::after, .button.is-link.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-link.is-inverted.is-outlined.is-loading:focus::after, .button.is-link.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['complementary'] . ' ' . $colors['complementary'] . ' !important;
    }
    .button.is-link.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-link.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-info {
      background-color: ' . $colors['cyan'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-info:hover, .button.is-info.is-hovered {
      background-color: #507477;
      border-color: transparent;
      color: #fff;
    }
    .button.is-info:focus, .button.is-info.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-info:focus:not(:active), .button.is-info.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
    }
    .button.is-info:active, .button.is-info.is-active {
      background-color: #4b6c70;
      border-color: transparent;
      color: #fff;
    }
    .button.is-info[disabled], fieldset[disabled] .button.is-info {
      background-color: ' . $colors['cyan'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-info.is-inverted {
      background-color: #fff;
      color: ' . $colors['cyan'] . ';
    }
    .button.is-info.is-inverted:hover, .button.is-info.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-info.is-inverted[disabled], fieldset[disabled] .button.is-info.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['cyan'] . ';
    }
    .button.is-info.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-info.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['cyan'] . ';
      color: ' . $colors['cyan'] . ';
    }
    .button.is-info.is-outlined:hover, .button.is-info.is-outlined.is-hovered, .button.is-info.is-outlined:focus, .button.is-info.is-outlined.is-focused {
      background-color: ' . $colors['cyan'] . ';
      border-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .button.is-info.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['cyan'] . ' ' . $colors['cyan'] . ' !important;
    }
    .button.is-info.is-outlined.is-loading:hover::after, .button.is-info.is-outlined.is-loading.is-hovered::after, .button.is-info.is-outlined.is-loading:focus::after, .button.is-info.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-info.is-outlined[disabled], fieldset[disabled] .button.is-info.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['cyan'] . ';
      box-shadow: none;
      color: ' . $colors['cyan'] . ';
    }
    .button.is-info.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-info.is-inverted.is-outlined:hover, .button.is-info.is-inverted.is-outlined.is-hovered, .button.is-info.is-inverted.is-outlined:focus, .button.is-info.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['cyan'] . ';
    }
    .button.is-info.is-inverted.is-outlined.is-loading:hover::after, .button.is-info.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-info.is-inverted.is-outlined.is-loading:focus::after, .button.is-info.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['cyan'] . ' ' . $colors['cyan'] . ' !important;
    }
    .button.is-info.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-info.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-success {
      background-color: ' . $colors['green'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-success:hover, .button.is-success.is-hovered {
      background-color: #639d6b;
      border-color: transparent;
      color: #fff;
    }
    .button.is-success:focus, .button.is-success.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-success:focus:not(:active), .button.is-success.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
    }
    .button.is-success:active, .button.is-success.is-active {
      background-color: #5e9665;
      border-color: transparent;
      color: #fff;
    }
    .button.is-success[disabled], fieldset[disabled] .button.is-success {
      background-color: ' . $colors['green'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-success.is-inverted {
      background-color: #fff;
      color: ' . $colors['green'] . ';
    }
    .button.is-success.is-inverted:hover, .button.is-success.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-success.is-inverted[disabled], fieldset[disabled] .button.is-success.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['green'] . ';
    }
    .button.is-success.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-success.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['green'] . ';
      color: ' . $colors['green'] . ';
    }
    .button.is-success.is-outlined:hover, .button.is-success.is-outlined.is-hovered, .button.is-success.is-outlined:focus, .button.is-success.is-outlined.is-focused {
      background-color: ' . $colors['green'] . ';
      border-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .button.is-success.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['green'] . ' ' . $colors['green'] . ' !important;
    }
    .button.is-success.is-outlined.is-loading:hover::after, .button.is-success.is-outlined.is-loading.is-hovered::after, .button.is-success.is-outlined.is-loading:focus::after, .button.is-success.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-success.is-outlined[disabled], fieldset[disabled] .button.is-success.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['green'] . ';
      box-shadow: none;
      color: ' . $colors['green'] . ';
    }
    .button.is-success.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-success.is-inverted.is-outlined:hover, .button.is-success.is-inverted.is-outlined.is-hovered, .button.is-success.is-inverted.is-outlined:focus, .button.is-success.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['green'] . ';
    }
    .button.is-success.is-inverted.is-outlined.is-loading:hover::after, .button.is-success.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-success.is-inverted.is-outlined.is-loading:focus::after, .button.is-success.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['green'] . ' ' . $colors['green'] . ' !important;
    }
    .button.is-success.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-success.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-warning {
      background-color: ' . $colors['yellow'] . ';
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-warning:hover, .button.is-warning.is-hovered {
      background-color: #cdc781;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-warning:focus, .button.is-warning.is-focused {
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-warning:focus:not(:active), .button.is-warning.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
    }
    .button.is-warning:active, .button.is-warning.is-active {
      background-color: #cac378;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-warning[disabled], fieldset[disabled] .button.is-warning {
      background-color: ' . $colors['yellow'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-warning.is-inverted {
      background-color: rgba(0, 0, 0, 0.7);
      color: ' . $colors['yellow'] . ';
    }
    .button.is-warning.is-inverted:hover, .button.is-warning.is-inverted.is-hovered {
      background-color: rgba(0, 0, 0, 0.7);
    }
    .button.is-warning.is-inverted[disabled], fieldset[disabled] .button.is-warning.is-inverted {
      background-color: rgba(0, 0, 0, 0.7);
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['yellow'] . ';
    }
    .button.is-warning.is-loading::after {
      border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;
    }
    .button.is-warning.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['yellow'] . ';
      color: ' . $colors['yellow'] . ';
    }
    .button.is-warning.is-outlined:hover, .button.is-warning.is-outlined.is-hovered, .button.is-warning.is-outlined:focus, .button.is-warning.is-outlined.is-focused {
      background-color: ' . $colors['yellow'] . ';
      border-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-warning.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['yellow'] . ' ' . $colors['yellow'] . ' !important;
    }
    .button.is-warning.is-outlined.is-loading:hover::after, .button.is-warning.is-outlined.is-loading.is-hovered::after, .button.is-warning.is-outlined.is-loading:focus::after, .button.is-warning.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;
    }
    .button.is-warning.is-outlined[disabled], fieldset[disabled] .button.is-warning.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['yellow'] . ';
      box-shadow: none;
      color: ' . $colors['yellow'] . ';
    }
    .button.is-warning.is-inverted.is-outlined {
      background-color: transparent;
      border-color: rgba(0, 0, 0, 0.7);
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-warning.is-inverted.is-outlined:hover, .button.is-warning.is-inverted.is-outlined.is-hovered, .button.is-warning.is-inverted.is-outlined:focus, .button.is-warning.is-inverted.is-outlined.is-focused {
      background-color: rgba(0, 0, 0, 0.7);
      color: ' . $colors['yellow'] . ';
    }
    .button.is-warning.is-inverted.is-outlined.is-loading:hover::after, .button.is-warning.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-warning.is-inverted.is-outlined.is-loading:focus::after, .button.is-warning.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['yellow'] . ' ' . $colors['yellow'] . ' !important;
    }
    .button.is-warning.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-warning.is-inverted.is-outlined {
      background-color: transparent;
      border-color: rgba(0, 0, 0, 0.7);
      box-shadow: none;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-danger {
      background-color: ' . $colors['red'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-danger:hover, .button.is-danger.is-hovered {
      background-color: #cd8481;
      border-color: transparent;
      color: #fff;
    }
    .button.is-danger:focus, .button.is-danger.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-danger:focus:not(:active), .button.is-danger.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
    }
    .button.is-danger:active, .button.is-danger.is-active {
      background-color: #ca7b78;
      border-color: transparent;
      color: #fff;
    }
    .button.is-danger[disabled], fieldset[disabled] .button.is-danger {
      background-color: ' . $colors['red'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-danger.is-inverted {
      background-color: #fff;
      color: ' . $colors['red'] . ';
    }
    .button.is-danger.is-inverted:hover, .button.is-danger.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-danger.is-inverted[disabled], fieldset[disabled] .button.is-danger.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['red'] . ';
    }
    .button.is-danger.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-danger.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['red'] . ';
      color: ' . $colors['red'] . ';
    }
    .button.is-danger.is-outlined:hover, .button.is-danger.is-outlined.is-hovered, .button.is-danger.is-outlined:focus, .button.is-danger.is-outlined.is-focused {
      background-color: ' . $colors['red'] . ';
      border-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .button.is-danger.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['red'] . ' ' . $colors['red'] . ' !important;
    }
    .button.is-danger.is-outlined.is-loading:hover::after, .button.is-danger.is-outlined.is-loading.is-hovered::after, .button.is-danger.is-outlined.is-loading:focus::after, .button.is-danger.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-danger.is-outlined[disabled], fieldset[disabled] .button.is-danger.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['red'] . ';
      box-shadow: none;
      color: ' . $colors['red'] . ';
    }
    .button.is-danger.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-danger.is-inverted.is-outlined:hover, .button.is-danger.is-inverted.is-outlined.is-hovered, .button.is-danger.is-inverted.is-outlined:focus, .button.is-danger.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['red'] . ';
    }
    .button.is-danger.is-inverted.is-outlined.is-loading:hover::after, .button.is-danger.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-danger.is-inverted.is-outlined.is-loading:focus::after, .button.is-danger.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['red'] . ' ' . $colors['red'] . ' !important;
    }
    .button.is-danger.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-danger.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-lightblue {
      background-color: ' . $colors['lightblue'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-lightblue:hover, .button.is-lightblue.is-hovered {
      background-color: #576d7f;
      border-color: transparent;
      color: #fff;
    }
    .button.is-lightblue:focus, .button.is-lightblue.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-lightblue:focus:not(:active), .button.is-lightblue.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(92, 115, 135, 0.25);
    }
    .button.is-lightblue:active, .button.is-lightblue.is-active {
      background-color: #526678;
      border-color: transparent;
      color: #fff;
    }
    .button.is-lightblue[disabled], fieldset[disabled] .button.is-lightblue {
      background-color: ' . $colors['lightblue'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-lightblue.is-inverted {
      background-color: #fff;
      color: ' . $colors['lightblue'] . ';
    }
    .button.is-lightblue.is-inverted:hover, .button.is-lightblue.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-lightblue.is-inverted[disabled], fieldset[disabled] .button.is-lightblue.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['lightblue'] . ';
    }
    .button.is-lightblue.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-lightblue.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['lightblue'] . ';
      color: ' . $colors['lightblue'] . ';
    }
    .button.is-lightblue.is-outlined:hover, .button.is-lightblue.is-outlined.is-hovered, .button.is-lightblue.is-outlined:focus, .button.is-lightblue.is-outlined.is-focused {
      background-color: ' . $colors['lightblue'] . ';
      border-color: ' . $colors['lightblue'] . ';
      color: #fff;
    }
    .button.is-lightblue.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['lightblue'] . ' ' . $colors['lightblue'] . ' !important;
    }
    .button.is-lightblue.is-outlined.is-loading:hover::after, .button.is-lightblue.is-outlined.is-loading.is-hovered::after, .button.is-lightblue.is-outlined.is-loading:focus::after, .button.is-lightblue.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-lightblue.is-outlined[disabled], fieldset[disabled] .button.is-lightblue.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['lightblue'] . ';
      box-shadow: none;
      color: ' . $colors['lightblue'] . ';
    }
    .button.is-lightblue.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-lightblue.is-inverted.is-outlined:hover, .button.is-lightblue.is-inverted.is-outlined.is-hovered, .button.is-lightblue.is-inverted.is-outlined:focus, .button.is-lightblue.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['lightblue'] . ';
    }
    .button.is-lightblue.is-inverted.is-outlined.is-loading:hover::after, .button.is-lightblue.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-lightblue.is-inverted.is-outlined.is-loading:focus::after, .button.is-lightblue.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['lightblue'] . ' ' . $colors['lightblue'] . ' !important;
    }
    .button.is-lightblue.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-lightblue.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-purple {
      background-color: ' . $colors['purple'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-purple:hover, .button.is-purple.is-hovered {
      background-color: #6f5d86;
      border-color: transparent;
      color: #fff;
    }
    .button.is-purple:focus, .button.is-purple.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-purple:focus:not(:active), .button.is-purple.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(117, 98, 142, 0.25);
    }
    .button.is-purple:active, .button.is-purple.is-active {
      background-color: #69587f;
      border-color: transparent;
      color: #fff;
    }
    .button.is-purple[disabled], fieldset[disabled] .button.is-purple {
      background-color: ' . $colors['purple'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-purple.is-inverted {
      background-color: #fff;
      color: ' . $colors['purple'] . ';
    }
    .button.is-purple.is-inverted:hover, .button.is-purple.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-purple.is-inverted[disabled], fieldset[disabled] .button.is-purple.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['purple'] . ';
    }
    .button.is-purple.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-purple.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['purple'] . ';
      color: ' . $colors['purple'] . ';
    }
    .button.is-purple.is-outlined:hover, .button.is-purple.is-outlined.is-hovered, .button.is-purple.is-outlined:focus, .button.is-purple.is-outlined.is-focused {
      background-color: ' . $colors['purple'] . ';
      border-color: ' . $colors['purple'] . ';
      color: #fff;
    }
    .button.is-purple.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['purple'] . ' ' . $colors['purple'] . ' !important;
    }
    .button.is-purple.is-outlined.is-loading:hover::after, .button.is-purple.is-outlined.is-loading.is-hovered::after, .button.is-purple.is-outlined.is-loading:focus::after, .button.is-purple.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-purple.is-outlined[disabled], fieldset[disabled] .button.is-purple.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['purple'] . ';
      box-shadow: none;
      color: ' . $colors['purple'] . ';
    }
    .button.is-purple.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-purple.is-inverted.is-outlined:hover, .button.is-purple.is-inverted.is-outlined.is-hovered, .button.is-purple.is-inverted.is-outlined:focus, .button.is-purple.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['purple'] . ';
    }
    .button.is-purple.is-inverted.is-outlined.is-loading:hover::after, .button.is-purple.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-purple.is-inverted.is-outlined.is-loading:focus::after, .button.is-purple.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['purple'] . ' ' . $colors['purple'] . ' !important;
    }
    .button.is-purple.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-purple.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-pink {
      background-color: ' . $colors['pink'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-pink:hover, .button.is-pink.is-hovered {
      background-color: #b37188;
      border-color: transparent;
      color: #fff;
    }
    .button.is-pink:focus, .button.is-pink.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-pink:focus:not(:active), .button.is-pink.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(183, 121, 143, 0.25);
    }
    .button.is-pink:active, .button.is-pink.is-active {
      background-color: #ae6881;
      border-color: transparent;
      color: #fff;
    }
    .button.is-pink[disabled], fieldset[disabled] .button.is-pink {
      background-color: ' . $colors['pink'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-pink.is-inverted {
      background-color: #fff;
      color: ' . $colors['pink'] . ';
    }
    .button.is-pink.is-inverted:hover, .button.is-pink.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-pink.is-inverted[disabled], fieldset[disabled] .button.is-pink.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['pink'] . ';
    }
    .button.is-pink.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-pink.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['pink'] . ';
      color: ' . $colors['pink'] . ';
    }
    .button.is-pink.is-outlined:hover, .button.is-pink.is-outlined.is-hovered, .button.is-pink.is-outlined:focus, .button.is-pink.is-outlined.is-focused {
      background-color: ' . $colors['pink'] . ';
      border-color: ' . $colors['pink'] . ';
      color: #fff;
    }
    .button.is-pink.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['pink'] . ' ' . $colors['pink'] . ' !important;
    }
    .button.is-pink.is-outlined.is-loading:hover::after, .button.is-pink.is-outlined.is-loading.is-hovered::after, .button.is-pink.is-outlined.is-loading:focus::after, .button.is-pink.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-pink.is-outlined[disabled], fieldset[disabled] .button.is-pink.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['pink'] . ';
      box-shadow: none;
      color: ' . $colors['pink'] . ';
    }
    .button.is-pink.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-pink.is-inverted.is-outlined:hover, .button.is-pink.is-inverted.is-outlined.is-hovered, .button.is-pink.is-inverted.is-outlined:focus, .button.is-pink.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['pink'] . ';
    }
    .button.is-pink.is-inverted.is-outlined.is-loading:hover::after, .button.is-pink.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-pink.is-inverted.is-outlined.is-loading:focus::after, .button.is-pink.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['pink'] . ' ' . $colors['pink'] . ' !important;
    }
    .button.is-pink.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-pink.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-blue {
      background-color: ' . $colors['blue'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-blue:hover, .button.is-blue.is-hovered {
      background-color: #5d6785;
      border-color: transparent;
      color: #fff;
    }
    .button.is-blue:focus, .button.is-blue.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-blue:focus:not(:active), .button.is-blue.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(98, 109, 141, 0.25);
    }
    .button.is-blue:active, .button.is-blue.is-active {
      background-color: #58617e;
      border-color: transparent;
      color: #fff;
    }
    .button.is-blue[disabled], fieldset[disabled] .button.is-blue {
      background-color: ' . $colors['blue'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-blue.is-inverted {
      background-color: #fff;
      color: ' . $colors['blue'] . ';
    }
    .button.is-blue.is-inverted:hover, .button.is-blue.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-blue.is-inverted[disabled], fieldset[disabled] .button.is-blue.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['blue'] . ';
    }
    .button.is-blue.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-blue.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['blue'] . ';
      color: ' . $colors['blue'] . ';
    }
    .button.is-blue.is-outlined:hover, .button.is-blue.is-outlined.is-hovered, .button.is-blue.is-outlined:focus, .button.is-blue.is-outlined.is-focused {
      background-color: ' . $colors['blue'] . ';
      border-color: ' . $colors['blue'] . ';
      color: #fff;
    }
    .button.is-blue.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['blue'] . ' ' . $colors['blue'] . ' !important;
    }
    .button.is-blue.is-outlined.is-loading:hover::after, .button.is-blue.is-outlined.is-loading.is-hovered::after, .button.is-blue.is-outlined.is-loading:focus::after, .button.is-blue.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-blue.is-outlined[disabled], fieldset[disabled] .button.is-blue.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['blue'] . ';
      box-shadow: none;
      color: ' . $colors['blue'] . ';
    }
    .button.is-blue.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-blue.is-inverted.is-outlined:hover, .button.is-blue.is-inverted.is-outlined.is-hovered, .button.is-blue.is-inverted.is-outlined:focus, .button.is-blue.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['blue'] . ';
    }
    .button.is-blue.is-inverted.is-outlined.is-loading:hover::after, .button.is-blue.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-blue.is-inverted.is-outlined.is-loading:focus::after, .button.is-blue.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['blue'] . ' ' . $colors['blue'] . ' !important;
    }
    .button.is-blue.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-blue.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-orange {
      background-color: ' . $colors['orange'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-orange:hover, .button.is-orange.is-hovered {
      background-color: #cda481;
      border-color: transparent;
      color: #fff;
    }
    .button.is-orange:focus, .button.is-orange.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-orange:focus:not(:active), .button.is-orange.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(209, 171, 138, 0.25);
    }
    .button.is-orange:active, .button.is-orange.is-active {
      background-color: #ca9e78;
      border-color: transparent;
      color: #fff;
    }
    .button.is-orange[disabled], fieldset[disabled] .button.is-orange {
      background-color: ' . $colors['orange'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-orange.is-inverted {
      background-color: #fff;
      color: ' . $colors['orange'] . ';
    }
    .button.is-orange.is-inverted:hover, .button.is-orange.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-orange.is-inverted[disabled], fieldset[disabled] .button.is-orange.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['orange'] . ';
    }
    .button.is-orange.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-orange.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['orange'] . ';
      color: ' . $colors['orange'] . ';
    }
    .button.is-orange.is-outlined:hover, .button.is-orange.is-outlined.is-hovered, .button.is-orange.is-outlined:focus, .button.is-orange.is-outlined.is-focused {
      background-color: ' . $colors['orange'] . ';
      border-color: ' . $colors['orange'] . ';
      color: #fff;
    }
    .button.is-orange.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['orange'] . ' ' . $colors['orange'] . ' !important;
    }
    .button.is-orange.is-outlined.is-loading:hover::after, .button.is-orange.is-outlined.is-loading.is-hovered::after, .button.is-orange.is-outlined.is-loading:focus::after, .button.is-orange.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-orange.is-outlined[disabled], fieldset[disabled] .button.is-orange.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['orange'] . ';
      box-shadow: none;
      color: ' . $colors['orange'] . ';
    }
    .button.is-orange.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-orange.is-inverted.is-outlined:hover, .button.is-orange.is-inverted.is-outlined.is-hovered, .button.is-orange.is-inverted.is-outlined:focus, .button.is-orange.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['orange'] . ';
    }
    .button.is-orange.is-inverted.is-outlined.is-loading:hover::after, .button.is-orange.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-orange.is-inverted.is-outlined.is-loading:focus::after, .button.is-orange.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['orange'] . ' ' . $colors['orange'] . ' !important;
    }
    .button.is-orange.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-orange.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-red {
      background-color: ' . $colors['red'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-red:hover, .button.is-red.is-hovered {
      background-color: #cd8481;
      border-color: transparent;
      color: #fff;
    }
    .button.is-red:focus, .button.is-red.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-red:focus:not(:active), .button.is-red.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
    }
    .button.is-red:active, .button.is-red.is-active {
      background-color: #ca7b78;
      border-color: transparent;
      color: #fff;
    }
    .button.is-red[disabled], fieldset[disabled] .button.is-red {
      background-color: ' . $colors['red'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-red.is-inverted {
      background-color: #fff;
      color: ' . $colors['red'] . ';
    }
    .button.is-red.is-inverted:hover, .button.is-red.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-red.is-inverted[disabled], fieldset[disabled] .button.is-red.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['red'] . ';
    }
    .button.is-red.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-red.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['red'] . ';
      color: ' . $colors['red'] . ';
    }
    .button.is-red.is-outlined:hover, .button.is-red.is-outlined.is-hovered, .button.is-red.is-outlined:focus, .button.is-red.is-outlined.is-focused {
      background-color: ' . $colors['red'] . ';
      border-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .button.is-red.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['red'] . ' ' . $colors['red'] . ' !important;
    }
    .button.is-red.is-outlined.is-loading:hover::after, .button.is-red.is-outlined.is-loading.is-hovered::after, .button.is-red.is-outlined.is-loading:focus::after, .button.is-red.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-red.is-outlined[disabled], fieldset[disabled] .button.is-red.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['red'] . ';
      box-shadow: none;
      color: ' . $colors['red'] . ';
    }
    .button.is-red.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-red.is-inverted.is-outlined:hover, .button.is-red.is-inverted.is-outlined.is-hovered, .button.is-red.is-inverted.is-outlined:focus, .button.is-red.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['red'] . ';
    }
    .button.is-red.is-inverted.is-outlined.is-loading:hover::after, .button.is-red.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-red.is-inverted.is-outlined.is-loading:focus::after, .button.is-red.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['red'] . ' ' . $colors['red'] . ' !important;
    }
    .button.is-red.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-red.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-green {
      background-color: ' . $colors['green'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-green:hover, .button.is-green.is-hovered {
      background-color: #639d6b;
      border-color: transparent;
      color: #fff;
    }
    .button.is-green:focus, .button.is-green.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-green:focus:not(:active), .button.is-green.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
    }
    .button.is-green:active, .button.is-green.is-active {
      background-color: #5e9665;
      border-color: transparent;
      color: #fff;
    }
    .button.is-green[disabled], fieldset[disabled] .button.is-green {
      background-color: ' . $colors['green'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-green.is-inverted {
      background-color: #fff;
      color: ' . $colors['green'] . ';
    }
    .button.is-green.is-inverted:hover, .button.is-green.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-green.is-inverted[disabled], fieldset[disabled] .button.is-green.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['green'] . ';
    }
    .button.is-green.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-green.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['green'] . ';
      color: ' . $colors['green'] . ';
    }
    .button.is-green.is-outlined:hover, .button.is-green.is-outlined.is-hovered, .button.is-green.is-outlined:focus, .button.is-green.is-outlined.is-focused {
      background-color: ' . $colors['green'] . ';
      border-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .button.is-green.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['green'] . ' ' . $colors['green'] . ' !important;
    }
    .button.is-green.is-outlined.is-loading:hover::after, .button.is-green.is-outlined.is-loading.is-hovered::after, .button.is-green.is-outlined.is-loading:focus::after, .button.is-green.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-green.is-outlined[disabled], fieldset[disabled] .button.is-green.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['green'] . ';
      box-shadow: none;
      color: ' . $colors['green'] . ';
    }
    .button.is-green.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-green.is-inverted.is-outlined:hover, .button.is-green.is-inverted.is-outlined.is-hovered, .button.is-green.is-inverted.is-outlined:focus, .button.is-green.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['green'] . ';
    }
    .button.is-green.is-inverted.is-outlined.is-loading:hover::after, .button.is-green.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-green.is-inverted.is-outlined.is-loading:focus::after, .button.is-green.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['green'] . ' ' . $colors['green'] . ' !important;
    }
    .button.is-green.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-green.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-yellow {
      background-color: ' . $colors['yellow'] . ';
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-yellow:hover, .button.is-yellow.is-hovered {
      background-color: #cdc781;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-yellow:focus, .button.is-yellow.is-focused {
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-yellow:focus:not(:active), .button.is-yellow.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
    }
    .button.is-yellow:active, .button.is-yellow.is-active {
      background-color: #cac378;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-yellow[disabled], fieldset[disabled] .button.is-yellow {
      background-color: ' . $colors['yellow'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-yellow.is-inverted {
      background-color: rgba(0, 0, 0, 0.7);
      color: ' . $colors['yellow'] . ';
    }
    .button.is-yellow.is-inverted:hover, .button.is-yellow.is-inverted.is-hovered {
      background-color: rgba(0, 0, 0, 0.7);
    }
    .button.is-yellow.is-inverted[disabled], fieldset[disabled] .button.is-yellow.is-inverted {
      background-color: rgba(0, 0, 0, 0.7);
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['yellow'] . ';
    }
    .button.is-yellow.is-loading::after {
      border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;
    }
    .button.is-yellow.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['yellow'] . ';
      color: ' . $colors['yellow'] . ';
    }
    .button.is-yellow.is-outlined:hover, .button.is-yellow.is-outlined.is-hovered, .button.is-yellow.is-outlined:focus, .button.is-yellow.is-outlined.is-focused {
      background-color: ' . $colors['yellow'] . ';
      border-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-yellow.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['yellow'] . ' ' . $colors['yellow'] . ' !important;
    }
    .button.is-yellow.is-outlined.is-loading:hover::after, .button.is-yellow.is-outlined.is-loading.is-hovered::after, .button.is-yellow.is-outlined.is-loading:focus::after, .button.is-yellow.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;
    }
    .button.is-yellow.is-outlined[disabled], fieldset[disabled] .button.is-yellow.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['yellow'] . ';
      box-shadow: none;
      color: ' . $colors['yellow'] . ';
    }
    .button.is-yellow.is-inverted.is-outlined {
      background-color: transparent;
      border-color: rgba(0, 0, 0, 0.7);
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-yellow.is-inverted.is-outlined:hover, .button.is-yellow.is-inverted.is-outlined.is-hovered, .button.is-yellow.is-inverted.is-outlined:focus, .button.is-yellow.is-inverted.is-outlined.is-focused {
      background-color: rgba(0, 0, 0, 0.7);
      color: ' . $colors['yellow'] . ';
    }
    .button.is-yellow.is-inverted.is-outlined.is-loading:hover::after, .button.is-yellow.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-yellow.is-inverted.is-outlined.is-loading:focus::after, .button.is-yellow.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['yellow'] . ' ' . $colors['yellow'] . ' !important;
    }
    .button.is-yellow.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-yellow.is-inverted.is-outlined {
      background-color: transparent;
      border-color: rgba(0, 0, 0, 0.7);
      box-shadow: none;
      color: rgba(0, 0, 0, 0.7);
    }
    .button.is-cyan {
      background-color: ' . $colors['cyan'] . ';
      border-color: transparent;
      color: #fff;
    }
    .button.is-cyan:hover, .button.is-cyan.is-hovered {
      background-color: #507477;
      border-color: transparent;
      color: #fff;
    }
    .button.is-cyan:focus, .button.is-cyan.is-focused {
      border-color: transparent;
      color: #fff;
    }
    .button.is-cyan:focus:not(:active), .button.is-cyan.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
    }
    .button.is-cyan:active, .button.is-cyan.is-active {
      background-color: #4b6c70;
      border-color: transparent;
      color: #fff;
    }
    .button.is-cyan[disabled], fieldset[disabled] .button.is-cyan {
      background-color: ' . $colors['cyan'] . ';
      border-color: transparent;
      box-shadow: none;
    }
    .button.is-cyan.is-inverted {
      background-color: #fff;
      color: ' . $colors['cyan'] . ';
    }
    .button.is-cyan.is-inverted:hover, .button.is-cyan.is-inverted.is-hovered {
      background-color: #f2f2f2;
    }
    .button.is-cyan.is-inverted[disabled], fieldset[disabled] .button.is-cyan.is-inverted {
      background-color: #fff;
      border-color: transparent;
      box-shadow: none;
      color: ' . $colors['cyan'] . ';
    }
    .button.is-cyan.is-loading::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-cyan.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['cyan'] . ';
      color: ' . $colors['cyan'] . ';
    }
    .button.is-cyan.is-outlined:hover, .button.is-cyan.is-outlined.is-hovered, .button.is-cyan.is-outlined:focus, .button.is-cyan.is-outlined.is-focused {
      background-color: ' . $colors['cyan'] . ';
      border-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .button.is-cyan.is-outlined.is-loading::after {
      border-color: transparent transparent ' . $colors['cyan'] . ' ' . $colors['cyan'] . ' !important;
    }
    .button.is-cyan.is-outlined.is-loading:hover::after, .button.is-cyan.is-outlined.is-loading.is-hovered::after, .button.is-cyan.is-outlined.is-loading:focus::after, .button.is-cyan.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent #fff #fff !important;
    }
    .button.is-cyan.is-outlined[disabled], fieldset[disabled] .button.is-cyan.is-outlined {
      background-color: transparent;
      border-color: ' . $colors['cyan'] . ';
      box-shadow: none;
      color: ' . $colors['cyan'] . ';
    }
    .button.is-cyan.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff;
    }
    .button.is-cyan.is-inverted.is-outlined:hover, .button.is-cyan.is-inverted.is-outlined.is-hovered, .button.is-cyan.is-inverted.is-outlined:focus, .button.is-cyan.is-inverted.is-outlined.is-focused {
      background-color: #fff;
      color: ' . $colors['cyan'] . ';
    }
    .button.is-cyan.is-inverted.is-outlined.is-loading:hover::after, .button.is-cyan.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-cyan.is-inverted.is-outlined.is-loading:focus::after, .button.is-cyan.is-inverted.is-outlined.is-loading.is-focused::after {
      border-color: transparent transparent ' . $colors['cyan'] . ' ' . $colors['cyan'] . ' !important;
    }
    .button.is-cyan.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-cyan.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      box-shadow: none;
      color: #fff;
    }
    .button.is-small {
      border-radius: 2px;
      font-size: 0.75rem;
    }
    .button.is-normal {
      font-size: 1rem;
    }
    .button.is-medium {
      font-size: 1.25rem;
    }
    .button.is-large {
      font-size: 1.5rem;
    }
    .button[disabled], fieldset[disabled] .button {
      background-color: ' . $colors['white'] . ';
      border-color: #dbdbdb;
      box-shadow: none;
      opacity: 0.5;
    }
    .button.is-fullwidth {
      display: flex;
      width: 100%;
    }
    .button.is-loading {
      color: transparent !important;
      pointer-events: none;
    }
    .button.is-loading::after {
      position: absolute;
      left: calc(50% - (1em / 2));
      top: calc(50% - (1em / 2));
      position: absolute !important;
    }
    .button.is-static {
      background-color: whitesmoke;
      border-color: #dbdbdb;
      color: #7a7a7a;
      box-shadow: none;
      pointer-events: none;
    }
    .button.is-rounded {
      border-radius: 290486px;
      padding-left: 1em;
      padding-right: 1em;
    }
    
    .buttons {
      align-items: center;
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }
    .buttons .button {
      margin-bottom: 0.5rem;
    }
    .buttons .button:not(:last-child):not(.is-fullwidth) {
      margin-right: 0.5rem;
    }
    .buttons:last-child {
      margin-bottom: -0.5rem;
    }
    .buttons:not(:last-child) {
      margin-bottom: 1rem;
    }
    .buttons.are-small .button:not(.is-normal):not(.is-medium):not(.is-large) {
      border-radius: 2px;
      font-size: 0.75rem;
    }
    .buttons.are-medium .button:not(.is-small):not(.is-normal):not(.is-large) {
      font-size: 1.25rem;
    }
    .buttons.are-large .button:not(.is-small):not(.is-normal):not(.is-medium) {
      font-size: 1.5rem;
    }
    .buttons.has-addons .button:not(:first-child) {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
    }
    .buttons.has-addons .button:not(:last-child) {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0;
      margin-right: -1px;
    }
    .buttons.has-addons .button:last-child {
      margin-right: 0;
    }
    .buttons.has-addons .button:hover, .buttons.has-addons .button.is-hovered {
      z-index: 2;
    }
    .buttons.has-addons .button:focus, .buttons.has-addons .button.is-focused, .buttons.has-addons .button:active, .buttons.has-addons .button.is-active, .buttons.has-addons .button.is-selected {
      z-index: 3;
    }
    .buttons.has-addons .button:focus:hover, .buttons.has-addons .button.is-focused:hover, .buttons.has-addons .button:active:hover, .buttons.has-addons .button.is-active:hover, .buttons.has-addons .button.is-selected:hover {
      z-index: 4;
    }
    .buttons.has-addons .button.is-expanded {
      flex-grow: 1;
      flex-shrink: 1;
    }
    .buttons.is-centered {
      justify-content: center;
    }
    .buttons.is-centered:not(.has-addons) .button:not(.is-fullwidth) {
      margin-left: 0.25rem;
      margin-right: 0.25rem;
    }
    .buttons.is-right {
      justify-content: flex-end;
    }
    .buttons.is-right:not(.has-addons) .button:not(.is-fullwidth) {
      margin-left: 0.25rem;
      margin-right: 0.25rem;
    }
    
    .container {
      flex-grow: 1;
      margin: 0 auto;
      position: relative;
      width: auto;
    }
    @media screen and (min-width: 1024px) {
      .container {
        max-width: 960px;
      }
      .container.is-fluid {
        margin-left: 32px;
        margin-right: 32px;
        max-width: none;
      }
    }
    @media screen and (max-width: 1215px) {
      .container.is-widescreen {
        max-width: 1152px;
      }
    }
    @media screen and (max-width: 1407px) {
      .container.is-fullhd {
        max-width: 1344px;
      }
    }
    @media screen and (min-width: 1216px) {
      .container {
        max-width: 1152px;
      }
    }
    @media screen and (min-width: 1408px) {
      .container {
        max-width: 1344px;
      }
    }
    
    .content li + li {
      margin-top: 0.25em;
    }
    .content p:not(:last-child),
    .content dl:not(:last-child),
    .content ol:not(:last-child),
    .content ul:not(:last-child),
    .content blockquote:not(:last-child),
    .content pre:not(:last-child),
    .content table:not(:last-child) {
      margin-bottom: 1em;
    }
    .content h1,
    .content h2,
    .content h3,
    .content h4,
    .content h5,
    .content h6 {
      color: white;
      font-weight: 600;
      line-height: 1.125;
    }
    .content h1 {
      font-size: 2em;
      margin-bottom: 0.5em;
    }
    .content h1:not(:first-child) {
      margin-top: 1em;
    }
    .content h2 {
      font-size: 1.75em;
      margin-bottom: 0.5714em;
    }
    .content h2:not(:first-child) {
      margin-top: 1.1428em;
    }
    .content h3 {
      font-size: 1.5em;
      margin-bottom: 0.6666em;
    }
    .content h3:not(:first-child) {
      margin-top: 1.3333em;
    }
    .content h4 {
      font-size: 1.25em;
      margin-bottom: 0.8em;
    }
    .content h5 {
      font-size: 1.125em;
      margin-bottom: 0.8888em;
    }
    .content h6 {
      font-size: 1em;
      margin-bottom: 1em;
    }
    .content blockquote {
      background-color: whitesmoke;
      border-left: 3px solid white;
      padding: 1.25em 1.5em;
    }
    .content ol {
      list-style-position: outside;
      margin-left: 2em;
      margin-top: 1em;
    }
    .content ol:not([type]) {
      list-style-type: decimal;
    }
    .content ol:not([type]).is-lower-alpha {
      list-style-type: lower-alpha;
    }
    .content ol:not([type]).is-lower-roman {
      list-style-type: lower-roman;
    }
    .content ol:not([type]).is-upper-alpha {
      list-style-type: upper-alpha;
    }
    .content ol:not([type]).is-upper-roman {
      list-style-type: upper-roman;
    }
    .content ul {
      list-style: disc outside;
      margin-left: 2em;
      margin-top: 1em;
    }
    .content ul ul {
      list-style-type: circle;
      margin-top: 0.5em;
    }
    .content ul ul ul {
      list-style-type: square;
    }
    .content dd {
      margin-left: 2em;
    }
    .content figure {
      margin-left: 2em;
      margin-right: 2em;
      text-align: center;
    }
    .content figure:not(:first-child) {
      margin-top: 2em;
    }
    .content figure:not(:last-child) {
      margin-bottom: 2em;
    }
    .content figure img {
      display: inline-block;
    }
    .content figure figcaption {
      font-style: italic;
    }
    .content pre {
      -webkit-overflow-scrolling: touch;
      overflow-x: auto;
      padding: 1.25em 1.5em;
      white-space: pre;
      word-wrap: normal;
    }
    .content sup,
    .content sub {
      font-size: 75%;
    }
    .content table {
      width: 100%;
    }
    .content table td,
    .content table th {
      border: 1px solid #dbdbdb;
      border-width: 0 0 1px;
      padding: 0.5em 0.75em;
      vertical-align: top;
    }
    .content table th {
      color: white;
    }
    .content table th:not([align]) {
      text-align: left;
    }
    .content table thead td,
    .content table thead th {
      border-width: 0 0 2px;
      color: white;
    }
    .content table tfoot td,
    .content table tfoot th {
      border-width: 2px 0 0;
      color: white;
    }
    .content table tbody tr:last-child td,
    .content table tbody tr:last-child th {
      border-bottom-width: 0;
    }
    .content .tabs li + li {
      margin-top: 0;
    }
    .content.is-small {
      font-size: 0.75rem;
    }
    .content.is-medium {
      font-size: 1.25rem;
    }
    .content.is-large {
      font-size: 1.5rem;
    }
    
    .icon {
      align-items: center;
      display: inline-flex;
      justify-content: center;
      height: 1.5rem;
      width: 1.5rem;
    }
    .icon.is-small {
      height: 1rem;
      width: 1rem;
    }
    .icon.is-medium {
      height: 2rem;
      width: 2rem;
    }
    .icon.is-large {
      height: 3rem;
      width: 3rem;
    }
    
    .image {
      display: block;
      position: relative;
    }
    .image img {
      display: block;
      height: auto;
      width: 100%;
    }
    .image img.is-rounded {
      border-radius: 290486px;
    }
    .image.is-square img,
    .image.is-square .has-ratio, .image.is-1by1 img,
    .image.is-1by1 .has-ratio, .image.is-5by4 img,
    .image.is-5by4 .has-ratio, .image.is-4by3 img,
    .image.is-4by3 .has-ratio, .image.is-3by2 img,
    .image.is-3by2 .has-ratio, .image.is-5by3 img,
    .image.is-5by3 .has-ratio, .image.is-16by9 img,
    .image.is-16by9 .has-ratio, .image.is-2by1 img,
    .image.is-2by1 .has-ratio, .image.is-3by1 img,
    .image.is-3by1 .has-ratio, .image.is-4by5 img,
    .image.is-4by5 .has-ratio, .image.is-3by4 img,
    .image.is-3by4 .has-ratio, .image.is-2by3 img,
    .image.is-2by3 .has-ratio, .image.is-3by5 img,
    .image.is-3by5 .has-ratio, .image.is-9by16 img,
    .image.is-9by16 .has-ratio, .image.is-1by2 img,
    .image.is-1by2 .has-ratio, .image.is-1by3 img,
    .image.is-1by3 .has-ratio {
      height: 100%;
      width: 100%;
    }
    .image.is-square, .image.is-1by1 {
      padding-top: 100%;
    }
    .image.is-5by4 {
      padding-top: 80%;
    }
    .image.is-4by3 {
      padding-top: 75%;
    }
    .image.is-3by2 {
      padding-top: 66.6666%;
    }
    .image.is-5by3 {
      padding-top: 60%;
    }
    .image.is-16by9 {
      padding-top: 56.25%;
    }
    .image.is-2by1 {
      padding-top: 50%;
    }
    .image.is-3by1 {
      padding-top: 33.3333%;
    }
    .image.is-4by5 {
      padding-top: 125%;
    }
    .image.is-3by4 {
      padding-top: 133.3333%;
    }
    .image.is-2by3 {
      padding-top: 150%;
    }
    .image.is-3by5 {
      padding-top: 166.6666%;
    }
    .image.is-9by16 {
      padding-top: 177.7777%;
    }
    .image.is-1by2 {
      padding-top: 200%;
    }
    .image.is-1by3 {
      padding-top: 300%;
    }
    .image.is-16x16 {
      height: 16px;
      width: 16px;
    }
    .image.is-24x24 {
      height: 24px;
      width: 24px;
    }
    .image.is-32x32 {
      height: 32px;
      width: 32px;
    }
    .image.is-48x48 {
      height: 48px;
      width: 48px;
    }
    .image.is-64x64 {
      height: 64px;
      width: 64px;
    }
    .image.is-96x96 {
      height: 96px;
      width: 96px;
    }
    .image.is-128x128 {
      height: 128px;
      width: 128px;
    }
    
    .notification {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      border-radius: 0.5rem;
      padding: 1.25rem 2.5rem 1.25rem 1.5rem;
      position: relative;
    }
    .notification a:not(.button):not(.dropdown-item) {
      color: currentColor;
      text-decoration: underline;
    }
    .notification strong {
      color: currentColor;
    }
    .notification code,
    .notification pre {
      background: ' . $colors['white'] . ';
    }
    .notification pre code {
      background: transparent;
    }
    .notification > .delete {
      position: absolute;
      right: 0.5rem;
      top: 0.5rem;
    }
    .notification .title,
    .notification .subtitle,
    .notification .content {
      color: currentColor;
    }
    .notification.is-white {
      background-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .notification.is-black {
      background-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .notification.is-light {
      background-color: whitesmoke;
      color: #363636;
    }
    .notification.is-dark {
      background-color: #363636;
      color: whitesmoke;
    }
    .notification.is-primary {
      background-color: ' . $colors['primary'] . ';
      color: #fff;
    }
    .notification.is-link {
      background-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    .notification.is-info {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .notification.is-success {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .notification.is-warning {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .notification.is-danger {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .notification.is-lightblue {
      background-color: ' . $colors['lightblue'] . ';
      color: #fff;
    }
    .notification.is-purple {
      background-color: ' . $colors['purple'] . ';
      color: #fff;
    }
    .notification.is-pink {
      background-color: ' . $colors['pink'] . ';
      color: #fff;
    }
    .notification.is-blue {
      background-color: ' . $colors['blue'] . ';
      color: #fff;
    }
    .notification.is-orange {
      background-color: ' . $colors['orange'] . ';
      color: #fff;
    }
    .notification.is-red {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .notification.is-green {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .notification.is-yellow {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .notification.is-cyan {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    
    .progress {
      -moz-appearance: none;
      -webkit-appearance: none;
      border: none;
      border-radius: 290486px;
      display: block;
      height: 1rem;
      overflow: hidden;
      padding: 0;
      width: 100%;
    }
    .progress::-webkit-progress-bar {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    }
    .progress::-webkit-progress-value {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
    }
    .progress::-moz-progress-bar {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
    }
    .progress::-ms-fill {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
      border: none;
    }
    .progress.is-white::-webkit-progress-value {
      background-color: ' . $colors['white'] . ';
    }
    .progress.is-white::-moz-progress-bar {
      background-color: ' . $colors['white'] . ';
    }
    .progress.is-white::-ms-fill {
      background-color: ' . $colors['white'] . ';
    }
    .progress.is-white:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['white'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-black::-webkit-progress-value {
      background-color: #0a0a0a;
    }
    .progress.is-black::-moz-progress-bar {
      background-color: #0a0a0a;
    }
    .progress.is-black::-ms-fill {
      background-color: #0a0a0a;
    }
    .progress.is-black:indeterminate {
      background-image: linear-gradient(to right, #0a0a0a 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-light::-webkit-progress-value {
      background-color: whitesmoke;
    }
    .progress.is-light::-moz-progress-bar {
      background-color: whitesmoke;
    }
    .progress.is-light::-ms-fill {
      background-color: whitesmoke;
    }
    .progress.is-light:indeterminate {
      background-image: linear-gradient(to right, whitesmoke 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-dark::-webkit-progress-value {
      background-color: #363636;
    }
    .progress.is-dark::-moz-progress-bar {
      background-color: #363636;
    }
    .progress.is-dark::-ms-fill {
      background-color: #363636;
    }
    .progress.is-dark:indeterminate {
      background-image: linear-gradient(to right, #363636 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-primary::-webkit-progress-value {
      background-color: ' . $colors['primary'] . ';
    }
    .progress.is-primary::-moz-progress-bar {
      background-color: ' . $colors['primary'] . ';
    }
    .progress.is-primary::-ms-fill {
      background-color: ' . $colors['primary'] . ';
    }
    .progress.is-primary:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['primary'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-link::-webkit-progress-value {
      background-color: ' . $colors['complementary'] . ';
    }
    .progress.is-link::-moz-progress-bar {
      background-color: ' . $colors['complementary'] . ';
    }
    .progress.is-link::-ms-fill {
      background-color: ' . $colors['complementary'] . ';
    }
    .progress.is-link:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['complementary'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-info::-webkit-progress-value {
      background-color: ' . $colors['cyan'] . ';
    }
    .progress.is-info::-moz-progress-bar {
      background-color: ' . $colors['cyan'] . ';
    }
    .progress.is-info::-ms-fill {
      background-color: ' . $colors['cyan'] . ';
    }
    .progress.is-info:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['cyan'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-success::-webkit-progress-value {
      background-color: ' . $colors['green'] . ';
    }
    .progress.is-success::-moz-progress-bar {
      background-color: ' . $colors['green'] . ';
    }
    .progress.is-success::-ms-fill {
      background-color: ' . $colors['green'] . ';
    }
    .progress.is-success:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['green'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-warning::-webkit-progress-value {
      background-color: ' . $colors['yellow'] . ';
    }
    .progress.is-warning::-moz-progress-bar {
      background-color: ' . $colors['yellow'] . ';
    }
    .progress.is-warning::-ms-fill {
      background-color: ' . $colors['yellow'] . ';
    }
    .progress.is-warning:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['yellow'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-danger::-webkit-progress-value {
      background-color: ' . $colors['red'] . ';
    }
    .progress.is-danger::-moz-progress-bar {
      background-color: ' . $colors['red'] . ';
    }
    .progress.is-danger::-ms-fill {
      background-color: ' . $colors['red'] . ';
    }
    .progress.is-danger:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['red'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-lightblue::-webkit-progress-value {
      background-color: ' . $colors['lightblue'] . ';
    }
    .progress.is-lightblue::-moz-progress-bar {
      background-color: ' . $colors['lightblue'] . ';
    }
    .progress.is-lightblue::-ms-fill {
      background-color: ' . $colors['lightblue'] . ';
    }
    .progress.is-lightblue:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['lightblue'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-purple::-webkit-progress-value {
      background-color: ' . $colors['purple'] . ';
    }
    .progress.is-purple::-moz-progress-bar {
      background-color: ' . $colors['purple'] . ';
    }
    .progress.is-purple::-ms-fill {
      background-color: ' . $colors['purple'] . ';
    }
    .progress.is-purple:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['purple'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-pink::-webkit-progress-value {
      background-color: ' . $colors['pink'] . ';
    }
    .progress.is-pink::-moz-progress-bar {
      background-color: ' . $colors['pink'] . ';
    }
    .progress.is-pink::-ms-fill {
      background-color: ' . $colors['pink'] . ';
    }
    .progress.is-pink:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['pink'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-blue::-webkit-progress-value {
      background-color: ' . $colors['blue'] . ';
    }
    .progress.is-blue::-moz-progress-bar {
      background-color: ' . $colors['blue'] . ';
    }
    .progress.is-blue::-ms-fill {
      background-color: ' . $colors['blue'] . ';
    }
    .progress.is-blue:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['blue'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-orange::-webkit-progress-value {
      background-color: ' . $colors['orange'] . ';
    }
    .progress.is-orange::-moz-progress-bar {
      background-color: ' . $colors['orange'] . ';
    }
    .progress.is-orange::-ms-fill {
      background-color: ' . $colors['orange'] . ';
    }
    .progress.is-orange:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['orange'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-red::-webkit-progress-value {
      background-color: ' . $colors['red'] . ';
    }
    .progress.is-red::-moz-progress-bar {
      background-color: ' . $colors['red'] . ';
    }
    .progress.is-red::-ms-fill {
      background-color: ' . $colors['red'] . ';
    }
    .progress.is-red:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['red'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-green::-webkit-progress-value {
      background-color: ' . $colors['green'] . ';
    }
    .progress.is-green::-moz-progress-bar {
      background-color: ' . $colors['green'] . ';
    }
    .progress.is-green::-ms-fill {
      background-color: ' . $colors['green'] . ';
    }
    .progress.is-green:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['green'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-yellow::-webkit-progress-value {
      background-color: ' . $colors['yellow'] . ';
    }
    .progress.is-yellow::-moz-progress-bar {
      background-color: ' . $colors['yellow'] . ';
    }
    .progress.is-yellow::-ms-fill {
      background-color: ' . $colors['yellow'] . ';
    }
    .progress.is-yellow:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['yellow'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress.is-cyan::-webkit-progress-value {
      background-color: ' . $colors['cyan'] . ';
    }
    .progress.is-cyan::-moz-progress-bar {
      background-color: ' . $colors['cyan'] . ';
    }
    .progress.is-cyan::-ms-fill {
      background-color: ' . $colors['cyan'] . ';
    }
    .progress.is-cyan:indeterminate {
      background-image: linear-gradient(to right, ' . $colors['cyan'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    }
    .progress:indeterminate {
      animation-duration: 1.5s;
      animation-iteration-count: infinite;
      animation-name: moveIndeterminate;
      animation-timing-function: linear;
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      background-image: linear-gradient(to right, ' . $colors['white'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
      background-position: top left;
      background-repeat: no-repeat;
      background-size: 150% 150%;
    }
    .progress:indeterminate::-webkit-progress-bar {
      background-color: transparent;
    }
    .progress:indeterminate::-moz-progress-bar {
      background-color: transparent;
    }
    .progress.is-small {
      height: 0.75rem;
    }
    .progress.is-medium {
      height: 1.25rem;
    }
    .progress.is-large {
      height: 1.5rem;
    }
    
    @keyframes moveIndeterminate {
      from {
        background-position: 200% 0;
      }
      to {
        background-position: -200% 0;
      }
    }
    .table {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      color: ' . $colors['white'] . ';
    }
    .table td,
    .table th {
      border: 1px solid #dbdbdb;
      border-width: 0 0 1px;
      padding: 0.5em 0.75em;
      vertical-align: top;
    }
    .table td.is-white,
    .table th.is-white {
      background-color: ' . $colors['white'] . ';
      border-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .table td.is-black,
    .table th.is-black {
      background-color: #0a0a0a;
      border-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .table td.is-light,
    .table th.is-light {
      background-color: whitesmoke;
      border-color: whitesmoke;
      color: #363636;
    }
    .table td.is-dark,
    .table th.is-dark {
      background-color: #363636;
      border-color: #363636;
      color: whitesmoke;
    }
    .table td.is-primary,
    .table th.is-primary {
      background-color: ' . $colors['primary'] . ';
      border-color: ' . $colors['primary'] . ';
      color: #fff;
    }
    .table td.is-link,
    .table th.is-link {
      background-color: ' . $colors['complementary'] . ';
      border-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    .table td.is-info,
    .table th.is-info {
      background-color: ' . $colors['cyan'] . ';
      border-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .table td.is-success,
    .table th.is-success {
      background-color: ' . $colors['green'] . ';
      border-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .table td.is-warning,
    .table th.is-warning {
      background-color: ' . $colors['yellow'] . ';
      border-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .table td.is-danger,
    .table th.is-danger {
      background-color: ' . $colors['red'] . ';
      border-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .table td.is-lightblue,
    .table th.is-lightblue {
      background-color: ' . $colors['lightblue'] . ';
      border-color: ' . $colors['lightblue'] . ';
      color: #fff;
    }
    .table td.is-purple,
    .table th.is-purple {
      background-color: ' . $colors['purple'] . ';
      border-color: ' . $colors['purple'] . ';
      color: #fff;
    }
    .table td.is-pink,
    .table th.is-pink {
      background-color: ' . $colors['pink'] . ';
      border-color: ' . $colors['pink'] . ';
      color: #fff;
    }
    .table td.is-blue,
    .table th.is-blue {
      background-color: ' . $colors['blue'] . ';
      border-color: ' . $colors['blue'] . ';
      color: #fff;
    }
    .table td.is-orange,
    .table th.is-orange {
      background-color: ' . $colors['orange'] . ';
      border-color: ' . $colors['orange'] . ';
      color: #fff;
    }
    .table td.is-red,
    .table th.is-red {
      background-color: ' . $colors['red'] . ';
      border-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .table td.is-green,
    .table th.is-green {
      background-color: ' . $colors['green'] . ';
      border-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .table td.is-yellow,
    .table th.is-yellow {
      background-color: ' . $colors['yellow'] . ';
      border-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .table td.is-cyan,
    .table th.is-cyan {
      background-color: ' . $colors['cyan'] . ';
      border-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .table td.is-narrow,
    .table th.is-narrow {
      white-space: nowrap;
      width: 1%;
    }
    .table td.is-selected,
    .table th.is-selected {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
      color: #fff;
    }
    .table td.is-selected a,
    .table td.is-selected strong,
    .table th.is-selected a,
    .table th.is-selected strong {
      color: currentColor;
    }
    .table th {
      color: ' . $colors['white'] . ';
    }
    .table th:not([align]) {
      text-align: left;
    }
    .table tr.is-selected {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
      color: #fff;
    }
    .table tr.is-selected a,
    .table tr.is-selected strong {
      color: currentColor;
    }
    .table tr.is-selected td,
    .table tr.is-selected th {
      border-color: #fff;
      color: currentColor;
    }
    .table thead {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    }
    .table thead td,
    .table thead th {
      border-width: 0 0 2px;
      color: ' . $colors['white'] . ';
    }
    .table tfoot {
      background-color: transparent;
    }
    .table tfoot td,
    .table tfoot th {
      border-width: 2px 0 0;
      color: white;
    }
    .table tbody {
      background-color: transparent;
    }
    .table tbody tr:last-child td,
    .table tbody tr:last-child th {
      border-bottom-width: 0;
    }
    .table.is-bordered td,
    .table.is-bordered th {
      border-width: 1px;
    }
    .table.is-bordered tr:last-child td,
    .table.is-bordered tr:last-child th {
      border-bottom-width: 1px;
    }
    .table.is-fullwidth {
      width: 100%;
    }
    .table.is-hoverable tbody tr:not(.is-selected):hover {
      background-color: #fafafa;
    }
    .table.is-hoverable.is-striped tbody tr:not(.is-selected):hover {
      background-color: #fafafa;
    }
    .table.is-hoverable.is-striped tbody tr:not(.is-selected):hover:nth-child(even) {
      background-color: whitesmoke;
    }
    .table.is-narrow td,
    .table.is-narrow th {
      padding: 0.25em 0.5em;
    }
    .table.is-striped tbody tr:not(.is-selected):nth-child(even) {
      background-color: #fafafa;
    }
    
    .table-container {
      -webkit-overflow-scrolling: touch;
      overflow: auto;
      overflow-y: hidden;
      max-width: 100%;
    }
    
    .tags {
      align-items: center;
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }
    .tags .tag {
      margin-bottom: 0.5rem;
    }
    .tags .tag:not(:last-child) {
      margin-right: 0.5rem;
    }
    .tags:last-child {
      margin-bottom: -0.5rem;
    }
    .tags:not(:last-child) {
      margin-bottom: 1rem;
    }
    .tags.are-medium .tag:not(.is-normal):not(.is-large) {
      font-size: 1rem;
    }
    .tags.are-large .tag:not(.is-normal):not(.is-medium) {
      font-size: 1.25rem;
    }
    .tags.is-centered {
      justify-content: center;
    }
    .tags.is-centered .tag {
      margin-right: 0.25rem;
      margin-left: 0.25rem;
    }
    .tags.is-right {
      justify-content: flex-end;
    }
    .tags.is-right .tag:not(:first-child) {
      margin-left: 0.5rem;
    }
    .tags.is-right .tag:not(:last-child) {
      margin-right: 0;
    }
    .tags.has-addons .tag {
      margin-right: 0;
    }
    .tags.has-addons .tag:not(:first-child) {
      margin-left: 0;
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
    }
    .tags.has-addons .tag:not(:last-child) {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0;
    }
    
    .tag:not(body) {
      align-items: center;
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      border-radius: 0.5rem;
      color: ' . $colors['white'] . ';
      display: inline-flex;
      font-size: 0.75rem;
      height: 2em;
      justify-content: center;
      line-height: 1.5;
      padding-left: 0.75em;
      padding-right: 0.75em;
      white-space: nowrap;
    }
    .tag:not(body) .delete {
      margin-left: 0.25rem;
      margin-right: -0.375rem;
    }
    .tag:not(body).is-white {
      background-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .tag:not(body).is-black {
      background-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .tag:not(body).is-light {
      background-color: whitesmoke;
      color: #363636;
    }
    .tag:not(body).is-dark {
      background-color: #363636;
      color: whitesmoke;
    }
    .tag:not(body).is-primary {
      background-color: ' . $colors['primary'] . ';
      color: #fff;
    }
    .tag:not(body).is-link {
      background-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    .tag:not(body).is-info {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .tag:not(body).is-success {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .tag:not(body).is-warning {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .tag:not(body).is-danger {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .tag:not(body).is-lightblue {
      background-color: ' . $colors['lightblue'] . ';
      color: #fff;
    }
    .tag:not(body).is-purple {
      background-color: ' . $colors['purple'] . ';
      color: #fff;
    }
    .tag:not(body).is-pink {
      background-color: ' . $colors['pink'] . ';
      color: #fff;
    }
    .tag:not(body).is-blue {
      background-color: ' . $colors['blue'] . ';
      color: #fff;
    }
    .tag:not(body).is-orange {
      background-color: ' . $colors['orange'] . ';
      color: #fff;
    }
    .tag:not(body).is-red {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .tag:not(body).is-green {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .tag:not(body).is-yellow {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .tag:not(body).is-cyan {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .tag:not(body).is-normal {
      font-size: 0.75rem;
    }
    .tag:not(body).is-medium {
      font-size: 1rem;
    }
    .tag:not(body).is-large {
      font-size: 1.25rem;
    }
    .tag:not(body) .icon:first-child:not(:last-child) {
      margin-left: -0.375em;
      margin-right: 0.1875em;
    }
    .tag:not(body) .icon:last-child:not(:first-child) {
      margin-left: 0.1875em;
      margin-right: -0.375em;
    }
    .tag:not(body) .icon:first-child:last-child {
      margin-left: -0.375em;
      margin-right: -0.375em;
    }
    .tag:not(body).is-delete {
      margin-left: 1px;
      padding: 0;
      position: relative;
      width: 2em;
    }
    .tag:not(body).is-delete::before, .tag:not(body).is-delete::after {
      background-color: currentColor;
      content: "";
      display: block;
      left: 50%;
      position: absolute;
      top: 50%;
      transform: translateX(-50%) translateY(-50%) rotate(45deg);
      transform-origin: center center;
    }
    .tag:not(body).is-delete::before {
      height: 1px;
      width: 50%;
    }
    .tag:not(body).is-delete::after {
      height: 50%;
      width: 1px;
    }
    .tag:not(body).is-delete:hover, .tag:not(body).is-delete:focus {
      background-color: ' . $colors['edark'] . ';
    }
    .tag:not(body).is-delete:active {
      background-color: #0b0c0f;
    }
    .tag:not(body).is-rounded {
      border-radius: 290486px;
    }
    
    a.tag:hover {
      text-decoration: underline;
    }
    
    .title,
    .subtitle {
      word-break: break-word;
    }
    .title em,
    .title span,
    .subtitle em,
    .subtitle span {
      font-weight: inherit;
    }
    .title sub,
    .subtitle sub {
      font-size: 0.75em;
    }
    .title sup,
    .subtitle sup {
      font-size: 0.75em;
    }
    .title .tag,
    .subtitle .tag {
      vertical-align: middle;
    }
    
    .title {
      color: white;
      font-size: 2rem;
      font-weight: 600;
      line-height: 1.125;
    }
    .title strong {
      color: inherit;
      font-weight: inherit;
    }
    .title + .highlight {
      margin-top: -0.75rem;
    }
    .title:not(.is-spaced) + .subtitle {
      margin-top: -1.25rem;
    }
    .title.is-1 {
      font-size: 3rem;
    }
    .title.is-2 {
      font-size: 2.5rem;
    }
    .title.is-3 {
      font-size: 2rem;
    }
    .title.is-4 {
      font-size: 1.5rem;
    }
    .title.is-5 {
      font-size: 1.25rem;
    }
    .title.is-6 {
      font-size: 1rem;
    }
    .title.is-7 {
      font-size: 0.75rem;
    }
    
    .subtitle {
      color: ' . $colors['white'] . ';
      font-size: 1.25rem;
      font-weight: 400;
      line-height: 1.25;
    }
    .subtitle strong {
      color: #363636;
      font-weight: 600;
    }
    .subtitle:not(.is-spaced) + .title {
      margin-top: -1.25rem;
    }
    .subtitle.is-1 {
      font-size: 3rem;
    }
    .subtitle.is-2 {
      font-size: 2.5rem;
    }
    .subtitle.is-3 {
      font-size: 2rem;
    }
    .subtitle.is-4 {
      font-size: 1.5rem;
    }
    .subtitle.is-5 {
      font-size: 1.25rem;
    }
    .subtitle.is-6 {
      font-size: 1rem;
    }
    .subtitle.is-7 {
      font-size: 0.75rem;
    }
    
    .heading {
      display: block;
      font-size: 11px;
      letter-spacing: 1px;
      margin-bottom: 5px;
      text-transform: uppercase;
    }
    
    .highlight {
      font-weight: 400;
      max-width: 100%;
      overflow: hidden;
      padding: 0;
    }
    .highlight pre {
      overflow: auto;
      max-width: 100%;
    }
    
    .number {
      align-items: center;
      background-color: whitesmoke;
      border-radius: 290486px;
      display: inline-flex;
      font-size: 1.25rem;
      height: 2em;
      justify-content: center;
      margin-right: 1.5rem;
      min-width: 2.5em;
      padding: 0.25rem 0.5rem;
      text-align: center;
      vertical-align: top;
    }
    
    .select select, .textarea, .input {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      border-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      border-radius: 0.5rem;
      color: ' . $colors['white'] . ';
    }
    .select select::-moz-placeholder, .textarea::-moz-placeholder, .input::-moz-placeholder {
      color: rgba(255, 255, 255, 0.3);
    }
    .select select::-webkit-input-placeholder, .textarea::-webkit-input-placeholder, .input::-webkit-input-placeholder {
      color: rgba(255, 255, 255, 0.3);
    }
    .select select:-moz-placeholder, .textarea:-moz-placeholder, .input:-moz-placeholder {
      color: rgba(255, 255, 255, 0.3);
    }
    .select select:-ms-input-placeholder, .textarea:-ms-input-placeholder, .input:-ms-input-placeholder {
      color: rgba(255, 255, 255, 0.3);
    }
    .select select:hover, .textarea:hover, .input:hover, .select select.is-hovered, .is-hovered.textarea, .is-hovered.input {
      border-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    }
    .select select:focus, .textarea:focus, .input:focus, .select select.is-focused, .is-focused.textarea, .is-focused.input, .select select:active, .textarea:active, .input:active, .select select.is-active, .is-active.textarea, .is-active.input {
      border-color: ' . $colors['complementary'] . ';
      box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
    }
    .select select[disabled], [disabled].textarea, [disabled].input, fieldset[disabled] .select select, .select fieldset[disabled] select, fieldset[disabled] .textarea, fieldset[disabled] .input {
      background-color: whitesmoke;
      border-color: whitesmoke;
      box-shadow: none;
      color: ' . $colors['white'] . ';
    }
    .select select[disabled]::-moz-placeholder, [disabled].textarea::-moz-placeholder, [disabled].input::-moz-placeholder, fieldset[disabled] .select select::-moz-placeholder, .select fieldset[disabled] select::-moz-placeholder, fieldset[disabled] .textarea::-moz-placeholder, fieldset[disabled] .input::-moz-placeholder {
      color: rgba(255, 255, 255, 0.3);
    }
    .select select[disabled]::-webkit-input-placeholder, [disabled].textarea::-webkit-input-placeholder, [disabled].input::-webkit-input-placeholder, fieldset[disabled] .select select::-webkit-input-placeholder, .select fieldset[disabled] select::-webkit-input-placeholder, fieldset[disabled] .textarea::-webkit-input-placeholder, fieldset[disabled] .input::-webkit-input-placeholder {
      color: rgba(255, 255, 255, 0.3);
    }
    .select select[disabled]:-moz-placeholder, [disabled].textarea:-moz-placeholder, [disabled].input:-moz-placeholder, fieldset[disabled] .select select:-moz-placeholder, .select fieldset[disabled] select:-moz-placeholder, fieldset[disabled] .textarea:-moz-placeholder, fieldset[disabled] .input:-moz-placeholder {
      color: rgba(255, 255, 255, 0.3);
    }
    .select select[disabled]:-ms-input-placeholder, [disabled].textarea:-ms-input-placeholder, [disabled].input:-ms-input-placeholder, fieldset[disabled] .select select:-ms-input-placeholder, .select fieldset[disabled] select:-ms-input-placeholder, fieldset[disabled] .textarea:-ms-input-placeholder, fieldset[disabled] .input:-ms-input-placeholder {
      color: rgba(255, 255, 255, 0.3);
    }
    
    .textarea, .input {
      box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.1);
      max-width: 100%;
      width: 100%;
    }
    [readonly].textarea, [readonly].input {
      box-shadow: none;
    }
    .is-white.textarea, .is-white.input {
      border-color: ' . $colors['white'] . ';
    }
    .is-white.textarea:focus, .is-white.input:focus, .is-white.is-focused.textarea, .is-white.is-focused.input, .is-white.textarea:active, .is-white.input:active, .is-white.is-active.textarea, .is-white.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25);
    }
    .is-black.textarea, .is-black.input {
      border-color: #0a0a0a;
    }
    .is-black.textarea:focus, .is-black.input:focus, .is-black.is-focused.textarea, .is-black.is-focused.input, .is-black.textarea:active, .is-black.input:active, .is-black.is-active.textarea, .is-black.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25);
    }
    .is-light.textarea, .is-light.input {
      border-color: whitesmoke;
    }
    .is-light.textarea:focus, .is-light.input:focus, .is-light.is-focused.textarea, .is-light.is-focused.input, .is-light.textarea:active, .is-light.input:active, .is-light.is-active.textarea, .is-light.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25);
    }
    .is-dark.textarea, .is-dark.input {
      border-color: #363636;
    }
    .is-dark.textarea:focus, .is-dark.input:focus, .is-dark.is-focused.textarea, .is-dark.is-focused.input, .is-dark.textarea:active, .is-dark.input:active, .is-dark.is-active.textarea, .is-dark.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25);
    }
    .is-primary.textarea, .is-primary.input {
      border-color: ' . $colors['primary'] . ';
    }
    .is-primary.textarea:focus, .is-primary.input:focus, .is-primary.is-focused.textarea, .is-primary.is-focused.input, .is-primary.textarea:active, .is-primary.input:active, .is-primary.is-active.textarea, .is-primary.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(170, 170, 170, 0.25);
    }
    .is-link.textarea, .is-link.input {
      border-color: ' . $colors['complementary'] . ';
    }
    .is-link.textarea:focus, .is-link.input:focus, .is-link.is-focused.textarea, .is-link.is-focused.input, .is-link.textarea:active, .is-link.input:active, .is-link.is-active.textarea, .is-link.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
    }
    .is-info.textarea, .is-info.input {
      border-color: ' . $colors['cyan'] . ';
    }
    .is-info.textarea:focus, .is-info.input:focus, .is-info.is-focused.textarea, .is-info.is-focused.input, .is-info.textarea:active, .is-info.input:active, .is-info.is-active.textarea, .is-info.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
    }
    .is-success.textarea, .is-success.input {
      border-color: ' . $colors['green'] . ';
    }
    .is-success.textarea:focus, .is-success.input:focus, .is-success.is-focused.textarea, .is-success.is-focused.input, .is-success.textarea:active, .is-success.input:active, .is-success.is-active.textarea, .is-success.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
    }
    .is-warning.textarea, .is-warning.input {
      border-color: ' . $colors['yellow'] . ';
    }
    .is-warning.textarea:focus, .is-warning.input:focus, .is-warning.is-focused.textarea, .is-warning.is-focused.input, .is-warning.textarea:active, .is-warning.input:active, .is-warning.is-active.textarea, .is-warning.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
    }
    .is-danger.textarea, .is-danger.input {
      border-color: ' . $colors['red'] . ';
    }
    .is-danger.textarea:focus, .is-danger.input:focus, .is-danger.is-focused.textarea, .is-danger.is-focused.input, .is-danger.textarea:active, .is-danger.input:active, .is-danger.is-active.textarea, .is-danger.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
    }
    .is-lightblue.textarea, .is-lightblue.input {
      border-color: ' . $colors['lightblue'] . ';
    }
    .is-lightblue.textarea:focus, .is-lightblue.input:focus, .is-lightblue.is-focused.textarea, .is-lightblue.is-focused.input, .is-lightblue.textarea:active, .is-lightblue.input:active, .is-lightblue.is-active.textarea, .is-lightblue.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(92, 115, 135, 0.25);
    }
    .is-purple.textarea, .is-purple.input {
      border-color: ' . $colors['purple'] . ';
    }
    .is-purple.textarea:focus, .is-purple.input:focus, .is-purple.is-focused.textarea, .is-purple.is-focused.input, .is-purple.textarea:active, .is-purple.input:active, .is-purple.is-active.textarea, .is-purple.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(117, 98, 142, 0.25);
    }
    .is-pink.textarea, .is-pink.input {
      border-color: ' . $colors['pink'] . ';
    }
    .is-pink.textarea:focus, .is-pink.input:focus, .is-pink.is-focused.textarea, .is-pink.is-focused.input, .is-pink.textarea:active, .is-pink.input:active, .is-pink.is-active.textarea, .is-pink.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(183, 121, 143, 0.25);
    }
    .is-blue.textarea, .is-blue.input {
      border-color: ' . $colors['blue'] . ';
    }
    .is-blue.textarea:focus, .is-blue.input:focus, .is-blue.is-focused.textarea, .is-blue.is-focused.input, .is-blue.textarea:active, .is-blue.input:active, .is-blue.is-active.textarea, .is-blue.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(98, 109, 141, 0.25);
    }
    .is-orange.textarea, .is-orange.input {
      border-color: ' . $colors['orange'] . ';
    }
    .is-orange.textarea:focus, .is-orange.input:focus, .is-orange.is-focused.textarea, .is-orange.is-focused.input, .is-orange.textarea:active, .is-orange.input:active, .is-orange.is-active.textarea, .is-orange.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(209, 171, 138, 0.25);
    }
    .is-red.textarea, .is-red.input {
      border-color: ' . $colors['red'] . ';
    }
    .is-red.textarea:focus, .is-red.input:focus, .is-red.is-focused.textarea, .is-red.is-focused.input, .is-red.textarea:active, .is-red.input:active, .is-red.is-active.textarea, .is-red.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
    }
    .is-green.textarea, .is-green.input {
      border-color: ' . $colors['green'] . ';
    }
    .is-green.textarea:focus, .is-green.input:focus, .is-green.is-focused.textarea, .is-green.is-focused.input, .is-green.textarea:active, .is-green.input:active, .is-green.is-active.textarea, .is-green.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
    }
    .is-yellow.textarea, .is-yellow.input {
      border-color: ' . $colors['yellow'] . ';
    }
    .is-yellow.textarea:focus, .is-yellow.input:focus, .is-yellow.is-focused.textarea, .is-yellow.is-focused.input, .is-yellow.textarea:active, .is-yellow.input:active, .is-yellow.is-active.textarea, .is-yellow.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
    }
    .is-cyan.textarea, .is-cyan.input {
      border-color: ' . $colors['cyan'] . ';
    }
    .is-cyan.textarea:focus, .is-cyan.input:focus, .is-cyan.is-focused.textarea, .is-cyan.is-focused.input, .is-cyan.textarea:active, .is-cyan.input:active, .is-cyan.is-active.textarea, .is-cyan.is-active.input {
      box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
    }
    .is-small.textarea, .is-small.input {
      border-radius: 2px;
      font-size: 0.75rem;
    }
    .is-medium.textarea, .is-medium.input {
      font-size: 1.25rem;
    }
    .is-large.textarea, .is-large.input {
      font-size: 1.5rem;
    }
    .is-fullwidth.textarea, .is-fullwidth.input {
      display: block;
      width: 100%;
    }
    .is-inline.textarea, .is-inline.input {
      display: inline;
      width: auto;
    }
    
    .input.is-rounded {
      border-radius: 290486px;
      padding-left: 1em;
      padding-right: 1em;
    }
    .input.is-static {
      background-color: transparent;
      border-color: transparent;
      box-shadow: none;
      padding-left: 0;
      padding-right: 0;
    }
    
    .textarea {
      display: block;
      max-width: 100%;
      min-width: 100%;
      padding: 0.625em;
      resize: vertical;
    }
    .textarea:not([rows]) {
      max-height: 600px;
      min-height: 120px;
    }
    .textarea[rows] {
      height: initial;
    }
    .textarea.has-fixed-size {
      resize: none;
    }
    
    .radio, .checkbox {
      cursor: pointer;
      display: inline-block;
      line-height: 1.25;
      position: relative;
    }
    .radio input, .checkbox input {
      cursor: pointer;
    }
    .radio:hover, .checkbox:hover {
      color: ' . $colors['white'] . ';
    }
    [disabled].radio, [disabled].checkbox, fieldset[disabled] .radio, fieldset[disabled] .checkbox {
      color: ' . $colors['white'] . ';
      cursor: not-allowed;
    }
    
    .radio + .radio {
      margin-left: 0.5em;
    }
    
    .select {
      display: inline-block;
      max-width: 100%;
      position: relative;
      vertical-align: top;
    }
    .select:not(.is-multiple) {
      height: 2.25em;
    }
    .select:not(.is-multiple):not(.is-loading)::after {
      border-color: ' . $colors['white'] . ';
      right: 1.125em;
      z-index: 4;
    }
    .select.is-rounded select {
      border-radius: 290486px;
      padding-left: 1em;
    }
    .select select {
      cursor: pointer;
      display: block;
      font-size: 1em;
      max-width: 100%;
      outline: none;
    }
    .select select::-ms-expand {
      display: none;
    }
    .select select[disabled]:hover, fieldset[disabled] .select select:hover {
      border-color: whitesmoke;
    }
    .select select:not([multiple]) {
      padding-right: 2.5em;
    }
    .select select[multiple] {
      height: auto;
      padding: 0;
    }
    .select select[multiple] option {
      padding: 0.5em 1em;
    }
    .select:not(.is-multiple):not(.is-loading):hover::after {
      border-color: ' . $colors['white'] . ';
    }
    .select.is-white:not(:hover)::after {
      border-color: ' . $colors['white'] . ';
    }
    .select.is-white select {
      border-color: ' . $colors['white'] . ';
    }
    .select.is-white select:hover, .select.is-white select.is-hovered {
      border-color: #f2f2f2;
    }
    .select.is-white select:focus, .select.is-white select.is-focused, .select.is-white select:active, .select.is-white select.is-active {
      box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25);
    }
    .select.is-black:not(:hover)::after {
      border-color: #0a0a0a;
    }
    .select.is-black select {
      border-color: #0a0a0a;
    }
    .select.is-black select:hover, .select.is-black select.is-hovered {
      border-color: black;
    }
    .select.is-black select:focus, .select.is-black select.is-focused, .select.is-black select:active, .select.is-black select.is-active {
      box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25);
    }
    .select.is-light:not(:hover)::after {
      border-color: whitesmoke;
    }
    .select.is-light select {
      border-color: whitesmoke;
    }
    .select.is-light select:hover, .select.is-light select.is-hovered {
      border-color: #e8e8e8;
    }
    .select.is-light select:focus, .select.is-light select.is-focused, .select.is-light select:active, .select.is-light select.is-active {
      box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25);
    }
    .select.is-dark:not(:hover)::after {
      border-color: #363636;
    }
    .select.is-dark select {
      border-color: #363636;
    }
    .select.is-dark select:hover, .select.is-dark select.is-hovered {
      border-color: #292929;
    }
    .select.is-dark select:focus, .select.is-dark select.is-focused, .select.is-dark select:active, .select.is-dark select.is-active {
      box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25);
    }
    .select.is-primary:not(:hover)::after {
      border-color: ' . $colors['primary'] . ';
    }
    .select.is-primary select {
      border-color: ' . $colors['primary'] . ';
    }
    .select.is-primary select:hover, .select.is-primary select.is-hovered {
      border-color: #9d9d9d;
    }
    .select.is-primary select:focus, .select.is-primary select.is-focused, .select.is-primary select:active, .select.is-primary select.is-active {
      box-shadow: 0 0 0 0.125em rgba(170, 170, 170, 0.25);
    }
    .select.is-link:not(:hover)::after {
      border-color: ' . $colors['complementary'] . ';
    }
    .select.is-link select {
      border-color: ' . $colors['complementary'] . ';
    }
    .select.is-link select:hover, .select.is-link select.is-hovered {
      border-color: #bfbfbf;
    }
    .select.is-link select:focus, .select.is-link select.is-focused, .select.is-link select:active, .select.is-link select.is-active {
      box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
    }
    .select.is-info:not(:hover)::after {
      border-color: ' . $colors['cyan'] . ';
    }
    .select.is-info select {
      border-color: ' . $colors['cyan'] . ';
    }
    .select.is-info select:hover, .select.is-info select.is-hovered {
      border-color: #4b6c70;
    }
    .select.is-info select:focus, .select.is-info select.is-focused, .select.is-info select:active, .select.is-info select.is-active {
      box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
    }
    .select.is-success:not(:hover)::after {
      border-color: ' . $colors['green'] . ';
    }
    .select.is-success select {
      border-color: ' . $colors['green'] . ';
    }
    .select.is-success select:hover, .select.is-success select.is-hovered {
      border-color: #5e9665;
    }
    .select.is-success select:focus, .select.is-success select.is-focused, .select.is-success select:active, .select.is-success select.is-active {
      box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
    }
    .select.is-warning:not(:hover)::after {
      border-color: ' . $colors['yellow'] . ';
    }
    .select.is-warning select {
      border-color: ' . $colors['yellow'] . ';
    }
    .select.is-warning select:hover, .select.is-warning select.is-hovered {
      border-color: #cac378;
    }
    .select.is-warning select:focus, .select.is-warning select.is-focused, .select.is-warning select:active, .select.is-warning select.is-active {
      box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
    }
    .select.is-danger:not(:hover)::after {
      border-color: ' . $colors['red'] . ';
    }
    .select.is-danger select {
      border-color: ' . $colors['red'] . ';
    }
    .select.is-danger select:hover, .select.is-danger select.is-hovered {
      border-color: #ca7b78;
    }
    .select.is-danger select:focus, .select.is-danger select.is-focused, .select.is-danger select:active, .select.is-danger select.is-active {
      box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
    }
    .select.is-lightblue:not(:hover)::after {
      border-color: ' . $colors['lightblue'] . ';
    }
    .select.is-lightblue select {
      border-color: ' . $colors['lightblue'] . ';
    }
    .select.is-lightblue select:hover, .select.is-lightblue select.is-hovered {
      border-color: #526678;
    }
    .select.is-lightblue select:focus, .select.is-lightblue select.is-focused, .select.is-lightblue select:active, .select.is-lightblue select.is-active {
      box-shadow: 0 0 0 0.125em rgba(92, 115, 135, 0.25);
    }
    .select.is-purple:not(:hover)::after {
      border-color: ' . $colors['purple'] . ';
    }
    .select.is-purple select {
      border-color: ' . $colors['purple'] . ';
    }
    .select.is-purple select:hover, .select.is-purple select.is-hovered {
      border-color: #69587f;
    }
    .select.is-purple select:focus, .select.is-purple select.is-focused, .select.is-purple select:active, .select.is-purple select.is-active {
      box-shadow: 0 0 0 0.125em rgba(117, 98, 142, 0.25);
    }
    .select.is-pink:not(:hover)::after {
      border-color: ' . $colors['pink'] . ';
    }
    .select.is-pink select {
      border-color: ' . $colors['pink'] . ';
    }
    .select.is-pink select:hover, .select.is-pink select.is-hovered {
      border-color: #ae6881;
    }
    .select.is-pink select:focus, .select.is-pink select.is-focused, .select.is-pink select:active, .select.is-pink select.is-active {
      box-shadow: 0 0 0 0.125em rgba(183, 121, 143, 0.25);
    }
    .select.is-blue:not(:hover)::after {
      border-color: ' . $colors['blue'] . ';
    }
    .select.is-blue select {
      border-color: ' . $colors['blue'] . ';
    }
    .select.is-blue select:hover, .select.is-blue select.is-hovered {
      border-color: #58617e;
    }
    .select.is-blue select:focus, .select.is-blue select.is-focused, .select.is-blue select:active, .select.is-blue select.is-active {
      box-shadow: 0 0 0 0.125em rgba(98, 109, 141, 0.25);
    }
    .select.is-orange:not(:hover)::after {
      border-color: ' . $colors['orange'] . ';
    }
    .select.is-orange select {
      border-color: ' . $colors['orange'] . ';
    }
    .select.is-orange select:hover, .select.is-orange select.is-hovered {
      border-color: #ca9e78;
    }
    .select.is-orange select:focus, .select.is-orange select.is-focused, .select.is-orange select:active, .select.is-orange select.is-active {
      box-shadow: 0 0 0 0.125em rgba(209, 171, 138, 0.25);
    }
    .select.is-red:not(:hover)::after {
      border-color: ' . $colors['red'] . ';
    }
    .select.is-red select {
      border-color: ' . $colors['red'] . ';
    }
    .select.is-red select:hover, .select.is-red select.is-hovered {
      border-color: #ca7b78;
    }
    .select.is-red select:focus, .select.is-red select.is-focused, .select.is-red select:active, .select.is-red select.is-active {
      box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
    }
    .select.is-green:not(:hover)::after {
      border-color: ' . $colors['green'] . ';
    }
    .select.is-green select {
      border-color: ' . $colors['green'] . ';
    }
    .select.is-green select:hover, .select.is-green select.is-hovered {
      border-color: #5e9665;
    }
    .select.is-green select:focus, .select.is-green select.is-focused, .select.is-green select:active, .select.is-green select.is-active {
      box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
    }
    .select.is-yellow:not(:hover)::after {
      border-color: ' . $colors['yellow'] . ';
    }
    .select.is-yellow select {
      border-color: ' . $colors['yellow'] . ';
    }
    .select.is-yellow select:hover, .select.is-yellow select.is-hovered {
      border-color: #cac378;
    }
    .select.is-yellow select:focus, .select.is-yellow select.is-focused, .select.is-yellow select:active, .select.is-yellow select.is-active {
      box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
    }
    .select.is-cyan:not(:hover)::after {
      border-color: ' . $colors['cyan'] . ';
    }
    .select.is-cyan select {
      border-color: ' . $colors['cyan'] . ';
    }
    .select.is-cyan select:hover, .select.is-cyan select.is-hovered {
      border-color: #4b6c70;
    }
    .select.is-cyan select:focus, .select.is-cyan select.is-focused, .select.is-cyan select:active, .select.is-cyan select.is-active {
      box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
    }
    .select.is-small {
      border-radius: 2px;
      font-size: 0.75rem;
    }
    .select.is-medium {
      font-size: 1.25rem;
    }
    .select.is-large {
      font-size: 1.5rem;
    }
    .select.is-disabled::after {
      border-color: ' . $colors['white'] . ';
    }
    .select.is-fullwidth {
      width: 100%;
    }
    .select.is-fullwidth select {
      width: 100%;
    }
    .select.is-loading::after {
      margin-top: 0;
      position: absolute;
      right: 0.625em;
      top: 0.625em;
      transform: none;
    }
    .select.is-loading.is-small:after {
      font-size: 0.75rem;
    }
    .select.is-loading.is-medium:after {
      font-size: 1.25rem;
    }
    .select.is-loading.is-large:after {
      font-size: 1.5rem;
    }
    
    .file {
      align-items: stretch;
      display: flex;
      justify-content: flex-start;
      position: relative;
    }
    .file.is-white .file-cta {
      background-color: ' . $colors['white'] . ';
      border-color: transparent;
      color: #0a0a0a;
    }
    .file.is-white:hover .file-cta, .file.is-white.is-hovered .file-cta {
      background-color: #f9f9f9;
      border-color: transparent;
      color: #0a0a0a;
    }
    .file.is-white:focus .file-cta, .file.is-white.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(255, 255, 255, 0.25);
      color: #0a0a0a;
    }
    .file.is-white:active .file-cta, .file.is-white.is-active .file-cta {
      background-color: #f2f2f2;
      border-color: transparent;
      color: #0a0a0a;
    }
    .file.is-black .file-cta {
      background-color: #0a0a0a;
      border-color: transparent;
      color: ' . $colors['white'] . ';
    }
    .file.is-black:hover .file-cta, .file.is-black.is-hovered .file-cta {
      background-color: #040404;
      border-color: transparent;
      color: ' . $colors['white'] . ';
    }
    .file.is-black:focus .file-cta, .file.is-black.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(10, 10, 10, 0.25);
      color: ' . $colors['white'] . ';
    }
    .file.is-black:active .file-cta, .file.is-black.is-active .file-cta {
      background-color: black;
      border-color: transparent;
      color: ' . $colors['white'] . ';
    }
    .file.is-light .file-cta {
      background-color: whitesmoke;
      border-color: transparent;
      color: #363636;
    }
    .file.is-light:hover .file-cta, .file.is-light.is-hovered .file-cta {
      background-color: #eeeeee;
      border-color: transparent;
      color: #363636;
    }
    .file.is-light:focus .file-cta, .file.is-light.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(245, 245, 245, 0.25);
      color: #363636;
    }
    .file.is-light:active .file-cta, .file.is-light.is-active .file-cta {
      background-color: #e8e8e8;
      border-color: transparent;
      color: #363636;
    }
    .file.is-dark .file-cta {
      background-color: #363636;
      border-color: transparent;
      color: whitesmoke;
    }
    .file.is-dark:hover .file-cta, .file.is-dark.is-hovered .file-cta {
      background-color: #2f2f2f;
      border-color: transparent;
      color: whitesmoke;
    }
    .file.is-dark:focus .file-cta, .file.is-dark.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(54, 54, 54, 0.25);
      color: whitesmoke;
    }
    .file.is-dark:active .file-cta, .file.is-dark.is-active .file-cta {
      background-color: #292929;
      border-color: transparent;
      color: whitesmoke;
    }
    .file.is-primary .file-cta {
      background-color: ' . $colors['primary'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-primary:hover .file-cta, .file.is-primary.is-hovered .file-cta {
      background-color: #a4a4a4;
      border-color: transparent;
      color: #fff;
    }
    .file.is-primary:focus .file-cta, .file.is-primary.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(170, 170, 170, 0.25);
      color: #fff;
    }
    .file.is-primary:active .file-cta, .file.is-primary.is-active .file-cta {
      background-color: #9d9d9d;
      border-color: transparent;
      color: #fff;
    }
    .file.is-link .file-cta {
      background-color: ' . $colors['complementary'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-link:hover .file-cta, .file.is-link.is-hovered .file-cta {
      background-color: #c6c6c6;
      border-color: transparent;
      color: #fff;
    }
    .file.is-link:focus .file-cta, .file.is-link.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(204, 204, 204, 0.25);
      color: #fff;
    }
    .file.is-link:active .file-cta, .file.is-link.is-active .file-cta {
      background-color: #bfbfbf;
      border-color: transparent;
      color: #fff;
    }
    .file.is-info .file-cta {
      background-color: ' . $colors['cyan'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-info:hover .file-cta, .file.is-info.is-hovered .file-cta {
      background-color: #507477;
      border-color: transparent;
      color: #fff;
    }
    .file.is-info:focus .file-cta, .file.is-info.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(85, 123, 127, 0.25);
      color: #fff;
    }
    .file.is-info:active .file-cta, .file.is-info.is-active .file-cta {
      background-color: #4b6c70;
      border-color: transparent;
      color: #fff;
    }
    .file.is-success .file-cta {
      background-color: ' . $colors['green'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-success:hover .file-cta, .file.is-success.is-hovered .file-cta {
      background-color: #639d6b;
      border-color: transparent;
      color: #fff;
    }
    .file.is-success:focus .file-cta, .file.is-success.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(107, 162, 114, 0.25);
      color: #fff;
    }
    .file.is-success:active .file-cta, .file.is-success.is-active .file-cta {
      background-color: #5e9665;
      border-color: transparent;
      color: #fff;
    }
    .file.is-warning .file-cta {
      background-color: ' . $colors['yellow'] . ';
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .file.is-warning:hover .file-cta, .file.is-warning.is-hovered .file-cta {
      background-color: #cdc781;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .file.is-warning:focus .file-cta, .file.is-warning.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(209, 203, 138, 0.25);
      color: rgba(0, 0, 0, 0.7);
    }
    .file.is-warning:active .file-cta, .file.is-warning.is-active .file-cta {
      background-color: #cac378;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .file.is-danger .file-cta {
      background-color: ' . $colors['red'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-danger:hover .file-cta, .file.is-danger.is-hovered .file-cta {
      background-color: #cd8481;
      border-color: transparent;
      color: #fff;
    }
    .file.is-danger:focus .file-cta, .file.is-danger.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(209, 141, 138, 0.25);
      color: #fff;
    }
    .file.is-danger:active .file-cta, .file.is-danger.is-active .file-cta {
      background-color: #ca7b78;
      border-color: transparent;
      color: #fff;
    }
    .file.is-lightblue .file-cta {
      background-color: ' . $colors['lightblue'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-lightblue:hover .file-cta, .file.is-lightblue.is-hovered .file-cta {
      background-color: #576d7f;
      border-color: transparent;
      color: #fff;
    }
    .file.is-lightblue:focus .file-cta, .file.is-lightblue.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(92, 115, 135, 0.25);
      color: #fff;
    }
    .file.is-lightblue:active .file-cta, .file.is-lightblue.is-active .file-cta {
      background-color: #526678;
      border-color: transparent;
      color: #fff;
    }
    .file.is-purple .file-cta {
      background-color: ' . $colors['purple'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-purple:hover .file-cta, .file.is-purple.is-hovered .file-cta {
      background-color: #6f5d86;
      border-color: transparent;
      color: #fff;
    }
    .file.is-purple:focus .file-cta, .file.is-purple.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(117, 98, 142, 0.25);
      color: #fff;
    }
    .file.is-purple:active .file-cta, .file.is-purple.is-active .file-cta {
      background-color: #69587f;
      border-color: transparent;
      color: #fff;
    }
    .file.is-pink .file-cta {
      background-color: ' . $colors['pink'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-pink:hover .file-cta, .file.is-pink.is-hovered .file-cta {
      background-color: #b37188;
      border-color: transparent;
      color: #fff;
    }
    .file.is-pink:focus .file-cta, .file.is-pink.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(183, 121, 143, 0.25);
      color: #fff;
    }
    .file.is-pink:active .file-cta, .file.is-pink.is-active .file-cta {
      background-color: #ae6881;
      border-color: transparent;
      color: #fff;
    }
    .file.is-blue .file-cta {
      background-color: ' . $colors['blue'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-blue:hover .file-cta, .file.is-blue.is-hovered .file-cta {
      background-color: #5d6785;
      border-color: transparent;
      color: #fff;
    }
    .file.is-blue:focus .file-cta, .file.is-blue.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(98, 109, 141, 0.25);
      color: #fff;
    }
    .file.is-blue:active .file-cta, .file.is-blue.is-active .file-cta {
      background-color: #58617e;
      border-color: transparent;
      color: #fff;
    }
    .file.is-orange .file-cta {
      background-color: ' . $colors['orange'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-orange:hover .file-cta, .file.is-orange.is-hovered .file-cta {
      background-color: #cda481;
      border-color: transparent;
      color: #fff;
    }
    .file.is-orange:focus .file-cta, .file.is-orange.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(209, 171, 138, 0.25);
      color: #fff;
    }
    .file.is-orange:active .file-cta, .file.is-orange.is-active .file-cta {
      background-color: #ca9e78;
      border-color: transparent;
      color: #fff;
    }
    .file.is-red .file-cta {
      background-color: ' . $colors['red'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-red:hover .file-cta, .file.is-red.is-hovered .file-cta {
      background-color: #cd8481;
      border-color: transparent;
      color: #fff;
    }
    .file.is-red:focus .file-cta, .file.is-red.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(209, 141, 138, 0.25);
      color: #fff;
    }
    .file.is-red:active .file-cta, .file.is-red.is-active .file-cta {
      background-color: #ca7b78;
      border-color: transparent;
      color: #fff;
    }
    .file.is-green .file-cta {
      background-color: ' . $colors['green'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-green:hover .file-cta, .file.is-green.is-hovered .file-cta {
      background-color: #639d6b;
      border-color: transparent;
      color: #fff;
    }
    .file.is-green:focus .file-cta, .file.is-green.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(107, 162, 114, 0.25);
      color: #fff;
    }
    .file.is-green:active .file-cta, .file.is-green.is-active .file-cta {
      background-color: #5e9665;
      border-color: transparent;
      color: #fff;
    }
    .file.is-yellow .file-cta {
      background-color: ' . $colors['yellow'] . ';
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .file.is-yellow:hover .file-cta, .file.is-yellow.is-hovered .file-cta {
      background-color: #cdc781;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .file.is-yellow:focus .file-cta, .file.is-yellow.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(209, 203, 138, 0.25);
      color: rgba(0, 0, 0, 0.7);
    }
    .file.is-yellow:active .file-cta, .file.is-yellow.is-active .file-cta {
      background-color: #cac378;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7);
    }
    .file.is-cyan .file-cta {
      background-color: ' . $colors['cyan'] . ';
      border-color: transparent;
      color: #fff;
    }
    .file.is-cyan:hover .file-cta, .file.is-cyan.is-hovered .file-cta {
      background-color: #507477;
      border-color: transparent;
      color: #fff;
    }
    .file.is-cyan:focus .file-cta, .file.is-cyan.is-focused .file-cta {
      border-color: transparent;
      box-shadow: 0 0 0.5em rgba(85, 123, 127, 0.25);
      color: #fff;
    }
    .file.is-cyan:active .file-cta, .file.is-cyan.is-active .file-cta {
      background-color: #4b6c70;
      border-color: transparent;
      color: #fff;
    }
    .file.is-small {
      font-size: 0.75rem;
    }
    .file.is-medium {
      font-size: 1.25rem;
    }
    .file.is-medium .file-icon .fa {
      font-size: 21px;
    }
    .file.is-large {
      font-size: 1.5rem;
    }
    .file.is-large .file-icon .fa {
      font-size: 28px;
    }
    .file.has-name .file-cta {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0;
    }
    .file.has-name .file-name {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
    }
    .file.has-name.is-empty .file-cta {
      border-radius: 4px;
    }
    .file.has-name.is-empty .file-name {
      display: none;
    }
    .file.is-boxed .file-label {
      flex-direction: column;
    }
    .file.is-boxed .file-cta {
      flex-direction: column;
      height: auto;
      padding: 1em 3em;
    }
    .file.is-boxed .file-name {
      border-width: 0 1px 1px;
    }
    .file.is-boxed .file-icon {
      height: 1.5em;
      width: 1.5em;
    }
    .file.is-boxed .file-icon .fa {
      font-size: 21px;
    }
    .file.is-boxed.is-small .file-icon .fa {
      font-size: 14px;
    }
    .file.is-boxed.is-medium .file-icon .fa {
      font-size: 28px;
    }
    .file.is-boxed.is-large .file-icon .fa {
      font-size: 35px;
    }
    .file.is-boxed.has-name .file-cta {
      border-radius: 4px 4px 0 0;
    }
    .file.is-boxed.has-name .file-name {
      border-radius: 0 0 4px 4px;
      border-width: 0 1px 1px;
    }
    .file.is-centered {
      justify-content: center;
    }
    .file.is-fullwidth .file-label {
      width: 100%;
    }
    .file.is-fullwidth .file-name {
      flex-grow: 1;
      max-width: none;
    }
    .file.is-right {
      justify-content: flex-end;
    }
    .file.is-right .file-cta {
      border-radius: 0 4px 4px 0;
    }
    .file.is-right .file-name {
      border-radius: 4px 0 0 4px;
      border-width: 1px 0 1px 1px;
      order: -1;
    }
    
    .file-label {
      align-items: stretch;
      display: flex;
      cursor: pointer;
      justify-content: flex-start;
      overflow: hidden;
      position: relative;
    }
    .file-label:hover .file-cta {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.02)) .';
      color: #8a92a9;
    }
    .file-label:hover .file-name {
      border-color: #d5d5d5;
    }
    .file-label:active .file-cta {
      background-color: ' . $colors['edark'] . ';
      color: #363636;
    }
    .file-label:active .file-name {
      border-color: #cfcfcf;
    }
    
    .file-input {
      height: 100%;
      left: 0;
      opacity: 0;
      outline: none;
      position: absolute;
      top: 0;
      width: 100%;
    }
    
    .file-cta,
    .file-name {
      border-color: ' . $colors['edark'] . ';
      border-radius: 4px;
      font-size: 1em;
      padding-left: 1em;
      padding-right: 1em;
      white-space: nowrap;
    }
    
    .file-cta {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      color: ' . $colors['white'] . ';
    }
    
    .file-name {
      border-color: #dbdbdb;
      border-style: solid;
      border-width: 1px 1px 1px 0;
      display: block;
      max-width: 16em;
      overflow: hidden;
      text-align: left;
      text-overflow: ellipsis;
    }
    
    .file-icon {
      align-items: center;
      display: flex;
      height: 1em;
      justify-content: center;
      margin-right: 0.5em;
      width: 1em;
    }
    .file-icon .fa {
      font-size: 14px;
    }
    
    .label {
      color: #363636;
      display: block;
      font-size: 1rem;
      font-weight: 700;
    }
    .label:not(:last-child) {
      margin-bottom: 0.5em;
    }
    .label.is-small {
      font-size: 0.75rem;
    }
    .label.is-medium {
      font-size: 1.25rem;
    }
    .label.is-large {
      font-size: 1.5rem;
    }
    
    .help {
      display: block;
      font-size: 0.75rem;
      margin-top: 0.25rem;
    }
    .help.is-white {
      color: ' . $colors['white'] . ';
    }
    .help.is-black {
      color: #0a0a0a;
    }
    .help.is-light {
      color: whitesmoke;
    }
    .help.is-dark {
      color: #363636;
    }
    .help.is-primary {
      color: ' . $colors['primary'] . ';
    }
    .help.is-link {
      color: ' . $colors['complementary'] . ';
    }
    .help.is-info {
      color: ' . $colors['cyan'] . ';
    }
    .help.is-success {
      color: ' . $colors['green'] . ';
    }
    .help.is-warning {
      color: ' . $colors['yellow'] . ';
    }
    .help.is-danger {
      color: ' . $colors['red'] . ';
    }
    .help.is-lightblue {
      color: ' . $colors['lightblue'] . ';
    }
    .help.is-purple {
      color: ' . $colors['purple'] . ';
    }
    .help.is-pink {
      color: ' . $colors['pink'] . ';
    }
    .help.is-blue {
      color: ' . $colors['blue'] . ';
    }
    .help.is-orange {
      color: ' . $colors['orange'] . ';
    }
    .help.is-red {
      color: ' . $colors['red'] . ';
    }
    .help.is-green {
      color: ' . $colors['green'] . ';
    }
    .help.is-yellow {
      color: ' . $colors['yellow'] . ';
    }
    .help.is-cyan {
      color: ' . $colors['cyan'] . ';
    }
    
    .field:not(:last-child) {
      margin-bottom: 0.75rem;
    }
    .field.has-addons {
      display: flex;
      justify-content: flex-start;
    }
    .field.has-addons .control:not(:last-child) {
      margin-right: -1px;
    }
    .field.has-addons .control:not(:first-child):not(:last-child) .button,
    .field.has-addons .control:not(:first-child):not(:last-child) .input,
    .field.has-addons .control:not(:first-child):not(:last-child) .select select {
      border-radius: 0;
    }
    .field.has-addons .control:first-child:not(:only-child) .button,
    .field.has-addons .control:first-child:not(:only-child) .input,
    .field.has-addons .control:first-child:not(:only-child) .select select {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0;
    }
    .field.has-addons .control:last-child:not(:only-child) .button,
    .field.has-addons .control:last-child:not(:only-child) .input,
    .field.has-addons .control:last-child:not(:only-child) .select select {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
    }
    .field.has-addons .control .button:not([disabled]):hover, .field.has-addons .control .button:not([disabled]).is-hovered,
    .field.has-addons .control .input:not([disabled]):hover,
    .field.has-addons .control .input:not([disabled]).is-hovered,
    .field.has-addons .control .select select:not([disabled]):hover,
    .field.has-addons .control .select select:not([disabled]).is-hovered {
      z-index: 2;
    }
    .field.has-addons .control .button:not([disabled]):focus, .field.has-addons .control .button:not([disabled]).is-focused, .field.has-addons .control .button:not([disabled]):active, .field.has-addons .control .button:not([disabled]).is-active,
    .field.has-addons .control .input:not([disabled]):focus,
    .field.has-addons .control .input:not([disabled]).is-focused,
    .field.has-addons .control .input:not([disabled]):active,
    .field.has-addons .control .input:not([disabled]).is-active,
    .field.has-addons .control .select select:not([disabled]):focus,
    .field.has-addons .control .select select:not([disabled]).is-focused,
    .field.has-addons .control .select select:not([disabled]):active,
    .field.has-addons .control .select select:not([disabled]).is-active {
      z-index: 3;
    }
    .field.has-addons .control .button:not([disabled]):focus:hover, .field.has-addons .control .button:not([disabled]).is-focused:hover, .field.has-addons .control .button:not([disabled]):active:hover, .field.has-addons .control .button:not([disabled]).is-active:hover,
    .field.has-addons .control .input:not([disabled]):focus:hover,
    .field.has-addons .control .input:not([disabled]).is-focused:hover,
    .field.has-addons .control .input:not([disabled]):active:hover,
    .field.has-addons .control .input:not([disabled]).is-active:hover,
    .field.has-addons .control .select select:not([disabled]):focus:hover,
    .field.has-addons .control .select select:not([disabled]).is-focused:hover,
    .field.has-addons .control .select select:not([disabled]):active:hover,
    .field.has-addons .control .select select:not([disabled]).is-active:hover {
      z-index: 4;
    }
    .field.has-addons .control.is-expanded {
      flex-grow: 1;
      flex-shrink: 1;
    }
    .field.has-addons.has-addons-centered {
      justify-content: center;
    }
    .field.has-addons.has-addons-right {
      justify-content: flex-end;
    }
    .field.has-addons.has-addons-fullwidth .control {
      flex-grow: 1;
      flex-shrink: 0;
    }
    .field.is-grouped {
      display: flex;
      justify-content: flex-start;
    }
    .field.is-grouped > .control {
      flex-shrink: 0;
    }
    .field.is-grouped > .control:not(:last-child) {
      margin-bottom: 0;
      margin-right: 0.75rem;
    }
    .field.is-grouped > .control.is-expanded {
      flex-grow: 1;
      flex-shrink: 1;
    }
    .field.is-grouped.is-grouped-centered {
      justify-content: center;
    }
    .field.is-grouped.is-grouped-right {
      justify-content: flex-end;
    }
    .field.is-grouped.is-grouped-multiline {
      flex-wrap: wrap;
    }
    .field.is-grouped.is-grouped-multiline > .control:last-child, .field.is-grouped.is-grouped-multiline > .control:not(:last-child) {
      margin-bottom: 0.75rem;
    }
    .field.is-grouped.is-grouped-multiline:last-child {
      margin-bottom: -0.75rem;
    }
    .field.is-grouped.is-grouped-multiline:not(:last-child) {
      margin-bottom: 0;
    }
    @media screen and (min-width: 769px), print {
      .field.is-horizontal {
        display: flex;
      }
    }
    
    .field-label .label {
      font-size: inherit;
    }
    @media screen and (max-width: 768px) {
      .field-label {
        margin-bottom: 0.5rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .field-label {
        flex-basis: 0;
        flex-grow: 1;
        flex-shrink: 0;
        margin-right: 1.5rem;
        text-align: right;
      }
      .field-label.is-small {
        font-size: 0.75rem;
        padding-top: 0.375em;
      }
      .field-label.is-normal {
        padding-top: 0.375em;
      }
      .field-label.is-medium {
        font-size: 1.25rem;
        padding-top: 0.375em;
      }
      .field-label.is-large {
        font-size: 1.5rem;
        padding-top: 0.375em;
      }
    }
    
    .field-body .field .field {
      margin-bottom: 0;
    }
    @media screen and (min-width: 769px), print {
      .field-body {
        display: flex;
        flex-basis: 0;
        flex-grow: 5;
        flex-shrink: 1;
      }
      .field-body .field {
        margin-bottom: 0;
      }
      .field-body > .field {
        flex-shrink: 1;
      }
      .field-body > .field:not(.is-narrow) {
        flex-grow: 1;
      }
      .field-body > .field:not(:last-child) {
        margin-right: 0.75rem;
      }
    }
    
    .control {
      box-sizing: border-box;
      clear: both;
      font-size: 1rem;
      position: relative;
      text-align: left;
    }
    .control.has-icons-left .input:focus ~ .icon,
    .control.has-icons-left .select:focus ~ .icon, .control.has-icons-right .input:focus ~ .icon,
    .control.has-icons-right .select:focus ~ .icon {
      color: #7a7a7a;
    }
    .control.has-icons-left .input.is-small ~ .icon,
    .control.has-icons-left .select.is-small ~ .icon, .control.has-icons-right .input.is-small ~ .icon,
    .control.has-icons-right .select.is-small ~ .icon {
      font-size: 0.75rem;
    }
    .control.has-icons-left .input.is-medium ~ .icon,
    .control.has-icons-left .select.is-medium ~ .icon, .control.has-icons-right .input.is-medium ~ .icon,
    .control.has-icons-right .select.is-medium ~ .icon {
      font-size: 1.25rem;
    }
    .control.has-icons-left .input.is-large ~ .icon,
    .control.has-icons-left .select.is-large ~ .icon, .control.has-icons-right .input.is-large ~ .icon,
    .control.has-icons-right .select.is-large ~ .icon {
      font-size: 1.5rem;
    }
    .control.has-icons-left .icon, .control.has-icons-right .icon {
      color: #dbdbdb;
      height: 2.25em;
      pointer-events: none;
      position: absolute;
      top: 0;
      width: 2.25em;
      z-index: 4;
    }
    .control.has-icons-left .input,
    .control.has-icons-left .select select {
      padding-left: 2.25em;
    }
    .control.has-icons-left .icon.is-left {
      left: 0;
    }
    .control.has-icons-right .input,
    .control.has-icons-right .select select {
      padding-right: 2.25em;
    }
    .control.has-icons-right .icon.is-right {
      right: 0;
    }
    .control.is-loading::after {
      position: absolute !important;
      right: 0.625em;
      top: 0.625em;
      z-index: 4;
    }
    .control.is-loading.is-small:after {
      font-size: 0.75rem;
    }
    .control.is-loading.is-medium:after {
      font-size: 1.25rem;
    }
    .control.is-loading.is-large:after {
      font-size: 1.5rem;
    }
    
    .breadcrumb {
      font-size: 1rem;
      white-space: nowrap;
    }
    .breadcrumb a {
      align-items: center;
      color: ' . $colors['complementary'] . ';
      display: flex;
      justify-content: center;
      padding: 0 0.75em;
    }
    .breadcrumb a:hover {
      color: #DDDDDD;
    }
    .breadcrumb li {
      align-items: center;
      display: flex;
    }
    .breadcrumb li:first-child a {
      padding-left: 0;
    }
    .breadcrumb li.is-active a {
      color: white;
      cursor: default;
      pointer-events: none;
    }
    .breadcrumb li + li::before {
      color: #b5b5b5;
      content: "/";
    }
    .breadcrumb ul,
    .breadcrumb ol {
      align-items: flex-start;
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }
    .breadcrumb .icon:first-child {
      margin-right: 0.5em;
    }
    .breadcrumb .icon:last-child {
      margin-left: 0.5em;
    }
    .breadcrumb.is-centered ol,
    .breadcrumb.is-centered ul {
      justify-content: center;
    }
    .breadcrumb.is-right ol,
    .breadcrumb.is-right ul {
      justify-content: flex-end;
    }
    .breadcrumb.is-small {
      font-size: 0.75rem;
    }
    .breadcrumb.is-medium {
      font-size: 1.25rem;
    }
    .breadcrumb.is-large {
      font-size: 1.5rem;
    }
    .breadcrumb.has-arrow-separator li + li::before {
      content: "→";
    }
    .breadcrumb.has-bullet-separator li + li::before {
      content: "•";
    }
    .breadcrumb.has-dot-separator li + li::before {
      content: "·";
    }
    .breadcrumb.has-succeeds-separator li + li::before {
      content: "≻";
    }
    
    .card {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
      color: ' . $colors['white'] . ';
      max-width: 100%;
      position: relative;
    }
    
    .card-header {
      background-color: transparent;
      align-items: stretch;
      box-shadow: 0 1px 2px rgba(10, 10, 10, 0.1);
      display: flex;
    }
    
    .card-header-title {
      align-items: center;
      color: white;
      display: flex;
      flex-grow: 1;
      font-weight: 700;
      padding: 0.75rem;
    }
    .card-header-title.is-centered {
      justify-content: center;
    }
    
    .card-header-icon {
      align-items: center;
      cursor: pointer;
      display: flex;
      justify-content: center;
      padding: 0.75rem;
    }
    
    .card-image {
      display: block;
      position: relative;
    }
    
    .card-content {
      background-color: transparent;
      padding: 1.5rem;
    }
    
    .card-footer {
      background-color: transparent;
      border-top: 1px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.12)) . ';
      align-items: stretch;
      display: flex;
    }
    
    .card-footer-item {
      align-items: center;
      display: flex;
      flex-basis: 0;
      flex-grow: 1;
      flex-shrink: 0;
      justify-content: center;
      padding: 0.75rem;
    }
    .card-footer-item:not(:last-child) {
      border-right: 1px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.12)) . ';
    }
    
    .card .media:not(:last-child) {
      margin-bottom: 1.5rem;
    }
    
    .dropdown {
      display: inline-flex;
      position: relative;
      vertical-align: top;
    }
    .dropdown.is-active .dropdown-menu, .dropdown.is-hoverable:hover .dropdown-menu {
      display: block;
    }
    .dropdown.is-right .dropdown-menu {
      left: auto;
      right: 0;
    }
    .dropdown.is-up .dropdown-menu {
      bottom: 100%;
      padding-bottom: 4px;
      padding-top: initial;
      top: auto;
    }
    
    .dropdown-menu {
      display: none;
      left: 0;
      min-width: 12rem;
      padding-top: 4px;
      position: absolute;
      top: 100%;
      z-index: 20;
    }
    
    .dropdown-content {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      border-radius: 0.5rem;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
    
    .dropdown-item {
      color: #e6e6e6;
      display: block;
      font-size: 0.875rem;
      line-height: 1.5;
      padding: 0.375rem 1rem;
      position: relative;
    }
    
    a.dropdown-item,
    button.dropdown-item {
      padding-right: 3rem;
      text-align: left;
      white-space: nowrap;
      width: 100%;
    }
    a.dropdown-item:hover,
    button.dropdown-item:hover {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      color: #e6e6e6;
    }
    a.dropdown-item.is-active,
    button.dropdown-item.is-active {
      background-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    
    .dropdown-divider {
      background-color: #363b4a;
      border: none;
      display: block;
      height: 1px;
      margin: 0.5rem 0;
    }
    
    .level {
      align-items: center;
      justify-content: space-between;
    }
    .level code {
      border-radius: 4px;
    }
    .level img {
      display: inline-block;
      vertical-align: top;
    }
    .level.is-mobile {
      display: flex;
    }
    .level.is-mobile .level-left,
    .level.is-mobile .level-right {
      display: flex;
    }
    .level.is-mobile .level-left + .level-right {
      margin-top: 0;
    }
    .level.is-mobile .level-item:not(:last-child) {
      margin-bottom: 0;
      margin-right: 0.75rem;
    }
    .level.is-mobile .level-item:not(.is-narrow) {
      flex-grow: 1;
    }
    @media screen and (min-width: 769px), print {
      .level {
        display: flex;
      }
      .level > .level-item:not(.is-narrow) {
        flex-grow: 1;
      }
    }
    
    .level-item {
      align-items: center;
      display: flex;
      flex-basis: auto;
      flex-grow: 0;
      flex-shrink: 0;
      justify-content: center;
    }
    .level-item .title,
    .level-item .subtitle {
      margin-bottom: 0;
    }
    @media screen and (max-width: 768px) {
      .level-item:not(:last-child) {
        margin-bottom: 0.75rem;
      }
    }
    
    .level-left,
    .level-right {
      flex-basis: auto;
      flex-grow: 0;
      flex-shrink: 0;
    }
    .level-left .level-item.is-flexible,
    .level-right .level-item.is-flexible {
      flex-grow: 1;
    }
    @media screen and (min-width: 769px), print {
      .level-left .level-item:not(:last-child),
    .level-right .level-item:not(:last-child) {
        margin-right: 0.75rem;
      }
    }
    
    .level-left {
      align-items: center;
      justify-content: flex-start;
    }
    @media screen and (max-width: 768px) {
      .level-left + .level-right {
        margin-top: 1.5rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .level-left {
        display: flex;
      }
    }
    
    .level-right {
      align-items: center;
      justify-content: flex-end;
    }
    @media screen and (min-width: 769px), print {
      .level-right {
        display: flex;
      }
    }
    
    .list {
      background-color: ' . $colors['white'] . ';
      border-radius: 4px;
      box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
    }
    
    .list-item {
      display: block;
      padding: 0.5em 1em;
    }
    .list-item:not(a) {
      color: ' . $colors['white'] . ';
    }
    .list-item:first-child {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
    }
    .list-item:last-child {
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
    }
    .list-item:not(:last-child) {
      border-bottom: 1px solid #dbdbdb;
    }
    .list-item.is-active {
      background-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    
    a.list-item {
      background-color: whitesmoke;
      cursor: pointer;
    }
    
    .media {
      align-items: flex-start;
      display: flex;
      text-align: left;
    }
    .media .content:not(:last-child) {
      margin-bottom: 0.75rem;
    }
    .media .media {
      border-top: 1px solid rgba(219, 219, 219, 0.5);
      display: flex;
      padding-top: 0.75rem;
    }
    .media .media .content:not(:last-child),
    .media .media .control:not(:last-child) {
      margin-bottom: 0.5rem;
    }
    .media .media .media {
      padding-top: 0.5rem;
    }
    .media .media .media + .media {
      margin-top: 0.5rem;
    }
    .media + .media {
      border-top: 1px solid rgba(219, 219, 219, 0.5);
      margin-top: 1rem;
      padding-top: 1rem;
    }
    .media.is-large + .media {
      margin-top: 1.5rem;
      padding-top: 1.5rem;
    }
    
    .media-left,
    .media-right {
      flex-basis: auto;
      flex-grow: 0;
      flex-shrink: 0;
    }
    
    .media-left {
      margin-right: 1rem;
    }
    
    .media-right {
      margin-left: 1rem;
    }
    
    .media-content {
      flex-basis: auto;
      flex-grow: 1;
      flex-shrink: 1;
      text-align: left;
    }
    
    @media screen and (max-width: 768px) {
      .media-content {
        overflow-x: auto;
      }
    }
    .menu {
      font-size: 1rem;
    }
    .menu.is-small {
      font-size: 0.75rem;
    }
    .menu.is-medium {
      font-size: 1.25rem;
    }
    .menu.is-large {
      font-size: 1.5rem;
    }
    
    .menu-list {
      line-height: 1.25;
    }
    .menu-list a {
      border-radius: 0.5rem;
      color: ' . $colors['white'] . ';
      display: block;
      padding: 0.5em 0.75em;
    }
    .menu-list a:hover {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      color: white;
    }
    .menu-list a.is-active {
      background-color: ' . $colors['blue'] . ';
      color: #fff;
    }
    .menu-list li ul {
      border-left: 1px solid #dbdbdb;
      margin: 0.75em;
      padding-left: 0.75em;
    }
    
    .menu-label {
      color: ' . $colors['white'] . ';
      font-size: 0.75em;
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }
    .menu-label:not(:first-child) {
      margin-top: 1em;
    }
    .menu-label:not(:last-child) {
      margin-bottom: 1em;
    }
    
    .message {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
      border-radius: 0.5rem;
      font-size: 1rem;
    }
    .message strong {
      color: currentColor;
    }
    .message a:not(.button):not(.tag):not(.dropdown-item) {
      color: currentColor;
      text-decoration: underline;
    }
    .message.is-small {
      font-size: 0.75rem;
    }
    .message.is-medium {
      font-size: 1.25rem;
    }
    .message.is-large {
      font-size: 1.5rem;
    }
    .message.is-white {
      background-color: white;
    }
    .message.is-white .message-header {
      background-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .message.is-white .message-body {
      border-color: ' . $colors['white'] . ';
      color: #4d4d4d;
    }
    .message.is-black {
      background-color: #fafafa;
    }
    .message.is-black .message-header {
      background-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .message.is-black .message-body {
      border-color: #0a0a0a;
      color: #0a0a0a;
    }
    .message.is-light {
      background-color: #fafafa;
    }
    .message.is-light .message-header {
      background-color: whitesmoke;
      color: #363636;
    }
    .message.is-light .message-body {
      border-color: whitesmoke;
      color: #4f4f4f;
    }
    .message.is-dark {
      background-color: #fafafa;
    }
    .message.is-dark .message-header {
      background-color: #363636;
      color: whitesmoke;
    }
    .message.is-dark .message-body {
      border-color: #363636;
      color: #2a2a2a;
    }
    .message.is-primary {
      background-color: #fafafa;
    }
    .message.is-primary .message-header {
      background-color: ' . $colors['primary'] . ';
      color: #fff;
    }
    .message.is-primary .message-body {
      border-color: ' . $colors['primary'] . ';
      color: #565656;
    }
    .message.is-link {
      background-color: #fafafa;
    }
    .message.is-link .message-header {
      background-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    .message.is-link .message-body {
      border-color: ' . $colors['complementary'] . ';
      color: #575757;
    }
    .message.is-info {
      background-color: #f9fbfb;
    }
    .message.is-info .message-header {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .message.is-info .message-body {
      border-color: ' . $colors['cyan'] . ';
      color: #384748;
    }
    .message.is-success {
      background-color: #f9fbf9;
    }
    .message.is-success .message-header {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .message.is-success .message-body {
      border-color: ' . $colors['green'] . ';
      color: #3d4d3f;
    }
    .message.is-warning {
      background-color: #fcfcf8;
    }
    .message.is-warning .message-header {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .message.is-warning .message-body {
      border-color: ' . $colors['yellow'] . ';
      color: #4b482d;
    }
    .message.is-danger {
      background-color: #fcf8f8;
    }
    .message.is-danger .message-header {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .message.is-danger .message-body {
      border-color: ' . $colors['red'] . ';
      color: #854845;
    }
    .message.is-lightblue {
      background-color: #f9fafb;
    }
    .message.is-lightblue .message-header {
      background-color: ' . $colors['lightblue'] . ';
      color: #fff;
    }
    .message.is-lightblue .message-body {
      border-color: ' . $colors['lightblue'] . ';
      color: #414b53;
    }
    .message.is-purple {
      background-color: #faf9fb;
    }
    .message.is-purple .message-header {
      background-color: ' . $colors['purple'] . ';
      color: #fff;
    }
    .message.is-purple .message-body {
      border-color: ' . $colors['purple'] . ';
      color: #534a5f;
    }
    .message.is-pink {
      background-color: #fbf8f9;
    }
    .message.is-pink .message-header {
      background-color: ' . $colors['pink'] . ';
      color: #fff;
    }
    .message.is-pink .message-body {
      border-color: ' . $colors['pink'] . ';
      color: #734c59;
    }
    .message.is-blue {
      background-color: #f9f9fb;
    }
    .message.is-blue .message-header {
      background-color: ' . $colors['blue'] . ';
      color: #fff;
    }
    .message.is-blue .message-body {
      border-color: ' . $colors['blue'] . ';
      color: #484d5c;
    }
    .message.is-orange {
      background-color: #fcfaf8;
    }
    .message.is-orange .message-header {
      background-color: ' . $colors['orange'] . ';
      color: #fff;
    }
    .message.is-orange .message-body {
      border-color: ' . $colors['orange'] . ';
      color: #6a513b;
    }
    .message.is-red {
      background-color: #fcf8f8;
    }
    .message.is-red .message-header {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .message.is-red .message-body {
      border-color: ' . $colors['red'] . ';
      color: #854845;
    }
    .message.is-green {
      background-color: #f9fbf9;
    }
    .message.is-green .message-header {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .message.is-green .message-body {
      border-color: ' . $colors['green'] . ';
      color: #3d4d3f;
    }
    .message.is-yellow {
      background-color: #fcfcf8;
    }
    .message.is-yellow .message-header {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .message.is-yellow .message-body {
      border-color: ' . $colors['yellow'] . ';
      color: #4b482d;
    }
    .message.is-cyan {
      background-color: #f9fbfb;
    }
    .message.is-cyan .message-header {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .message.is-cyan .message-body {
      border-color: ' . $colors['cyan'] . ';
      color: #384748;
    }
    
    .message-header {
      align-items: center;
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      border-radius: 0.5rem 0.5rem 0 0;
      color: ' . $colors['white'] . ';
      display: flex;
      font-weight: 700;
      justify-content: space-between;
      line-height: 1.25;
      padding: 0.75em 1em;
      position: relative;
    }
    .message-header .delete {
      flex-grow: 0;
      flex-shrink: 0;
      margin-left: 0.75em;
    }
    .message-header + .message-body {
      border-width: 0;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    
    .message-body {
      border-color: #dbdbdb;
      border-radius: 4px;
      border-style: solid;
      border-width: 0 0 0 4px;
      color: ' . $colors['white'] . ';
      padding: 1.25em 1.5em;
    }
    .message-body code,
    .message-body pre {
      background-color: ' . $colors['white'] . ';
    }
    .message-body pre code {
      background-color: transparent;
    }
    
    .modal {
      align-items: center;
      display: none;
      flex-direction: column;
      justify-content: center;
      overflow: hidden;
      position: fixed;
      z-index: 40;
    }
    .modal.is-active {
      display: flex;
    }
    
    .modal-background {
      background-color: rgba(10, 10, 10, 0.86);
    }
    
    .modal-content,
    .modal-card {
      margin: 0 20px;
      max-height: calc(100vh - 160px);
      overflow: auto;
      position: relative;
      width: 100%;
    }
    @media screen and (min-width: 769px), print {
      .modal-content,
    .modal-card {
        margin: 0 auto;
        max-height: calc(100vh - 40px);
        width: 640px;
      }
    }
    
    .modal-close {
      background: none;
      height: 40px;
      position: fixed;
      right: 20px;
      top: 20px;
      width: 40px;
    }
    
    .modal-card {
      display: flex;
      flex-direction: column;
      max-height: calc(100vh - 40px);
      overflow: hidden;
      -ms-overflow-y: visible;
    }
    
    .modal-card-head,
    .modal-card-foot {
      align-items: center;
      background-color: whitesmoke;
      display: flex;
      flex-shrink: 0;
      justify-content: flex-start;
      padding: 20px;
      position: relative;
    }
    
    .modal-card-head {
      border-bottom: 1px solid #dbdbdb;
      border-top-left-radius: 6px;
      border-top-right-radius: 6px;
    }
    
    .modal-card-title {
      color: white;
      flex-grow: 1;
      flex-shrink: 0;
      font-size: 1.5rem;
      line-height: 1;
    }
    
    .modal-card-foot {
      border-bottom-left-radius: 6px;
      border-bottom-right-radius: 6px;
      border-top: 1px solid #dbdbdb;
    }
    .modal-card-foot .button:not(:last-child) {
      margin-right: 0.5em;
    }
    
    .modal-card-body {
      -webkit-overflow-scrolling: touch;
      background-color: ' . $colors['white'] . ';
      flex-grow: 1;
      flex-shrink: 1;
      overflow: auto;
      padding: 20px;
    }
    
    .navbar {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
      min-height: 3.25rem;
      position: relative;
      z-index: 30;
    }
    .navbar.is-white {
      background-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .navbar.is-white .navbar-brand > .navbar-item,
    .navbar.is-white .navbar-brand .navbar-link {
      color: #0a0a0a;
    }
    .navbar.is-white .navbar-brand > a.navbar-item:focus, .navbar.is-white .navbar-brand > a.navbar-item:hover, .navbar.is-white .navbar-brand > a.navbar-item.is-active,
    .navbar.is-white .navbar-brand .navbar-link:focus,
    .navbar.is-white .navbar-brand .navbar-link:hover,
    .navbar.is-white .navbar-brand .navbar-link.is-active {
      background-color: #f2f2f2;
      color: #0a0a0a;
    }
    .navbar.is-white .navbar-brand .navbar-link::after {
      border-color: #0a0a0a;
    }
    .navbar.is-white .navbar-burger {
      color: #0a0a0a;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-white .navbar-start > .navbar-item,
    .navbar.is-white .navbar-start .navbar-link,
    .navbar.is-white .navbar-end > .navbar-item,
    .navbar.is-white .navbar-end .navbar-link {
        color: #0a0a0a;
      }
      .navbar.is-white .navbar-start > a.navbar-item:focus, .navbar.is-white .navbar-start > a.navbar-item:hover, .navbar.is-white .navbar-start > a.navbar-item.is-active,
    .navbar.is-white .navbar-start .navbar-link:focus,
    .navbar.is-white .navbar-start .navbar-link:hover,
    .navbar.is-white .navbar-start .navbar-link.is-active,
    .navbar.is-white .navbar-end > a.navbar-item:focus,
    .navbar.is-white .navbar-end > a.navbar-item:hover,
    .navbar.is-white .navbar-end > a.navbar-item.is-active,
    .navbar.is-white .navbar-end .navbar-link:focus,
    .navbar.is-white .navbar-end .navbar-link:hover,
    .navbar.is-white .navbar-end .navbar-link.is-active {
        background-color: #f2f2f2;
        color: #0a0a0a;
      }
      .navbar.is-white .navbar-start .navbar-link::after,
    .navbar.is-white .navbar-end .navbar-link::after {
        border-color: #0a0a0a;
      }
      .navbar.is-white .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-white .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-white .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #f2f2f2;
        color: #0a0a0a;
      }
      .navbar.is-white .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['white'] . ';
        color: #0a0a0a;
      }
    }
    .navbar.is-black {
      background-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .navbar.is-black .navbar-brand > .navbar-item,
    .navbar.is-black .navbar-brand .navbar-link {
      color: ' . $colors['white'] . ';
    }
    .navbar.is-black .navbar-brand > a.navbar-item:focus, .navbar.is-black .navbar-brand > a.navbar-item:hover, .navbar.is-black .navbar-brand > a.navbar-item.is-active,
    .navbar.is-black .navbar-brand .navbar-link:focus,
    .navbar.is-black .navbar-brand .navbar-link:hover,
    .navbar.is-black .navbar-brand .navbar-link.is-active {
      background-color: black;
      color: ' . $colors['white'] . ';
    }
    .navbar.is-black .navbar-brand .navbar-link::after {
      border-color: ' . $colors['white'] . ';
    }
    .navbar.is-black .navbar-burger {
      color: ' . $colors['white'] . ';
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-black .navbar-start > .navbar-item,
    .navbar.is-black .navbar-start .navbar-link,
    .navbar.is-black .navbar-end > .navbar-item,
    .navbar.is-black .navbar-end .navbar-link {
        color: ' . $colors['white'] . ';
      }
      .navbar.is-black .navbar-start > a.navbar-item:focus, .navbar.is-black .navbar-start > a.navbar-item:hover, .navbar.is-black .navbar-start > a.navbar-item.is-active,
    .navbar.is-black .navbar-start .navbar-link:focus,
    .navbar.is-black .navbar-start .navbar-link:hover,
    .navbar.is-black .navbar-start .navbar-link.is-active,
    .navbar.is-black .navbar-end > a.navbar-item:focus,
    .navbar.is-black .navbar-end > a.navbar-item:hover,
    .navbar.is-black .navbar-end > a.navbar-item.is-active,
    .navbar.is-black .navbar-end .navbar-link:focus,
    .navbar.is-black .navbar-end .navbar-link:hover,
    .navbar.is-black .navbar-end .navbar-link.is-active {
        background-color: black;
        color: ' . $colors['white'] . ';
      }
      .navbar.is-black .navbar-start .navbar-link::after,
    .navbar.is-black .navbar-end .navbar-link::after {
        border-color: ' . $colors['white'] . ';
      }
      .navbar.is-black .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-black .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-black .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: black;
        color: ' . $colors['white'] . ';
      }
      .navbar.is-black .navbar-dropdown a.navbar-item.is-active {
        background-color: #0a0a0a;
        color: ' . $colors['white'] . ';
      }
    }
    .navbar.is-light {
      background-color: whitesmoke;
      color: #363636;
    }
    .navbar.is-light .navbar-brand > .navbar-item,
    .navbar.is-light .navbar-brand .navbar-link {
      color: #363636;
    }
    .navbar.is-light .navbar-brand > a.navbar-item:focus, .navbar.is-light .navbar-brand > a.navbar-item:hover, .navbar.is-light .navbar-brand > a.navbar-item.is-active,
    .navbar.is-light .navbar-brand .navbar-link:focus,
    .navbar.is-light .navbar-brand .navbar-link:hover,
    .navbar.is-light .navbar-brand .navbar-link.is-active {
      background-color: #e8e8e8;
      color: #363636;
    }
    .navbar.is-light .navbar-brand .navbar-link::after {
      border-color: #363636;
    }
    .navbar.is-light .navbar-burger {
      color: #363636;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-light .navbar-start > .navbar-item,
    .navbar.is-light .navbar-start .navbar-link,
    .navbar.is-light .navbar-end > .navbar-item,
    .navbar.is-light .navbar-end .navbar-link {
        color: #363636;
      }
      .navbar.is-light .navbar-start > a.navbar-item:focus, .navbar.is-light .navbar-start > a.navbar-item:hover, .navbar.is-light .navbar-start > a.navbar-item.is-active,
    .navbar.is-light .navbar-start .navbar-link:focus,
    .navbar.is-light .navbar-start .navbar-link:hover,
    .navbar.is-light .navbar-start .navbar-link.is-active,
    .navbar.is-light .navbar-end > a.navbar-item:focus,
    .navbar.is-light .navbar-end > a.navbar-item:hover,
    .navbar.is-light .navbar-end > a.navbar-item.is-active,
    .navbar.is-light .navbar-end .navbar-link:focus,
    .navbar.is-light .navbar-end .navbar-link:hover,
    .navbar.is-light .navbar-end .navbar-link.is-active {
        background-color: #e8e8e8;
        color: #363636;
      }
      .navbar.is-light .navbar-start .navbar-link::after,
    .navbar.is-light .navbar-end .navbar-link::after {
        border-color: #363636;
      }
      .navbar.is-light .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-light .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-light .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #e8e8e8;
        color: #363636;
      }
      .navbar.is-light .navbar-dropdown a.navbar-item.is-active {
        background-color: whitesmoke;
        color: #363636;
      }
    }
    .navbar.is-dark {
      background-color: #363636;
      color: whitesmoke;
    }
    .navbar.is-dark .navbar-brand > .navbar-item,
    .navbar.is-dark .navbar-brand .navbar-link {
      color: whitesmoke;
    }
    .navbar.is-dark .navbar-brand > a.navbar-item:focus, .navbar.is-dark .navbar-brand > a.navbar-item:hover, .navbar.is-dark .navbar-brand > a.navbar-item.is-active,
    .navbar.is-dark .navbar-brand .navbar-link:focus,
    .navbar.is-dark .navbar-brand .navbar-link:hover,
    .navbar.is-dark .navbar-brand .navbar-link.is-active {
      background-color: #292929;
      color: whitesmoke;
    }
    .navbar.is-dark .navbar-brand .navbar-link::after {
      border-color: whitesmoke;
    }
    .navbar.is-dark .navbar-burger {
      color: whitesmoke;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-dark .navbar-start > .navbar-item,
    .navbar.is-dark .navbar-start .navbar-link,
    .navbar.is-dark .navbar-end > .navbar-item,
    .navbar.is-dark .navbar-end .navbar-link {
        color: whitesmoke;
      }
      .navbar.is-dark .navbar-start > a.navbar-item:focus, .navbar.is-dark .navbar-start > a.navbar-item:hover, .navbar.is-dark .navbar-start > a.navbar-item.is-active,
    .navbar.is-dark .navbar-start .navbar-link:focus,
    .navbar.is-dark .navbar-start .navbar-link:hover,
    .navbar.is-dark .navbar-start .navbar-link.is-active,
    .navbar.is-dark .navbar-end > a.navbar-item:focus,
    .navbar.is-dark .navbar-end > a.navbar-item:hover,
    .navbar.is-dark .navbar-end > a.navbar-item.is-active,
    .navbar.is-dark .navbar-end .navbar-link:focus,
    .navbar.is-dark .navbar-end .navbar-link:hover,
    .navbar.is-dark .navbar-end .navbar-link.is-active {
        background-color: #292929;
        color: whitesmoke;
      }
      .navbar.is-dark .navbar-start .navbar-link::after,
    .navbar.is-dark .navbar-end .navbar-link::after {
        border-color: whitesmoke;
      }
      .navbar.is-dark .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-dark .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-dark .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #292929;
        color: whitesmoke;
      }
      .navbar.is-dark .navbar-dropdown a.navbar-item.is-active {
        background-color: #363636;
        color: whitesmoke;
      }
    }
    .navbar.is-primary {
      background-color: ' . $colors['primary'] . ';
      color: #fff;
    }
    .navbar.is-primary .navbar-brand > .navbar-item,
    .navbar.is-primary .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-primary .navbar-brand > a.navbar-item:focus, .navbar.is-primary .navbar-brand > a.navbar-item:hover, .navbar.is-primary .navbar-brand > a.navbar-item.is-active,
    .navbar.is-primary .navbar-brand .navbar-link:focus,
    .navbar.is-primary .navbar-brand .navbar-link:hover,
    .navbar.is-primary .navbar-brand .navbar-link.is-active {
      background-color: #9d9d9d;
      color: #fff;
    }
    .navbar.is-primary .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-primary .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-primary .navbar-start > .navbar-item,
    .navbar.is-primary .navbar-start .navbar-link,
    .navbar.is-primary .navbar-end > .navbar-item,
    .navbar.is-primary .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-primary .navbar-start > a.navbar-item:focus, .navbar.is-primary .navbar-start > a.navbar-item:hover, .navbar.is-primary .navbar-start > a.navbar-item.is-active,
    .navbar.is-primary .navbar-start .navbar-link:focus,
    .navbar.is-primary .navbar-start .navbar-link:hover,
    .navbar.is-primary .navbar-start .navbar-link.is-active,
    .navbar.is-primary .navbar-end > a.navbar-item:focus,
    .navbar.is-primary .navbar-end > a.navbar-item:hover,
    .navbar.is-primary .navbar-end > a.navbar-item.is-active,
    .navbar.is-primary .navbar-end .navbar-link:focus,
    .navbar.is-primary .navbar-end .navbar-link:hover,
    .navbar.is-primary .navbar-end .navbar-link.is-active {
        background-color: #9d9d9d;
        color: #fff;
      }
      .navbar.is-primary .navbar-start .navbar-link::after,
    .navbar.is-primary .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-primary .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-primary .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-primary .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #9d9d9d;
        color: #fff;
      }
      .navbar.is-primary .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['primary'] . ';
        color: #fff;
      }
    }
    .navbar.is-link {
      background-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    .navbar.is-link .navbar-brand > .navbar-item,
    .navbar.is-link .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-link .navbar-brand > a.navbar-item:focus, .navbar.is-link .navbar-brand > a.navbar-item:hover, .navbar.is-link .navbar-brand > a.navbar-item.is-active,
    .navbar.is-link .navbar-brand .navbar-link:focus,
    .navbar.is-link .navbar-brand .navbar-link:hover,
    .navbar.is-link .navbar-brand .navbar-link.is-active {
      background-color: #bfbfbf;
      color: #fff;
    }
    .navbar.is-link .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-link .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-link .navbar-start > .navbar-item,
    .navbar.is-link .navbar-start .navbar-link,
    .navbar.is-link .navbar-end > .navbar-item,
    .navbar.is-link .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-link .navbar-start > a.navbar-item:focus, .navbar.is-link .navbar-start > a.navbar-item:hover, .navbar.is-link .navbar-start > a.navbar-item.is-active,
    .navbar.is-link .navbar-start .navbar-link:focus,
    .navbar.is-link .navbar-start .navbar-link:hover,
    .navbar.is-link .navbar-start .navbar-link.is-active,
    .navbar.is-link .navbar-end > a.navbar-item:focus,
    .navbar.is-link .navbar-end > a.navbar-item:hover,
    .navbar.is-link .navbar-end > a.navbar-item.is-active,
    .navbar.is-link .navbar-end .navbar-link:focus,
    .navbar.is-link .navbar-end .navbar-link:hover,
    .navbar.is-link .navbar-end .navbar-link.is-active {
        background-color: #bfbfbf;
        color: #fff;
      }
      .navbar.is-link .navbar-start .navbar-link::after,
    .navbar.is-link .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-link .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-link .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-link .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #bfbfbf;
        color: #fff;
      }
      .navbar.is-link .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['complementary'] . ';
        color: #fff;
      }
    }
    .navbar.is-info {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .navbar.is-info .navbar-brand > .navbar-item,
    .navbar.is-info .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-info .navbar-brand > a.navbar-item:focus, .navbar.is-info .navbar-brand > a.navbar-item:hover, .navbar.is-info .navbar-brand > a.navbar-item.is-active,
    .navbar.is-info .navbar-brand .navbar-link:focus,
    .navbar.is-info .navbar-brand .navbar-link:hover,
    .navbar.is-info .navbar-brand .navbar-link.is-active {
      background-color: #4b6c70;
      color: #fff;
    }
    .navbar.is-info .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-info .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-info .navbar-start > .navbar-item,
    .navbar.is-info .navbar-start .navbar-link,
    .navbar.is-info .navbar-end > .navbar-item,
    .navbar.is-info .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-info .navbar-start > a.navbar-item:focus, .navbar.is-info .navbar-start > a.navbar-item:hover, .navbar.is-info .navbar-start > a.navbar-item.is-active,
    .navbar.is-info .navbar-start .navbar-link:focus,
    .navbar.is-info .navbar-start .navbar-link:hover,
    .navbar.is-info .navbar-start .navbar-link.is-active,
    .navbar.is-info .navbar-end > a.navbar-item:focus,
    .navbar.is-info .navbar-end > a.navbar-item:hover,
    .navbar.is-info .navbar-end > a.navbar-item.is-active,
    .navbar.is-info .navbar-end .navbar-link:focus,
    .navbar.is-info .navbar-end .navbar-link:hover,
    .navbar.is-info .navbar-end .navbar-link.is-active {
        background-color: #4b6c70;
        color: #fff;
      }
      .navbar.is-info .navbar-start .navbar-link::after,
    .navbar.is-info .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-info .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-info .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-info .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #4b6c70;
        color: #fff;
      }
      .navbar.is-info .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['cyan'] . ';
        color: #fff;
      }
    }
    .navbar.is-success {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .navbar.is-success .navbar-brand > .navbar-item,
    .navbar.is-success .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-success .navbar-brand > a.navbar-item:focus, .navbar.is-success .navbar-brand > a.navbar-item:hover, .navbar.is-success .navbar-brand > a.navbar-item.is-active,
    .navbar.is-success .navbar-brand .navbar-link:focus,
    .navbar.is-success .navbar-brand .navbar-link:hover,
    .navbar.is-success .navbar-brand .navbar-link.is-active {
      background-color: #5e9665;
      color: #fff;
    }
    .navbar.is-success .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-success .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-success .navbar-start > .navbar-item,
    .navbar.is-success .navbar-start .navbar-link,
    .navbar.is-success .navbar-end > .navbar-item,
    .navbar.is-success .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-success .navbar-start > a.navbar-item:focus, .navbar.is-success .navbar-start > a.navbar-item:hover, .navbar.is-success .navbar-start > a.navbar-item.is-active,
    .navbar.is-success .navbar-start .navbar-link:focus,
    .navbar.is-success .navbar-start .navbar-link:hover,
    .navbar.is-success .navbar-start .navbar-link.is-active,
    .navbar.is-success .navbar-end > a.navbar-item:focus,
    .navbar.is-success .navbar-end > a.navbar-item:hover,
    .navbar.is-success .navbar-end > a.navbar-item.is-active,
    .navbar.is-success .navbar-end .navbar-link:focus,
    .navbar.is-success .navbar-end .navbar-link:hover,
    .navbar.is-success .navbar-end .navbar-link.is-active {
        background-color: #5e9665;
        color: #fff;
      }
      .navbar.is-success .navbar-start .navbar-link::after,
    .navbar.is-success .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-success .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-success .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-success .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #5e9665;
        color: #fff;
      }
      .navbar.is-success .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['green'] . ';
        color: #fff;
      }
    }
    .navbar.is-warning {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-warning .navbar-brand > .navbar-item,
    .navbar.is-warning .navbar-brand .navbar-link {
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-warning .navbar-brand > a.navbar-item:focus, .navbar.is-warning .navbar-brand > a.navbar-item:hover, .navbar.is-warning .navbar-brand > a.navbar-item.is-active,
    .navbar.is-warning .navbar-brand .navbar-link:focus,
    .navbar.is-warning .navbar-brand .navbar-link:hover,
    .navbar.is-warning .navbar-brand .navbar-link.is-active {
      background-color: #cac378;
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-warning .navbar-brand .navbar-link::after {
      border-color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-warning .navbar-burger {
      color: rgba(0, 0, 0, 0.7);
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-warning .navbar-start > .navbar-item,
    .navbar.is-warning .navbar-start .navbar-link,
    .navbar.is-warning .navbar-end > .navbar-item,
    .navbar.is-warning .navbar-end .navbar-link {
        color: rgba(0, 0, 0, 0.7);
      }
      .navbar.is-warning .navbar-start > a.navbar-item:focus, .navbar.is-warning .navbar-start > a.navbar-item:hover, .navbar.is-warning .navbar-start > a.navbar-item.is-active,
    .navbar.is-warning .navbar-start .navbar-link:focus,
    .navbar.is-warning .navbar-start .navbar-link:hover,
    .navbar.is-warning .navbar-start .navbar-link.is-active,
    .navbar.is-warning .navbar-end > a.navbar-item:focus,
    .navbar.is-warning .navbar-end > a.navbar-item:hover,
    .navbar.is-warning .navbar-end > a.navbar-item.is-active,
    .navbar.is-warning .navbar-end .navbar-link:focus,
    .navbar.is-warning .navbar-end .navbar-link:hover,
    .navbar.is-warning .navbar-end .navbar-link.is-active {
        background-color: #cac378;
        color: rgba(0, 0, 0, 0.7);
      }
      .navbar.is-warning .navbar-start .navbar-link::after,
    .navbar.is-warning .navbar-end .navbar-link::after {
        border-color: rgba(0, 0, 0, 0.7);
      }
      .navbar.is-warning .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-warning .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-warning .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #cac378;
        color: rgba(0, 0, 0, 0.7);
      }
      .navbar.is-warning .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['yellow'] . ';
        color: rgba(0, 0, 0, 0.7);
      }
    }
    .navbar.is-danger {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .navbar.is-danger .navbar-brand > .navbar-item,
    .navbar.is-danger .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-danger .navbar-brand > a.navbar-item:focus, .navbar.is-danger .navbar-brand > a.navbar-item:hover, .navbar.is-danger .navbar-brand > a.navbar-item.is-active,
    .navbar.is-danger .navbar-brand .navbar-link:focus,
    .navbar.is-danger .navbar-brand .navbar-link:hover,
    .navbar.is-danger .navbar-brand .navbar-link.is-active {
      background-color: #ca7b78;
      color: #fff;
    }
    .navbar.is-danger .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-danger .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-danger .navbar-start > .navbar-item,
    .navbar.is-danger .navbar-start .navbar-link,
    .navbar.is-danger .navbar-end > .navbar-item,
    .navbar.is-danger .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-danger .navbar-start > a.navbar-item:focus, .navbar.is-danger .navbar-start > a.navbar-item:hover, .navbar.is-danger .navbar-start > a.navbar-item.is-active,
    .navbar.is-danger .navbar-start .navbar-link:focus,
    .navbar.is-danger .navbar-start .navbar-link:hover,
    .navbar.is-danger .navbar-start .navbar-link.is-active,
    .navbar.is-danger .navbar-end > a.navbar-item:focus,
    .navbar.is-danger .navbar-end > a.navbar-item:hover,
    .navbar.is-danger .navbar-end > a.navbar-item.is-active,
    .navbar.is-danger .navbar-end .navbar-link:focus,
    .navbar.is-danger .navbar-end .navbar-link:hover,
    .navbar.is-danger .navbar-end .navbar-link.is-active {
        background-color: #ca7b78;
        color: #fff;
      }
      .navbar.is-danger .navbar-start .navbar-link::after,
    .navbar.is-danger .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-danger .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-danger .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-danger .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #ca7b78;
        color: #fff;
      }
      .navbar.is-danger .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['red'] . ';
        color: #fff;
      }
    }
    .navbar.is-lightblue {
      background-color: ' . $colors['lightblue'] . ';
      color: #fff;
    }
    .navbar.is-lightblue .navbar-brand > .navbar-item,
    .navbar.is-lightblue .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-lightblue .navbar-brand > a.navbar-item:focus, .navbar.is-lightblue .navbar-brand > a.navbar-item:hover, .navbar.is-lightblue .navbar-brand > a.navbar-item.is-active,
    .navbar.is-lightblue .navbar-brand .navbar-link:focus,
    .navbar.is-lightblue .navbar-brand .navbar-link:hover,
    .navbar.is-lightblue .navbar-brand .navbar-link.is-active {
      background-color: #526678;
      color: #fff;
    }
    .navbar.is-lightblue .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-lightblue .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-lightblue .navbar-start > .navbar-item,
    .navbar.is-lightblue .navbar-start .navbar-link,
    .navbar.is-lightblue .navbar-end > .navbar-item,
    .navbar.is-lightblue .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-lightblue .navbar-start > a.navbar-item:focus, .navbar.is-lightblue .navbar-start > a.navbar-item:hover, .navbar.is-lightblue .navbar-start > a.navbar-item.is-active,
    .navbar.is-lightblue .navbar-start .navbar-link:focus,
    .navbar.is-lightblue .navbar-start .navbar-link:hover,
    .navbar.is-lightblue .navbar-start .navbar-link.is-active,
    .navbar.is-lightblue .navbar-end > a.navbar-item:focus,
    .navbar.is-lightblue .navbar-end > a.navbar-item:hover,
    .navbar.is-lightblue .navbar-end > a.navbar-item.is-active,
    .navbar.is-lightblue .navbar-end .navbar-link:focus,
    .navbar.is-lightblue .navbar-end .navbar-link:hover,
    .navbar.is-lightblue .navbar-end .navbar-link.is-active {
        background-color: #526678;
        color: #fff;
      }
      .navbar.is-lightblue .navbar-start .navbar-link::after,
    .navbar.is-lightblue .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-lightblue .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-lightblue .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-lightblue .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #526678;
        color: #fff;
      }
      .navbar.is-lightblue .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['lightblue'] . ';
        color: #fff;
      }
    }
    .navbar.is-purple {
      background-color: ' . $colors['purple'] . ';
      color: #fff;
    }
    .navbar.is-purple .navbar-brand > .navbar-item,
    .navbar.is-purple .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-purple .navbar-brand > a.navbar-item:focus, .navbar.is-purple .navbar-brand > a.navbar-item:hover, .navbar.is-purple .navbar-brand > a.navbar-item.is-active,
    .navbar.is-purple .navbar-brand .navbar-link:focus,
    .navbar.is-purple .navbar-brand .navbar-link:hover,
    .navbar.is-purple .navbar-brand .navbar-link.is-active {
      background-color: #69587f;
      color: #fff;
    }
    .navbar.is-purple .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-purple .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-purple .navbar-start > .navbar-item,
    .navbar.is-purple .navbar-start .navbar-link,
    .navbar.is-purple .navbar-end > .navbar-item,
    .navbar.is-purple .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-purple .navbar-start > a.navbar-item:focus, .navbar.is-purple .navbar-start > a.navbar-item:hover, .navbar.is-purple .navbar-start > a.navbar-item.is-active,
    .navbar.is-purple .navbar-start .navbar-link:focus,
    .navbar.is-purple .navbar-start .navbar-link:hover,
    .navbar.is-purple .navbar-start .navbar-link.is-active,
    .navbar.is-purple .navbar-end > a.navbar-item:focus,
    .navbar.is-purple .navbar-end > a.navbar-item:hover,
    .navbar.is-purple .navbar-end > a.navbar-item.is-active,
    .navbar.is-purple .navbar-end .navbar-link:focus,
    .navbar.is-purple .navbar-end .navbar-link:hover,
    .navbar.is-purple .navbar-end .navbar-link.is-active {
        background-color: #69587f;
        color: #fff;
      }
      .navbar.is-purple .navbar-start .navbar-link::after,
    .navbar.is-purple .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-purple .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-purple .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-purple .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #69587f;
        color: #fff;
      }
      .navbar.is-purple .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['purple'] . ';
        color: #fff;
      }
    }
    .navbar.is-pink {
      background-color: ' . $colors['pink'] . ';
      color: #fff;
    }
    .navbar.is-pink .navbar-brand > .navbar-item,
    .navbar.is-pink .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-pink .navbar-brand > a.navbar-item:focus, .navbar.is-pink .navbar-brand > a.navbar-item:hover, .navbar.is-pink .navbar-brand > a.navbar-item.is-active,
    .navbar.is-pink .navbar-brand .navbar-link:focus,
    .navbar.is-pink .navbar-brand .navbar-link:hover,
    .navbar.is-pink .navbar-brand .navbar-link.is-active {
      background-color: #ae6881;
      color: #fff;
    }
    .navbar.is-pink .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-pink .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-pink .navbar-start > .navbar-item,
    .navbar.is-pink .navbar-start .navbar-link,
    .navbar.is-pink .navbar-end > .navbar-item,
    .navbar.is-pink .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-pink .navbar-start > a.navbar-item:focus, .navbar.is-pink .navbar-start > a.navbar-item:hover, .navbar.is-pink .navbar-start > a.navbar-item.is-active,
    .navbar.is-pink .navbar-start .navbar-link:focus,
    .navbar.is-pink .navbar-start .navbar-link:hover,
    .navbar.is-pink .navbar-start .navbar-link.is-active,
    .navbar.is-pink .navbar-end > a.navbar-item:focus,
    .navbar.is-pink .navbar-end > a.navbar-item:hover,
    .navbar.is-pink .navbar-end > a.navbar-item.is-active,
    .navbar.is-pink .navbar-end .navbar-link:focus,
    .navbar.is-pink .navbar-end .navbar-link:hover,
    .navbar.is-pink .navbar-end .navbar-link.is-active {
        background-color: #ae6881;
        color: #fff;
      }
      .navbar.is-pink .navbar-start .navbar-link::after,
    .navbar.is-pink .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-pink .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-pink .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-pink .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #ae6881;
        color: #fff;
      }
      .navbar.is-pink .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['pink'] . ';
        color: #fff;
      }
    }
    .navbar.is-blue {
      background-color: ' . $colors['blue'] . ';
      color: #fff;
    }
    .navbar.is-blue .navbar-brand > .navbar-item,
    .navbar.is-blue .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-blue .navbar-brand > a.navbar-item:focus, .navbar.is-blue .navbar-brand > a.navbar-item:hover, .navbar.is-blue .navbar-brand > a.navbar-item.is-active,
    .navbar.is-blue .navbar-brand .navbar-link:focus,
    .navbar.is-blue .navbar-brand .navbar-link:hover,
    .navbar.is-blue .navbar-brand .navbar-link.is-active {
      background-color: #58617e;
      color: #fff;
    }
    .navbar.is-blue .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-blue .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-blue .navbar-start > .navbar-item,
    .navbar.is-blue .navbar-start .navbar-link,
    .navbar.is-blue .navbar-end > .navbar-item,
    .navbar.is-blue .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-blue .navbar-start > a.navbar-item:focus, .navbar.is-blue .navbar-start > a.navbar-item:hover, .navbar.is-blue .navbar-start > a.navbar-item.is-active,
    .navbar.is-blue .navbar-start .navbar-link:focus,
    .navbar.is-blue .navbar-start .navbar-link:hover,
    .navbar.is-blue .navbar-start .navbar-link.is-active,
    .navbar.is-blue .navbar-end > a.navbar-item:focus,
    .navbar.is-blue .navbar-end > a.navbar-item:hover,
    .navbar.is-blue .navbar-end > a.navbar-item.is-active,
    .navbar.is-blue .navbar-end .navbar-link:focus,
    .navbar.is-blue .navbar-end .navbar-link:hover,
    .navbar.is-blue .navbar-end .navbar-link.is-active {
        background-color: #58617e;
        color: #fff;
      }
      .navbar.is-blue .navbar-start .navbar-link::after,
    .navbar.is-blue .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-blue .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-blue .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-blue .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #58617e;
        color: #fff;
      }
      .navbar.is-blue .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['blue'] . ';
        color: #fff;
      }
    }
    .navbar.is-orange {
      background-color: ' . $colors['orange'] . ';
      color: #fff;
    }
    .navbar.is-orange .navbar-brand > .navbar-item,
    .navbar.is-orange .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-orange .navbar-brand > a.navbar-item:focus, .navbar.is-orange .navbar-brand > a.navbar-item:hover, .navbar.is-orange .navbar-brand > a.navbar-item.is-active,
    .navbar.is-orange .navbar-brand .navbar-link:focus,
    .navbar.is-orange .navbar-brand .navbar-link:hover,
    .navbar.is-orange .navbar-brand .navbar-link.is-active {
      background-color: #ca9e78;
      color: #fff;
    }
    .navbar.is-orange .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-orange .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-orange .navbar-start > .navbar-item,
    .navbar.is-orange .navbar-start .navbar-link,
    .navbar.is-orange .navbar-end > .navbar-item,
    .navbar.is-orange .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-orange .navbar-start > a.navbar-item:focus, .navbar.is-orange .navbar-start > a.navbar-item:hover, .navbar.is-orange .navbar-start > a.navbar-item.is-active,
    .navbar.is-orange .navbar-start .navbar-link:focus,
    .navbar.is-orange .navbar-start .navbar-link:hover,
    .navbar.is-orange .navbar-start .navbar-link.is-active,
    .navbar.is-orange .navbar-end > a.navbar-item:focus,
    .navbar.is-orange .navbar-end > a.navbar-item:hover,
    .navbar.is-orange .navbar-end > a.navbar-item.is-active,
    .navbar.is-orange .navbar-end .navbar-link:focus,
    .navbar.is-orange .navbar-end .navbar-link:hover,
    .navbar.is-orange .navbar-end .navbar-link.is-active {
        background-color: #ca9e78;
        color: #fff;
      }
      .navbar.is-orange .navbar-start .navbar-link::after,
    .navbar.is-orange .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-orange .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-orange .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-orange .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #ca9e78;
        color: #fff;
      }
      .navbar.is-orange .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['orange'] . ';
        color: #fff;
      }
    }
    .navbar.is-red {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .navbar.is-red .navbar-brand > .navbar-item,
    .navbar.is-red .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-red .navbar-brand > a.navbar-item:focus, .navbar.is-red .navbar-brand > a.navbar-item:hover, .navbar.is-red .navbar-brand > a.navbar-item.is-active,
    .navbar.is-red .navbar-brand .navbar-link:focus,
    .navbar.is-red .navbar-brand .navbar-link:hover,
    .navbar.is-red .navbar-brand .navbar-link.is-active {
      background-color: #ca7b78;
      color: #fff;
    }
    .navbar.is-red .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-red .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-red .navbar-start > .navbar-item,
    .navbar.is-red .navbar-start .navbar-link,
    .navbar.is-red .navbar-end > .navbar-item,
    .navbar.is-red .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-red .navbar-start > a.navbar-item:focus, .navbar.is-red .navbar-start > a.navbar-item:hover, .navbar.is-red .navbar-start > a.navbar-item.is-active,
    .navbar.is-red .navbar-start .navbar-link:focus,
    .navbar.is-red .navbar-start .navbar-link:hover,
    .navbar.is-red .navbar-start .navbar-link.is-active,
    .navbar.is-red .navbar-end > a.navbar-item:focus,
    .navbar.is-red .navbar-end > a.navbar-item:hover,
    .navbar.is-red .navbar-end > a.navbar-item.is-active,
    .navbar.is-red .navbar-end .navbar-link:focus,
    .navbar.is-red .navbar-end .navbar-link:hover,
    .navbar.is-red .navbar-end .navbar-link.is-active {
        background-color: #ca7b78;
        color: #fff;
      }
      .navbar.is-red .navbar-start .navbar-link::after,
    .navbar.is-red .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-red .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-red .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-red .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #ca7b78;
        color: #fff;
      }
      .navbar.is-red .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['red'] . ';
        color: #fff;
      }
    }
    .navbar.is-green {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .navbar.is-green .navbar-brand > .navbar-item,
    .navbar.is-green .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-green .navbar-brand > a.navbar-item:focus, .navbar.is-green .navbar-brand > a.navbar-item:hover, .navbar.is-green .navbar-brand > a.navbar-item.is-active,
    .navbar.is-green .navbar-brand .navbar-link:focus,
    .navbar.is-green .navbar-brand .navbar-link:hover,
    .navbar.is-green .navbar-brand .navbar-link.is-active {
      background-color: #5e9665;
      color: #fff;
    }
    .navbar.is-green .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-green .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-green .navbar-start > .navbar-item,
    .navbar.is-green .navbar-start .navbar-link,
    .navbar.is-green .navbar-end > .navbar-item,
    .navbar.is-green .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-green .navbar-start > a.navbar-item:focus, .navbar.is-green .navbar-start > a.navbar-item:hover, .navbar.is-green .navbar-start > a.navbar-item.is-active,
    .navbar.is-green .navbar-start .navbar-link:focus,
    .navbar.is-green .navbar-start .navbar-link:hover,
    .navbar.is-green .navbar-start .navbar-link.is-active,
    .navbar.is-green .navbar-end > a.navbar-item:focus,
    .navbar.is-green .navbar-end > a.navbar-item:hover,
    .navbar.is-green .navbar-end > a.navbar-item.is-active,
    .navbar.is-green .navbar-end .navbar-link:focus,
    .navbar.is-green .navbar-end .navbar-link:hover,
    .navbar.is-green .navbar-end .navbar-link.is-active {
        background-color: #5e9665;
        color: #fff;
      }
      .navbar.is-green .navbar-start .navbar-link::after,
    .navbar.is-green .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-green .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-green .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-green .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #5e9665;
        color: #fff;
      }
      .navbar.is-green .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['green'] . ';
        color: #fff;
      }
    }
    .navbar.is-yellow {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-yellow .navbar-brand > .navbar-item,
    .navbar.is-yellow .navbar-brand .navbar-link {
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-yellow .navbar-brand > a.navbar-item:focus, .navbar.is-yellow .navbar-brand > a.navbar-item:hover, .navbar.is-yellow .navbar-brand > a.navbar-item.is-active,
    .navbar.is-yellow .navbar-brand .navbar-link:focus,
    .navbar.is-yellow .navbar-brand .navbar-link:hover,
    .navbar.is-yellow .navbar-brand .navbar-link.is-active {
      background-color: #cac378;
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-yellow .navbar-brand .navbar-link::after {
      border-color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-yellow .navbar-burger {
      color: rgba(0, 0, 0, 0.7);
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-yellow .navbar-start > .navbar-item,
    .navbar.is-yellow .navbar-start .navbar-link,
    .navbar.is-yellow .navbar-end > .navbar-item,
    .navbar.is-yellow .navbar-end .navbar-link {
        color: rgba(0, 0, 0, 0.7);
      }
      .navbar.is-yellow .navbar-start > a.navbar-item:focus, .navbar.is-yellow .navbar-start > a.navbar-item:hover, .navbar.is-yellow .navbar-start > a.navbar-item.is-active,
    .navbar.is-yellow .navbar-start .navbar-link:focus,
    .navbar.is-yellow .navbar-start .navbar-link:hover,
    .navbar.is-yellow .navbar-start .navbar-link.is-active,
    .navbar.is-yellow .navbar-end > a.navbar-item:focus,
    .navbar.is-yellow .navbar-end > a.navbar-item:hover,
    .navbar.is-yellow .navbar-end > a.navbar-item.is-active,
    .navbar.is-yellow .navbar-end .navbar-link:focus,
    .navbar.is-yellow .navbar-end .navbar-link:hover,
    .navbar.is-yellow .navbar-end .navbar-link.is-active {
        background-color: #cac378;
        color: rgba(0, 0, 0, 0.7);
      }
      .navbar.is-yellow .navbar-start .navbar-link::after,
    .navbar.is-yellow .navbar-end .navbar-link::after {
        border-color: rgba(0, 0, 0, 0.7);
      }
      .navbar.is-yellow .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-yellow .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-yellow .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #cac378;
        color: rgba(0, 0, 0, 0.7);
      }
      .navbar.is-yellow .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['yellow'] . ';
        color: rgba(0, 0, 0, 0.7);
      }
    }
    .navbar.is-cyan {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .navbar.is-cyan .navbar-brand > .navbar-item,
    .navbar.is-cyan .navbar-brand .navbar-link {
      color: #fff;
    }
    .navbar.is-cyan .navbar-brand > a.navbar-item:focus, .navbar.is-cyan .navbar-brand > a.navbar-item:hover, .navbar.is-cyan .navbar-brand > a.navbar-item.is-active,
    .navbar.is-cyan .navbar-brand .navbar-link:focus,
    .navbar.is-cyan .navbar-brand .navbar-link:hover,
    .navbar.is-cyan .navbar-brand .navbar-link.is-active {
      background-color: #4b6c70;
      color: #fff;
    }
    .navbar.is-cyan .navbar-brand .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-cyan .navbar-burger {
      color: #fff;
    }
    @media screen and (min-width: 1024px) {
      .navbar.is-cyan .navbar-start > .navbar-item,
    .navbar.is-cyan .navbar-start .navbar-link,
    .navbar.is-cyan .navbar-end > .navbar-item,
    .navbar.is-cyan .navbar-end .navbar-link {
        color: #fff;
      }
      .navbar.is-cyan .navbar-start > a.navbar-item:focus, .navbar.is-cyan .navbar-start > a.navbar-item:hover, .navbar.is-cyan .navbar-start > a.navbar-item.is-active,
    .navbar.is-cyan .navbar-start .navbar-link:focus,
    .navbar.is-cyan .navbar-start .navbar-link:hover,
    .navbar.is-cyan .navbar-start .navbar-link.is-active,
    .navbar.is-cyan .navbar-end > a.navbar-item:focus,
    .navbar.is-cyan .navbar-end > a.navbar-item:hover,
    .navbar.is-cyan .navbar-end > a.navbar-item.is-active,
    .navbar.is-cyan .navbar-end .navbar-link:focus,
    .navbar.is-cyan .navbar-end .navbar-link:hover,
    .navbar.is-cyan .navbar-end .navbar-link.is-active {
        background-color: #4b6c70;
        color: #fff;
      }
      .navbar.is-cyan .navbar-start .navbar-link::after,
    .navbar.is-cyan .navbar-end .navbar-link::after {
        border-color: #fff;
      }
      .navbar.is-cyan .navbar-item.has-dropdown:focus .navbar-link,
    .navbar.is-cyan .navbar-item.has-dropdown:hover .navbar-link,
    .navbar.is-cyan .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #4b6c70;
        color: #fff;
      }
      .navbar.is-cyan .navbar-dropdown a.navbar-item.is-active {
        background-color: ' . $colors['cyan'] . ';
        color: #fff;
      }
    }
    .navbar > .container {
      align-items: stretch;
      display: flex;
      min-height: 3.25rem;
      width: 100%;
    }
    .navbar.has-shadow {
      box-shadow: 0 2px 0 0 whitesmoke;
    }
    .navbar.is-fixed-bottom, .navbar.is-fixed-top {
      left: 0;
      position: fixed;
      right: 0;
      z-index: 30;
    }
    .navbar.is-fixed-bottom {
      bottom: 0;
    }
    .navbar.is-fixed-bottom.has-shadow {
      box-shadow: 0 -2px 0 0 whitesmoke;
    }
    .navbar.is-fixed-top {
      top: 0;
    }
    
    html.has-navbar-fixed-top,
    body.has-navbar-fixed-top {
      padding-top: 3.25rem;
    }
    html.has-navbar-fixed-bottom,
    body.has-navbar-fixed-bottom {
      padding-bottom: 3.25rem;
    }
    
    .navbar-brand,
    .navbar-tabs {
      align-items: stretch;
      display: flex;
      flex-shrink: 0;
      min-height: 3.25rem;
    }
    
    .navbar-brand a.navbar-item:focus, .navbar-brand a.navbar-item:hover {
      background-color: transparent;
    }
    
    .navbar-tabs {
      -webkit-overflow-scrolling: touch;
      max-width: 100vw;
      overflow-x: auto;
      overflow-y: hidden;
    }
    
    .navbar-burger {
      color: ' . $colors['white'] . ';
      cursor: pointer;
      display: block;
      height: 3.25rem;
      position: relative;
      width: 3.25rem;
      margin-left: auto;
    }
    .navbar-burger span {
      background-color: currentColor;
      display: block;
      height: 1px;
      left: calc(50% - 8px);
      position: absolute;
      transform-origin: center;
      transition-duration: 86ms;
      transition-property: background-color, opacity, transform;
      transition-timing-function: ease-out;
      width: 16px;
    }
    .navbar-burger span:nth-child(1) {
      top: calc(50% - 6px);
    }
    .navbar-burger span:nth-child(2) {
      top: calc(50% - 1px);
    }
    .navbar-burger span:nth-child(3) {
      top: calc(50% + 4px);
    }
    .navbar-burger:hover {
      background-color: rgba(0, 0, 0, 0.05);
    }
    .navbar-burger.is-active span:nth-child(1) {
      transform: translateY(5px) rotate(45deg);
    }
    .navbar-burger.is-active span:nth-child(2) {
      opacity: 0;
    }
    .navbar-burger.is-active span:nth-child(3) {
      transform: translateY(-5px) rotate(-45deg);
    }
    
    .navbar-menu {
      display: none;
    }
    
    .navbar-item,
    .navbar-link {
      color: ' . $colors['white'] . ';
      display: block;
      line-height: 1.5;
      padding: 0.5rem 0.75rem;
      position: relative;
    }
    .navbar-item .icon:only-child,
    .navbar-link .icon:only-child {
      margin-left: -0.25rem;
      margin-right: -0.25rem;
    }
    
    a.navbar-item,
    .navbar-link {
      cursor: pointer;
    }
    a.navbar-item:focus, a.navbar-item:focus-within, a.navbar-item:hover, a.navbar-item.is-active,
    .navbar-link:focus,
    .navbar-link:focus-within,
    .navbar-link:hover,
    .navbar-link.is-active {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      color: ' . $colors['primary'] . ';
    }
    
    .navbar-item {
      display: block;
      flex-grow: 0;
      flex-shrink: 0;
    }
    .navbar-item img {
      max-height: 1.75rem;
    }
    .navbar-item.has-dropdown {
      padding: 0;
    }
    .navbar-item.is-expanded {
      flex-grow: 1;
      flex-shrink: 1;
    }
    .navbar-item.is-tab {
      border-bottom: 1px solid transparent;
      min-height: 3.25rem;
      padding-bottom: calc(0.5rem - 1px);
    }
    .navbar-item.is-tab:focus, .navbar-item.is-tab:hover {
      background-color: transparent;
      border-bottom-color: ' . $colors['complementary'] . ';
    }
    .navbar-item.is-tab.is-active {
      background-color: transparent;
      border-bottom-color: ' . $colors['complementary'] . ';
      border-bottom-style: solid;
      border-bottom-width: 3px;
      color: ' . $colors['complementary'] . ';
      padding-bottom: calc(0.5rem - 3px);
    }
    
    .navbar-content {
      flex-grow: 1;
      flex-shrink: 1;
    }
    
    .navbar-link:not(.is-arrowless) {
      padding-right: 2.5em;
    }
    .navbar-link:not(.is-arrowless)::after {
      border-color: ' . $colors['complementary'] . ';
      margin-top: -0.375em;
      right: 1.125em;
    }
    
    .navbar-dropdown {
      font-size: 0.875rem;
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
    .navbar-dropdown .navbar-item {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }
    
    .navbar-divider {
      background-color: whitesmoke;
      border: none;
      display: none;
      height: 2px;
      margin: 0.5rem 0;
    }
    
    @media screen and (max-width: 1023px) {
      .navbar > .container {
        display: block;
      }
    
      .navbar-brand .navbar-item,
    .navbar-tabs .navbar-item {
        align-items: center;
        display: flex;
      }
    
      .navbar-link::after {
        display: none;
      }
    
      .navbar-menu {
        background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
        box-shadow: 0 8px 16px rgba(10, 10, 10, 0.1);
        padding: 0.5rem 0;
      }
      .navbar-menu.is-active {
        display: block;
      }
    
      .navbar.is-fixed-bottom-touch, .navbar.is-fixed-top-touch {
        left: 0;
        position: fixed;
        right: 0;
        z-index: 30;
      }
      .navbar.is-fixed-bottom-touch {
        bottom: 0;
      }
      .navbar.is-fixed-bottom-touch.has-shadow {
        box-shadow: 0 -2px 3px rgba(10, 10, 10, 0.1);
      }
      .navbar.is-fixed-top-touch {
        top: 0;
      }
      .navbar.is-fixed-top .navbar-menu, .navbar.is-fixed-top-touch .navbar-menu {
        -webkit-overflow-scrolling: touch;
        max-height: calc(100vh - 3.25rem);
        overflow: auto;
      }
    
      html.has-navbar-fixed-top-touch,
    body.has-navbar-fixed-top-touch {
        padding-top: 3.25rem;
      }
      html.has-navbar-fixed-bottom-touch,
    body.has-navbar-fixed-bottom-touch {
        padding-bottom: 3.25rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .navbar,
    .navbar-menu,
    .navbar-start,
    .navbar-end {
        align-items: stretch;
        display: flex;
      }
    
      .navbar {
        min-height: 3.25rem;
      }
      .navbar.is-spaced {
        padding: 1rem 2rem;
      }
      .navbar.is-spaced .navbar-start,
    .navbar.is-spaced .navbar-end {
        align-items: center;
      }
      .navbar.is-spaced a.navbar-item,
    .navbar.is-spaced .navbar-link {
        border-radius: 4px;
      }
      .navbar.is-transparent a.navbar-item:focus, .navbar.is-transparent a.navbar-item:hover, .navbar.is-transparent a.navbar-item.is-active,
    .navbar.is-transparent .navbar-link:focus,
    .navbar.is-transparent .navbar-link:hover,
    .navbar.is-transparent .navbar-link.is-active {
        background-color: transparent !important;
      }
      .navbar.is-transparent .navbar-item.has-dropdown.is-active .navbar-link, .navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:focus .navbar-link, .navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:focus-within .navbar-link, .navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:hover .navbar-link {
        background-color: transparent !important;
      }
      .navbar.is-transparent .navbar-dropdown a.navbar-item:focus, .navbar.is-transparent .navbar-dropdown a.navbar-item:hover {
        background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
        color: ' . $colors['primary'] . ';
      }
      .navbar.is-transparent .navbar-dropdown a.navbar-item.is-active {
        background-color: whitesmoke;
        color: ' . $colors['complementary'] . ';
      }
    
      .navbar-burger {
        display: none;
      }
    
      .navbar-item,
    .navbar-link {
        align-items: center;
        display: flex;
      }
    
      .navbar-item {
        display: flex;
      }
      .navbar-item.has-dropdown {
        align-items: stretch;
      }
      .navbar-item.has-dropdown-up .navbar-link::after {
        transform: rotate(135deg) translate(0.25em, -0.25em);
      }
      .navbar-item.has-dropdown-up .navbar-dropdown {
        border-bottom: 2px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.12)) . ';
        border-radius: 6px 6px 0 0;
        border-top: none;
        bottom: 100%;
        box-shadow: 0 -8px 8px rgba(10, 10, 10, 0.1);
        top: auto;
      }
      .navbar-item.is-active .navbar-dropdown, .navbar-item.is-hoverable:focus .navbar-dropdown, .navbar-item.is-hoverable:focus-within .navbar-dropdown, .navbar-item.is-hoverable:hover .navbar-dropdown {
        display: block;
      }
      .navbar.is-spaced .navbar-item.is-active .navbar-dropdown, .navbar-item.is-active .navbar-dropdown.is-boxed, .navbar.is-spaced .navbar-item.is-hoverable:focus .navbar-dropdown, .navbar-item.is-hoverable:focus .navbar-dropdown.is-boxed, .navbar.is-spaced .navbar-item.is-hoverable:focus-within .navbar-dropdown, .navbar-item.is-hoverable:focus-within .navbar-dropdown.is-boxed, .navbar.is-spaced .navbar-item.is-hoverable:hover .navbar-dropdown, .navbar-item.is-hoverable:hover .navbar-dropdown.is-boxed {
        opacity: 1;
        pointer-events: auto;
        transform: translateY(0);
      }
    
      .navbar-menu {
        flex-grow: 1;
        flex-shrink: 0;
      }
    
      .navbar-start {
        justify-content: flex-start;
        margin-right: auto;
      }
    
      .navbar-end {
        justify-content: flex-end;
        margin-left: auto;
      }
    
      .navbar-dropdown {
        background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        border-top: 2px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.12)) . ';
        box-shadow: 0 8px 8px rgba(10, 10, 10, 0.1);
        display: none;
        font-size: 0.875rem;
        left: 0;
        min-width: 100%;
        position: absolute;
        top: 100%;
        z-index: 20;
      }
      .navbar-dropdown .navbar-item {
        padding: 0.375rem 1rem;
        white-space: nowrap;
      }
      .navbar-dropdown a.navbar-item {
        padding-right: 3rem;
      }
      .navbar-dropdown a.navbar-item:focus, .navbar-dropdown a.navbar-item:hover {
        background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
        color: ' . $colors['primary'] . ';
      }
      .navbar-dropdown a.navbar-item.is-active {
        background-color: whitesmoke;
        color: ' . $colors['complementary'] . ';
      }
      .navbar.is-spaced .navbar-dropdown, .navbar-dropdown.is-boxed {
        border-radius: 6px;
        border-top: none;
        box-shadow: 0 8px 8px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
        display: block;
        opacity: 0;
        pointer-events: none;
        top: calc(100% + (-4px));
        transform: translateY(-5px);
        transition-duration: 86ms;
        transition-property: opacity, transform;
      }
      .navbar-dropdown.is-right {
        left: auto;
        right: 0;
      }
    
      .navbar-divider {
        display: block;
      }
    
      .navbar > .container .navbar-brand,
    .container > .navbar .navbar-brand {
        margin-left: -0.75rem;
      }
      .navbar > .container .navbar-menu,
    .container > .navbar .navbar-menu {
        margin-right: -0.75rem;
      }
    
      .navbar.is-fixed-bottom-desktop, .navbar.is-fixed-top-desktop {
        left: 0;
        position: fixed;
        right: 0;
        z-index: 30;
      }
      .navbar.is-fixed-bottom-desktop {
        bottom: 0;
      }
      .navbar.is-fixed-bottom-desktop.has-shadow {
        box-shadow: 0 -2px 3px rgba(10, 10, 10, 0.1);
      }
      .navbar.is-fixed-top-desktop {
        top: 0;
      }
    
      html.has-navbar-fixed-top-desktop,
    body.has-navbar-fixed-top-desktop {
        padding-top: 3.25rem;
      }
      html.has-navbar-fixed-bottom-desktop,
    body.has-navbar-fixed-bottom-desktop {
        padding-bottom: 3.25rem;
      }
      html.has-spaced-navbar-fixed-top,
    body.has-spaced-navbar-fixed-top {
        padding-top: 5.25rem;
      }
      html.has-spaced-navbar-fixed-bottom,
    body.has-spaced-navbar-fixed-bottom {
        padding-bottom: 5.25rem;
      }
    
      a.navbar-item.is-active,
    .navbar-link.is-active {
        color: #0a0a0a;
      }
      a.navbar-item.is-active:not(:focus):not(:hover),
    .navbar-link.is-active:not(:focus):not(:hover) {
        background-color: transparent;
      }
    
      .navbar-item.has-dropdown:focus .navbar-link, .navbar-item.has-dropdown:hover .navbar-link, .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
      }
    }
    .hero.is-fullheight-with-navbar {
      min-height: calc(100vh - 3.25rem);
    }
    
    .pagination {
      font-size: 1rem;
      margin: -0.25rem;
    }
    .pagination.is-small {
      font-size: 0.75rem;
    }
    .pagination.is-medium {
      font-size: 1.25rem;
    }
    .pagination.is-large {
      font-size: 1.5rem;
    }
    .pagination.is-rounded .pagination-previous,
    .pagination.is-rounded .pagination-next {
      padding-left: 1em;
      padding-right: 1em;
      border-radius: 290486px;
    }
    .pagination.is-rounded .pagination-link {
      border-radius: 290486px;
    }
    
    .pagination,
    .pagination-list {
      align-items: center;
      display: flex;
      justify-content: center;
      text-align: center;
    }
    
    .pagination-previous,
    .pagination-next,
    .pagination-link,
    .pagination-ellipsis {
      font-size: 1em;
      justify-content: center;
      margin: 0.25rem;
      padding-left: 0.5em;
      padding-right: 0.5em;
      text-align: center;
    }
    
    .pagination-previous,
    .pagination-next,
    .pagination-link {
      border-color: #dbdbdb;
      color: #363636;
      min-width: 2.25em;
    }
    .pagination-previous:hover,
    .pagination-next:hover,
    .pagination-link:hover {
      border-color: #b5b5b5;
      color: #DDDDDD;
    }
    .pagination-previous:focus,
    .pagination-next:focus,
    .pagination-link:focus {
      border-color: ' . $colors['blue'] . ';
    }
    .pagination-previous:active,
    .pagination-next:active,
    .pagination-link:active {
      box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);
    }
    .pagination-previous[disabled],
    .pagination-next[disabled],
    .pagination-link[disabled] {
      background-color: #dbdbdb;
      border-color: #dbdbdb;
      box-shadow: none;
      color: #7a7a7a;
      opacity: 0.5;
    }
    
    .pagination-previous,
    .pagination-next {
      padding-left: 0.75em;
      padding-right: 0.75em;
      white-space: nowrap;
    }
    
    .pagination-link.is-current {
      background-color: ' . $colors['complementary'] . ';
      border-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    
    .pagination-ellipsis {
      color: #b5b5b5;
      pointer-events: none;
    }
    
    .pagination-list {
      flex-wrap: wrap;
    }
    
    @media screen and (max-width: 768px) {
      .pagination {
        flex-wrap: wrap;
      }
    
      .pagination-previous,
    .pagination-next {
        flex-grow: 1;
        flex-shrink: 1;
      }
    
      .pagination-list li {
        flex-grow: 1;
        flex-shrink: 1;
      }
    }
    @media screen and (min-width: 769px), print {
      .pagination-list {
        flex-grow: 1;
        flex-shrink: 1;
        justify-content: flex-start;
        order: 1;
      }
    
      .pagination-previous {
        order: 2;
      }
    
      .pagination-next {
        order: 3;
      }
    
      .pagination {
        justify-content: space-between;
      }
      .pagination.is-centered .pagination-previous {
        order: 1;
      }
      .pagination.is-centered .pagination-list {
        justify-content: center;
        order: 2;
      }
      .pagination.is-centered .pagination-next {
        order: 3;
      }
      .pagination.is-right .pagination-previous {
        order: 1;
      }
      .pagination.is-right .pagination-next {
        order: 2;
      }
      .pagination.is-right .pagination-list {
        justify-content: flex-end;
        order: 3;
      }
    }
    .panel {
      font-size: 1rem;
    }
    .panel:not(:last-child) {
      margin-bottom: 1.5rem;
    }
    
    .panel-heading,
    .panel-tabs,
    .panel-block {
      border-bottom: 1px solid #dbdbdb;
      border-left: 1px solid #dbdbdb;
      border-right: 1px solid #dbdbdb;
    }
    .panel-heading:first-child,
    .panel-tabs:first-child,
    .panel-block:first-child {
      border-top: 1px solid #dbdbdb;
    }
    
    .panel-heading {
      background-color: whitesmoke;
      border-radius: 4px 4px 0 0;
      color: white;
      font-size: 1.25em;
      font-weight: 300;
      line-height: 1.25;
      padding: 0.5em 0.75em;
    }
    
    .panel-tabs {
      align-items: flex-end;
      display: flex;
      font-size: 0.875em;
      justify-content: center;
    }
    .panel-tabs a {
      border-bottom: 1px solid #dbdbdb;
      margin-bottom: -1px;
      padding: 0.5em;
    }
    .panel-tabs a.is-active {
      border-bottom-color: #4a4a4a;
      color: #363636;
    }
    
    .panel-list a {
      color: ' . $colors['white'] . ';
    }
    .panel-list a:hover {
      color: ' . $colors['complementary'] . ';
    }
    
    .panel-block {
      align-items: center;
      color: white;
      display: flex;
      justify-content: flex-start;
      padding: 0.5em 0.75em;
    }
    .panel-block input[type=checkbox] {
      margin-right: 0.75em;
    }
    .panel-block > .control {
      flex-grow: 1;
      flex-shrink: 1;
      width: 100%;
    }
    .panel-block.is-wrapped {
      flex-wrap: wrap;
    }
    .panel-block.is-active {
      border-left-color: ' . $colors['complementary'] . ';
      color: #363636;
    }
    .panel-block.is-active .panel-icon {
      color: ' . $colors['complementary'] . ';
    }
    
    a.panel-block,
    label.panel-block {
      cursor: pointer;
    }
    a.panel-block:hover,
    label.panel-block:hover {
      background-color: whitesmoke;
    }
    
    .panel-icon {
      display: inline-block;
      font-size: 14px;
      height: 1em;
      line-height: 1em;
      text-align: center;
      vertical-align: top;
      width: 1em;
      color: ' . $colors['white'] . ';
      margin-right: 0.75em;
    }
    .panel-icon .fa {
      font-size: inherit;
      line-height: inherit;
    }
    
    .tabs {
      -webkit-overflow-scrolling: touch;
      align-items: stretch;
      display: flex;
      font-size: 1rem;
      justify-content: space-between;
      overflow: hidden;
      overflow-x: auto;
      white-space: nowrap;
    }
    .tabs a {
      align-items: center;
      border-bottom-color: #dbdbdb;
      border-bottom-style: solid;
      border-bottom-width: 1px;
      color: ' . $colors['white'] . ';
      display: flex;
      justify-content: center;
      margin-bottom: -1px;
      padding: 0.5em 1em;
      vertical-align: top;
    }
    .tabs a:hover {
      border-bottom-color: white;
      color: white;
    }
    .tabs li {
      display: block;
    }
    .tabs li.is-active a {
      border-bottom-color: ' . $colors['complementary'] . ';
      color: ' . $colors['complementary'] . ';
    }
    .tabs ul {
      align-items: center;
      border-bottom-color: #dbdbdb;
      border-bottom-style: solid;
      border-bottom-width: 1px;
      display: flex;
      flex-grow: 1;
      flex-shrink: 0;
      justify-content: flex-start;
    }
    .tabs ul.is-left {
      padding-right: 0.75em;
    }
    .tabs ul.is-center {
      flex: none;
      justify-content: center;
      padding-left: 0.75em;
      padding-right: 0.75em;
    }
    .tabs ul.is-right {
      justify-content: flex-end;
      padding-left: 0.75em;
    }
    .tabs .icon:first-child {
      margin-right: 0.5em;
    }
    .tabs .icon:last-child {
      margin-left: 0.5em;
    }
    .tabs.is-centered ul {
      justify-content: center;
    }
    .tabs.is-right ul {
      justify-content: flex-end;
    }
    .tabs.is-boxed a {
      border: 1px solid transparent;
      border-radius: 4px 4px 0 0;
    }
    .tabs.is-boxed a:hover {
      background-color: whitesmoke;
      border-bottom-color: #dbdbdb;
    }
    .tabs.is-boxed li.is-active a {
      background-color: ' . $colors['white'] . ';
      border-color: #dbdbdb;
      border-bottom-color: transparent !important;
    }
    .tabs.is-fullwidth li {
      flex-grow: 1;
      flex-shrink: 0;
    }
    .tabs.is-toggle a {
      border-color: #dbdbdb;
      border-style: solid;
      border-width: 1px;
      margin-bottom: 0;
      position: relative;
    }
    .tabs.is-toggle a:hover {
      background-color: whitesmoke;
      border-color: #b5b5b5;
      z-index: 2;
    }
    .tabs.is-toggle li + li {
      margin-left: -1px;
    }
    .tabs.is-toggle li:first-child a {
      border-radius: 4px 0 0 4px;
    }
    .tabs.is-toggle li:last-child a {
      border-radius: 0 4px 4px 0;
    }
    .tabs.is-toggle li.is-active a {
      background-color: ' . $colors['complementary'] . ';
      border-color: ' . $colors['complementary'] . ';
      color: #fff;
      z-index: 1;
    }
    .tabs.is-toggle ul {
      border-bottom: none;
    }
    .tabs.is-toggle.is-toggle-rounded li:first-child a {
      border-bottom-left-radius: 290486px;
      border-top-left-radius: 290486px;
      padding-left: 1.25em;
    }
    .tabs.is-toggle.is-toggle-rounded li:last-child a {
      border-bottom-right-radius: 290486px;
      border-top-right-radius: 290486px;
      padding-right: 1.25em;
    }
    .tabs.is-small {
      font-size: 0.75rem;
    }
    .tabs.is-medium {
      font-size: 1.25rem;
    }
    .tabs.is-large {
      font-size: 1.5rem;
    }
    
    .column {
      display: block;
      flex-basis: 0;
      flex-grow: 1;
      flex-shrink: 1;
      padding: 0.75rem;
    }
    .columns.is-mobile > .column.is-narrow {
      flex: none;
    }
    .columns.is-mobile > .column.is-full {
      flex: none;
      width: 100%;
    }
    .columns.is-mobile > .column.is-three-quarters {
      flex: none;
      width: 75%;
    }
    .columns.is-mobile > .column.is-two-thirds {
      flex: none;
      width: 66.6666%;
    }
    .columns.is-mobile > .column.is-half {
      flex: none;
      width: 50%;
    }
    .columns.is-mobile > .column.is-one-third {
      flex: none;
      width: 33.3333%;
    }
    .columns.is-mobile > .column.is-one-quarter {
      flex: none;
      width: 25%;
    }
    .columns.is-mobile > .column.is-one-fifth {
      flex: none;
      width: 20%;
    }
    .columns.is-mobile > .column.is-two-fifths {
      flex: none;
      width: 40%;
    }
    .columns.is-mobile > .column.is-three-fifths {
      flex: none;
      width: 60%;
    }
    .columns.is-mobile > .column.is-four-fifths {
      flex: none;
      width: 80%;
    }
    .columns.is-mobile > .column.is-offset-three-quarters {
      margin-left: 75%;
    }
    .columns.is-mobile > .column.is-offset-two-thirds {
      margin-left: 66.6666%;
    }
    .columns.is-mobile > .column.is-offset-half {
      margin-left: 50%;
    }
    .columns.is-mobile > .column.is-offset-one-third {
      margin-left: 33.3333%;
    }
    .columns.is-mobile > .column.is-offset-one-quarter {
      margin-left: 25%;
    }
    .columns.is-mobile > .column.is-offset-one-fifth {
      margin-left: 20%;
    }
    .columns.is-mobile > .column.is-offset-two-fifths {
      margin-left: 40%;
    }
    .columns.is-mobile > .column.is-offset-three-fifths {
      margin-left: 60%;
    }
    .columns.is-mobile > .column.is-offset-four-fifths {
      margin-left: 80%;
    }
    .columns.is-mobile > .column.is-0 {
      flex: none;
      width: 0%;
    }
    .columns.is-mobile > .column.is-offset-0 {
      margin-left: 0%;
    }
    .columns.is-mobile > .column.is-1 {
      flex: none;
      width: 8.3333333333%;
    }
    .columns.is-mobile > .column.is-offset-1 {
      margin-left: 8.3333333333%;
    }
    .columns.is-mobile > .column.is-2 {
      flex: none;
      width: 16.6666666667%;
    }
    .columns.is-mobile > .column.is-offset-2 {
      margin-left: 16.6666666667%;
    }
    .columns.is-mobile > .column.is-3 {
      flex: none;
      width: 25%;
    }
    .columns.is-mobile > .column.is-offset-3 {
      margin-left: 25%;
    }
    .columns.is-mobile > .column.is-4 {
      flex: none;
      width: 33.3333333333%;
    }
    .columns.is-mobile > .column.is-offset-4 {
      margin-left: 33.3333333333%;
    }
    .columns.is-mobile > .column.is-5 {
      flex: none;
      width: 41.6666666667%;
    }
    .columns.is-mobile > .column.is-offset-5 {
      margin-left: 41.6666666667%;
    }
    .columns.is-mobile > .column.is-6 {
      flex: none;
      width: 50%;
    }
    .columns.is-mobile > .column.is-offset-6 {
      margin-left: 50%;
    }
    .columns.is-mobile > .column.is-7 {
      flex: none;
      width: 58.3333333333%;
    }
    .columns.is-mobile > .column.is-offset-7 {
      margin-left: 58.3333333333%;
    }
    .columns.is-mobile > .column.is-8 {
      flex: none;
      width: 66.6666666667%;
    }
    .columns.is-mobile > .column.is-offset-8 {
      margin-left: 66.6666666667%;
    }
    .columns.is-mobile > .column.is-9 {
      flex: none;
      width: 75%;
    }
    .columns.is-mobile > .column.is-offset-9 {
      margin-left: 75%;
    }
    .columns.is-mobile > .column.is-10 {
      flex: none;
      width: 83.3333333333%;
    }
    .columns.is-mobile > .column.is-offset-10 {
      margin-left: 83.3333333333%;
    }
    .columns.is-mobile > .column.is-11 {
      flex: none;
      width: 91.6666666667%;
    }
    .columns.is-mobile > .column.is-offset-11 {
      margin-left: 91.6666666667%;
    }
    .columns.is-mobile > .column.is-12 {
      flex: none;
      width: 100%;
    }
    .columns.is-mobile > .column.is-offset-12 {
      margin-left: 100%;
    }
    @media screen and (max-width: 768px) {
      .column.is-narrow-mobile {
        flex: none;
      }
      .column.is-full-mobile {
        flex: none;
        width: 100%;
      }
      .column.is-three-quarters-mobile {
        flex: none;
        width: 75%;
      }
      .column.is-two-thirds-mobile {
        flex: none;
        width: 66.6666%;
      }
      .column.is-half-mobile {
        flex: none;
        width: 50%;
      }
      .column.is-one-third-mobile {
        flex: none;
        width: 33.3333%;
      }
      .column.is-one-quarter-mobile {
        flex: none;
        width: 25%;
      }
      .column.is-one-fifth-mobile {
        flex: none;
        width: 20%;
      }
      .column.is-two-fifths-mobile {
        flex: none;
        width: 40%;
      }
      .column.is-three-fifths-mobile {
        flex: none;
        width: 60%;
      }
      .column.is-four-fifths-mobile {
        flex: none;
        width: 80%;
      }
      .column.is-offset-three-quarters-mobile {
        margin-left: 75%;
      }
      .column.is-offset-two-thirds-mobile {
        margin-left: 66.6666%;
      }
      .column.is-offset-half-mobile {
        margin-left: 50%;
      }
      .column.is-offset-one-third-mobile {
        margin-left: 33.3333%;
      }
      .column.is-offset-one-quarter-mobile {
        margin-left: 25%;
      }
      .column.is-offset-one-fifth-mobile {
        margin-left: 20%;
      }
      .column.is-offset-two-fifths-mobile {
        margin-left: 40%;
      }
      .column.is-offset-three-fifths-mobile {
        margin-left: 60%;
      }
      .column.is-offset-four-fifths-mobile {
        margin-left: 80%;
      }
      .column.is-0-mobile {
        flex: none;
        width: 0%;
      }
      .column.is-offset-0-mobile {
        margin-left: 0%;
      }
      .column.is-1-mobile {
        flex: none;
        width: 8.3333333333%;
      }
      .column.is-offset-1-mobile {
        margin-left: 8.3333333333%;
      }
      .column.is-2-mobile {
        flex: none;
        width: 16.6666666667%;
      }
      .column.is-offset-2-mobile {
        margin-left: 16.6666666667%;
      }
      .column.is-3-mobile {
        flex: none;
        width: 25%;
      }
      .column.is-offset-3-mobile {
        margin-left: 25%;
      }
      .column.is-4-mobile {
        flex: none;
        width: 33.3333333333%;
      }
      .column.is-offset-4-mobile {
        margin-left: 33.3333333333%;
      }
      .column.is-5-mobile {
        flex: none;
        width: 41.6666666667%;
      }
      .column.is-offset-5-mobile {
        margin-left: 41.6666666667%;
      }
      .column.is-6-mobile {
        flex: none;
        width: 50%;
      }
      .column.is-offset-6-mobile {
        margin-left: 50%;
      }
      .column.is-7-mobile {
        flex: none;
        width: 58.3333333333%;
      }
      .column.is-offset-7-mobile {
        margin-left: 58.3333333333%;
      }
      .column.is-8-mobile {
        flex: none;
        width: 66.6666666667%;
      }
      .column.is-offset-8-mobile {
        margin-left: 66.6666666667%;
      }
      .column.is-9-mobile {
        flex: none;
        width: 75%;
      }
      .column.is-offset-9-mobile {
        margin-left: 75%;
      }
      .column.is-10-mobile {
        flex: none;
        width: 83.3333333333%;
      }
      .column.is-offset-10-mobile {
        margin-left: 83.3333333333%;
      }
      .column.is-11-mobile {
        flex: none;
        width: 91.6666666667%;
      }
      .column.is-offset-11-mobile {
        margin-left: 91.6666666667%;
      }
      .column.is-12-mobile {
        flex: none;
        width: 100%;
      }
      .column.is-offset-12-mobile {
        margin-left: 100%;
      }
    }
    @media screen and (min-width: 769px), print {
      .column.is-narrow, .column.is-narrow-tablet {
        flex: none;
      }
      .column.is-full, .column.is-full-tablet {
        flex: none;
        width: 100%;
      }
      .column.is-three-quarters, .column.is-three-quarters-tablet {
        flex: none;
        width: 75%;
      }
      .column.is-two-thirds, .column.is-two-thirds-tablet {
        flex: none;
        width: 66.6666%;
      }
      .column.is-half, .column.is-half-tablet {
        flex: none;
        width: 50%;
      }
      .column.is-one-third, .column.is-one-third-tablet {
        flex: none;
        width: 33.3333%;
      }
      .column.is-one-quarter, .column.is-one-quarter-tablet {
        flex: none;
        width: 25%;
      }
      .column.is-one-fifth, .column.is-one-fifth-tablet {
        flex: none;
        width: 20%;
      }
      .column.is-two-fifths, .column.is-two-fifths-tablet {
        flex: none;
        width: 40%;
      }
      .column.is-three-fifths, .column.is-three-fifths-tablet {
        flex: none;
        width: 60%;
      }
      .column.is-four-fifths, .column.is-four-fifths-tablet {
        flex: none;
        width: 80%;
      }
      .column.is-offset-three-quarters, .column.is-offset-three-quarters-tablet {
        margin-left: 75%;
      }
      .column.is-offset-two-thirds, .column.is-offset-two-thirds-tablet {
        margin-left: 66.6666%;
      }
      .column.is-offset-half, .column.is-offset-half-tablet {
        margin-left: 50%;
      }
      .column.is-offset-one-third, .column.is-offset-one-third-tablet {
        margin-left: 33.3333%;
      }
      .column.is-offset-one-quarter, .column.is-offset-one-quarter-tablet {
        margin-left: 25%;
      }
      .column.is-offset-one-fifth, .column.is-offset-one-fifth-tablet {
        margin-left: 20%;
      }
      .column.is-offset-two-fifths, .column.is-offset-two-fifths-tablet {
        margin-left: 40%;
      }
      .column.is-offset-three-fifths, .column.is-offset-three-fifths-tablet {
        margin-left: 60%;
      }
      .column.is-offset-four-fifths, .column.is-offset-four-fifths-tablet {
        margin-left: 80%;
      }
      .column.is-0, .column.is-0-tablet {
        flex: none;
        width: 0%;
      }
      .column.is-offset-0, .column.is-offset-0-tablet {
        margin-left: 0%;
      }
      .column.is-1, .column.is-1-tablet {
        flex: none;
        width: 8.3333333333%;
      }
      .column.is-offset-1, .column.is-offset-1-tablet {
        margin-left: 8.3333333333%;
      }
      .column.is-2, .column.is-2-tablet {
        flex: none;
        width: 16.6666666667%;
      }
      .column.is-offset-2, .column.is-offset-2-tablet {
        margin-left: 16.6666666667%;
      }
      .column.is-3, .column.is-3-tablet {
        flex: none;
        width: 25%;
      }
      .column.is-offset-3, .column.is-offset-3-tablet {
        margin-left: 25%;
      }
      .column.is-4, .column.is-4-tablet {
        flex: none;
        width: 33.3333333333%;
      }
      .column.is-offset-4, .column.is-offset-4-tablet {
        margin-left: 33.3333333333%;
      }
      .column.is-5, .column.is-5-tablet {
        flex: none;
        width: 41.6666666667%;
      }
      .column.is-offset-5, .column.is-offset-5-tablet {
        margin-left: 41.6666666667%;
      }
      .column.is-6, .column.is-6-tablet {
        flex: none;
        width: 50%;
      }
      .column.is-offset-6, .column.is-offset-6-tablet {
        margin-left: 50%;
      }
      .column.is-7, .column.is-7-tablet {
        flex: none;
        width: 58.3333333333%;
      }
      .column.is-offset-7, .column.is-offset-7-tablet {
        margin-left: 58.3333333333%;
      }
      .column.is-8, .column.is-8-tablet {
        flex: none;
        width: 66.6666666667%;
      }
      .column.is-offset-8, .column.is-offset-8-tablet {
        margin-left: 66.6666666667%;
      }
      .column.is-9, .column.is-9-tablet {
        flex: none;
        width: 75%;
      }
      .column.is-offset-9, .column.is-offset-9-tablet {
        margin-left: 75%;
      }
      .column.is-10, .column.is-10-tablet {
        flex: none;
        width: 83.3333333333%;
      }
      .column.is-offset-10, .column.is-offset-10-tablet {
        margin-left: 83.3333333333%;
      }
      .column.is-11, .column.is-11-tablet {
        flex: none;
        width: 91.6666666667%;
      }
      .column.is-offset-11, .column.is-offset-11-tablet {
        margin-left: 91.6666666667%;
      }
      .column.is-12, .column.is-12-tablet {
        flex: none;
        width: 100%;
      }
      .column.is-offset-12, .column.is-offset-12-tablet {
        margin-left: 100%;
      }
    }
    @media screen and (max-width: 1023px) {
      .column.is-narrow-touch {
        flex: none;
      }
      .column.is-full-touch {
        flex: none;
        width: 100%;
      }
      .column.is-three-quarters-touch {
        flex: none;
        width: 75%;
      }
      .column.is-two-thirds-touch {
        flex: none;
        width: 66.6666%;
      }
      .column.is-half-touch {
        flex: none;
        width: 50%;
      }
      .column.is-one-third-touch {
        flex: none;
        width: 33.3333%;
      }
      .column.is-one-quarter-touch {
        flex: none;
        width: 25%;
      }
      .column.is-one-fifth-touch {
        flex: none;
        width: 20%;
      }
      .column.is-two-fifths-touch {
        flex: none;
        width: 40%;
      }
      .column.is-three-fifths-touch {
        flex: none;
        width: 60%;
      }
      .column.is-four-fifths-touch {
        flex: none;
        width: 80%;
      }
      .column.is-offset-three-quarters-touch {
        margin-left: 75%;
      }
      .column.is-offset-two-thirds-touch {
        margin-left: 66.6666%;
      }
      .column.is-offset-half-touch {
        margin-left: 50%;
      }
      .column.is-offset-one-third-touch {
        margin-left: 33.3333%;
      }
      .column.is-offset-one-quarter-touch {
        margin-left: 25%;
      }
      .column.is-offset-one-fifth-touch {
        margin-left: 20%;
      }
      .column.is-offset-two-fifths-touch {
        margin-left: 40%;
      }
      .column.is-offset-three-fifths-touch {
        margin-left: 60%;
      }
      .column.is-offset-four-fifths-touch {
        margin-left: 80%;
      }
      .column.is-0-touch {
        flex: none;
        width: 0%;
      }
      .column.is-offset-0-touch {
        margin-left: 0%;
      }
      .column.is-1-touch {
        flex: none;
        width: 8.3333333333%;
      }
      .column.is-offset-1-touch {
        margin-left: 8.3333333333%;
      }
      .column.is-2-touch {
        flex: none;
        width: 16.6666666667%;
      }
      .column.is-offset-2-touch {
        margin-left: 16.6666666667%;
      }
      .column.is-3-touch {
        flex: none;
        width: 25%;
      }
      .column.is-offset-3-touch {
        margin-left: 25%;
      }
      .column.is-4-touch {
        flex: none;
        width: 33.3333333333%;
      }
      .column.is-offset-4-touch {
        margin-left: 33.3333333333%;
      }
      .column.is-5-touch {
        flex: none;
        width: 41.6666666667%;
      }
      .column.is-offset-5-touch {
        margin-left: 41.6666666667%;
      }
      .column.is-6-touch {
        flex: none;
        width: 50%;
      }
      .column.is-offset-6-touch {
        margin-left: 50%;
      }
      .column.is-7-touch {
        flex: none;
        width: 58.3333333333%;
      }
      .column.is-offset-7-touch {
        margin-left: 58.3333333333%;
      }
      .column.is-8-touch {
        flex: none;
        width: 66.6666666667%;
      }
      .column.is-offset-8-touch {
        margin-left: 66.6666666667%;
      }
      .column.is-9-touch {
        flex: none;
        width: 75%;
      }
      .column.is-offset-9-touch {
        margin-left: 75%;
      }
      .column.is-10-touch {
        flex: none;
        width: 83.3333333333%;
      }
      .column.is-offset-10-touch {
        margin-left: 83.3333333333%;
      }
      .column.is-11-touch {
        flex: none;
        width: 91.6666666667%;
      }
      .column.is-offset-11-touch {
        margin-left: 91.6666666667%;
      }
      .column.is-12-touch {
        flex: none;
        width: 100%;
      }
      .column.is-offset-12-touch {
        margin-left: 100%;
      }
    }
    @media screen and (min-width: 1024px) {
      .column.is-narrow-desktop {
        flex: none;
      }
      .column.is-full-desktop {
        flex: none;
        width: 100%;
      }
      .column.is-three-quarters-desktop {
        flex: none;
        width: 75%;
      }
      .column.is-two-thirds-desktop {
        flex: none;
        width: 66.6666%;
      }
      .column.is-half-desktop {
        flex: none;
        width: 50%;
      }
      .column.is-one-third-desktop {
        flex: none;
        width: 33.3333%;
      }
      .column.is-one-quarter-desktop {
        flex: none;
        width: 25%;
      }
      .column.is-one-fifth-desktop {
        flex: none;
        width: 20%;
      }
      .column.is-two-fifths-desktop {
        flex: none;
        width: 40%;
      }
      .column.is-three-fifths-desktop {
        flex: none;
        width: 60%;
      }
      .column.is-four-fifths-desktop {
        flex: none;
        width: 80%;
      }
      .column.is-offset-three-quarters-desktop {
        margin-left: 75%;
      }
      .column.is-offset-two-thirds-desktop {
        margin-left: 66.6666%;
      }
      .column.is-offset-half-desktop {
        margin-left: 50%;
      }
      .column.is-offset-one-third-desktop {
        margin-left: 33.3333%;
      }
      .column.is-offset-one-quarter-desktop {
        margin-left: 25%;
      }
      .column.is-offset-one-fifth-desktop {
        margin-left: 20%;
      }
      .column.is-offset-two-fifths-desktop {
        margin-left: 40%;
      }
      .column.is-offset-three-fifths-desktop {
        margin-left: 60%;
      }
      .column.is-offset-four-fifths-desktop {
        margin-left: 80%;
      }
      .column.is-0-desktop {
        flex: none;
        width: 0%;
      }
      .column.is-offset-0-desktop {
        margin-left: 0%;
      }
      .column.is-1-desktop {
        flex: none;
        width: 8.3333333333%;
      }
      .column.is-offset-1-desktop {
        margin-left: 8.3333333333%;
      }
      .column.is-2-desktop {
        flex: none;
        width: 16.6666666667%;
      }
      .column.is-offset-2-desktop {
        margin-left: 16.6666666667%;
      }
      .column.is-3-desktop {
        flex: none;
        width: 25%;
      }
      .column.is-offset-3-desktop {
        margin-left: 25%;
      }
      .column.is-4-desktop {
        flex: none;
        width: 33.3333333333%;
      }
      .column.is-offset-4-desktop {
        margin-left: 33.3333333333%;
      }
      .column.is-5-desktop {
        flex: none;
        width: 41.6666666667%;
      }
      .column.is-offset-5-desktop {
        margin-left: 41.6666666667%;
      }
      .column.is-6-desktop {
        flex: none;
        width: 50%;
      }
      .column.is-offset-6-desktop {
        margin-left: 50%;
      }
      .column.is-7-desktop {
        flex: none;
        width: 58.3333333333%;
      }
      .column.is-offset-7-desktop {
        margin-left: 58.3333333333%;
      }
      .column.is-8-desktop {
        flex: none;
        width: 66.6666666667%;
      }
      .column.is-offset-8-desktop {
        margin-left: 66.6666666667%;
      }
      .column.is-9-desktop {
        flex: none;
        width: 75%;
      }
      .column.is-offset-9-desktop {
        margin-left: 75%;
      }
      .column.is-10-desktop {
        flex: none;
        width: 83.3333333333%;
      }
      .column.is-offset-10-desktop {
        margin-left: 83.3333333333%;
      }
      .column.is-11-desktop {
        flex: none;
        width: 91.6666666667%;
      }
      .column.is-offset-11-desktop {
        margin-left: 91.6666666667%;
      }
      .column.is-12-desktop {
        flex: none;
        width: 100%;
      }
      .column.is-offset-12-desktop {
        margin-left: 100%;
      }
    }
    @media screen and (min-width: 1216px) {
      .column.is-narrow-widescreen {
        flex: none;
      }
      .column.is-full-widescreen {
        flex: none;
        width: 100%;
      }
      .column.is-three-quarters-widescreen {
        flex: none;
        width: 75%;
      }
      .column.is-two-thirds-widescreen {
        flex: none;
        width: 66.6666%;
      }
      .column.is-half-widescreen {
        flex: none;
        width: 50%;
      }
      .column.is-one-third-widescreen {
        flex: none;
        width: 33.3333%;
      }
      .column.is-one-quarter-widescreen {
        flex: none;
        width: 25%;
      }
      .column.is-one-fifth-widescreen {
        flex: none;
        width: 20%;
      }
      .column.is-two-fifths-widescreen {
        flex: none;
        width: 40%;
      }
      .column.is-three-fifths-widescreen {
        flex: none;
        width: 60%;
      }
      .column.is-four-fifths-widescreen {
        flex: none;
        width: 80%;
      }
      .column.is-offset-three-quarters-widescreen {
        margin-left: 75%;
      }
      .column.is-offset-two-thirds-widescreen {
        margin-left: 66.6666%;
      }
      .column.is-offset-half-widescreen {
        margin-left: 50%;
      }
      .column.is-offset-one-third-widescreen {
        margin-left: 33.3333%;
      }
      .column.is-offset-one-quarter-widescreen {
        margin-left: 25%;
      }
      .column.is-offset-one-fifth-widescreen {
        margin-left: 20%;
      }
      .column.is-offset-two-fifths-widescreen {
        margin-left: 40%;
      }
      .column.is-offset-three-fifths-widescreen {
        margin-left: 60%;
      }
      .column.is-offset-four-fifths-widescreen {
        margin-left: 80%;
      }
      .column.is-0-widescreen {
        flex: none;
        width: 0%;
      }
      .column.is-offset-0-widescreen {
        margin-left: 0%;
      }
      .column.is-1-widescreen {
        flex: none;
        width: 8.3333333333%;
      }
      .column.is-offset-1-widescreen {
        margin-left: 8.3333333333%;
      }
      .column.is-2-widescreen {
        flex: none;
        width: 16.6666666667%;
      }
      .column.is-offset-2-widescreen {
        margin-left: 16.6666666667%;
      }
      .column.is-3-widescreen {
        flex: none;
        width: 25%;
      }
      .column.is-offset-3-widescreen {
        margin-left: 25%;
      }
      .column.is-4-widescreen {
        flex: none;
        width: 33.3333333333%;
      }
      .column.is-offset-4-widescreen {
        margin-left: 33.3333333333%;
      }
      .column.is-5-widescreen {
        flex: none;
        width: 41.6666666667%;
      }
      .column.is-offset-5-widescreen {
        margin-left: 41.6666666667%;
      }
      .column.is-6-widescreen {
        flex: none;
        width: 50%;
      }
      .column.is-offset-6-widescreen {
        margin-left: 50%;
      }
      .column.is-7-widescreen {
        flex: none;
        width: 58.3333333333%;
      }
      .column.is-offset-7-widescreen {
        margin-left: 58.3333333333%;
      }
      .column.is-8-widescreen {
        flex: none;
        width: 66.6666666667%;
      }
      .column.is-offset-8-widescreen {
        margin-left: 66.6666666667%;
      }
      .column.is-9-widescreen {
        flex: none;
        width: 75%;
      }
      .column.is-offset-9-widescreen {
        margin-left: 75%;
      }
      .column.is-10-widescreen {
        flex: none;
        width: 83.3333333333%;
      }
      .column.is-offset-10-widescreen {
        margin-left: 83.3333333333%;
      }
      .column.is-11-widescreen {
        flex: none;
        width: 91.6666666667%;
      }
      .column.is-offset-11-widescreen {
        margin-left: 91.6666666667%;
      }
      .column.is-12-widescreen {
        flex: none;
        width: 100%;
      }
      .column.is-offset-12-widescreen {
        margin-left: 100%;
      }
    }
    @media screen and (min-width: 1408px) {
      .column.is-narrow-fullhd {
        flex: none;
      }
      .column.is-full-fullhd {
        flex: none;
        width: 100%;
      }
      .column.is-three-quarters-fullhd {
        flex: none;
        width: 75%;
      }
      .column.is-two-thirds-fullhd {
        flex: none;
        width: 66.6666%;
      }
      .column.is-half-fullhd {
        flex: none;
        width: 50%;
      }
      .column.is-one-third-fullhd {
        flex: none;
        width: 33.3333%;
      }
      .column.is-one-quarter-fullhd {
        flex: none;
        width: 25%;
      }
      .column.is-one-fifth-fullhd {
        flex: none;
        width: 20%;
      }
      .column.is-two-fifths-fullhd {
        flex: none;
        width: 40%;
      }
      .column.is-three-fifths-fullhd {
        flex: none;
        width: 60%;
      }
      .column.is-four-fifths-fullhd {
        flex: none;
        width: 80%;
      }
      .column.is-offset-three-quarters-fullhd {
        margin-left: 75%;
      }
      .column.is-offset-two-thirds-fullhd {
        margin-left: 66.6666%;
      }
      .column.is-offset-half-fullhd {
        margin-left: 50%;
      }
      .column.is-offset-one-third-fullhd {
        margin-left: 33.3333%;
      }
      .column.is-offset-one-quarter-fullhd {
        margin-left: 25%;
      }
      .column.is-offset-one-fifth-fullhd {
        margin-left: 20%;
      }
      .column.is-offset-two-fifths-fullhd {
        margin-left: 40%;
      }
      .column.is-offset-three-fifths-fullhd {
        margin-left: 60%;
      }
      .column.is-offset-four-fifths-fullhd {
        margin-left: 80%;
      }
      .column.is-0-fullhd {
        flex: none;
        width: 0%;
      }
      .column.is-offset-0-fullhd {
        margin-left: 0%;
      }
      .column.is-1-fullhd {
        flex: none;
        width: 8.3333333333%;
      }
      .column.is-offset-1-fullhd {
        margin-left: 8.3333333333%;
      }
      .column.is-2-fullhd {
        flex: none;
        width: 16.6666666667%;
      }
      .column.is-offset-2-fullhd {
        margin-left: 16.6666666667%;
      }
      .column.is-3-fullhd {
        flex: none;
        width: 25%;
      }
      .column.is-offset-3-fullhd {
        margin-left: 25%;
      }
      .column.is-4-fullhd {
        flex: none;
        width: 33.3333333333%;
      }
      .column.is-offset-4-fullhd {
        margin-left: 33.3333333333%;
      }
      .column.is-5-fullhd {
        flex: none;
        width: 41.6666666667%;
      }
      .column.is-offset-5-fullhd {
        margin-left: 41.6666666667%;
      }
      .column.is-6-fullhd {
        flex: none;
        width: 50%;
      }
      .column.is-offset-6-fullhd {
        margin-left: 50%;
      }
      .column.is-7-fullhd {
        flex: none;
        width: 58.3333333333%;
      }
      .column.is-offset-7-fullhd {
        margin-left: 58.3333333333%;
      }
      .column.is-8-fullhd {
        flex: none;
        width: 66.6666666667%;
      }
      .column.is-offset-8-fullhd {
        margin-left: 66.6666666667%;
      }
      .column.is-9-fullhd {
        flex: none;
        width: 75%;
      }
      .column.is-offset-9-fullhd {
        margin-left: 75%;
      }
      .column.is-10-fullhd {
        flex: none;
        width: 83.3333333333%;
      }
      .column.is-offset-10-fullhd {
        margin-left: 83.3333333333%;
      }
      .column.is-11-fullhd {
        flex: none;
        width: 91.6666666667%;
      }
      .column.is-offset-11-fullhd {
        margin-left: 91.6666666667%;
      }
      .column.is-12-fullhd {
        flex: none;
        width: 100%;
      }
      .column.is-offset-12-fullhd {
        margin-left: 100%;
      }
    }
    
    .columns {
      margin-left: -0.75rem;
      margin-right: -0.75rem;
      margin-top: -0.75rem;
    }
    .columns:last-child {
      margin-bottom: -0.75rem;
    }
    .columns:not(:last-child) {
      margin-bottom: calc(1.5rem - 0.75rem);
    }
    .columns.is-centered {
      justify-content: center;
    }
    .columns.is-gapless {
      margin-left: 0;
      margin-right: 0;
      margin-top: 0;
    }
    .columns.is-gapless > .column {
      margin: 0;
      padding: 0 !important;
    }
    .columns.is-gapless:not(:last-child) {
      margin-bottom: 1.5rem;
    }
    .columns.is-gapless:last-child {
      margin-bottom: 0;
    }
    .columns.is-mobile {
      display: flex;
    }
    .columns.is-multiline {
      flex-wrap: wrap;
    }
    .columns.is-vcentered {
      align-items: center;
    }
    @media screen and (min-width: 769px), print {
      .columns:not(.is-desktop) {
        display: flex;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-desktop {
        display: flex;
      }
    }
    
    .columns.is-variable {
      --columnGap: 0.75rem;
      margin-left: calc(-1 * var(--columnGap));
      margin-right: calc(-1 * var(--columnGap));
    }
    .columns.is-variable .column {
      padding-left: var(--columnGap);
      padding-right: var(--columnGap);
    }
    .columns.is-variable.is-0 {
      --columnGap: 0rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-0-mobile {
        --columnGap: 0rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-0-tablet {
        --columnGap: 0rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-0-tablet-only {
        --columnGap: 0rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-0-touch {
        --columnGap: 0rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-0-desktop {
        --columnGap: 0rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-0-desktop-only {
        --columnGap: 0rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-0-widescreen {
        --columnGap: 0rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-0-widescreen-only {
        --columnGap: 0rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-0-fullhd {
        --columnGap: 0rem;
      }
    }
    .columns.is-variable.is-1 {
      --columnGap: 0.25rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-1-mobile {
        --columnGap: 0.25rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-1-tablet {
        --columnGap: 0.25rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-1-tablet-only {
        --columnGap: 0.25rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-1-touch {
        --columnGap: 0.25rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-1-desktop {
        --columnGap: 0.25rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-1-desktop-only {
        --columnGap: 0.25rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-1-widescreen {
        --columnGap: 0.25rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-1-widescreen-only {
        --columnGap: 0.25rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-1-fullhd {
        --columnGap: 0.25rem;
      }
    }
    .columns.is-variable.is-2 {
      --columnGap: 0.5rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-2-mobile {
        --columnGap: 0.5rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-2-tablet {
        --columnGap: 0.5rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-2-tablet-only {
        --columnGap: 0.5rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-2-touch {
        --columnGap: 0.5rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-2-desktop {
        --columnGap: 0.5rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-2-desktop-only {
        --columnGap: 0.5rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-2-widescreen {
        --columnGap: 0.5rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-2-widescreen-only {
        --columnGap: 0.5rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-2-fullhd {
        --columnGap: 0.5rem;
      }
    }
    .columns.is-variable.is-3 {
      --columnGap: 0.75rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-3-mobile {
        --columnGap: 0.75rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-3-tablet {
        --columnGap: 0.75rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-3-tablet-only {
        --columnGap: 0.75rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-3-touch {
        --columnGap: 0.75rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-3-desktop {
        --columnGap: 0.75rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-3-desktop-only {
        --columnGap: 0.75rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-3-widescreen {
        --columnGap: 0.75rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-3-widescreen-only {
        --columnGap: 0.75rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-3-fullhd {
        --columnGap: 0.75rem;
      }
    }
    .columns.is-variable.is-4 {
      --columnGap: 1rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-4-mobile {
        --columnGap: 1rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-4-tablet {
        --columnGap: 1rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-4-tablet-only {
        --columnGap: 1rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-4-touch {
        --columnGap: 1rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-4-desktop {
        --columnGap: 1rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-4-desktop-only {
        --columnGap: 1rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-4-widescreen {
        --columnGap: 1rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-4-widescreen-only {
        --columnGap: 1rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-4-fullhd {
        --columnGap: 1rem;
      }
    }
    .columns.is-variable.is-5 {
      --columnGap: 1.25rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-5-mobile {
        --columnGap: 1.25rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-5-tablet {
        --columnGap: 1.25rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-5-tablet-only {
        --columnGap: 1.25rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-5-touch {
        --columnGap: 1.25rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-5-desktop {
        --columnGap: 1.25rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-5-desktop-only {
        --columnGap: 1.25rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-5-widescreen {
        --columnGap: 1.25rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-5-widescreen-only {
        --columnGap: 1.25rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-5-fullhd {
        --columnGap: 1.25rem;
      }
    }
    .columns.is-variable.is-6 {
      --columnGap: 1.5rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-6-mobile {
        --columnGap: 1.5rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-6-tablet {
        --columnGap: 1.5rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-6-tablet-only {
        --columnGap: 1.5rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-6-touch {
        --columnGap: 1.5rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-6-desktop {
        --columnGap: 1.5rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-6-desktop-only {
        --columnGap: 1.5rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-6-widescreen {
        --columnGap: 1.5rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-6-widescreen-only {
        --columnGap: 1.5rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-6-fullhd {
        --columnGap: 1.5rem;
      }
    }
    .columns.is-variable.is-7 {
      --columnGap: 1.75rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-7-mobile {
        --columnGap: 1.75rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-7-tablet {
        --columnGap: 1.75rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-7-tablet-only {
        --columnGap: 1.75rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-7-touch {
        --columnGap: 1.75rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-7-desktop {
        --columnGap: 1.75rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-7-desktop-only {
        --columnGap: 1.75rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-7-widescreen {
        --columnGap: 1.75rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-7-widescreen-only {
        --columnGap: 1.75rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-7-fullhd {
        --columnGap: 1.75rem;
      }
    }
    .columns.is-variable.is-8 {
      --columnGap: 2rem;
    }
    @media screen and (max-width: 768px) {
      .columns.is-variable.is-8-mobile {
        --columnGap: 2rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .columns.is-variable.is-8-tablet {
        --columnGap: 2rem;
      }
    }
    @media screen and (min-width: 769px) and (max-width: 1023px) {
      .columns.is-variable.is-8-tablet-only {
        --columnGap: 2rem;
      }
    }
    @media screen and (max-width: 1023px) {
      .columns.is-variable.is-8-touch {
        --columnGap: 2rem;
      }
    }
    @media screen and (min-width: 1024px) {
      .columns.is-variable.is-8-desktop {
        --columnGap: 2rem;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1215px) {
      .columns.is-variable.is-8-desktop-only {
        --columnGap: 2rem;
      }
    }
    @media screen and (min-width: 1216px) {
      .columns.is-variable.is-8-widescreen {
        --columnGap: 2rem;
      }
    }
    @media screen and (min-width: 1216px) and (max-width: 1407px) {
      .columns.is-variable.is-8-widescreen-only {
        --columnGap: 2rem;
      }
    }
    @media screen and (min-width: 1408px) {
      .columns.is-variable.is-8-fullhd {
        --columnGap: 2rem;
      }
    }
    
    .tile {
      align-items: stretch;
      display: block;
      flex-basis: 0;
      flex-grow: 1;
      flex-shrink: 1;
      min-height: min-content;
    }
    .tile.is-ancestor {
      margin-left: -0.75rem;
      margin-right: -0.75rem;
      margin-top: -0.75rem;
    }
    .tile.is-ancestor:last-child {
      margin-bottom: -0.75rem;
    }
    .tile.is-ancestor:not(:last-child) {
      margin-bottom: 0.75rem;
    }
    .tile.is-child {
      margin: 0 !important;
    }
    .tile.is-parent {
      padding: 0.75rem;
    }
    .tile.is-vertical {
      flex-direction: column;
    }
    .tile.is-vertical > .tile.is-child:not(:last-child) {
      margin-bottom: 1.5rem !important;
    }
    @media screen and (min-width: 769px), print {
      .tile:not(.is-child) {
        display: flex;
      }
      .tile.is-1 {
        flex: none;
        width: 8.3333333333%;
      }
      .tile.is-2 {
        flex: none;
        width: 16.6666666667%;
      }
      .tile.is-3 {
        flex: none;
        width: 25%;
      }
      .tile.is-4 {
        flex: none;
        width: 33.3333333333%;
      }
      .tile.is-5 {
        flex: none;
        width: 41.6666666667%;
      }
      .tile.is-6 {
        flex: none;
        width: 50%;
      }
      .tile.is-7 {
        flex: none;
        width: 58.3333333333%;
      }
      .tile.is-8 {
        flex: none;
        width: 66.6666666667%;
      }
      .tile.is-9 {
        flex: none;
        width: 75%;
      }
      .tile.is-10 {
        flex: none;
        width: 83.3333333333%;
      }
      .tile.is-11 {
        flex: none;
        width: 91.6666666667%;
      }
      .tile.is-12 {
        flex: none;
        width: 100%;
      }
    }
    
    .hero {
      align-items: stretch;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .hero .navbar {
      background: none;
    }
    .hero .tabs ul {
      border-bottom: none;
    }
    .hero.is-white {
      background-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .hero.is-white a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-white strong {
      color: inherit;
    }
    .hero.is-white .title {
      color: #0a0a0a;
    }
    .hero.is-white .subtitle {
      color: rgba(10, 10, 10, 0.9);
    }
    .hero.is-white .subtitle a:not(.button),
    .hero.is-white .subtitle strong {
      color: #0a0a0a;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-white .navbar-menu {
        background-color: ' . $colors['white'] . ';
      }
    }
    .hero.is-white .navbar-item,
    .hero.is-white .navbar-link {
      color: rgba(10, 10, 10, 0.7);
    }
    .hero.is-white a.navbar-item:hover, .hero.is-white a.navbar-item.is-active,
    .hero.is-white .navbar-link:hover,
    .hero.is-white .navbar-link.is-active {
      background-color: #f2f2f2;
      color: #0a0a0a;
    }
    .hero.is-white .tabs a {
      color: #0a0a0a;
      opacity: 0.9;
    }
    .hero.is-white .tabs a:hover {
      opacity: 1;
    }
    .hero.is-white .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-white .tabs.is-boxed a, .hero.is-white .tabs.is-toggle a {
      color: #0a0a0a;
    }
    .hero.is-white .tabs.is-boxed a:hover, .hero.is-white .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-white .tabs.is-boxed li.is-active a, .hero.is-white .tabs.is-boxed li.is-active a:hover, .hero.is-white .tabs.is-toggle li.is-active a, .hero.is-white .tabs.is-toggle li.is-active a:hover {
      background-color: #0a0a0a;
      border-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .hero.is-white.is-bold {
      background-image: linear-gradient(141deg, #e8e3e4 0%, ' . $colors['white'] . ' 71%, white 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-white.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #e8e3e4 0%, ' . $colors['white'] . ' 71%, white 100%);
      }
    }
    .hero.is-black {
      background-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
    .hero.is-black a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-black strong {
      color: inherit;
    }
    .hero.is-black .title {
      color: ' . $colors['white'] . ';
    }
    .hero.is-black .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-black .subtitle a:not(.button),
    .hero.is-black .subtitle strong {
      color: ' . $colors['white'] . ';
    }
    @media screen and (max-width: 1023px) {
      .hero.is-black .navbar-menu {
        background-color: #0a0a0a;
      }
    }
    .hero.is-black .navbar-item,
    .hero.is-black .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-black a.navbar-item:hover, .hero.is-black a.navbar-item.is-active,
    .hero.is-black .navbar-link:hover,
    .hero.is-black .navbar-link.is-active {
      background-color: black;
      color: ' . $colors['white'] . ';
    }
    .hero.is-black .tabs a {
      color: ' . $colors['white'] . ';
      opacity: 0.9;
    }
    .hero.is-black .tabs a:hover {
      opacity: 1;
    }
    .hero.is-black .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-black .tabs.is-boxed a, .hero.is-black .tabs.is-toggle a {
      color: ' . $colors['white'] . ';
    }
    .hero.is-black .tabs.is-boxed a:hover, .hero.is-black .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-black .tabs.is-boxed li.is-active a, .hero.is-black .tabs.is-boxed li.is-active a:hover, .hero.is-black .tabs.is-toggle li.is-active a, .hero.is-black .tabs.is-toggle li.is-active a:hover {
      background-color: ' . $colors['white'] . ';
      border-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
    .hero.is-black.is-bold {
      background-image: linear-gradient(141deg, black 0%, #0a0a0a 71%, #181616 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-black.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, black 0%, #0a0a0a 71%, #181616 100%);
      }
    }
    .hero.is-light {
      background-color: whitesmoke;
      color: #363636;
    }
    .hero.is-light a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-light strong {
      color: inherit;
    }
    .hero.is-light .title {
      color: #363636;
    }
    .hero.is-light .subtitle {
      color: rgba(54, 54, 54, 0.9);
    }
    .hero.is-light .subtitle a:not(.button),
    .hero.is-light .subtitle strong {
      color: #363636;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-light .navbar-menu {
        background-color: whitesmoke;
      }
    }
    .hero.is-light .navbar-item,
    .hero.is-light .navbar-link {
      color: rgba(54, 54, 54, 0.7);
    }
    .hero.is-light a.navbar-item:hover, .hero.is-light a.navbar-item.is-active,
    .hero.is-light .navbar-link:hover,
    .hero.is-light .navbar-link.is-active {
      background-color: #e8e8e8;
      color: #363636;
    }
    .hero.is-light .tabs a {
      color: #363636;
      opacity: 0.9;
    }
    .hero.is-light .tabs a:hover {
      opacity: 1;
    }
    .hero.is-light .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-light .tabs.is-boxed a, .hero.is-light .tabs.is-toggle a {
      color: #363636;
    }
    .hero.is-light .tabs.is-boxed a:hover, .hero.is-light .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-light .tabs.is-boxed li.is-active a, .hero.is-light .tabs.is-boxed li.is-active a:hover, .hero.is-light .tabs.is-toggle li.is-active a, .hero.is-light .tabs.is-toggle li.is-active a:hover {
      background-color: #363636;
      border-color: #363636;
      color: whitesmoke;
    }
    .hero.is-light.is-bold {
      background-image: linear-gradient(141deg, #dfd8d9 0%, whitesmoke 71%, white 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-light.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #dfd8d9 0%, whitesmoke 71%, white 100%);
      }
    }
    .hero.is-dark {
      background-color: #363636;
      color: whitesmoke;
    }
    .hero.is-dark a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-dark strong {
      color: inherit;
    }
    .hero.is-dark .title {
      color: whitesmoke;
    }
    .hero.is-dark .subtitle {
      color: rgba(245, 245, 245, 0.9);
    }
    .hero.is-dark .subtitle a:not(.button),
    .hero.is-dark .subtitle strong {
      color: whitesmoke;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-dark .navbar-menu {
        background-color: #363636;
      }
    }
    .hero.is-dark .navbar-item,
    .hero.is-dark .navbar-link {
      color: rgba(245, 245, 245, 0.7);
    }
    .hero.is-dark a.navbar-item:hover, .hero.is-dark a.navbar-item.is-active,
    .hero.is-dark .navbar-link:hover,
    .hero.is-dark .navbar-link.is-active {
      background-color: #292929;
      color: whitesmoke;
    }
    .hero.is-dark .tabs a {
      color: whitesmoke;
      opacity: 0.9;
    }
    .hero.is-dark .tabs a:hover {
      opacity: 1;
    }
    .hero.is-dark .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-dark .tabs.is-boxed a, .hero.is-dark .tabs.is-toggle a {
      color: whitesmoke;
    }
    .hero.is-dark .tabs.is-boxed a:hover, .hero.is-dark .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-dark .tabs.is-boxed li.is-active a, .hero.is-dark .tabs.is-boxed li.is-active a:hover, .hero.is-dark .tabs.is-toggle li.is-active a, .hero.is-dark .tabs.is-toggle li.is-active a:hover {
      background-color: whitesmoke;
      border-color: whitesmoke;
      color: #363636;
    }
    .hero.is-dark.is-bold {
      background-image: linear-gradient(141deg, #1f191a 0%, #363636 71%, #46403f 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-dark.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #1f191a 0%, #363636 71%, #46403f 100%);
      }
    }
    .hero.is-primary {
      background-color: ' . $colors['primary'] . ';
      color: #fff;
    }
    .hero.is-primary a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-primary strong {
      color: inherit;
    }
    .hero.is-primary .title {
      color: #fff;
    }
    .hero.is-primary .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-primary .subtitle a:not(.button),
    .hero.is-primary .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-primary .navbar-menu {
        background-color: ' . $colors['primary'] . ';
      }
    }
    .hero.is-primary .navbar-item,
    .hero.is-primary .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-primary a.navbar-item:hover, .hero.is-primary a.navbar-item.is-active,
    .hero.is-primary .navbar-link:hover,
    .hero.is-primary .navbar-link.is-active {
      background-color: #9d9d9d;
      color: #fff;
    }
    .hero.is-primary .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-primary .tabs a:hover {
      opacity: 1;
    }
    .hero.is-primary .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-primary .tabs.is-boxed a, .hero.is-primary .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-primary .tabs.is-boxed a:hover, .hero.is-primary .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-primary .tabs.is-boxed li.is-active a, .hero.is-primary .tabs.is-boxed li.is-active a:hover, .hero.is-primary .tabs.is-toggle li.is-active a, .hero.is-primary .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['primary'] . ';
    }
    .hero.is-primary.is-bold {
      background-image: linear-gradient(141deg, #9c8589 0%, ' . $colors['primary'] . ' 71%, #bab4b3 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-primary.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #9c8589 0%, ' . $colors['primary'] . ' 71%, #bab4b3 100%);
      }
    }
    .hero.is-link {
      background-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
    .hero.is-link a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-link strong {
      color: inherit;
    }
    .hero.is-link .title {
      color: #fff;
    }
    .hero.is-link .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-link .subtitle a:not(.button),
    .hero.is-link .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-link .navbar-menu {
        background-color: ' . $colors['complementary'] . ';
      }
    }
    .hero.is-link .navbar-item,
    .hero.is-link .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-link a.navbar-item:hover, .hero.is-link a.navbar-item.is-active,
    .hero.is-link .navbar-link:hover,
    .hero.is-link .navbar-link.is-active {
      background-color: #bfbfbf;
      color: #fff;
    }
    .hero.is-link .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-link .tabs a:hover {
      opacity: 1;
    }
    .hero.is-link .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-link .tabs.is-boxed a, .hero.is-link .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-link .tabs.is-boxed a:hover, .hero.is-link .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-link .tabs.is-boxed li.is-active a, .hero.is-link .tabs.is-boxed li.is-active a:hover, .hero.is-link .tabs.is-toggle li.is-active a, .hero.is-link .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['complementary'] . ';
    }
    .hero.is-link.is-bold {
      background-image: linear-gradient(141deg, #baabad 0%, ' . $colors['complementary'] . ' 71%, #dbd7d7 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-link.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #baabad 0%, ' . $colors['complementary'] . ' 71%, #dbd7d7 100%);
      }
    }
    .hero.is-info {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .hero.is-info a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-info strong {
      color: inherit;
    }
    .hero.is-info .title {
      color: #fff;
    }
    .hero.is-info .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-info .subtitle a:not(.button),
    .hero.is-info .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-info .navbar-menu {
        background-color: ' . $colors['cyan'] . ';
      }
    }
    .hero.is-info .navbar-item,
    .hero.is-info .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-info a.navbar-item:hover, .hero.is-info a.navbar-item.is-active,
    .hero.is-info .navbar-link:hover,
    .hero.is-info .navbar-link.is-active {
      background-color: #4b6c70;
      color: #fff;
    }
    .hero.is-info .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-info .tabs a:hover {
      opacity: 1;
    }
    .hero.is-info .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-info .tabs.is-boxed a, .hero.is-info .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-info .tabs.is-boxed a:hover, .hero.is-info .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-info .tabs.is-boxed li.is-active a, .hero.is-info .tabs.is-boxed li.is-active a:hover, .hero.is-info .tabs.is-toggle li.is-active a, .hero.is-info .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['cyan'] . ';
    }
    .hero.is-info.is-bold {
      background-image: linear-gradient(141deg, #396865 0%, ' . $colors['cyan'] . ' 71%, #598594 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-info.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #396865 0%, ' . $colors['cyan'] . ' 71%, #598594 100%);
      }
    }
    .hero.is-success {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .hero.is-success a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-success strong {
      color: inherit;
    }
    .hero.is-success .title {
      color: #fff;
    }
    .hero.is-success .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-success .subtitle a:not(.button),
    .hero.is-success .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-success .navbar-menu {
        background-color: ' . $colors['green'] . ';
      }
    }
    .hero.is-success .navbar-item,
    .hero.is-success .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-success a.navbar-item:hover, .hero.is-success a.navbar-item.is-active,
    .hero.is-success .navbar-link:hover,
    .hero.is-success .navbar-link.is-active {
      background-color: #5e9665;
      color: #fff;
    }
    .hero.is-success .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-success .tabs a:hover {
      opacity: 1;
    }
    .hero.is-success .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-success .tabs.is-boxed a, .hero.is-success .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-success .tabs.is-boxed a:hover, .hero.is-success .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-success .tabs.is-boxed li.is-active a, .hero.is-success .tabs.is-boxed li.is-active a:hover, .hero.is-success .tabs.is-toggle li.is-active a, .hero.is-success .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['green'] . ';
    }
    .hero.is-success.is-bold {
      background-image: linear-gradient(141deg, #4c9149 0%, ' . $colors['green'] . ' 71%, #75b187 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-success.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #4c9149 0%, ' . $colors['green'] . ' 71%, #75b187 100%);
      }
    }
    .hero.is-warning {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-warning a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-warning strong {
      color: inherit;
    }
    .hero.is-warning .title {
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-warning .subtitle {
      color: rgba(0, 0, 0, 0.9);
    }
    .hero.is-warning .subtitle a:not(.button),
    .hero.is-warning .subtitle strong {
      color: rgba(0, 0, 0, 0.7);
    }
    @media screen and (max-width: 1023px) {
      .hero.is-warning .navbar-menu {
        background-color: ' . $colors['yellow'] . ';
      }
    }
    .hero.is-warning .navbar-item,
    .hero.is-warning .navbar-link {
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-warning a.navbar-item:hover, .hero.is-warning a.navbar-item.is-active,
    .hero.is-warning .navbar-link:hover,
    .hero.is-warning .navbar-link.is-active {
      background-color: #cac378;
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-warning .tabs a {
      color: rgba(0, 0, 0, 0.7);
      opacity: 0.9;
    }
    .hero.is-warning .tabs a:hover {
      opacity: 1;
    }
    .hero.is-warning .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-warning .tabs.is-boxed a, .hero.is-warning .tabs.is-toggle a {
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-warning .tabs.is-boxed a:hover, .hero.is-warning .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-warning .tabs.is-boxed li.is-active a, .hero.is-warning .tabs.is-boxed li.is-active a:hover, .hero.is-warning .tabs.is-toggle li.is-active a, .hero.is-warning .tabs.is-toggle li.is-active a:hover {
      background-color: rgba(0, 0, 0, 0.7);
      border-color: rgba(0, 0, 0, 0.7);
      color: ' . $colors['yellow'] . ';
    }
    .hero.is-warning.is-bold {
      background-image: linear-gradient(141deg, #cdb15b 0%, ' . $colors['yellow'] . ' 71%, #d6dc99 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-warning.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #cdb15b 0%, ' . $colors['yellow'] . ' 71%, #d6dc99 100%);
      }
    }
    .hero.is-danger {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .hero.is-danger a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-danger strong {
      color: inherit;
    }
    .hero.is-danger .title {
      color: #fff;
    }
    .hero.is-danger .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-danger .subtitle a:not(.button),
    .hero.is-danger .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-danger .navbar-menu {
        background-color: ' . $colors['red'] . ';
      }
    }
    .hero.is-danger .navbar-item,
    .hero.is-danger .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-danger a.navbar-item:hover, .hero.is-danger a.navbar-item.is-active,
    .hero.is-danger .navbar-link:hover,
    .hero.is-danger .navbar-link.is-active {
      background-color: #ca7b78;
      color: #fff;
    }
    .hero.is-danger .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-danger .tabs a:hover {
      opacity: 1;
    }
    .hero.is-danger .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-danger .tabs.is-boxed a, .hero.is-danger .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-danger .tabs.is-boxed a:hover, .hero.is-danger .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-danger .tabs.is-boxed li.is-active a, .hero.is-danger .tabs.is-boxed li.is-active a:hover, .hero.is-danger .tabs.is-toggle li.is-active a, .hero.is-danger .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['red'] . ';
    }
    .hero.is-danger.is-bold {
      background-image: linear-gradient(141deg, #cd5b69 0%, ' . $colors['red'] . ' 71%, #dca799 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-danger.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #cd5b69 0%, ' . $colors['red'] . ' 71%, #dca799 100%);
      }
    }
    .hero.is-lightblue {
      background-color: ' . $colors['lightblue'] . ';
      color: #fff;
    }
    .hero.is-lightblue a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-lightblue strong {
      color: inherit;
    }
    .hero.is-lightblue .title {
      color: #fff;
    }
    .hero.is-lightblue .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-lightblue .subtitle a:not(.button),
    .hero.is-lightblue .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-lightblue .navbar-menu {
        background-color: ' . $colors['lightblue'] . ';
      }
    }
    .hero.is-lightblue .navbar-item,
    .hero.is-lightblue .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-lightblue a.navbar-item:hover, .hero.is-lightblue a.navbar-item.is-active,
    .hero.is-lightblue .navbar-link:hover,
    .hero.is-lightblue .navbar-link.is-active {
      background-color: #526678;
      color: #fff;
    }
    .hero.is-lightblue .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-lightblue .tabs a:hover {
      opacity: 1;
    }
    .hero.is-lightblue .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-lightblue .tabs.is-boxed a, .hero.is-lightblue .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-lightblue .tabs.is-boxed a:hover, .hero.is-lightblue .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-lightblue .tabs.is-boxed li.is-active a, .hero.is-lightblue .tabs.is-boxed li.is-active a:hover, .hero.is-lightblue .tabs.is-toggle li.is-active a, .hero.is-lightblue .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['lightblue'] . ';
    }
    .hero.is-lightblue.is-bold {
      background-image: linear-gradient(141deg, #3f6271 0%, ' . $colors['lightblue'] . ' 71%, #60769c 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-lightblue.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #3f6271 0%, ' . $colors['lightblue'] . ' 71%, #60769c 100%);
      }
    }
    .hero.is-purple {
      background-color: ' . $colors['purple'] . ';
      color: #fff;
    }
    .hero.is-purple a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-purple strong {
      color: inherit;
    }
    .hero.is-purple .title {
      color: #fff;
    }
    .hero.is-purple .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-purple .subtitle a:not(.button),
    .hero.is-purple .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-purple .navbar-menu {
        background-color: ' . $colors['purple'] . ';
      }
    }
    .hero.is-purple .navbar-item,
    .hero.is-purple .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-purple a.navbar-item:hover, .hero.is-purple a.navbar-item.is-active,
    .hero.is-purple .navbar-link:hover,
    .hero.is-purple .navbar-link.is-active {
      background-color: #69587f;
      color: #fff;
    }
    .hero.is-purple .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-purple .tabs a:hover {
      opacity: 1;
    }
    .hero.is-purple .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-purple .tabs.is-boxed a, .hero.is-purple .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-purple .tabs.is-boxed a:hover, .hero.is-purple .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-purple .tabs.is-boxed li.is-active a, .hero.is-purple .tabs.is-boxed li.is-active a:hover, .hero.is-purple .tabs.is-toggle li.is-active a, .hero.is-purple .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['purple'] . ';
    }
    .hero.is-purple.is-bold {
      background-image: linear-gradient(141deg, #524479 0%, ' . $colors['purple'] . ' 71%, #8a68a1 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-purple.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #524479 0%, ' . $colors['purple'] . ' 71%, #8a68a1 100%);
      }
    }
    .hero.is-pink {
      background-color: ' . $colors['pink'] . ';
      color: #fff;
    }
    .hero.is-pink a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-pink strong {
      color: inherit;
    }
    .hero.is-pink .title {
      color: #fff;
    }
    .hero.is-pink .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-pink .subtitle a:not(.button),
    .hero.is-pink .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-pink .navbar-menu {
        background-color: ' . $colors['pink'] . ';
      }
    }
    .hero.is-pink .navbar-item,
    .hero.is-pink .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-pink a.navbar-item:hover, .hero.is-pink a.navbar-item.is-active,
    .hero.is-pink .navbar-link:hover,
    .hero.is-pink .navbar-link.is-active {
      background-color: #ae6881;
      color: #fff;
    }
    .hero.is-pink .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-pink .tabs a:hover {
      opacity: 1;
    }
    .hero.is-pink .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-pink .tabs.is-boxed a, .hero.is-pink .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-pink .tabs.is-boxed a:hover, .hero.is-pink .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-pink .tabs.is-boxed li.is-active a, .hero.is-pink .tabs.is-boxed li.is-active a:hover, .hero.is-pink .tabs.is-toggle li.is-active a, .hero.is-pink .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['pink'] . ';
    }
    .hero.is-pink.is-bold {
      background-image: linear-gradient(141deg, #b14c81 0%, ' . $colors['pink'] . ' 71%, #c48591 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-pink.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #b14c81 0%, ' . $colors['pink'] . ' 71%, #c48591 100%);
      }
    }
    .hero.is-blue {
      background-color: ' . $colors['blue'] . ';
      color: #fff;
    }
    .hero.is-blue a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-blue strong {
      color: inherit;
    }
    .hero.is-blue .title {
      color: #fff;
    }
    .hero.is-blue .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-blue .subtitle a:not(.button),
    .hero.is-blue .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-blue .navbar-menu {
        background-color: ' . $colors['blue'] . ';
      }
    }
    .hero.is-blue .navbar-item,
    .hero.is-blue .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-blue a.navbar-item:hover, .hero.is-blue a.navbar-item.is-active,
    .hero.is-blue .navbar-link:hover,
    .hero.is-blue .navbar-link.is-active {
      background-color: #58617e;
      color: #fff;
    }
    .hero.is-blue .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-blue .tabs a:hover {
      opacity: 1;
    }
    .hero.is-blue .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-blue .tabs.is-boxed a, .hero.is-blue .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-blue .tabs.is-boxed a:hover, .hero.is-blue .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-blue .tabs.is-boxed li.is-active a, .hero.is-blue .tabs.is-boxed li.is-active a:hover, .hero.is-blue .tabs.is-toggle li.is-active a, .hero.is-blue .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['blue'] . ';
    }
    .hero.is-blue.is-bold {
      background-image: linear-gradient(141deg, #445a78 0%, ' . $colors['blue'] . ' 71%, #686da0 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-blue.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #445a78 0%, ' . $colors['blue'] . ' 71%, #686da0 100%);
      }
    }
    .hero.is-orange {
      background-color: ' . $colors['orange'] . ';
      color: #fff;
    }
    .hero.is-orange a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-orange strong {
      color: inherit;
    }
    .hero.is-orange .title {
      color: #fff;
    }
    .hero.is-orange .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-orange .subtitle a:not(.button),
    .hero.is-orange .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-orange .navbar-menu {
        background-color: ' . $colors['orange'] . ';
      }
    }
    .hero.is-orange .navbar-item,
    .hero.is-orange .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-orange a.navbar-item:hover, .hero.is-orange a.navbar-item.is-active,
    .hero.is-orange .navbar-link:hover,
    .hero.is-orange .navbar-link.is-active {
      background-color: #ca9e78;
      color: #fff;
    }
    .hero.is-orange .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-orange .tabs a:hover {
      opacity: 1;
    }
    .hero.is-orange .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-orange .tabs.is-boxed a, .hero.is-orange .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-orange .tabs.is-boxed a:hover, .hero.is-orange .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-orange .tabs.is-boxed li.is-active a, .hero.is-orange .tabs.is-boxed li.is-active a:hover, .hero.is-orange .tabs.is-toggle li.is-active a, .hero.is-orange .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['orange'] . ';
    }
    .hero.is-orange.is-bold {
      background-image: linear-gradient(141deg, #cd7d5b 0%, ' . $colors['orange'] . ' 71%, #dcc399 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-orange.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #cd7d5b 0%, ' . $colors['orange'] . ' 71%, #dcc399 100%);
      }
    }
    .hero.is-red {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
    .hero.is-red a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-red strong {
      color: inherit;
    }
    .hero.is-red .title {
      color: #fff;
    }
    .hero.is-red .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-red .subtitle a:not(.button),
    .hero.is-red .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-red .navbar-menu {
        background-color: ' . $colors['red'] . ';
      }
    }
    .hero.is-red .navbar-item,
    .hero.is-red .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-red a.navbar-item:hover, .hero.is-red a.navbar-item.is-active,
    .hero.is-red .navbar-link:hover,
    .hero.is-red .navbar-link.is-active {
      background-color: #ca7b78;
      color: #fff;
    }
    .hero.is-red .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-red .tabs a:hover {
      opacity: 1;
    }
    .hero.is-red .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-red .tabs.is-boxed a, .hero.is-red .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-red .tabs.is-boxed a:hover, .hero.is-red .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-red .tabs.is-boxed li.is-active a, .hero.is-red .tabs.is-boxed li.is-active a:hover, .hero.is-red .tabs.is-toggle li.is-active a, .hero.is-red .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['red'] . ';
    }
    .hero.is-red.is-bold {
      background-image: linear-gradient(141deg, #cd5b69 0%, ' . $colors['red'] . ' 71%, #dca799 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-red.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #cd5b69 0%, ' . $colors['red'] . ' 71%, #dca799 100%);
      }
    }
    .hero.is-green {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
    .hero.is-green a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-green strong {
      color: inherit;
    }
    .hero.is-green .title {
      color: #fff;
    }
    .hero.is-green .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-green .subtitle a:not(.button),
    .hero.is-green .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-green .navbar-menu {
        background-color: ' . $colors['green'] . ';
      }
    }
    .hero.is-green .navbar-item,
    .hero.is-green .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-green a.navbar-item:hover, .hero.is-green a.navbar-item.is-active,
    .hero.is-green .navbar-link:hover,
    .hero.is-green .navbar-link.is-active {
      background-color: #5e9665;
      color: #fff;
    }
    .hero.is-green .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-green .tabs a:hover {
      opacity: 1;
    }
    .hero.is-green .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-green .tabs.is-boxed a, .hero.is-green .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-green .tabs.is-boxed a:hover, .hero.is-green .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-green .tabs.is-boxed li.is-active a, .hero.is-green .tabs.is-boxed li.is-active a:hover, .hero.is-green .tabs.is-toggle li.is-active a, .hero.is-green .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['green'] . ';
    }
    .hero.is-green.is-bold {
      background-image: linear-gradient(141deg, #4c9149 0%, ' . $colors['green'] . ' 71%, #75b187 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-green.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #4c9149 0%, ' . $colors['green'] . ' 71%, #75b187 100%);
      }
    }
    .hero.is-yellow {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-yellow a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-yellow strong {
      color: inherit;
    }
    .hero.is-yellow .title {
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-yellow .subtitle {
      color: rgba(0, 0, 0, 0.9);
    }
    .hero.is-yellow .subtitle a:not(.button),
    .hero.is-yellow .subtitle strong {
      color: rgba(0, 0, 0, 0.7);
    }
    @media screen and (max-width: 1023px) {
      .hero.is-yellow .navbar-menu {
        background-color: ' . $colors['yellow'] . ';
      }
    }
    .hero.is-yellow .navbar-item,
    .hero.is-yellow .navbar-link {
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-yellow a.navbar-item:hover, .hero.is-yellow a.navbar-item.is-active,
    .hero.is-yellow .navbar-link:hover,
    .hero.is-yellow .navbar-link.is-active {
      background-color: #cac378;
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-yellow .tabs a {
      color: rgba(0, 0, 0, 0.7);
      opacity: 0.9;
    }
    .hero.is-yellow .tabs a:hover {
      opacity: 1;
    }
    .hero.is-yellow .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-yellow .tabs.is-boxed a, .hero.is-yellow .tabs.is-toggle a {
      color: rgba(0, 0, 0, 0.7);
    }
    .hero.is-yellow .tabs.is-boxed a:hover, .hero.is-yellow .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-yellow .tabs.is-boxed li.is-active a, .hero.is-yellow .tabs.is-boxed li.is-active a:hover, .hero.is-yellow .tabs.is-toggle li.is-active a, .hero.is-yellow .tabs.is-toggle li.is-active a:hover {
      background-color: rgba(0, 0, 0, 0.7);
      border-color: rgba(0, 0, 0, 0.7);
      color: ' . $colors['yellow'] . ';
    }
    .hero.is-yellow.is-bold {
      background-image: linear-gradient(141deg, #cdb15b 0%, ' . $colors['yellow'] . ' 71%, #d6dc99 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-yellow.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #cdb15b 0%, ' . $colors['yellow'] . ' 71%, #d6dc99 100%);
      }
    }
    .hero.is-cyan {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
    .hero.is-cyan a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
    .hero.is-cyan strong {
      color: inherit;
    }
    .hero.is-cyan .title {
      color: #fff;
    }
    .hero.is-cyan .subtitle {
      color: rgba(255, 255, 255, 0.9);
    }
    .hero.is-cyan .subtitle a:not(.button),
    .hero.is-cyan .subtitle strong {
      color: #fff;
    }
    @media screen and (max-width: 1023px) {
      .hero.is-cyan .navbar-menu {
        background-color: ' . $colors['cyan'] . ';
      }
    }
    .hero.is-cyan .navbar-item,
    .hero.is-cyan .navbar-link {
      color: rgba(255, 255, 255, 0.7);
    }
    .hero.is-cyan a.navbar-item:hover, .hero.is-cyan a.navbar-item.is-active,
    .hero.is-cyan .navbar-link:hover,
    .hero.is-cyan .navbar-link.is-active {
      background-color: #4b6c70;
      color: #fff;
    }
    .hero.is-cyan .tabs a {
      color: #fff;
      opacity: 0.9;
    }
    .hero.is-cyan .tabs a:hover {
      opacity: 1;
    }
    .hero.is-cyan .tabs li.is-active a {
      opacity: 1;
    }
    .hero.is-cyan .tabs.is-boxed a, .hero.is-cyan .tabs.is-toggle a {
      color: #fff;
    }
    .hero.is-cyan .tabs.is-boxed a:hover, .hero.is-cyan .tabs.is-toggle a:hover {
      background-color: rgba(10, 10, 10, 0.1);
    }
    .hero.is-cyan .tabs.is-boxed li.is-active a, .hero.is-cyan .tabs.is-boxed li.is-active a:hover, .hero.is-cyan .tabs.is-toggle li.is-active a, .hero.is-cyan .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: ' . $colors['cyan'] . ';
    }
    .hero.is-cyan.is-bold {
      background-image: linear-gradient(141deg, #396865 0%, ' . $colors['cyan'] . ' 71%, #598594 100%);
    }
    @media screen and (max-width: 768px) {
      .hero.is-cyan.is-bold .navbar-menu {
        background-image: linear-gradient(141deg, #396865 0%, ' . $colors['cyan'] . ' 71%, #598594 100%);
      }
    }
    .hero.is-small .hero-body {
      padding-bottom: 1.5rem;
      padding-top: 1.5rem;
    }
    @media screen and (min-width: 769px), print {
      .hero.is-medium .hero-body {
        padding-bottom: 9rem;
        padding-top: 9rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .hero.is-large .hero-body {
        padding-bottom: 18rem;
        padding-top: 18rem;
      }
    }
    .hero.is-halfheight .hero-body, .hero.is-fullheight .hero-body, .hero.is-fullheight-with-navbar .hero-body {
      align-items: center;
      display: flex;
    }
    .hero.is-halfheight .hero-body > .container, .hero.is-fullheight .hero-body > .container, .hero.is-fullheight-with-navbar .hero-body > .container {
      flex-grow: 1;
      flex-shrink: 1;
    }
    .hero.is-halfheight {
      min-height: 50vh;
    }
    .hero.is-fullheight {
      min-height: 100vh;
    }
    
    .hero-video {
      overflow: hidden;
    }
    .hero-video video {
      left: 50%;
      min-height: 100%;
      min-width: 100%;
      position: absolute;
      top: 50%;
      transform: translate3d(-50%, -50%, 0);
    }
    .hero-video.is-transparent {
      opacity: 0.3;
    }
    @media screen and (max-width: 768px) {
      .hero-video {
        display: none;
      }
    }
    
    .hero-buttons {
      margin-top: 1.5rem;
    }
    @media screen and (max-width: 768px) {
      .hero-buttons .button {
        display: flex;
      }
      .hero-buttons .button:not(:last-child) {
        margin-bottom: 0.75rem;
      }
    }
    @media screen and (min-width: 769px), print {
      .hero-buttons {
        display: flex;
        justify-content: center;
      }
      .hero-buttons .button:not(:last-child) {
        margin-right: 1.5rem;
      }
    }
    
    .hero-head,
    .hero-foot {
      flex-grow: 0;
      flex-shrink: 0;
    }
    
    .hero-body {
      flex-grow: 1;
      flex-shrink: 0;
      padding: 3rem 1.5rem;
    }
    
    .section {
      padding: 3rem 1.5rem;
    }
    @media screen and (min-width: 1024px) {
      .section.is-medium {
        padding: 9rem 1.5rem;
      }
      .section.is-large {
        padding: 18rem 1.5rem;
      }
    }
    
    .footer {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
      padding: 3rem 1.5rem 6rem;
    }
    
    a.read-btn.button.card-footer-item.is-primary {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) .' !important;
    }

    a.read-btn.button.card-footer-item.is-primary:active,
    a.read-btn.button.card-footer-item.is-primary:focus {
      background-color: '. Color::toHexString(Color::darken(Color::get($colors['edark']), 0.025)) .' !important;
    }

    .content blockquote {
      background-color: '. $colors['edark'] .' !important;
      border-left: 5px solid '. $colors['white'] .';
    }

    .content pre {
      background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) .' !important;
    }

    .esky-author {
      border: 3px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) .' !important;
    }

    div.navbar-item a:hover {
      color: '. $colors['primary'] .';
    }

    div.navbar-item a {
      color: '. $colors['white'] .';
    }';

    file_put_contents(
      get_template_directory() . "/css/bulma.css",
      $base_css
    );
}

function esky_colorscheme_preview() {
  $colors = array(
    'red' => get_theme_mod( "esky_color_red", "#D18D8A" ),
    'green' => get_theme_mod( "esky_color_green", "#6BA272" ),
    'orange' => get_theme_mod( "esky_color_orange", "#D1AB8A" ),
    'blue' => get_theme_mod( "esky_color_blue", "#626D8D" ),
    'yellow' => get_theme_mod( "esky_color_yellow", "#D1CB8A" ),
    'purple' => get_theme_mod( "esky_color_purple", "#75628E" ),
    'lightblue' => get_theme_mod( "esky_color_lightblue", "#5C7387" ),
    'cyan' => get_theme_mod( "esky_color_cyan", "#557B7F" ),
    'pink' => get_theme_mod( "esky_color_pink", "#B7798F" ),
    'white' => get_theme_mod( "esky_foreground", "#CCD2E2" ),
    'edark' => get_theme_mod( "esky_background", "#16181E" ),
    'primary' => get_theme_mod( "esky_color_primary", "#626D8D" ),
    'complementary' => get_theme_mod( "esky_color_complementary", "#D1AB8A" ),
  );
  echo '<style type="text/css">
  @charset "UTF-8";
  @import url("https://fonts.googleapis.com/css?family=Overpass:400,900&subset=latin-ext");
  /*! bulma.io v0.7.5 | MIT License | github.com/jgthms/bulma */
  @keyframes spinAround {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(359deg);
    }
  }
  .tabs, .pagination-previous,
  .pagination-next,
  .pagination-link,
  .pagination-ellipsis, .breadcrumb, .file, .button, .is-unselectable, .modal-close, .delete {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  
  .navbar-link:not(.is-arrowless)::after, .select:not(.is-multiple):not(.is-loading)::after {
    border: 3px solid transparent;
    border-radius: 2px;
    border-right: 0;
    border-top: 0;
    content: " ";
    display: block;
    height: 0.625em;
    margin-top: -0.4375em;
    pointer-events: none;
    position: absolute;
    top: 50%;
    transform: rotate(-45deg);
    transform-origin: center;
    width: 0.625em;
  }
  
  .tabs:not(:last-child), .message:not(:last-child), .list:not(:last-child), .level:not(:last-child), .breadcrumb:not(:last-child), .highlight:not(:last-child), .block:not(:last-child), .title:not(:last-child),
  .subtitle:not(:last-child), .table-container:not(:last-child), .table:not(:last-child), .progress:not(:last-child), .notification:not(:last-child), .content:not(:last-child), .box:not(:last-child) {
    margin-bottom: 1.5rem;
  }
  
  .modal-close, .delete {
    -moz-appearance: none;
    -webkit-appearance: none;
    background-color: rgba(10, 10, 10, 0.2);
    border: none;
    border-radius: 290486px;
    cursor: pointer;
    pointer-events: auto;
    display: inline-block;
    flex-grow: 0;
    flex-shrink: 0;
    font-size: 0;
    height: 20px;
    max-height: 20px;
    max-width: 20px;
    min-height: 20px;
    min-width: 20px;
    outline: none;
    position: relative;
    vertical-align: top;
    width: 20px;
  }
  .modal-close::before, .delete::before, .modal-close::after, .delete::after {
    background-color: ' . $colors['white'] . ';
    content: "";
    display: block;
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translateX(-50%) translateY(-50%) rotate(45deg);
    transform-origin: center center;
  }
  .modal-close::before, .delete::before {
    height: 2px;
    width: 50%;
  }
  .modal-close::after, .delete::after {
    height: 50%;
    width: 2px;
  }
  .modal-close:hover, .delete:hover, .modal-close:focus, .delete:focus {
    background-color: rgba(10, 10, 10, 0.3);
  }
  .modal-close:active, .delete:active {
    background-color: rgba(10, 10, 10, 0.4);
  }
  .is-small.modal-close, .is-small.delete {
    height: 16px;
    max-height: 16px;
    max-width: 16px;
    min-height: 16px;
    min-width: 16px;
    width: 16px;
  }
  .is-medium.modal-close, .is-medium.delete {
    height: 24px;
    max-height: 24px;
    max-width: 24px;
    min-height: 24px;
    min-width: 24px;
    width: 24px;
  }
  .is-large.modal-close, .is-large.delete {
    height: 32px;
    max-height: 32px;
    max-width: 32px;
    min-height: 32px;
    min-width: 32px;
    width: 32px;
  }
  
  .control.is-loading::after, .select.is-loading::after, .loader, .button.is-loading::after {
    animation: spinAround 500ms infinite linear;
    border: 2px solid #dbdbdb;
    border-radius: 290486px;
    border-right-color: transparent;
    border-top-color: transparent;
    content: "";
    display: block;
    height: 1em;
    position: relative;
    width: 1em;
  }
  
  .hero-video, .modal-background, .modal, .image.is-square img,
  .image.is-square .has-ratio, .image.is-1by1 img,
  .image.is-1by1 .has-ratio, .image.is-5by4 img,
  .image.is-5by4 .has-ratio, .image.is-4by3 img,
  .image.is-4by3 .has-ratio, .image.is-3by2 img,
  .image.is-3by2 .has-ratio, .image.is-5by3 img,
  .image.is-5by3 .has-ratio, .image.is-16by9 img,
  .image.is-16by9 .has-ratio, .image.is-2by1 img,
  .image.is-2by1 .has-ratio, .image.is-3by1 img,
  .image.is-3by1 .has-ratio, .image.is-4by5 img,
  .image.is-4by5 .has-ratio, .image.is-3by4 img,
  .image.is-3by4 .has-ratio, .image.is-2by3 img,
  .image.is-2by3 .has-ratio, .image.is-3by5 img,
  .image.is-3by5 .has-ratio, .image.is-9by16 img,
  .image.is-9by16 .has-ratio, .image.is-1by2 img,
  .image.is-1by2 .has-ratio, .image.is-1by3 img,
  .image.is-1by3 .has-ratio, .is-overlay {
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
  }
  
  .pagination-previous,
  .pagination-next,
  .pagination-link,
  .pagination-ellipsis, .file-cta,
  .file-name, .select select, .textarea, .input, .button {
    -moz-appearance: none;
    -webkit-appearance: none;
    align-items: center;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    display: inline-flex;
    font-size: 1rem;
    height: 2.25em;
    justify-content: flex-start;
    line-height: 1.5;
    padding-bottom: calc(0.375em - 1px);
    padding-left: calc(0.625em - 1px);
    padding-right: calc(0.625em - 1px);
    padding-top: calc(0.375em - 1px);
    position: relative;
    vertical-align: top;
  }
  .pagination-previous:focus,
  .pagination-next:focus,
  .pagination-link:focus,
  .pagination-ellipsis:focus, .file-cta:focus,
  .file-name:focus, .select select:focus, .textarea:focus, .input:focus, .button:focus, .is-focused.pagination-previous,
  .is-focused.pagination-next,
  .is-focused.pagination-link,
  .is-focused.pagination-ellipsis, .is-focused.file-cta,
  .is-focused.file-name, .select select.is-focused, .is-focused.textarea, .is-focused.input, .is-focused.button, .pagination-previous:active,
  .pagination-next:active,
  .pagination-link:active,
  .pagination-ellipsis:active, .file-cta:active,
  .file-name:active, .select select:active, .textarea:active, .input:active, .button:active, .is-active.pagination-previous,
  .is-active.pagination-next,
  .is-active.pagination-link,
  .is-active.pagination-ellipsis, .is-active.file-cta,
  .is-active.file-name, .select select.is-active, .is-active.textarea, .is-active.input, .is-active.button {
    outline: none;
  }
  [disabled].pagination-previous,
  [disabled].pagination-next,
  [disabled].pagination-link,
  [disabled].pagination-ellipsis, [disabled].file-cta,
  [disabled].file-name, .select select[disabled], [disabled].textarea, [disabled].input, [disabled].button, fieldset[disabled] .pagination-previous,
  fieldset[disabled] .pagination-next,
  fieldset[disabled] .pagination-link,
  fieldset[disabled] .pagination-ellipsis, fieldset[disabled] .file-cta,
  fieldset[disabled] .file-name, fieldset[disabled] .select select, .select fieldset[disabled] select, fieldset[disabled] .textarea, fieldset[disabled] .input, fieldset[disabled] .button {
    cursor: not-allowed;
  }
  
  /*! minireset.css v0.0.4 | MIT License | github.com/jgthms/minireset.css */
  html,
  body,
  p,
  ol,
  ul,
  li,
  dl,
  dt,
  dd,
  blockquote,
  figure,
  fieldset,
  legend,
  textarea,
  pre,
  iframe,
  hr,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    margin: 0;
    padding: 0;
  }
  
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-size: 100%;
    font-weight: normal;
  }
  
  ul {
    list-style: none;
  }
  
  button,
  input,
  select,
  textarea {
    margin: 0;
  }
  
  html {
    box-sizing: border-box;
  }
  
  *, *::before, *::after {
    box-sizing: inherit;
  }
  
  img,
  embed,
  iframe,
  object,
  video {
    height: auto;
    max-width: 100%;
  }
  
  audio {
    max-width: 100%;
  }
  
  iframe {
    border: 0;
  }
  
  table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  
  td,
  th {
    padding: 0;
  }
  td:not([align]),
  th:not([align]) {
    text-align: left;
  }
  
  html {
    background-color: ' . $colors['edark'] . ';
    font-size: 16px;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    min-width: 300px;
    overflow-x: hidden;
    overflow-y: scroll;
    text-rendering: optimizeLegibility;
    text-size-adjust: 100%;
  }
  
  article,
  aside,
  figure,
  footer,
  header,
  hgroup,
  section {
    display: block;
  }
  
  body,
  button,
  input,
  select,
  textarea {
    font-family: "Overpass", sans-serif;
  }
  
  code,
  pre {
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: auto;
    font-family: monospace;
  }
  
  body {
    color: ' . $colors['white'] . ';
    font-size: 1em;
    font-weight: 400;
    line-height: 1.5;
  }
  
  a {
    color: ' . $colors['complementary'] . ';
    cursor: pointer;
    text-decoration: none;
  }
  a strong {
    color: currentColor;
  }
  a:hover {
    color: #DDDDDD;
  }
  
  code {
    background-color: whitesmoke;
    color: ' . $colors['red'] . ';
    font-size: 0.875em;
    font-weight: normal;
    padding: 0.25em 0.5em 0.25em;
  }
  
  hr {
    background-color: whitesmoke;
    border: none;
    display: block;
    height: 2px;
    margin: 1.5rem 0;
  }
  
  img {
    height: auto;
    max-width: 100%;
  }
  
  input[type=checkbox],
  input[type=radio] {
    vertical-align: baseline;
  }
  
  small {
    font-size: 0.875em;
  }
  
  span {
    font-style: inherit;
    font-weight: inherit;
  }
  
  strong {
    color: white;
    font-weight: 700;
  }
  
  fieldset {
    border: none;
  }
  
  pre {
    -webkit-overflow-scrolling: touch;
    background-color: whitesmoke;
    color: ' . $colors['white'] . ';
    font-size: 0.875em;
    overflow-x: auto;
    padding: 1.25rem 1.5rem;
    white-space: pre;
    word-wrap: normal;
  }
  pre code {
    background-color: transparent;
    color: currentColor;
    font-size: 1em;
    padding: 0;
  }
  
  table td,
  table th {
    vertical-align: top;
  }
  table td:not([align]),
  table th:not([align]) {
    text-align: left;
  }
  table th {
    color: white;
  }
  
  .is-clearfix::after {
    clear: both;
    content: " ";
    display: table;
  }
  
  .is-pulled-left {
    float: left !important;
  }
  
  .is-pulled-right {
    float: right !important;
  }
  
  .is-clipped {
    overflow: hidden !important;
  }
  
  .is-size-1 {
    font-size: 3rem !important;
  }
  
  .is-size-2 {
    font-size: 2.5rem !important;
  }
  
  .is-size-3 {
    font-size: 2rem !important;
  }
  
  .is-size-4 {
    font-size: 1.5rem !important;
  }
  
  .is-size-5 {
    font-size: 1.25rem !important;
  }
  
  .is-size-6 {
    font-size: 1rem !important;
  }
  
  .is-size-7 {
    font-size: 0.75rem !important;
  }
  
  @media screen and (max-width: 768px) {
    .is-size-1-mobile {
      font-size: 3rem !important;
    }
  
    .is-size-2-mobile {
      font-size: 2.5rem !important;
    }
  
    .is-size-3-mobile {
      font-size: 2rem !important;
    }
  
    .is-size-4-mobile {
      font-size: 1.5rem !important;
    }
  
    .is-size-5-mobile {
      font-size: 1.25rem !important;
    }
  
    .is-size-6-mobile {
      font-size: 1rem !important;
    }
  
    .is-size-7-mobile {
      font-size: 0.75rem !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .is-size-1-tablet {
      font-size: 3rem !important;
    }
  
    .is-size-2-tablet {
      font-size: 2.5rem !important;
    }
  
    .is-size-3-tablet {
      font-size: 2rem !important;
    }
  
    .is-size-4-tablet {
      font-size: 1.5rem !important;
    }
  
    .is-size-5-tablet {
      font-size: 1.25rem !important;
    }
  
    .is-size-6-tablet {
      font-size: 1rem !important;
    }
  
    .is-size-7-tablet {
      font-size: 0.75rem !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .is-size-1-touch {
      font-size: 3rem !important;
    }
  
    .is-size-2-touch {
      font-size: 2.5rem !important;
    }
  
    .is-size-3-touch {
      font-size: 2rem !important;
    }
  
    .is-size-4-touch {
      font-size: 1.5rem !important;
    }
  
    .is-size-5-touch {
      font-size: 1.25rem !important;
    }
  
    .is-size-6-touch {
      font-size: 1rem !important;
    }
  
    .is-size-7-touch {
      font-size: 0.75rem !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .is-size-1-desktop {
      font-size: 3rem !important;
    }
  
    .is-size-2-desktop {
      font-size: 2.5rem !important;
    }
  
    .is-size-3-desktop {
      font-size: 2rem !important;
    }
  
    .is-size-4-desktop {
      font-size: 1.5rem !important;
    }
  
    .is-size-5-desktop {
      font-size: 1.25rem !important;
    }
  
    .is-size-6-desktop {
      font-size: 1rem !important;
    }
  
    .is-size-7-desktop {
      font-size: 0.75rem !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .is-size-1-widescreen {
      font-size: 3rem !important;
    }
  
    .is-size-2-widescreen {
      font-size: 2.5rem !important;
    }
  
    .is-size-3-widescreen {
      font-size: 2rem !important;
    }
  
    .is-size-4-widescreen {
      font-size: 1.5rem !important;
    }
  
    .is-size-5-widescreen {
      font-size: 1.25rem !important;
    }
  
    .is-size-6-widescreen {
      font-size: 1rem !important;
    }
  
    .is-size-7-widescreen {
      font-size: 0.75rem !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .is-size-1-fullhd {
      font-size: 3rem !important;
    }
  
    .is-size-2-fullhd {
      font-size: 2.5rem !important;
    }
  
    .is-size-3-fullhd {
      font-size: 2rem !important;
    }
  
    .is-size-4-fullhd {
      font-size: 1.5rem !important;
    }
  
    .is-size-5-fullhd {
      font-size: 1.25rem !important;
    }
  
    .is-size-6-fullhd {
      font-size: 1rem !important;
    }
  
    .is-size-7-fullhd {
      font-size: 0.75rem !important;
    }
  }
  .has-text-centered {
    text-align: center !important;
  }
  
  .has-text-justified {
    text-align: justify !important;
  }
  
  .has-text-left {
    text-align: left !important;
  }
  
  .has-text-right {
    text-align: right !important;
  }
  
  @media screen and (max-width: 768px) {
    .has-text-centered-mobile {
      text-align: center !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .has-text-centered-tablet {
      text-align: center !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .has-text-centered-tablet-only {
      text-align: center !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .has-text-centered-touch {
      text-align: center !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .has-text-centered-desktop {
      text-align: center !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .has-text-centered-desktop-only {
      text-align: center !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .has-text-centered-widescreen {
      text-align: center !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .has-text-centered-widescreen-only {
      text-align: center !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .has-text-centered-fullhd {
      text-align: center !important;
    }
  }
  @media screen and (max-width: 768px) {
    .has-text-justified-mobile {
      text-align: justify !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .has-text-justified-tablet {
      text-align: justify !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .has-text-justified-tablet-only {
      text-align: justify !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .has-text-justified-touch {
      text-align: justify !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .has-text-justified-desktop {
      text-align: justify !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .has-text-justified-desktop-only {
      text-align: justify !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .has-text-justified-widescreen {
      text-align: justify !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .has-text-justified-widescreen-only {
      text-align: justify !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .has-text-justified-fullhd {
      text-align: justify !important;
    }
  }
  @media screen and (max-width: 768px) {
    .has-text-left-mobile {
      text-align: left !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .has-text-left-tablet {
      text-align: left !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .has-text-left-tablet-only {
      text-align: left !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .has-text-left-touch {
      text-align: left !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .has-text-left-desktop {
      text-align: left !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .has-text-left-desktop-only {
      text-align: left !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .has-text-left-widescreen {
      text-align: left !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .has-text-left-widescreen-only {
      text-align: left !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .has-text-left-fullhd {
      text-align: left !important;
    }
  }
  @media screen and (max-width: 768px) {
    .has-text-right-mobile {
      text-align: right !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .has-text-right-tablet {
      text-align: right !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .has-text-right-tablet-only {
      text-align: right !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .has-text-right-touch {
      text-align: right !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .has-text-right-desktop {
      text-align: right !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .has-text-right-desktop-only {
      text-align: right !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .has-text-right-widescreen {
      text-align: right !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .has-text-right-widescreen-only {
      text-align: right !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .has-text-right-fullhd {
      text-align: right !important;
    }
  }
  .is-capitalized {
    text-transform: capitalize !important;
  }
  
  .is-lowercase {
    text-transform: lowercase !important;
  }
  
  .is-uppercase {
    text-transform: uppercase !important;
  }
  
  .is-italic {
    font-style: italic !important;
  }
  
  .has-text-white {
    color: ' . $colors['white'] . ' !important;
  }
  
  a.has-text-white:hover, a.has-text-white:focus {
    color: #e6e6e6 !important;
  }
  
  .has-background-white {
    background-color: ' . $colors['white'] . ' !important;
  }
  
  .has-text-black {
    color: #0a0a0a !important;
  }
  
  a.has-text-black:hover, a.has-text-black:focus {
    color: black !important;
  }
  
  .has-background-black {
    background-color: #0a0a0a !important;
  }
  
  .has-text-light {
    color: whitesmoke !important;
  }
  
  a.has-text-light:hover, a.has-text-light:focus {
    color: #dbdbdb !important;
  }
  
  .has-background-light {
    background-color: whitesmoke !important;
  }
  
  .has-text-dark {
    color: #363636 !important;
  }
  
  a.has-text-dark:hover, a.has-text-dark:focus {
    color: #1c1c1c !important;
  }
  
  .has-background-dark {
    background-color: #363636 !important;
  }
  
  .has-text-primary {
    color: ' . $colors['primary'] . ' !important;
  }
  
  a.has-text-primary:hover, a.has-text-primary:focus {
    color: #919191 !important;
  }
  
  .has-background-primary {
    background-color: ' . $colors['primary'] . ' !important;
  }
  
  .has-text-link {
    color: ' . $colors['complementary'] . ' !important;
  }
  
  a.has-text-link:hover, a.has-text-link:focus {
    color: #b3b3b3 !important;
  }
  
  .has-background-link {
    background-color: ' . $colors['complementary'] . ' !important;
  }
  
  .has-text-info {
    color: ' . $colors['cyan'] . ' !important;
  }
  
  a.has-text-info:hover, a.has-text-info:focus {
    color: #415d60 !important;
  }
  
  .has-background-info {
    background-color: ' . $colors['cyan'] . ' !important;
  }
  
  .has-text-success {
    color: ' . $colors['green'] . ' !important;
  }
  
  a.has-text-success:hover, a.has-text-success:focus {
    color: #54865a !important;
  }
  
  .has-background-success {
    background-color: ' . $colors['green'] . ' !important;
  }
  
  .has-text-warning {
    color: ' . $colors['yellow'] . ' !important;
  }
  
  a.has-text-warning:hover, a.has-text-warning:focus {
    color: #c3bb65 !important;
  }
  
  .has-background-warning {
    background-color: ' . $colors['yellow'] . ' !important;
  }
  
  .has-text-danger {
    color: ' . $colors['red'] . ' !important;
  }
  
  a.has-text-danger:hover, a.has-text-danger:focus {
    color: #c36965 !important;
  }
  
  .has-background-danger {
    background-color: ' . $colors['red'] . ' !important;
  }
  
  .has-text-lightblue {
    color: ' . $colors['lightblue'] . ' !important;
  }
  
  a.has-text-lightblue:hover, a.has-text-lightblue:focus {
    color: #475969 !important;
  }
  
  .has-background-lightblue {
    background-color: ' . $colors['lightblue'] . ' !important;
  }
  
  .has-text-purple {
    color: ' . $colors['purple'] . ' !important;
  }
  
  a.has-text-purple:hover, a.has-text-purple:focus {
    color: #5c4d70 !important;
  }
  
  .has-background-purple {
    background-color: ' . $colors['purple'] . ' !important;
  }
  
  .has-text-pink {
    color: ' . $colors['pink'] . ' !important;
  }
  
  a.has-text-pink:hover, a.has-text-pink:focus {
    color: #a55873 !important;
  }
  
  .has-background-pink {
    background-color: ' . $colors['pink'] . ' !important;
  }
  
  .has-text-blue {
    color: ' . $colors['blue'] . ' !important;
  }
  
  a.has-text-blue:hover, a.has-text-blue:focus {
    color: #4d566f !important;
  }
  
  .has-background-blue {
    background-color: ' . $colors['blue'] . ' !important;
  }
  
  .has-text-orange {
    color: ' . $colors['orange'] . ' !important;
  }
  
  a.has-text-orange:hover, a.has-text-orange:focus {
    color: #c39165 !important;
  }
  
  .has-background-orange {
    background-color: ' . $colors['orange'] . ' !important;
  }
  
  .has-text-red {
    color: ' . $colors['red'] . ' !important;
  }
  
  a.has-text-red:hover, a.has-text-red:focus {
    color: #c36965 !important;
  }
  
  .has-background-red {
    background-color: ' . $colors['red'] . ' !important;
  }
  
  .has-text-green {
    color: ' . $colors['green'] . ' !important;
  }
  
  a.has-text-green:hover, a.has-text-green:focus {
    color: #54865a !important;
  }
  
  .has-background-green {
    background-color: ' . $colors['green'] . ' !important;
  }
  
  .has-text-yellow {
    color: ' . $colors['yellow'] . ' !important;
  }
  
  a.has-text-yellow:hover, a.has-text-yellow:focus {
    color: #c3bb65 !important;
  }
  
  .has-background-yellow {
    background-color: ' . $colors['yellow'] . ' !important;
  }
  
  .has-text-cyan {
    color: ' . $colors['cyan'] . ' !important;
  }
  
  a.has-text-cyan:hover, a.has-text-cyan:focus {
    color: #415d60 !important;
  }
  
  .has-background-cyan {
    background-color: ' . $colors['cyan'] . ' !important;
  }
  
  .has-text-black-bis {
    color: #121212 !important;
  }
  
  .has-background-black-bis {
    background-color: #121212 !important;
  }
  
  .has-text-black-ter {
    color: #242424 !important;
  }
  
  .has-background-black-ter {
    background-color: #242424 !important;
  }
  
  .has-text-grey-darker {
    color: #363636 !important;
  }
  
  .has-background-grey-darker {
    background-color: #363636 !important;
  }
  
  .has-text-grey-dark {
    color: #4a4a4a !important;
  }
  
  .has-background-grey-dark {
    background-color: #4a4a4a !important;
  }
  
  .has-text-grey {
    color: #7a7a7a !important;
  }
  
  .has-background-grey {
    background-color: #7a7a7a !important;
  }
  
  .has-text-grey-light {
    color: #b5b5b5 !important;
  }
  
  .has-background-grey-light {
    background-color: #b5b5b5 !important;
  }
  
  .has-text-grey-lighter {
    color: #dbdbdb !important;
  }
  
  .has-background-grey-lighter {
    background-color: #dbdbdb !important;
  }
  
  .has-text-white-ter {
    color: whitesmoke !important;
  }
  
  .has-background-white-ter {
    background-color: whitesmoke !important;
  }
  
  .has-text-white-bis {
    color: #fafafa !important;
  }
  
  .has-background-white-bis {
    background-color: #fafafa !important;
  }
  
  .has-text-weight-light {
    font-weight: 300 !important;
  }
  
  .has-text-weight-normal {
    font-weight: 400 !important;
  }
  
  .has-text-weight-medium {
    font-weight: 500 !important;
  }
  
  .has-text-weight-semibold {
    font-weight: 600 !important;
  }
  
  .has-text-weight-bold {
    font-weight: 700 !important;
  }
  
  .is-family-primary {
    font-family: "Overpass", sans-serif !important;
  }
  
  .is-family-secondary {
    font-family: "Overpass", sans-serif !important;
  }
  
  .is-family-sans-serif {
    font-family: "Overpass", sans-serif !important;
  }
  
  .is-family-monospace {
    font-family: monospace !important;
  }
  
  .is-family-code {
    font-family: monospace !important;
  }
  
  .is-block {
    display: block !important;
  }
  
  @media screen and (max-width: 768px) {
    .is-block-mobile {
      display: block !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .is-block-tablet {
      display: block !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .is-block-tablet-only {
      display: block !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .is-block-touch {
      display: block !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .is-block-desktop {
      display: block !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .is-block-desktop-only {
      display: block !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .is-block-widescreen {
      display: block !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .is-block-widescreen-only {
      display: block !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .is-block-fullhd {
      display: block !important;
    }
  }
  .is-flex {
    display: flex !important;
  }
  
  @media screen and (max-width: 768px) {
    .is-flex-mobile {
      display: flex !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .is-flex-tablet {
      display: flex !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .is-flex-tablet-only {
      display: flex !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .is-flex-touch {
      display: flex !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .is-flex-desktop {
      display: flex !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .is-flex-desktop-only {
      display: flex !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .is-flex-widescreen {
      display: flex !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .is-flex-widescreen-only {
      display: flex !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .is-flex-fullhd {
      display: flex !important;
    }
  }
  .is-inline {
    display: inline !important;
  }
  
  @media screen and (max-width: 768px) {
    .is-inline-mobile {
      display: inline !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .is-inline-tablet {
      display: inline !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .is-inline-tablet-only {
      display: inline !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .is-inline-touch {
      display: inline !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .is-inline-desktop {
      display: inline !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .is-inline-desktop-only {
      display: inline !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .is-inline-widescreen {
      display: inline !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .is-inline-widescreen-only {
      display: inline !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .is-inline-fullhd {
      display: inline !important;
    }
  }
  .is-inline-block {
    display: inline-block !important;
  }
  
  @media screen and (max-width: 768px) {
    .is-inline-block-mobile {
      display: inline-block !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .is-inline-block-tablet {
      display: inline-block !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .is-inline-block-tablet-only {
      display: inline-block !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .is-inline-block-touch {
      display: inline-block !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .is-inline-block-desktop {
      display: inline-block !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .is-inline-block-desktop-only {
      display: inline-block !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .is-inline-block-widescreen {
      display: inline-block !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .is-inline-block-widescreen-only {
      display: inline-block !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .is-inline-block-fullhd {
      display: inline-block !important;
    }
  }
  .is-inline-flex {
    display: inline-flex !important;
  }
  
  @media screen and (max-width: 768px) {
    .is-inline-flex-mobile {
      display: inline-flex !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .is-inline-flex-tablet {
      display: inline-flex !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .is-inline-flex-tablet-only {
      display: inline-flex !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .is-inline-flex-touch {
      display: inline-flex !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .is-inline-flex-desktop {
      display: inline-flex !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .is-inline-flex-desktop-only {
      display: inline-flex !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .is-inline-flex-widescreen {
      display: inline-flex !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .is-inline-flex-widescreen-only {
      display: inline-flex !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .is-inline-flex-fullhd {
      display: inline-flex !important;
    }
  }
  .is-hidden {
    display: none !important;
  }
  
  .is-sr-only {
    border: none !important;
    clip: rect(0, 0, 0, 0) !important;
    height: 0.01em !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    white-space: nowrap !important;
    width: 0.01em !important;
  }
  
  @media screen and (max-width: 768px) {
    .is-hidden-mobile {
      display: none !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .is-hidden-tablet {
      display: none !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .is-hidden-tablet-only {
      display: none !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .is-hidden-touch {
      display: none !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .is-hidden-desktop {
      display: none !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .is-hidden-desktop-only {
      display: none !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .is-hidden-widescreen {
      display: none !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .is-hidden-widescreen-only {
      display: none !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .is-hidden-fullhd {
      display: none !important;
    }
  }
  .is-invisible {
    visibility: hidden !important;
  }
  
  @media screen and (max-width: 768px) {
    .is-invisible-mobile {
      visibility: hidden !important;
    }
  }
  @media screen and (min-width: 769px), print {
    .is-invisible-tablet {
      visibility: hidden !important;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .is-invisible-tablet-only {
      visibility: hidden !important;
    }
  }
  @media screen and (max-width: 1023px) {
    .is-invisible-touch {
      visibility: hidden !important;
    }
  }
  @media screen and (min-width: 1024px) {
    .is-invisible-desktop {
      visibility: hidden !important;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .is-invisible-desktop-only {
      visibility: hidden !important;
    }
  }
  @media screen and (min-width: 1216px) {
    .is-invisible-widescreen {
      visibility: hidden !important;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .is-invisible-widescreen-only {
      visibility: hidden !important;
    }
  }
  @media screen and (min-width: 1408px) {
    .is-invisible-fullhd {
      visibility: hidden !important;
    }
  }
  .is-marginless {
    margin: 0 !important;
  }
  
  .is-paddingless {
    padding: 0 !important;
  }
  
  .is-radiusless {
    border-radius: 0 !important;
  }
  
  .is-shadowless {
    box-shadow: none !important;
  }
  
  .is-relative {
    position: relative !important;
  }
  
  .box {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    border-radius: 6px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    color: ' . $colors['white'] . ';
    display: block;
    padding: 1.25rem;
  }
  
  a.box:hover, a.box:focus {
    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px ' . $colors['complementary'] . ';
  }
  a.box:active {
    box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2), 0 0 0 1px ' . $colors['complementary'] . ';
  }
  
  .button {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    border-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    border-width: 1px;
    color: ' . $colors['white'] . ';
    cursor: pointer;
    justify-content: center;
    padding-bottom: calc(0.375em - 1px);
    padding-left: 0.75em;
    padding-right: 0.75em;
    padding-top: calc(0.375em - 1px);
    text-align: center;
    white-space: nowrap;
  }
  .button strong {
    color: inherit;
  }
  .button .icon, .button .icon.is-small, .button .icon.is-medium, .button .icon.is-large {
    height: 1.5em;
    width: 1.5em;
  }
  .button .icon:first-child:not(:last-child) {
    margin-left: calc(-0.375em - 1px);
    margin-right: 0.1875em;
  }
  .button .icon:last-child:not(:first-child) {
    margin-left: 0.1875em;
    margin-right: calc(-0.375em - 1px);
  }
  .button .icon:first-child:last-child {
    margin-left: calc(-0.375em - 1px);
    margin-right: calc(-0.375em - 1px);
  }
  .button:hover, .button.is-hovered {
    border-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    color: #DDDDDD;
  }
  .button:focus, .button.is-focused {
    border-color: ' . $colors['blue'] . ';
    color: #363636;
  }
  .button:focus:not(:active), .button.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
  }
  .button:active, .button.is-active {
    border-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    color: #363636;
  }
  .button.is-text {
    background-color: transparent;
    border-color: transparent;
    color: ' . $colors['white'] . ';
    text-decoration: underline;
  }
  .button.is-text:hover, .button.is-text.is-hovered, .button.is-text:focus, .button.is-text.is-focused {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    color: white;
  }
  .button.is-text:active, .button.is-text.is-active {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    color: white;
  }
  .button.is-text[disabled], fieldset[disabled] .button.is-text {
    background-color: transparent;
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-white {
    background-color: ' . $colors['white'] . ';
    border-color: transparent;
    color: #0a0a0a;
  }
  .button.is-white:hover, .button.is-white.is-hovered {
    background-color: #f9f9f9;
    border-color: transparent;
    color: #0a0a0a;
  }
  .button.is-white:focus, .button.is-white.is-focused {
    border-color: transparent;
    color: #0a0a0a;
  }
  .button.is-white:focus:not(:active), .button.is-white.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25);
  }
  .button.is-white:active, .button.is-white.is-active {
    background-color: #f2f2f2;
    border-color: transparent;
    color: #0a0a0a;
  }
  .button.is-white[disabled], fieldset[disabled] .button.is-white {
    background-color: ' . $colors['white'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-white.is-inverted {
    background-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .button.is-white.is-inverted:hover, .button.is-white.is-inverted.is-hovered {
    background-color: black;
  }
  .button.is-white.is-inverted[disabled], fieldset[disabled] .button.is-white.is-inverted {
    background-color: #0a0a0a;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['white'] . ';
  }
  .button.is-white.is-loading::after {
    border-color: transparent transparent #0a0a0a #0a0a0a !important;
  }
  .button.is-white.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['white'] . ';
    color: ' . $colors['white'] . ';
  }
  .button.is-white.is-outlined:hover, .button.is-white.is-outlined.is-hovered, .button.is-white.is-outlined:focus, .button.is-white.is-outlined.is-focused {
    background-color: ' . $colors['white'] . ';
    border-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .button.is-white.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['white'] . ' ' . $colors['white'] . ' !important;
  }
  .button.is-white.is-outlined.is-loading:hover::after, .button.is-white.is-outlined.is-loading.is-hovered::after, .button.is-white.is-outlined.is-loading:focus::after, .button.is-white.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #0a0a0a #0a0a0a !important;
  }
  .button.is-white.is-outlined[disabled], fieldset[disabled] .button.is-white.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['white'] . ';
    box-shadow: none;
    color: ' . $colors['white'] . ';
  }
  .button.is-white.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #0a0a0a;
    color: #0a0a0a;
  }
  .button.is-white.is-inverted.is-outlined:hover, .button.is-white.is-inverted.is-outlined.is-hovered, .button.is-white.is-inverted.is-outlined:focus, .button.is-white.is-inverted.is-outlined.is-focused {
    background-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .button.is-white.is-inverted.is-outlined.is-loading:hover::after, .button.is-white.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-white.is-inverted.is-outlined.is-loading:focus::after, .button.is-white.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['white'] . ' ' . $colors['white'] . ' !important;
  }
  .button.is-white.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-white.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #0a0a0a;
    box-shadow: none;
    color: #0a0a0a;
  }
  .button.is-black {
    background-color: #0a0a0a;
    border-color: transparent;
    color: ' . $colors['white'] . ';
  }
  .button.is-black:hover, .button.is-black.is-hovered {
    background-color: #040404;
    border-color: transparent;
    color: ' . $colors['white'] . ';
  }
  .button.is-black:focus, .button.is-black.is-focused {
    border-color: transparent;
    color: ' . $colors['white'] . ';
  }
  .button.is-black:focus:not(:active), .button.is-black.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25);
  }
  .button.is-black:active, .button.is-black.is-active {
    background-color: black;
    border-color: transparent;
    color: ' . $colors['white'] . ';
  }
  .button.is-black[disabled], fieldset[disabled] .button.is-black {
    background-color: #0a0a0a;
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-black.is-inverted {
    background-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .button.is-black.is-inverted:hover, .button.is-black.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-black.is-inverted[disabled], fieldset[disabled] .button.is-black.is-inverted {
    background-color: ' . $colors['white'] . ';
    border-color: transparent;
    box-shadow: none;
    color: #0a0a0a;
  }
  .button.is-black.is-loading::after {
    border-color: transparent transparent ' . $colors['white'] . ' ' . $colors['white'] . ' !important;
  }
  .button.is-black.is-outlined {
    background-color: transparent;
    border-color: #0a0a0a;
    color: #0a0a0a;
  }
  .button.is-black.is-outlined:hover, .button.is-black.is-outlined.is-hovered, .button.is-black.is-outlined:focus, .button.is-black.is-outlined.is-focused {
    background-color: #0a0a0a;
    border-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .button.is-black.is-outlined.is-loading::after {
    border-color: transparent transparent #0a0a0a #0a0a0a !important;
  }
  .button.is-black.is-outlined.is-loading:hover::after, .button.is-black.is-outlined.is-loading.is-hovered::after, .button.is-black.is-outlined.is-loading:focus::after, .button.is-black.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['white'] . ' ' . $colors['white'] . ' !important;
  }
  .button.is-black.is-outlined[disabled], fieldset[disabled] .button.is-black.is-outlined {
    background-color: transparent;
    border-color: #0a0a0a;
    box-shadow: none;
    color: #0a0a0a;
  }
  .button.is-black.is-inverted.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['white'] . ';
    color: ' . $colors['white'] . ';
  }
  .button.is-black.is-inverted.is-outlined:hover, .button.is-black.is-inverted.is-outlined.is-hovered, .button.is-black.is-inverted.is-outlined:focus, .button.is-black.is-inverted.is-outlined.is-focused {
    background-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .button.is-black.is-inverted.is-outlined.is-loading:hover::after, .button.is-black.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-black.is-inverted.is-outlined.is-loading:focus::after, .button.is-black.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #0a0a0a #0a0a0a !important;
  }
  .button.is-black.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-black.is-inverted.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['white'] . ';
    box-shadow: none;
    color: ' . $colors['white'] . ';
  }
  .button.is-light {
    background-color: whitesmoke;
    border-color: transparent;
    color: #363636;
  }
  .button.is-light:hover, .button.is-light.is-hovered {
    background-color: #eeeeee;
    border-color: transparent;
    color: #363636;
  }
  .button.is-light:focus, .button.is-light.is-focused {
    border-color: transparent;
    color: #363636;
  }
  .button.is-light:focus:not(:active), .button.is-light.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25);
  }
  .button.is-light:active, .button.is-light.is-active {
    background-color: #e8e8e8;
    border-color: transparent;
    color: #363636;
  }
  .button.is-light[disabled], fieldset[disabled] .button.is-light {
    background-color: whitesmoke;
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-light.is-inverted {
    background-color: #363636;
    color: whitesmoke;
  }
  .button.is-light.is-inverted:hover, .button.is-light.is-inverted.is-hovered {
    background-color: #292929;
  }
  .button.is-light.is-inverted[disabled], fieldset[disabled] .button.is-light.is-inverted {
    background-color: #363636;
    border-color: transparent;
    box-shadow: none;
    color: whitesmoke;
  }
  .button.is-light.is-loading::after {
    border-color: transparent transparent #363636 #363636 !important;
  }
  .button.is-light.is-outlined {
    background-color: transparent;
    border-color: whitesmoke;
    color: whitesmoke;
  }
  .button.is-light.is-outlined:hover, .button.is-light.is-outlined.is-hovered, .button.is-light.is-outlined:focus, .button.is-light.is-outlined.is-focused {
    background-color: whitesmoke;
    border-color: whitesmoke;
    color: #363636;
  }
  .button.is-light.is-outlined.is-loading::after {
    border-color: transparent transparent whitesmoke whitesmoke !important;
  }
  .button.is-light.is-outlined.is-loading:hover::after, .button.is-light.is-outlined.is-loading.is-hovered::after, .button.is-light.is-outlined.is-loading:focus::after, .button.is-light.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #363636 #363636 !important;
  }
  .button.is-light.is-outlined[disabled], fieldset[disabled] .button.is-light.is-outlined {
    background-color: transparent;
    border-color: whitesmoke;
    box-shadow: none;
    color: whitesmoke;
  }
  .button.is-light.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #363636;
    color: #363636;
  }
  .button.is-light.is-inverted.is-outlined:hover, .button.is-light.is-inverted.is-outlined.is-hovered, .button.is-light.is-inverted.is-outlined:focus, .button.is-light.is-inverted.is-outlined.is-focused {
    background-color: #363636;
    color: whitesmoke;
  }
  .button.is-light.is-inverted.is-outlined.is-loading:hover::after, .button.is-light.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-light.is-inverted.is-outlined.is-loading:focus::after, .button.is-light.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent whitesmoke whitesmoke !important;
  }
  .button.is-light.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-light.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #363636;
    box-shadow: none;
    color: #363636;
  }
  .button.is-dark {
    background-color: #363636;
    border-color: transparent;
    color: whitesmoke;
  }
  .button.is-dark:hover, .button.is-dark.is-hovered {
    background-color: #2f2f2f;
    border-color: transparent;
    color: whitesmoke;
  }
  .button.is-dark:focus, .button.is-dark.is-focused {
    border-color: transparent;
    color: whitesmoke;
  }
  .button.is-dark:focus:not(:active), .button.is-dark.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25);
  }
  .button.is-dark:active, .button.is-dark.is-active {
    background-color: #292929;
    border-color: transparent;
    color: whitesmoke;
  }
  .button.is-dark[disabled], fieldset[disabled] .button.is-dark {
    background-color: #363636;
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-dark.is-inverted {
    background-color: whitesmoke;
    color: #363636;
  }
  .button.is-dark.is-inverted:hover, .button.is-dark.is-inverted.is-hovered {
    background-color: #e8e8e8;
  }
  .button.is-dark.is-inverted[disabled], fieldset[disabled] .button.is-dark.is-inverted {
    background-color: whitesmoke;
    border-color: transparent;
    box-shadow: none;
    color: #363636;
  }
  .button.is-dark.is-loading::after {
    border-color: transparent transparent whitesmoke whitesmoke !important;
  }
  .button.is-dark.is-outlined {
    background-color: transparent;
    border-color: #363636;
    color: #363636;
  }
  .button.is-dark.is-outlined:hover, .button.is-dark.is-outlined.is-hovered, .button.is-dark.is-outlined:focus, .button.is-dark.is-outlined.is-focused {
    background-color: #363636;
    border-color: #363636;
    color: whitesmoke;
  }
  .button.is-dark.is-outlined.is-loading::after {
    border-color: transparent transparent #363636 #363636 !important;
  }
  .button.is-dark.is-outlined.is-loading:hover::after, .button.is-dark.is-outlined.is-loading.is-hovered::after, .button.is-dark.is-outlined.is-loading:focus::after, .button.is-dark.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent whitesmoke whitesmoke !important;
  }
  .button.is-dark.is-outlined[disabled], fieldset[disabled] .button.is-dark.is-outlined {
    background-color: transparent;
    border-color: #363636;
    box-shadow: none;
    color: #363636;
  }
  .button.is-dark.is-inverted.is-outlined {
    background-color: transparent;
    border-color: whitesmoke;
    color: whitesmoke;
  }
  .button.is-dark.is-inverted.is-outlined:hover, .button.is-dark.is-inverted.is-outlined.is-hovered, .button.is-dark.is-inverted.is-outlined:focus, .button.is-dark.is-inverted.is-outlined.is-focused {
    background-color: whitesmoke;
    color: #363636;
  }
  .button.is-dark.is-inverted.is-outlined.is-loading:hover::after, .button.is-dark.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-dark.is-inverted.is-outlined.is-loading:focus::after, .button.is-dark.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #363636 #363636 !important;
  }
  .button.is-dark.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-dark.is-inverted.is-outlined {
    background-color: transparent;
    border-color: whitesmoke;
    box-shadow: none;
    color: whitesmoke;
  }
  .button.is-primary {
    background-color: ' . $colors['primary'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-primary:hover, .button.is-primary.is-hovered {
    background-color: #a4a4a4;
    border-color: transparent;
    color: #fff;
  }
  .button.is-primary:focus, .button.is-primary.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-primary:focus:not(:active), .button.is-primary.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(170, 170, 170, 0.25);
  }
  .button.is-primary:active, .button.is-primary.is-active {
    background-color: #9d9d9d;
    border-color: transparent;
    color: #fff;
  }
  .button.is-primary[disabled], fieldset[disabled] .button.is-primary {
    background-color: ' . $colors['primary'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-primary.is-inverted {
    background-color: #fff;
    color: ' . $colors['primary'] . ';
  }
  .button.is-primary.is-inverted:hover, .button.is-primary.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-primary.is-inverted[disabled], fieldset[disabled] .button.is-primary.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['primary'] . ';
  }
  .button.is-primary.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-primary.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['primary'] . ';
    color: ' . $colors['primary'] . ';
  }
  .button.is-primary.is-outlined:hover, .button.is-primary.is-outlined.is-hovered, .button.is-primary.is-outlined:focus, .button.is-primary.is-outlined.is-focused {
    background-color: ' . $colors['primary'] . ';
    border-color: ' . $colors['primary'] . ';
    color: #fff;
  }
  .button.is-primary.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['primary'] . ' ' . $colors['primary'] . ' !important;
  }
  .button.is-primary.is-outlined.is-loading:hover::after, .button.is-primary.is-outlined.is-loading.is-hovered::after, .button.is-primary.is-outlined.is-loading:focus::after, .button.is-primary.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-primary.is-outlined[disabled], fieldset[disabled] .button.is-primary.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['primary'] . ';
    box-shadow: none;
    color: ' . $colors['primary'] . ';
  }
  .button.is-primary.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-primary.is-inverted.is-outlined:hover, .button.is-primary.is-inverted.is-outlined.is-hovered, .button.is-primary.is-inverted.is-outlined:focus, .button.is-primary.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['primary'] . ';
  }
  .button.is-primary.is-inverted.is-outlined.is-loading:hover::after, .button.is-primary.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-primary.is-inverted.is-outlined.is-loading:focus::after, .button.is-primary.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['primary'] . ' ' . $colors['primary'] . ' !important;
  }
  .button.is-primary.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-primary.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-link {
    background-color: ' . $colors['complementary'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-link:hover, .button.is-link.is-hovered {
    background-color: #c6c6c6;
    border-color: transparent;
    color: #fff;
  }
  .button.is-link:focus, .button.is-link.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-link:focus:not(:active), .button.is-link.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
  }
  .button.is-link:active, .button.is-link.is-active {
    background-color: #bfbfbf;
    border-color: transparent;
    color: #fff;
  }
  .button.is-link[disabled], fieldset[disabled] .button.is-link {
    background-color: ' . $colors['complementary'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-link.is-inverted {
    background-color: #fff;
    color: ' . $colors['complementary'] . ';
  }
  .button.is-link.is-inverted:hover, .button.is-link.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-link.is-inverted[disabled], fieldset[disabled] .button.is-link.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['complementary'] . ';
  }
  .button.is-link.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-link.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['complementary'] . ';
    color: ' . $colors['complementary'] . ';
  }
  .button.is-link.is-outlined:hover, .button.is-link.is-outlined.is-hovered, .button.is-link.is-outlined:focus, .button.is-link.is-outlined.is-focused {
    background-color: ' . $colors['complementary'] . ';
    border-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  .button.is-link.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['complementary'] . ' ' . $colors['complementary'] . ' !important;
  }
  .button.is-link.is-outlined.is-loading:hover::after, .button.is-link.is-outlined.is-loading.is-hovered::after, .button.is-link.is-outlined.is-loading:focus::after, .button.is-link.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-link.is-outlined[disabled], fieldset[disabled] .button.is-link.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['complementary'] . ';
    box-shadow: none;
    color: ' . $colors['complementary'] . ';
  }
  .button.is-link.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-link.is-inverted.is-outlined:hover, .button.is-link.is-inverted.is-outlined.is-hovered, .button.is-link.is-inverted.is-outlined:focus, .button.is-link.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['complementary'] . ';
  }
  .button.is-link.is-inverted.is-outlined.is-loading:hover::after, .button.is-link.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-link.is-inverted.is-outlined.is-loading:focus::after, .button.is-link.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['complementary'] . ' ' . $colors['complementary'] . ' !important;
  }
  .button.is-link.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-link.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-info {
    background-color: ' . $colors['cyan'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-info:hover, .button.is-info.is-hovered {
    background-color: #507477;
    border-color: transparent;
    color: #fff;
  }
  .button.is-info:focus, .button.is-info.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-info:focus:not(:active), .button.is-info.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
  }
  .button.is-info:active, .button.is-info.is-active {
    background-color: #4b6c70;
    border-color: transparent;
    color: #fff;
  }
  .button.is-info[disabled], fieldset[disabled] .button.is-info {
    background-color: ' . $colors['cyan'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-info.is-inverted {
    background-color: #fff;
    color: ' . $colors['cyan'] . ';
  }
  .button.is-info.is-inverted:hover, .button.is-info.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-info.is-inverted[disabled], fieldset[disabled] .button.is-info.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['cyan'] . ';
  }
  .button.is-info.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-info.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['cyan'] . ';
    color: ' . $colors['cyan'] . ';
  }
  .button.is-info.is-outlined:hover, .button.is-info.is-outlined.is-hovered, .button.is-info.is-outlined:focus, .button.is-info.is-outlined.is-focused {
    background-color: ' . $colors['cyan'] . ';
    border-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .button.is-info.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['cyan'] . ' ' . $colors['cyan'] . ' !important;
  }
  .button.is-info.is-outlined.is-loading:hover::after, .button.is-info.is-outlined.is-loading.is-hovered::after, .button.is-info.is-outlined.is-loading:focus::after, .button.is-info.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-info.is-outlined[disabled], fieldset[disabled] .button.is-info.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['cyan'] . ';
    box-shadow: none;
    color: ' . $colors['cyan'] . ';
  }
  .button.is-info.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-info.is-inverted.is-outlined:hover, .button.is-info.is-inverted.is-outlined.is-hovered, .button.is-info.is-inverted.is-outlined:focus, .button.is-info.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['cyan'] . ';
  }
  .button.is-info.is-inverted.is-outlined.is-loading:hover::after, .button.is-info.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-info.is-inverted.is-outlined.is-loading:focus::after, .button.is-info.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['cyan'] . ' ' . $colors['cyan'] . ' !important;
  }
  .button.is-info.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-info.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-success {
    background-color: ' . $colors['green'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-success:hover, .button.is-success.is-hovered {
    background-color: #639d6b;
    border-color: transparent;
    color: #fff;
  }
  .button.is-success:focus, .button.is-success.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-success:focus:not(:active), .button.is-success.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
  }
  .button.is-success:active, .button.is-success.is-active {
    background-color: #5e9665;
    border-color: transparent;
    color: #fff;
  }
  .button.is-success[disabled], fieldset[disabled] .button.is-success {
    background-color: ' . $colors['green'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-success.is-inverted {
    background-color: #fff;
    color: ' . $colors['green'] . ';
  }
  .button.is-success.is-inverted:hover, .button.is-success.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-success.is-inverted[disabled], fieldset[disabled] .button.is-success.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['green'] . ';
  }
  .button.is-success.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-success.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['green'] . ';
    color: ' . $colors['green'] . ';
  }
  .button.is-success.is-outlined:hover, .button.is-success.is-outlined.is-hovered, .button.is-success.is-outlined:focus, .button.is-success.is-outlined.is-focused {
    background-color: ' . $colors['green'] . ';
    border-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .button.is-success.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['green'] . ' ' . $colors['green'] . ' !important;
  }
  .button.is-success.is-outlined.is-loading:hover::after, .button.is-success.is-outlined.is-loading.is-hovered::after, .button.is-success.is-outlined.is-loading:focus::after, .button.is-success.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-success.is-outlined[disabled], fieldset[disabled] .button.is-success.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['green'] . ';
    box-shadow: none;
    color: ' . $colors['green'] . ';
  }
  .button.is-success.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-success.is-inverted.is-outlined:hover, .button.is-success.is-inverted.is-outlined.is-hovered, .button.is-success.is-inverted.is-outlined:focus, .button.is-success.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['green'] . ';
  }
  .button.is-success.is-inverted.is-outlined.is-loading:hover::after, .button.is-success.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-success.is-inverted.is-outlined.is-loading:focus::after, .button.is-success.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['green'] . ' ' . $colors['green'] . ' !important;
  }
  .button.is-success.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-success.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-warning {
    background-color: ' . $colors['yellow'] . ';
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-warning:hover, .button.is-warning.is-hovered {
    background-color: #cdc781;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-warning:focus, .button.is-warning.is-focused {
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-warning:focus:not(:active), .button.is-warning.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
  }
  .button.is-warning:active, .button.is-warning.is-active {
    background-color: #cac378;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-warning[disabled], fieldset[disabled] .button.is-warning {
    background-color: ' . $colors['yellow'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-warning.is-inverted {
    background-color: rgba(0, 0, 0, 0.7);
    color: ' . $colors['yellow'] . ';
  }
  .button.is-warning.is-inverted:hover, .button.is-warning.is-inverted.is-hovered {
    background-color: rgba(0, 0, 0, 0.7);
  }
  .button.is-warning.is-inverted[disabled], fieldset[disabled] .button.is-warning.is-inverted {
    background-color: rgba(0, 0, 0, 0.7);
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['yellow'] . ';
  }
  .button.is-warning.is-loading::after {
    border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;
  }
  .button.is-warning.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['yellow'] . ';
    color: ' . $colors['yellow'] . ';
  }
  .button.is-warning.is-outlined:hover, .button.is-warning.is-outlined.is-hovered, .button.is-warning.is-outlined:focus, .button.is-warning.is-outlined.is-focused {
    background-color: ' . $colors['yellow'] . ';
    border-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-warning.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['yellow'] . ' ' . $colors['yellow'] . ' !important;
  }
  .button.is-warning.is-outlined.is-loading:hover::after, .button.is-warning.is-outlined.is-loading.is-hovered::after, .button.is-warning.is-outlined.is-loading:focus::after, .button.is-warning.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;
  }
  .button.is-warning.is-outlined[disabled], fieldset[disabled] .button.is-warning.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['yellow'] . ';
    box-shadow: none;
    color: ' . $colors['yellow'] . ';
  }
  .button.is-warning.is-inverted.is-outlined {
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.7);
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-warning.is-inverted.is-outlined:hover, .button.is-warning.is-inverted.is-outlined.is-hovered, .button.is-warning.is-inverted.is-outlined:focus, .button.is-warning.is-inverted.is-outlined.is-focused {
    background-color: rgba(0, 0, 0, 0.7);
    color: ' . $colors['yellow'] . ';
  }
  .button.is-warning.is-inverted.is-outlined.is-loading:hover::after, .button.is-warning.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-warning.is-inverted.is-outlined.is-loading:focus::after, .button.is-warning.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['yellow'] . ' ' . $colors['yellow'] . ' !important;
  }
  .button.is-warning.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-warning.is-inverted.is-outlined {
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.7);
    box-shadow: none;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-danger {
    background-color: ' . $colors['red'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-danger:hover, .button.is-danger.is-hovered {
    background-color: #cd8481;
    border-color: transparent;
    color: #fff;
  }
  .button.is-danger:focus, .button.is-danger.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-danger:focus:not(:active), .button.is-danger.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
  }
  .button.is-danger:active, .button.is-danger.is-active {
    background-color: #ca7b78;
    border-color: transparent;
    color: #fff;
  }
  .button.is-danger[disabled], fieldset[disabled] .button.is-danger {
    background-color: ' . $colors['red'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-danger.is-inverted {
    background-color: #fff;
    color: ' . $colors['red'] . ';
  }
  .button.is-danger.is-inverted:hover, .button.is-danger.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-danger.is-inverted[disabled], fieldset[disabled] .button.is-danger.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['red'] . ';
  }
  .button.is-danger.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-danger.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['red'] . ';
    color: ' . $colors['red'] . ';
  }
  .button.is-danger.is-outlined:hover, .button.is-danger.is-outlined.is-hovered, .button.is-danger.is-outlined:focus, .button.is-danger.is-outlined.is-focused {
    background-color: ' . $colors['red'] . ';
    border-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .button.is-danger.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['red'] . ' ' . $colors['red'] . ' !important;
  }
  .button.is-danger.is-outlined.is-loading:hover::after, .button.is-danger.is-outlined.is-loading.is-hovered::after, .button.is-danger.is-outlined.is-loading:focus::after, .button.is-danger.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-danger.is-outlined[disabled], fieldset[disabled] .button.is-danger.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['red'] . ';
    box-shadow: none;
    color: ' . $colors['red'] . ';
  }
  .button.is-danger.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-danger.is-inverted.is-outlined:hover, .button.is-danger.is-inverted.is-outlined.is-hovered, .button.is-danger.is-inverted.is-outlined:focus, .button.is-danger.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['red'] . ';
  }
  .button.is-danger.is-inverted.is-outlined.is-loading:hover::after, .button.is-danger.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-danger.is-inverted.is-outlined.is-loading:focus::after, .button.is-danger.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['red'] . ' ' . $colors['red'] . ' !important;
  }
  .button.is-danger.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-danger.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-lightblue {
    background-color: ' . $colors['lightblue'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-lightblue:hover, .button.is-lightblue.is-hovered {
    background-color: #576d7f;
    border-color: transparent;
    color: #fff;
  }
  .button.is-lightblue:focus, .button.is-lightblue.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-lightblue:focus:not(:active), .button.is-lightblue.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(92, 115, 135, 0.25);
  }
  .button.is-lightblue:active, .button.is-lightblue.is-active {
    background-color: #526678;
    border-color: transparent;
    color: #fff;
  }
  .button.is-lightblue[disabled], fieldset[disabled] .button.is-lightblue {
    background-color: ' . $colors['lightblue'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-lightblue.is-inverted {
    background-color: #fff;
    color: ' . $colors['lightblue'] . ';
  }
  .button.is-lightblue.is-inverted:hover, .button.is-lightblue.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-lightblue.is-inverted[disabled], fieldset[disabled] .button.is-lightblue.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['lightblue'] . ';
  }
  .button.is-lightblue.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-lightblue.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['lightblue'] . ';
    color: ' . $colors['lightblue'] . ';
  }
  .button.is-lightblue.is-outlined:hover, .button.is-lightblue.is-outlined.is-hovered, .button.is-lightblue.is-outlined:focus, .button.is-lightblue.is-outlined.is-focused {
    background-color: ' . $colors['lightblue'] . ';
    border-color: ' . $colors['lightblue'] . ';
    color: #fff;
  }
  .button.is-lightblue.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['lightblue'] . ' ' . $colors['lightblue'] . ' !important;
  }
  .button.is-lightblue.is-outlined.is-loading:hover::after, .button.is-lightblue.is-outlined.is-loading.is-hovered::after, .button.is-lightblue.is-outlined.is-loading:focus::after, .button.is-lightblue.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-lightblue.is-outlined[disabled], fieldset[disabled] .button.is-lightblue.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['lightblue'] . ';
    box-shadow: none;
    color: ' . $colors['lightblue'] . ';
  }
  .button.is-lightblue.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-lightblue.is-inverted.is-outlined:hover, .button.is-lightblue.is-inverted.is-outlined.is-hovered, .button.is-lightblue.is-inverted.is-outlined:focus, .button.is-lightblue.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['lightblue'] . ';
  }
  .button.is-lightblue.is-inverted.is-outlined.is-loading:hover::after, .button.is-lightblue.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-lightblue.is-inverted.is-outlined.is-loading:focus::after, .button.is-lightblue.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['lightblue'] . ' ' . $colors['lightblue'] . ' !important;
  }
  .button.is-lightblue.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-lightblue.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-purple {
    background-color: ' . $colors['purple'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-purple:hover, .button.is-purple.is-hovered {
    background-color: #6f5d86;
    border-color: transparent;
    color: #fff;
  }
  .button.is-purple:focus, .button.is-purple.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-purple:focus:not(:active), .button.is-purple.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(117, 98, 142, 0.25);
  }
  .button.is-purple:active, .button.is-purple.is-active {
    background-color: #69587f;
    border-color: transparent;
    color: #fff;
  }
  .button.is-purple[disabled], fieldset[disabled] .button.is-purple {
    background-color: ' . $colors['purple'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-purple.is-inverted {
    background-color: #fff;
    color: ' . $colors['purple'] . ';
  }
  .button.is-purple.is-inverted:hover, .button.is-purple.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-purple.is-inverted[disabled], fieldset[disabled] .button.is-purple.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['purple'] . ';
  }
  .button.is-purple.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-purple.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['purple'] . ';
    color: ' . $colors['purple'] . ';
  }
  .button.is-purple.is-outlined:hover, .button.is-purple.is-outlined.is-hovered, .button.is-purple.is-outlined:focus, .button.is-purple.is-outlined.is-focused {
    background-color: ' . $colors['purple'] . ';
    border-color: ' . $colors['purple'] . ';
    color: #fff;
  }
  .button.is-purple.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['purple'] . ' ' . $colors['purple'] . ' !important;
  }
  .button.is-purple.is-outlined.is-loading:hover::after, .button.is-purple.is-outlined.is-loading.is-hovered::after, .button.is-purple.is-outlined.is-loading:focus::after, .button.is-purple.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-purple.is-outlined[disabled], fieldset[disabled] .button.is-purple.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['purple'] . ';
    box-shadow: none;
    color: ' . $colors['purple'] . ';
  }
  .button.is-purple.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-purple.is-inverted.is-outlined:hover, .button.is-purple.is-inverted.is-outlined.is-hovered, .button.is-purple.is-inverted.is-outlined:focus, .button.is-purple.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['purple'] . ';
  }
  .button.is-purple.is-inverted.is-outlined.is-loading:hover::after, .button.is-purple.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-purple.is-inverted.is-outlined.is-loading:focus::after, .button.is-purple.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['purple'] . ' ' . $colors['purple'] . ' !important;
  }
  .button.is-purple.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-purple.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-pink {
    background-color: ' . $colors['pink'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-pink:hover, .button.is-pink.is-hovered {
    background-color: #b37188;
    border-color: transparent;
    color: #fff;
  }
  .button.is-pink:focus, .button.is-pink.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-pink:focus:not(:active), .button.is-pink.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(183, 121, 143, 0.25);
  }
  .button.is-pink:active, .button.is-pink.is-active {
    background-color: #ae6881;
    border-color: transparent;
    color: #fff;
  }
  .button.is-pink[disabled], fieldset[disabled] .button.is-pink {
    background-color: ' . $colors['pink'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-pink.is-inverted {
    background-color: #fff;
    color: ' . $colors['pink'] . ';
  }
  .button.is-pink.is-inverted:hover, .button.is-pink.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-pink.is-inverted[disabled], fieldset[disabled] .button.is-pink.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['pink'] . ';
  }
  .button.is-pink.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-pink.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['pink'] . ';
    color: ' . $colors['pink'] . ';
  }
  .button.is-pink.is-outlined:hover, .button.is-pink.is-outlined.is-hovered, .button.is-pink.is-outlined:focus, .button.is-pink.is-outlined.is-focused {
    background-color: ' . $colors['pink'] . ';
    border-color: ' . $colors['pink'] . ';
    color: #fff;
  }
  .button.is-pink.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['pink'] . ' ' . $colors['pink'] . ' !important;
  }
  .button.is-pink.is-outlined.is-loading:hover::after, .button.is-pink.is-outlined.is-loading.is-hovered::after, .button.is-pink.is-outlined.is-loading:focus::after, .button.is-pink.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-pink.is-outlined[disabled], fieldset[disabled] .button.is-pink.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['pink'] . ';
    box-shadow: none;
    color: ' . $colors['pink'] . ';
  }
  .button.is-pink.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-pink.is-inverted.is-outlined:hover, .button.is-pink.is-inverted.is-outlined.is-hovered, .button.is-pink.is-inverted.is-outlined:focus, .button.is-pink.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['pink'] . ';
  }
  .button.is-pink.is-inverted.is-outlined.is-loading:hover::after, .button.is-pink.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-pink.is-inverted.is-outlined.is-loading:focus::after, .button.is-pink.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['pink'] . ' ' . $colors['pink'] . ' !important;
  }
  .button.is-pink.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-pink.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-blue {
    background-color: ' . $colors['blue'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-blue:hover, .button.is-blue.is-hovered {
    background-color: #5d6785;
    border-color: transparent;
    color: #fff;
  }
  .button.is-blue:focus, .button.is-blue.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-blue:focus:not(:active), .button.is-blue.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(98, 109, 141, 0.25);
  }
  .button.is-blue:active, .button.is-blue.is-active {
    background-color: #58617e;
    border-color: transparent;
    color: #fff;
  }
  .button.is-blue[disabled], fieldset[disabled] .button.is-blue {
    background-color: ' . $colors['blue'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-blue.is-inverted {
    background-color: #fff;
    color: ' . $colors['blue'] . ';
  }
  .button.is-blue.is-inverted:hover, .button.is-blue.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-blue.is-inverted[disabled], fieldset[disabled] .button.is-blue.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['blue'] . ';
  }
  .button.is-blue.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-blue.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['blue'] . ';
    color: ' . $colors['blue'] . ';
  }
  .button.is-blue.is-outlined:hover, .button.is-blue.is-outlined.is-hovered, .button.is-blue.is-outlined:focus, .button.is-blue.is-outlined.is-focused {
    background-color: ' . $colors['blue'] . ';
    border-color: ' . $colors['blue'] . ';
    color: #fff;
  }
  .button.is-blue.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['blue'] . ' ' . $colors['blue'] . ' !important;
  }
  .button.is-blue.is-outlined.is-loading:hover::after, .button.is-blue.is-outlined.is-loading.is-hovered::after, .button.is-blue.is-outlined.is-loading:focus::after, .button.is-blue.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-blue.is-outlined[disabled], fieldset[disabled] .button.is-blue.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['blue'] . ';
    box-shadow: none;
    color: ' . $colors['blue'] . ';
  }
  .button.is-blue.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-blue.is-inverted.is-outlined:hover, .button.is-blue.is-inverted.is-outlined.is-hovered, .button.is-blue.is-inverted.is-outlined:focus, .button.is-blue.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['blue'] . ';
  }
  .button.is-blue.is-inverted.is-outlined.is-loading:hover::after, .button.is-blue.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-blue.is-inverted.is-outlined.is-loading:focus::after, .button.is-blue.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['blue'] . ' ' . $colors['blue'] . ' !important;
  }
  .button.is-blue.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-blue.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-orange {
    background-color: ' . $colors['orange'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-orange:hover, .button.is-orange.is-hovered {
    background-color: #cda481;
    border-color: transparent;
    color: #fff;
  }
  .button.is-orange:focus, .button.is-orange.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-orange:focus:not(:active), .button.is-orange.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(209, 171, 138, 0.25);
  }
  .button.is-orange:active, .button.is-orange.is-active {
    background-color: #ca9e78;
    border-color: transparent;
    color: #fff;
  }
  .button.is-orange[disabled], fieldset[disabled] .button.is-orange {
    background-color: ' . $colors['orange'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-orange.is-inverted {
    background-color: #fff;
    color: ' . $colors['orange'] . ';
  }
  .button.is-orange.is-inverted:hover, .button.is-orange.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-orange.is-inverted[disabled], fieldset[disabled] .button.is-orange.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['orange'] . ';
  }
  .button.is-orange.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-orange.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['orange'] . ';
    color: ' . $colors['orange'] . ';
  }
  .button.is-orange.is-outlined:hover, .button.is-orange.is-outlined.is-hovered, .button.is-orange.is-outlined:focus, .button.is-orange.is-outlined.is-focused {
    background-color: ' . $colors['orange'] . ';
    border-color: ' . $colors['orange'] . ';
    color: #fff;
  }
  .button.is-orange.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['orange'] . ' ' . $colors['orange'] . ' !important;
  }
  .button.is-orange.is-outlined.is-loading:hover::after, .button.is-orange.is-outlined.is-loading.is-hovered::after, .button.is-orange.is-outlined.is-loading:focus::after, .button.is-orange.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-orange.is-outlined[disabled], fieldset[disabled] .button.is-orange.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['orange'] . ';
    box-shadow: none;
    color: ' . $colors['orange'] . ';
  }
  .button.is-orange.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-orange.is-inverted.is-outlined:hover, .button.is-orange.is-inverted.is-outlined.is-hovered, .button.is-orange.is-inverted.is-outlined:focus, .button.is-orange.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['orange'] . ';
  }
  .button.is-orange.is-inverted.is-outlined.is-loading:hover::after, .button.is-orange.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-orange.is-inverted.is-outlined.is-loading:focus::after, .button.is-orange.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['orange'] . ' ' . $colors['orange'] . ' !important;
  }
  .button.is-orange.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-orange.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-red {
    background-color: ' . $colors['red'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-red:hover, .button.is-red.is-hovered {
    background-color: #cd8481;
    border-color: transparent;
    color: #fff;
  }
  .button.is-red:focus, .button.is-red.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-red:focus:not(:active), .button.is-red.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
  }
  .button.is-red:active, .button.is-red.is-active {
    background-color: #ca7b78;
    border-color: transparent;
    color: #fff;
  }
  .button.is-red[disabled], fieldset[disabled] .button.is-red {
    background-color: ' . $colors['red'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-red.is-inverted {
    background-color: #fff;
    color: ' . $colors['red'] . ';
  }
  .button.is-red.is-inverted:hover, .button.is-red.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-red.is-inverted[disabled], fieldset[disabled] .button.is-red.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['red'] . ';
  }
  .button.is-red.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-red.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['red'] . ';
    color: ' . $colors['red'] . ';
  }
  .button.is-red.is-outlined:hover, .button.is-red.is-outlined.is-hovered, .button.is-red.is-outlined:focus, .button.is-red.is-outlined.is-focused {
    background-color: ' . $colors['red'] . ';
    border-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .button.is-red.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['red'] . ' ' . $colors['red'] . ' !important;
  }
  .button.is-red.is-outlined.is-loading:hover::after, .button.is-red.is-outlined.is-loading.is-hovered::after, .button.is-red.is-outlined.is-loading:focus::after, .button.is-red.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-red.is-outlined[disabled], fieldset[disabled] .button.is-red.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['red'] . ';
    box-shadow: none;
    color: ' . $colors['red'] . ';
  }
  .button.is-red.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-red.is-inverted.is-outlined:hover, .button.is-red.is-inverted.is-outlined.is-hovered, .button.is-red.is-inverted.is-outlined:focus, .button.is-red.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['red'] . ';
  }
  .button.is-red.is-inverted.is-outlined.is-loading:hover::after, .button.is-red.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-red.is-inverted.is-outlined.is-loading:focus::after, .button.is-red.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['red'] . ' ' . $colors['red'] . ' !important;
  }
  .button.is-red.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-red.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-green {
    background-color: ' . $colors['green'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-green:hover, .button.is-green.is-hovered {
    background-color: #639d6b;
    border-color: transparent;
    color: #fff;
  }
  .button.is-green:focus, .button.is-green.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-green:focus:not(:active), .button.is-green.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
  }
  .button.is-green:active, .button.is-green.is-active {
    background-color: #5e9665;
    border-color: transparent;
    color: #fff;
  }
  .button.is-green[disabled], fieldset[disabled] .button.is-green {
    background-color: ' . $colors['green'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-green.is-inverted {
    background-color: #fff;
    color: ' . $colors['green'] . ';
  }
  .button.is-green.is-inverted:hover, .button.is-green.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-green.is-inverted[disabled], fieldset[disabled] .button.is-green.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['green'] . ';
  }
  .button.is-green.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-green.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['green'] . ';
    color: ' . $colors['green'] . ';
  }
  .button.is-green.is-outlined:hover, .button.is-green.is-outlined.is-hovered, .button.is-green.is-outlined:focus, .button.is-green.is-outlined.is-focused {
    background-color: ' . $colors['green'] . ';
    border-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .button.is-green.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['green'] . ' ' . $colors['green'] . ' !important;
  }
  .button.is-green.is-outlined.is-loading:hover::after, .button.is-green.is-outlined.is-loading.is-hovered::after, .button.is-green.is-outlined.is-loading:focus::after, .button.is-green.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-green.is-outlined[disabled], fieldset[disabled] .button.is-green.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['green'] . ';
    box-shadow: none;
    color: ' . $colors['green'] . ';
  }
  .button.is-green.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-green.is-inverted.is-outlined:hover, .button.is-green.is-inverted.is-outlined.is-hovered, .button.is-green.is-inverted.is-outlined:focus, .button.is-green.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['green'] . ';
  }
  .button.is-green.is-inverted.is-outlined.is-loading:hover::after, .button.is-green.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-green.is-inverted.is-outlined.is-loading:focus::after, .button.is-green.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['green'] . ' ' . $colors['green'] . ' !important;
  }
  .button.is-green.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-green.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-yellow {
    background-color: ' . $colors['yellow'] . ';
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-yellow:hover, .button.is-yellow.is-hovered {
    background-color: #cdc781;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-yellow:focus, .button.is-yellow.is-focused {
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-yellow:focus:not(:active), .button.is-yellow.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
  }
  .button.is-yellow:active, .button.is-yellow.is-active {
    background-color: #cac378;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-yellow[disabled], fieldset[disabled] .button.is-yellow {
    background-color: ' . $colors['yellow'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-yellow.is-inverted {
    background-color: rgba(0, 0, 0, 0.7);
    color: ' . $colors['yellow'] . ';
  }
  .button.is-yellow.is-inverted:hover, .button.is-yellow.is-inverted.is-hovered {
    background-color: rgba(0, 0, 0, 0.7);
  }
  .button.is-yellow.is-inverted[disabled], fieldset[disabled] .button.is-yellow.is-inverted {
    background-color: rgba(0, 0, 0, 0.7);
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['yellow'] . ';
  }
  .button.is-yellow.is-loading::after {
    border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;
  }
  .button.is-yellow.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['yellow'] . ';
    color: ' . $colors['yellow'] . ';
  }
  .button.is-yellow.is-outlined:hover, .button.is-yellow.is-outlined.is-hovered, .button.is-yellow.is-outlined:focus, .button.is-yellow.is-outlined.is-focused {
    background-color: ' . $colors['yellow'] . ';
    border-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-yellow.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['yellow'] . ' ' . $colors['yellow'] . ' !important;
  }
  .button.is-yellow.is-outlined.is-loading:hover::after, .button.is-yellow.is-outlined.is-loading.is-hovered::after, .button.is-yellow.is-outlined.is-loading:focus::after, .button.is-yellow.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;
  }
  .button.is-yellow.is-outlined[disabled], fieldset[disabled] .button.is-yellow.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['yellow'] . ';
    box-shadow: none;
    color: ' . $colors['yellow'] . ';
  }
  .button.is-yellow.is-inverted.is-outlined {
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.7);
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-yellow.is-inverted.is-outlined:hover, .button.is-yellow.is-inverted.is-outlined.is-hovered, .button.is-yellow.is-inverted.is-outlined:focus, .button.is-yellow.is-inverted.is-outlined.is-focused {
    background-color: rgba(0, 0, 0, 0.7);
    color: ' . $colors['yellow'] . ';
  }
  .button.is-yellow.is-inverted.is-outlined.is-loading:hover::after, .button.is-yellow.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-yellow.is-inverted.is-outlined.is-loading:focus::after, .button.is-yellow.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['yellow'] . ' ' . $colors['yellow'] . ' !important;
  }
  .button.is-yellow.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-yellow.is-inverted.is-outlined {
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.7);
    box-shadow: none;
    color: rgba(0, 0, 0, 0.7);
  }
  .button.is-cyan {
    background-color: ' . $colors['cyan'] . ';
    border-color: transparent;
    color: #fff;
  }
  .button.is-cyan:hover, .button.is-cyan.is-hovered {
    background-color: #507477;
    border-color: transparent;
    color: #fff;
  }
  .button.is-cyan:focus, .button.is-cyan.is-focused {
    border-color: transparent;
    color: #fff;
  }
  .button.is-cyan:focus:not(:active), .button.is-cyan.is-focused:not(:active) {
    box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
  }
  .button.is-cyan:active, .button.is-cyan.is-active {
    background-color: #4b6c70;
    border-color: transparent;
    color: #fff;
  }
  .button.is-cyan[disabled], fieldset[disabled] .button.is-cyan {
    background-color: ' . $colors['cyan'] . ';
    border-color: transparent;
    box-shadow: none;
  }
  .button.is-cyan.is-inverted {
    background-color: #fff;
    color: ' . $colors['cyan'] . ';
  }
  .button.is-cyan.is-inverted:hover, .button.is-cyan.is-inverted.is-hovered {
    background-color: #f2f2f2;
  }
  .button.is-cyan.is-inverted[disabled], fieldset[disabled] .button.is-cyan.is-inverted {
    background-color: #fff;
    border-color: transparent;
    box-shadow: none;
    color: ' . $colors['cyan'] . ';
  }
  .button.is-cyan.is-loading::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-cyan.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['cyan'] . ';
    color: ' . $colors['cyan'] . ';
  }
  .button.is-cyan.is-outlined:hover, .button.is-cyan.is-outlined.is-hovered, .button.is-cyan.is-outlined:focus, .button.is-cyan.is-outlined.is-focused {
    background-color: ' . $colors['cyan'] . ';
    border-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .button.is-cyan.is-outlined.is-loading::after {
    border-color: transparent transparent ' . $colors['cyan'] . ' ' . $colors['cyan'] . ' !important;
  }
  .button.is-cyan.is-outlined.is-loading:hover::after, .button.is-cyan.is-outlined.is-loading.is-hovered::after, .button.is-cyan.is-outlined.is-loading:focus::after, .button.is-cyan.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent #fff #fff !important;
  }
  .button.is-cyan.is-outlined[disabled], fieldset[disabled] .button.is-cyan.is-outlined {
    background-color: transparent;
    border-color: ' . $colors['cyan'] . ';
    box-shadow: none;
    color: ' . $colors['cyan'] . ';
  }
  .button.is-cyan.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
  }
  .button.is-cyan.is-inverted.is-outlined:hover, .button.is-cyan.is-inverted.is-outlined.is-hovered, .button.is-cyan.is-inverted.is-outlined:focus, .button.is-cyan.is-inverted.is-outlined.is-focused {
    background-color: #fff;
    color: ' . $colors['cyan'] . ';
  }
  .button.is-cyan.is-inverted.is-outlined.is-loading:hover::after, .button.is-cyan.is-inverted.is-outlined.is-loading.is-hovered::after, .button.is-cyan.is-inverted.is-outlined.is-loading:focus::after, .button.is-cyan.is-inverted.is-outlined.is-loading.is-focused::after {
    border-color: transparent transparent ' . $colors['cyan'] . ' ' . $colors['cyan'] . ' !important;
  }
  .button.is-cyan.is-inverted.is-outlined[disabled], fieldset[disabled] .button.is-cyan.is-inverted.is-outlined {
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
    color: #fff;
  }
  .button.is-small {
    border-radius: 2px;
    font-size: 0.75rem;
  }
  .button.is-normal {
    font-size: 1rem;
  }
  .button.is-medium {
    font-size: 1.25rem;
  }
  .button.is-large {
    font-size: 1.5rem;
  }
  .button[disabled], fieldset[disabled] .button {
    background-color: ' . $colors['white'] . ';
    border-color: #dbdbdb;
    box-shadow: none;
    opacity: 0.5;
  }
  .button.is-fullwidth {
    display: flex;
    width: 100%;
  }
  .button.is-loading {
    color: transparent !important;
    pointer-events: none;
  }
  .button.is-loading::after {
    position: absolute;
    left: calc(50% - (1em / 2));
    top: calc(50% - (1em / 2));
    position: absolute !important;
  }
  .button.is-static {
    background-color: whitesmoke;
    border-color: #dbdbdb;
    color: #7a7a7a;
    box-shadow: none;
    pointer-events: none;
  }
  .button.is-rounded {
    border-radius: 290486px;
    padding-left: 1em;
    padding-right: 1em;
  }
  
  .buttons {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
  }
  .buttons .button {
    margin-bottom: 0.5rem;
  }
  .buttons .button:not(:last-child):not(.is-fullwidth) {
    margin-right: 0.5rem;
  }
  .buttons:last-child {
    margin-bottom: -0.5rem;
  }
  .buttons:not(:last-child) {
    margin-bottom: 1rem;
  }
  .buttons.are-small .button:not(.is-normal):not(.is-medium):not(.is-large) {
    border-radius: 2px;
    font-size: 0.75rem;
  }
  .buttons.are-medium .button:not(.is-small):not(.is-normal):not(.is-large) {
    font-size: 1.25rem;
  }
  .buttons.are-large .button:not(.is-small):not(.is-normal):not(.is-medium) {
    font-size: 1.5rem;
  }
  .buttons.has-addons .button:not(:first-child) {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .buttons.has-addons .button:not(:last-child) {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    margin-right: -1px;
  }
  .buttons.has-addons .button:last-child {
    margin-right: 0;
  }
  .buttons.has-addons .button:hover, .buttons.has-addons .button.is-hovered {
    z-index: 2;
  }
  .buttons.has-addons .button:focus, .buttons.has-addons .button.is-focused, .buttons.has-addons .button:active, .buttons.has-addons .button.is-active, .buttons.has-addons .button.is-selected {
    z-index: 3;
  }
  .buttons.has-addons .button:focus:hover, .buttons.has-addons .button.is-focused:hover, .buttons.has-addons .button:active:hover, .buttons.has-addons .button.is-active:hover, .buttons.has-addons .button.is-selected:hover {
    z-index: 4;
  }
  .buttons.has-addons .button.is-expanded {
    flex-grow: 1;
    flex-shrink: 1;
  }
  .buttons.is-centered {
    justify-content: center;
  }
  .buttons.is-centered:not(.has-addons) .button:not(.is-fullwidth) {
    margin-left: 0.25rem;
    margin-right: 0.25rem;
  }
  .buttons.is-right {
    justify-content: flex-end;
  }
  .buttons.is-right:not(.has-addons) .button:not(.is-fullwidth) {
    margin-left: 0.25rem;
    margin-right: 0.25rem;
  }
  
  .container {
    flex-grow: 1;
    margin: 0 auto;
    position: relative;
    width: auto;
  }
  @media screen and (min-width: 1024px) {
    .container {
      max-width: 960px;
    }
    .container.is-fluid {
      margin-left: 32px;
      margin-right: 32px;
      max-width: none;
    }
  }
  @media screen and (max-width: 1215px) {
    .container.is-widescreen {
      max-width: 1152px;
    }
  }
  @media screen and (max-width: 1407px) {
    .container.is-fullhd {
      max-width: 1344px;
    }
  }
  @media screen and (min-width: 1216px) {
    .container {
      max-width: 1152px;
    }
  }
  @media screen and (min-width: 1408px) {
    .container {
      max-width: 1344px;
    }
  }
  
  .content li + li {
    margin-top: 0.25em;
  }
  .content p:not(:last-child),
  .content dl:not(:last-child),
  .content ol:not(:last-child),
  .content ul:not(:last-child),
  .content blockquote:not(:last-child),
  .content pre:not(:last-child),
  .content table:not(:last-child) {
    margin-bottom: 1em;
  }
  .content h1,
  .content h2,
  .content h3,
  .content h4,
  .content h5,
  .content h6 {
    color: white;
    font-weight: 600;
    line-height: 1.125;
  }
  .content h1 {
    font-size: 2em;
    margin-bottom: 0.5em;
  }
  .content h1:not(:first-child) {
    margin-top: 1em;
  }
  .content h2 {
    font-size: 1.75em;
    margin-bottom: 0.5714em;
  }
  .content h2:not(:first-child) {
    margin-top: 1.1428em;
  }
  .content h3 {
    font-size: 1.5em;
    margin-bottom: 0.6666em;
  }
  .content h3:not(:first-child) {
    margin-top: 1.3333em;
  }
  .content h4 {
    font-size: 1.25em;
    margin-bottom: 0.8em;
  }
  .content h5 {
    font-size: 1.125em;
    margin-bottom: 0.8888em;
  }
  .content h6 {
    font-size: 1em;
    margin-bottom: 1em;
  }
  .content blockquote {
    background-color: whitesmoke;
    border-left: 3px solid white;
    padding: 1.25em 1.5em;
  }
  .content ol {
    list-style-position: outside;
    margin-left: 2em;
    margin-top: 1em;
  }
  .content ol:not([type]) {
    list-style-type: decimal;
  }
  .content ol:not([type]).is-lower-alpha {
    list-style-type: lower-alpha;
  }
  .content ol:not([type]).is-lower-roman {
    list-style-type: lower-roman;
  }
  .content ol:not([type]).is-upper-alpha {
    list-style-type: upper-alpha;
  }
  .content ol:not([type]).is-upper-roman {
    list-style-type: upper-roman;
  }
  .content ul {
    list-style: disc outside;
    margin-left: 2em;
    margin-top: 1em;
  }
  .content ul ul {
    list-style-type: circle;
    margin-top: 0.5em;
  }
  .content ul ul ul {
    list-style-type: square;
  }
  .content dd {
    margin-left: 2em;
  }
  .content figure {
    margin-left: 2em;
    margin-right: 2em;
    text-align: center;
  }
  .content figure:not(:first-child) {
    margin-top: 2em;
  }
  .content figure:not(:last-child) {
    margin-bottom: 2em;
  }
  .content figure img {
    display: inline-block;
  }
  .content figure figcaption {
    font-style: italic;
  }
  .content pre {
    -webkit-overflow-scrolling: touch;
    overflow-x: auto;
    padding: 1.25em 1.5em;
    white-space: pre;
    word-wrap: normal;
  }
  .content sup,
  .content sub {
    font-size: 75%;
  }
  .content table {
    width: 100%;
  }
  .content table td,
  .content table th {
    border: 1px solid #dbdbdb;
    border-width: 0 0 1px;
    padding: 0.5em 0.75em;
    vertical-align: top;
  }
  .content table th {
    color: white;
  }
  .content table th:not([align]) {
    text-align: left;
  }
  .content table thead td,
  .content table thead th {
    border-width: 0 0 2px;
    color: white;
  }
  .content table tfoot td,
  .content table tfoot th {
    border-width: 2px 0 0;
    color: white;
  }
  .content table tbody tr:last-child td,
  .content table tbody tr:last-child th {
    border-bottom-width: 0;
  }
  .content .tabs li + li {
    margin-top: 0;
  }
  .content.is-small {
    font-size: 0.75rem;
  }
  .content.is-medium {
    font-size: 1.25rem;
  }
  .content.is-large {
    font-size: 1.5rem;
  }
  
  .icon {
    align-items: center;
    display: inline-flex;
    justify-content: center;
    height: 1.5rem;
    width: 1.5rem;
  }
  .icon.is-small {
    height: 1rem;
    width: 1rem;
  }
  .icon.is-medium {
    height: 2rem;
    width: 2rem;
  }
  .icon.is-large {
    height: 3rem;
    width: 3rem;
  }
  
  .image {
    display: block;
    position: relative;
  }
  .image img {
    display: block;
    height: auto;
    width: 100%;
  }
  .image img.is-rounded {
    border-radius: 290486px;
  }
  .image.is-square img,
  .image.is-square .has-ratio, .image.is-1by1 img,
  .image.is-1by1 .has-ratio, .image.is-5by4 img,
  .image.is-5by4 .has-ratio, .image.is-4by3 img,
  .image.is-4by3 .has-ratio, .image.is-3by2 img,
  .image.is-3by2 .has-ratio, .image.is-5by3 img,
  .image.is-5by3 .has-ratio, .image.is-16by9 img,
  .image.is-16by9 .has-ratio, .image.is-2by1 img,
  .image.is-2by1 .has-ratio, .image.is-3by1 img,
  .image.is-3by1 .has-ratio, .image.is-4by5 img,
  .image.is-4by5 .has-ratio, .image.is-3by4 img,
  .image.is-3by4 .has-ratio, .image.is-2by3 img,
  .image.is-2by3 .has-ratio, .image.is-3by5 img,
  .image.is-3by5 .has-ratio, .image.is-9by16 img,
  .image.is-9by16 .has-ratio, .image.is-1by2 img,
  .image.is-1by2 .has-ratio, .image.is-1by3 img,
  .image.is-1by3 .has-ratio {
    height: 100%;
    width: 100%;
  }
  .image.is-square, .image.is-1by1 {
    padding-top: 100%;
  }
  .image.is-5by4 {
    padding-top: 80%;
  }
  .image.is-4by3 {
    padding-top: 75%;
  }
  .image.is-3by2 {
    padding-top: 66.6666%;
  }
  .image.is-5by3 {
    padding-top: 60%;
  }
  .image.is-16by9 {
    padding-top: 56.25%;
  }
  .image.is-2by1 {
    padding-top: 50%;
  }
  .image.is-3by1 {
    padding-top: 33.3333%;
  }
  .image.is-4by5 {
    padding-top: 125%;
  }
  .image.is-3by4 {
    padding-top: 133.3333%;
  }
  .image.is-2by3 {
    padding-top: 150%;
  }
  .image.is-3by5 {
    padding-top: 166.6666%;
  }
  .image.is-9by16 {
    padding-top: 177.7777%;
  }
  .image.is-1by2 {
    padding-top: 200%;
  }
  .image.is-1by3 {
    padding-top: 300%;
  }
  .image.is-16x16 {
    height: 16px;
    width: 16px;
  }
  .image.is-24x24 {
    height: 24px;
    width: 24px;
  }
  .image.is-32x32 {
    height: 32px;
    width: 32px;
  }
  .image.is-48x48 {
    height: 48px;
    width: 48px;
  }
  .image.is-64x64 {
    height: 64px;
    width: 64px;
  }
  .image.is-96x96 {
    height: 96px;
    width: 96px;
  }
  .image.is-128x128 {
    height: 128px;
    width: 128px;
  }
  
  .notification {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    border-radius: 0.5rem;
    padding: 1.25rem 2.5rem 1.25rem 1.5rem;
    position: relative;
  }
  .notification a:not(.button):not(.dropdown-item) {
    color: currentColor;
    text-decoration: underline;
  }
  .notification strong {
    color: currentColor;
  }
  .notification code,
  .notification pre {
    background: ' . $colors['white'] . ';
  }
  .notification pre code {
    background: transparent;
  }
  .notification > .delete {
    position: absolute;
    right: 0.5rem;
    top: 0.5rem;
  }
  .notification .title,
  .notification .subtitle,
  .notification .content {
    color: currentColor;
  }
  .notification.is-white {
    background-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .notification.is-black {
    background-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .notification.is-light {
    background-color: whitesmoke;
    color: #363636;
  }
  .notification.is-dark {
    background-color: #363636;
    color: whitesmoke;
  }
  .notification.is-primary {
    background-color: ' . $colors['primary'] . ';
    color: #fff;
  }
  .notification.is-link {
    background-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  .notification.is-info {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .notification.is-success {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .notification.is-warning {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .notification.is-danger {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .notification.is-lightblue {
    background-color: ' . $colors['lightblue'] . ';
    color: #fff;
  }
  .notification.is-purple {
    background-color: ' . $colors['purple'] . ';
    color: #fff;
  }
  .notification.is-pink {
    background-color: ' . $colors['pink'] . ';
    color: #fff;
  }
  .notification.is-blue {
    background-color: ' . $colors['blue'] . ';
    color: #fff;
  }
  .notification.is-orange {
    background-color: ' . $colors['orange'] . ';
    color: #fff;
  }
  .notification.is-red {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .notification.is-green {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .notification.is-yellow {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .notification.is-cyan {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  
  .progress {
    -moz-appearance: none;
    -webkit-appearance: none;
    border: none;
    border-radius: 290486px;
    display: block;
    height: 1rem;
    overflow: hidden;
    padding: 0;
    width: 100%;
  }
  .progress::-webkit-progress-bar {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
  }
  .progress::-webkit-progress-value {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
  }
  .progress::-moz-progress-bar {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
  }
  .progress::-ms-fill {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
    border: none;
  }
  .progress.is-white::-webkit-progress-value {
    background-color: ' . $colors['white'] . ';
  }
  .progress.is-white::-moz-progress-bar {
    background-color: ' . $colors['white'] . ';
  }
  .progress.is-white::-ms-fill {
    background-color: ' . $colors['white'] . ';
  }
  .progress.is-white:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['white'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-black::-webkit-progress-value {
    background-color: #0a0a0a;
  }
  .progress.is-black::-moz-progress-bar {
    background-color: #0a0a0a;
  }
  .progress.is-black::-ms-fill {
    background-color: #0a0a0a;
  }
  .progress.is-black:indeterminate {
    background-image: linear-gradient(to right, #0a0a0a 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-light::-webkit-progress-value {
    background-color: whitesmoke;
  }
  .progress.is-light::-moz-progress-bar {
    background-color: whitesmoke;
  }
  .progress.is-light::-ms-fill {
    background-color: whitesmoke;
  }
  .progress.is-light:indeterminate {
    background-image: linear-gradient(to right, whitesmoke 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-dark::-webkit-progress-value {
    background-color: #363636;
  }
  .progress.is-dark::-moz-progress-bar {
    background-color: #363636;
  }
  .progress.is-dark::-ms-fill {
    background-color: #363636;
  }
  .progress.is-dark:indeterminate {
    background-image: linear-gradient(to right, #363636 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-primary::-webkit-progress-value {
    background-color: ' . $colors['primary'] . ';
  }
  .progress.is-primary::-moz-progress-bar {
    background-color: ' . $colors['primary'] . ';
  }
  .progress.is-primary::-ms-fill {
    background-color: ' . $colors['primary'] . ';
  }
  .progress.is-primary:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['primary'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-link::-webkit-progress-value {
    background-color: ' . $colors['complementary'] . ';
  }
  .progress.is-link::-moz-progress-bar {
    background-color: ' . $colors['complementary'] . ';
  }
  .progress.is-link::-ms-fill {
    background-color: ' . $colors['complementary'] . ';
  }
  .progress.is-link:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['complementary'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-info::-webkit-progress-value {
    background-color: ' . $colors['cyan'] . ';
  }
  .progress.is-info::-moz-progress-bar {
    background-color: ' . $colors['cyan'] . ';
  }
  .progress.is-info::-ms-fill {
    background-color: ' . $colors['cyan'] . ';
  }
  .progress.is-info:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['cyan'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-success::-webkit-progress-value {
    background-color: ' . $colors['green'] . ';
  }
  .progress.is-success::-moz-progress-bar {
    background-color: ' . $colors['green'] . ';
  }
  .progress.is-success::-ms-fill {
    background-color: ' . $colors['green'] . ';
  }
  .progress.is-success:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['green'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-warning::-webkit-progress-value {
    background-color: ' . $colors['yellow'] . ';
  }
  .progress.is-warning::-moz-progress-bar {
    background-color: ' . $colors['yellow'] . ';
  }
  .progress.is-warning::-ms-fill {
    background-color: ' . $colors['yellow'] . ';
  }
  .progress.is-warning:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['yellow'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-danger::-webkit-progress-value {
    background-color: ' . $colors['red'] . ';
  }
  .progress.is-danger::-moz-progress-bar {
    background-color: ' . $colors['red'] . ';
  }
  .progress.is-danger::-ms-fill {
    background-color: ' . $colors['red'] . ';
  }
  .progress.is-danger:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['red'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-lightblue::-webkit-progress-value {
    background-color: ' . $colors['lightblue'] . ';
  }
  .progress.is-lightblue::-moz-progress-bar {
    background-color: ' . $colors['lightblue'] . ';
  }
  .progress.is-lightblue::-ms-fill {
    background-color: ' . $colors['lightblue'] . ';
  }
  .progress.is-lightblue:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['lightblue'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-purple::-webkit-progress-value {
    background-color: ' . $colors['purple'] . ';
  }
  .progress.is-purple::-moz-progress-bar {
    background-color: ' . $colors['purple'] . ';
  }
  .progress.is-purple::-ms-fill {
    background-color: ' . $colors['purple'] . ';
  }
  .progress.is-purple:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['purple'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-pink::-webkit-progress-value {
    background-color: ' . $colors['pink'] . ';
  }
  .progress.is-pink::-moz-progress-bar {
    background-color: ' . $colors['pink'] . ';
  }
  .progress.is-pink::-ms-fill {
    background-color: ' . $colors['pink'] . ';
  }
  .progress.is-pink:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['pink'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-blue::-webkit-progress-value {
    background-color: ' . $colors['blue'] . ';
  }
  .progress.is-blue::-moz-progress-bar {
    background-color: ' . $colors['blue'] . ';
  }
  .progress.is-blue::-ms-fill {
    background-color: ' . $colors['blue'] . ';
  }
  .progress.is-blue:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['blue'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-orange::-webkit-progress-value {
    background-color: ' . $colors['orange'] . ';
  }
  .progress.is-orange::-moz-progress-bar {
    background-color: ' . $colors['orange'] . ';
  }
  .progress.is-orange::-ms-fill {
    background-color: ' . $colors['orange'] . ';
  }
  .progress.is-orange:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['orange'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-red::-webkit-progress-value {
    background-color: ' . $colors['red'] . ';
  }
  .progress.is-red::-moz-progress-bar {
    background-color: ' . $colors['red'] . ';
  }
  .progress.is-red::-ms-fill {
    background-color: ' . $colors['red'] . ';
  }
  .progress.is-red:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['red'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-green::-webkit-progress-value {
    background-color: ' . $colors['green'] . ';
  }
  .progress.is-green::-moz-progress-bar {
    background-color: ' . $colors['green'] . ';
  }
  .progress.is-green::-ms-fill {
    background-color: ' . $colors['green'] . ';
  }
  .progress.is-green:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['green'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-yellow::-webkit-progress-value {
    background-color: ' . $colors['yellow'] . ';
  }
  .progress.is-yellow::-moz-progress-bar {
    background-color: ' . $colors['yellow'] . ';
  }
  .progress.is-yellow::-ms-fill {
    background-color: ' . $colors['yellow'] . ';
  }
  .progress.is-yellow:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['yellow'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress.is-cyan::-webkit-progress-value {
    background-color: ' . $colors['cyan'] . ';
  }
  .progress.is-cyan::-moz-progress-bar {
    background-color: ' . $colors['cyan'] . ';
  }
  .progress.is-cyan::-ms-fill {
    background-color: ' . $colors['cyan'] . ';
  }
  .progress.is-cyan:indeterminate {
    background-image: linear-gradient(to right, ' . $colors['cyan'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
  }
  .progress:indeterminate {
    animation-duration: 1.5s;
    animation-iteration-count: infinite;
    animation-name: moveIndeterminate;
    animation-timing-function: linear;
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    background-image: linear-gradient(to right, ' . $colors['white'] . ' 30%, '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ' 30%);
    background-position: top left;
    background-repeat: no-repeat;
    background-size: 150% 150%;
  }
  .progress:indeterminate::-webkit-progress-bar {
    background-color: transparent;
  }
  .progress:indeterminate::-moz-progress-bar {
    background-color: transparent;
  }
  .progress.is-small {
    height: 0.75rem;
  }
  .progress.is-medium {
    height: 1.25rem;
  }
  .progress.is-large {
    height: 1.5rem;
  }
  
  @keyframes moveIndeterminate {
    from {
      background-position: 200% 0;
    }
    to {
      background-position: -200% 0;
    }
  }
  .table {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    color: ' . $colors['white'] . ';
  }
  .table td,
  .table th {
    border: 1px solid #dbdbdb;
    border-width: 0 0 1px;
    padding: 0.5em 0.75em;
    vertical-align: top;
  }
  .table td.is-white,
  .table th.is-white {
    background-color: ' . $colors['white'] . ';
    border-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .table td.is-black,
  .table th.is-black {
    background-color: #0a0a0a;
    border-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .table td.is-light,
  .table th.is-light {
    background-color: whitesmoke;
    border-color: whitesmoke;
    color: #363636;
  }
  .table td.is-dark,
  .table th.is-dark {
    background-color: #363636;
    border-color: #363636;
    color: whitesmoke;
  }
  .table td.is-primary,
  .table th.is-primary {
    background-color: ' . $colors['primary'] . ';
    border-color: ' . $colors['primary'] . ';
    color: #fff;
  }
  .table td.is-link,
  .table th.is-link {
    background-color: ' . $colors['complementary'] . ';
    border-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  .table td.is-info,
  .table th.is-info {
    background-color: ' . $colors['cyan'] . ';
    border-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .table td.is-success,
  .table th.is-success {
    background-color: ' . $colors['green'] . ';
    border-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .table td.is-warning,
  .table th.is-warning {
    background-color: ' . $colors['yellow'] . ';
    border-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .table td.is-danger,
  .table th.is-danger {
    background-color: ' . $colors['red'] . ';
    border-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .table td.is-lightblue,
  .table th.is-lightblue {
    background-color: ' . $colors['lightblue'] . ';
    border-color: ' . $colors['lightblue'] . ';
    color: #fff;
  }
  .table td.is-purple,
  .table th.is-purple {
    background-color: ' . $colors['purple'] . ';
    border-color: ' . $colors['purple'] . ';
    color: #fff;
  }
  .table td.is-pink,
  .table th.is-pink {
    background-color: ' . $colors['pink'] . ';
    border-color: ' . $colors['pink'] . ';
    color: #fff;
  }
  .table td.is-blue,
  .table th.is-blue {
    background-color: ' . $colors['blue'] . ';
    border-color: ' . $colors['blue'] . ';
    color: #fff;
  }
  .table td.is-orange,
  .table th.is-orange {
    background-color: ' . $colors['orange'] . ';
    border-color: ' . $colors['orange'] . ';
    color: #fff;
  }
  .table td.is-red,
  .table th.is-red {
    background-color: ' . $colors['red'] . ';
    border-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .table td.is-green,
  .table th.is-green {
    background-color: ' . $colors['green'] . ';
    border-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .table td.is-yellow,
  .table th.is-yellow {
    background-color: ' . $colors['yellow'] . ';
    border-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .table td.is-cyan,
  .table th.is-cyan {
    background-color: ' . $colors['cyan'] . ';
    border-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .table td.is-narrow,
  .table th.is-narrow {
    white-space: nowrap;
    width: 1%;
  }
  .table td.is-selected,
  .table th.is-selected {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
    color: #fff;
  }
  .table td.is-selected a,
  .table td.is-selected strong,
  .table th.is-selected a,
  .table th.is-selected strong {
    color: currentColor;
  }
  .table th {
    color: ' . $colors['white'] . ';
  }
  .table th:not([align]) {
    text-align: left;
  }
  .table tr.is-selected {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.2)) . ';
    color: #fff;
  }
  .table tr.is-selected a,
  .table tr.is-selected strong {
    color: currentColor;
  }
  .table tr.is-selected td,
  .table tr.is-selected th {
    border-color: #fff;
    color: currentColor;
  }
  .table thead {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
  }
  .table thead td,
  .table thead th {
    border-width: 0 0 2px;
    color: ' . $colors['white'] . ';
  }
  .table tfoot {
    background-color: transparent;
  }
  .table tfoot td,
  .table tfoot th {
    border-width: 2px 0 0;
    color: white;
  }
  .table tbody {
    background-color: transparent;
  }
  .table tbody tr:last-child td,
  .table tbody tr:last-child th {
    border-bottom-width: 0;
  }
  .table.is-bordered td,
  .table.is-bordered th {
    border-width: 1px;
  }
  .table.is-bordered tr:last-child td,
  .table.is-bordered tr:last-child th {
    border-bottom-width: 1px;
  }
  .table.is-fullwidth {
    width: 100%;
  }
  .table.is-hoverable tbody tr:not(.is-selected):hover {
    background-color: #fafafa;
  }
  .table.is-hoverable.is-striped tbody tr:not(.is-selected):hover {
    background-color: #fafafa;
  }
  .table.is-hoverable.is-striped tbody tr:not(.is-selected):hover:nth-child(even) {
    background-color: whitesmoke;
  }
  .table.is-narrow td,
  .table.is-narrow th {
    padding: 0.25em 0.5em;
  }
  .table.is-striped tbody tr:not(.is-selected):nth-child(even) {
    background-color: #fafafa;
  }
  
  .table-container {
    -webkit-overflow-scrolling: touch;
    overflow: auto;
    overflow-y: hidden;
    max-width: 100%;
  }
  
  .tags {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
  }
  .tags .tag {
    margin-bottom: 0.5rem;
  }
  .tags .tag:not(:last-child) {
    margin-right: 0.5rem;
  }
  .tags:last-child {
    margin-bottom: -0.5rem;
  }
  .tags:not(:last-child) {
    margin-bottom: 1rem;
  }
  .tags.are-medium .tag:not(.is-normal):not(.is-large) {
    font-size: 1rem;
  }
  .tags.are-large .tag:not(.is-normal):not(.is-medium) {
    font-size: 1.25rem;
  }
  .tags.is-centered {
    justify-content: center;
  }
  .tags.is-centered .tag {
    margin-right: 0.25rem;
    margin-left: 0.25rem;
  }
  .tags.is-right {
    justify-content: flex-end;
  }
  .tags.is-right .tag:not(:first-child) {
    margin-left: 0.5rem;
  }
  .tags.is-right .tag:not(:last-child) {
    margin-right: 0;
  }
  .tags.has-addons .tag {
    margin-right: 0;
  }
  .tags.has-addons .tag:not(:first-child) {
    margin-left: 0;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .tags.has-addons .tag:not(:last-child) {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
  }
  
  .tag:not(body) {
    align-items: center;
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    border-radius: 0.5rem;
    color: ' . $colors['white'] . ';
    display: inline-flex;
    font-size: 0.75rem;
    height: 2em;
    justify-content: center;
    line-height: 1.5;
    padding-left: 0.75em;
    padding-right: 0.75em;
    white-space: nowrap;
  }
  .tag:not(body) .delete {
    margin-left: 0.25rem;
    margin-right: -0.375rem;
  }
  .tag:not(body).is-white {
    background-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .tag:not(body).is-black {
    background-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .tag:not(body).is-light {
    background-color: whitesmoke;
    color: #363636;
  }
  .tag:not(body).is-dark {
    background-color: #363636;
    color: whitesmoke;
  }
  .tag:not(body).is-primary {
    background-color: ' . $colors['primary'] . ';
    color: #fff;
  }
  .tag:not(body).is-link {
    background-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  .tag:not(body).is-info {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .tag:not(body).is-success {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .tag:not(body).is-warning {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .tag:not(body).is-danger {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .tag:not(body).is-lightblue {
    background-color: ' . $colors['lightblue'] . ';
    color: #fff;
  }
  .tag:not(body).is-purple {
    background-color: ' . $colors['purple'] . ';
    color: #fff;
  }
  .tag:not(body).is-pink {
    background-color: ' . $colors['pink'] . ';
    color: #fff;
  }
  .tag:not(body).is-blue {
    background-color: ' . $colors['blue'] . ';
    color: #fff;
  }
  .tag:not(body).is-orange {
    background-color: ' . $colors['orange'] . ';
    color: #fff;
  }
  .tag:not(body).is-red {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .tag:not(body).is-green {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .tag:not(body).is-yellow {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .tag:not(body).is-cyan {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .tag:not(body).is-normal {
    font-size: 0.75rem;
  }
  .tag:not(body).is-medium {
    font-size: 1rem;
  }
  .tag:not(body).is-large {
    font-size: 1.25rem;
  }
  .tag:not(body) .icon:first-child:not(:last-child) {
    margin-left: -0.375em;
    margin-right: 0.1875em;
  }
  .tag:not(body) .icon:last-child:not(:first-child) {
    margin-left: 0.1875em;
    margin-right: -0.375em;
  }
  .tag:not(body) .icon:first-child:last-child {
    margin-left: -0.375em;
    margin-right: -0.375em;
  }
  .tag:not(body).is-delete {
    margin-left: 1px;
    padding: 0;
    position: relative;
    width: 2em;
  }
  .tag:not(body).is-delete::before, .tag:not(body).is-delete::after {
    background-color: currentColor;
    content: "";
    display: block;
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translateX(-50%) translateY(-50%) rotate(45deg);
    transform-origin: center center;
  }
  .tag:not(body).is-delete::before {
    height: 1px;
    width: 50%;
  }
  .tag:not(body).is-delete::after {
    height: 50%;
    width: 1px;
  }
  .tag:not(body).is-delete:hover, .tag:not(body).is-delete:focus {
    background-color: ' . $colors['edark'] . ';
  }
  .tag:not(body).is-delete:active {
    background-color: #0b0c0f;
  }
  .tag:not(body).is-rounded {
    border-radius: 290486px;
  }
  
  a.tag:hover {
    text-decoration: underline;
  }
  
  .title,
  .subtitle {
    word-break: break-word;
  }
  .title em,
  .title span,
  .subtitle em,
  .subtitle span {
    font-weight: inherit;
  }
  .title sub,
  .subtitle sub {
    font-size: 0.75em;
  }
  .title sup,
  .subtitle sup {
    font-size: 0.75em;
  }
  .title .tag,
  .subtitle .tag {
    vertical-align: middle;
  }
  
  .title {
    color: white;
    font-size: 2rem;
    font-weight: 600;
    line-height: 1.125;
  }
  .title strong {
    color: inherit;
    font-weight: inherit;
  }
  .title + .highlight {
    margin-top: -0.75rem;
  }
  .title:not(.is-spaced) + .subtitle {
    margin-top: -1.25rem;
  }
  .title.is-1 {
    font-size: 3rem;
  }
  .title.is-2 {
    font-size: 2.5rem;
  }
  .title.is-3 {
    font-size: 2rem;
  }
  .title.is-4 {
    font-size: 1.5rem;
  }
  .title.is-5 {
    font-size: 1.25rem;
  }
  .title.is-6 {
    font-size: 1rem;
  }
  .title.is-7 {
    font-size: 0.75rem;
  }
  
  .subtitle {
    color: ' . $colors['white'] . ';
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.25;
  }
  .subtitle strong {
    color: #363636;
    font-weight: 600;
  }
  .subtitle:not(.is-spaced) + .title {
    margin-top: -1.25rem;
  }
  .subtitle.is-1 {
    font-size: 3rem;
  }
  .subtitle.is-2 {
    font-size: 2.5rem;
  }
  .subtitle.is-3 {
    font-size: 2rem;
  }
  .subtitle.is-4 {
    font-size: 1.5rem;
  }
  .subtitle.is-5 {
    font-size: 1.25rem;
  }
  .subtitle.is-6 {
    font-size: 1rem;
  }
  .subtitle.is-7 {
    font-size: 0.75rem;
  }
  
  .heading {
    display: block;
    font-size: 11px;
    letter-spacing: 1px;
    margin-bottom: 5px;
    text-transform: uppercase;
  }
  
  .highlight {
    font-weight: 400;
    max-width: 100%;
    overflow: hidden;
    padding: 0;
  }
  .highlight pre {
    overflow: auto;
    max-width: 100%;
  }
  
  .number {
    align-items: center;
    background-color: whitesmoke;
    border-radius: 290486px;
    display: inline-flex;
    font-size: 1.25rem;
    height: 2em;
    justify-content: center;
    margin-right: 1.5rem;
    min-width: 2.5em;
    padding: 0.25rem 0.5rem;
    text-align: center;
    vertical-align: top;
  }
  
  .select select, .textarea, .input {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    border-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    border-radius: 0.5rem;
    color: ' . $colors['white'] . ';
  }
  .select select::-moz-placeholder, .textarea::-moz-placeholder, .input::-moz-placeholder {
    color: rgba(255, 255, 255, 0.3);
  }
  .select select::-webkit-input-placeholder, .textarea::-webkit-input-placeholder, .input::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.3);
  }
  .select select:-moz-placeholder, .textarea:-moz-placeholder, .input:-moz-placeholder {
    color: rgba(255, 255, 255, 0.3);
  }
  .select select:-ms-input-placeholder, .textarea:-ms-input-placeholder, .input:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.3);
  }
  .select select:hover, .textarea:hover, .input:hover, .select select.is-hovered, .is-hovered.textarea, .is-hovered.input {
    border-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
  }
  .select select:focus, .textarea:focus, .input:focus, .select select.is-focused, .is-focused.textarea, .is-focused.input, .select select:active, .textarea:active, .input:active, .select select.is-active, .is-active.textarea, .is-active.input {
    border-color: ' . $colors['complementary'] . ';
    box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
  }
  .select select[disabled], [disabled].textarea, [disabled].input, fieldset[disabled] .select select, .select fieldset[disabled] select, fieldset[disabled] .textarea, fieldset[disabled] .input {
    background-color: whitesmoke;
    border-color: whitesmoke;
    box-shadow: none;
    color: ' . $colors['white'] . ';
  }
  .select select[disabled]::-moz-placeholder, [disabled].textarea::-moz-placeholder, [disabled].input::-moz-placeholder, fieldset[disabled] .select select::-moz-placeholder, .select fieldset[disabled] select::-moz-placeholder, fieldset[disabled] .textarea::-moz-placeholder, fieldset[disabled] .input::-moz-placeholder {
    color: rgba(255, 255, 255, 0.3);
  }
  .select select[disabled]::-webkit-input-placeholder, [disabled].textarea::-webkit-input-placeholder, [disabled].input::-webkit-input-placeholder, fieldset[disabled] .select select::-webkit-input-placeholder, .select fieldset[disabled] select::-webkit-input-placeholder, fieldset[disabled] .textarea::-webkit-input-placeholder, fieldset[disabled] .input::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.3);
  }
  .select select[disabled]:-moz-placeholder, [disabled].textarea:-moz-placeholder, [disabled].input:-moz-placeholder, fieldset[disabled] .select select:-moz-placeholder, .select fieldset[disabled] select:-moz-placeholder, fieldset[disabled] .textarea:-moz-placeholder, fieldset[disabled] .input:-moz-placeholder {
    color: rgba(255, 255, 255, 0.3);
  }
  .select select[disabled]:-ms-input-placeholder, [disabled].textarea:-ms-input-placeholder, [disabled].input:-ms-input-placeholder, fieldset[disabled] .select select:-ms-input-placeholder, .select fieldset[disabled] select:-ms-input-placeholder, fieldset[disabled] .textarea:-ms-input-placeholder, fieldset[disabled] .input:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.3);
  }
  
  .textarea, .input {
    box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.1);
    max-width: 100%;
    width: 100%;
  }
  [readonly].textarea, [readonly].input {
    box-shadow: none;
  }
  .is-white.textarea, .is-white.input {
    border-color: ' . $colors['white'] . ';
  }
  .is-white.textarea:focus, .is-white.input:focus, .is-white.is-focused.textarea, .is-white.is-focused.input, .is-white.textarea:active, .is-white.input:active, .is-white.is-active.textarea, .is-white.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25);
  }
  .is-black.textarea, .is-black.input {
    border-color: #0a0a0a;
  }
  .is-black.textarea:focus, .is-black.input:focus, .is-black.is-focused.textarea, .is-black.is-focused.input, .is-black.textarea:active, .is-black.input:active, .is-black.is-active.textarea, .is-black.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25);
  }
  .is-light.textarea, .is-light.input {
    border-color: whitesmoke;
  }
  .is-light.textarea:focus, .is-light.input:focus, .is-light.is-focused.textarea, .is-light.is-focused.input, .is-light.textarea:active, .is-light.input:active, .is-light.is-active.textarea, .is-light.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25);
  }
  .is-dark.textarea, .is-dark.input {
    border-color: #363636;
  }
  .is-dark.textarea:focus, .is-dark.input:focus, .is-dark.is-focused.textarea, .is-dark.is-focused.input, .is-dark.textarea:active, .is-dark.input:active, .is-dark.is-active.textarea, .is-dark.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25);
  }
  .is-primary.textarea, .is-primary.input {
    border-color: ' . $colors['primary'] . ';
  }
  .is-primary.textarea:focus, .is-primary.input:focus, .is-primary.is-focused.textarea, .is-primary.is-focused.input, .is-primary.textarea:active, .is-primary.input:active, .is-primary.is-active.textarea, .is-primary.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(170, 170, 170, 0.25);
  }
  .is-link.textarea, .is-link.input {
    border-color: ' . $colors['complementary'] . ';
  }
  .is-link.textarea:focus, .is-link.input:focus, .is-link.is-focused.textarea, .is-link.is-focused.input, .is-link.textarea:active, .is-link.input:active, .is-link.is-active.textarea, .is-link.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
  }
  .is-info.textarea, .is-info.input {
    border-color: ' . $colors['cyan'] . ';
  }
  .is-info.textarea:focus, .is-info.input:focus, .is-info.is-focused.textarea, .is-info.is-focused.input, .is-info.textarea:active, .is-info.input:active, .is-info.is-active.textarea, .is-info.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
  }
  .is-success.textarea, .is-success.input {
    border-color: ' . $colors['green'] . ';
  }
  .is-success.textarea:focus, .is-success.input:focus, .is-success.is-focused.textarea, .is-success.is-focused.input, .is-success.textarea:active, .is-success.input:active, .is-success.is-active.textarea, .is-success.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
  }
  .is-warning.textarea, .is-warning.input {
    border-color: ' . $colors['yellow'] . ';
  }
  .is-warning.textarea:focus, .is-warning.input:focus, .is-warning.is-focused.textarea, .is-warning.is-focused.input, .is-warning.textarea:active, .is-warning.input:active, .is-warning.is-active.textarea, .is-warning.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
  }
  .is-danger.textarea, .is-danger.input {
    border-color: ' . $colors['red'] . ';
  }
  .is-danger.textarea:focus, .is-danger.input:focus, .is-danger.is-focused.textarea, .is-danger.is-focused.input, .is-danger.textarea:active, .is-danger.input:active, .is-danger.is-active.textarea, .is-danger.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
  }
  .is-lightblue.textarea, .is-lightblue.input {
    border-color: ' . $colors['lightblue'] . ';
  }
  .is-lightblue.textarea:focus, .is-lightblue.input:focus, .is-lightblue.is-focused.textarea, .is-lightblue.is-focused.input, .is-lightblue.textarea:active, .is-lightblue.input:active, .is-lightblue.is-active.textarea, .is-lightblue.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(92, 115, 135, 0.25);
  }
  .is-purple.textarea, .is-purple.input {
    border-color: ' . $colors['purple'] . ';
  }
  .is-purple.textarea:focus, .is-purple.input:focus, .is-purple.is-focused.textarea, .is-purple.is-focused.input, .is-purple.textarea:active, .is-purple.input:active, .is-purple.is-active.textarea, .is-purple.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(117, 98, 142, 0.25);
  }
  .is-pink.textarea, .is-pink.input {
    border-color: ' . $colors['pink'] . ';
  }
  .is-pink.textarea:focus, .is-pink.input:focus, .is-pink.is-focused.textarea, .is-pink.is-focused.input, .is-pink.textarea:active, .is-pink.input:active, .is-pink.is-active.textarea, .is-pink.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(183, 121, 143, 0.25);
  }
  .is-blue.textarea, .is-blue.input {
    border-color: ' . $colors['blue'] . ';
  }
  .is-blue.textarea:focus, .is-blue.input:focus, .is-blue.is-focused.textarea, .is-blue.is-focused.input, .is-blue.textarea:active, .is-blue.input:active, .is-blue.is-active.textarea, .is-blue.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(98, 109, 141, 0.25);
  }
  .is-orange.textarea, .is-orange.input {
    border-color: ' . $colors['orange'] . ';
  }
  .is-orange.textarea:focus, .is-orange.input:focus, .is-orange.is-focused.textarea, .is-orange.is-focused.input, .is-orange.textarea:active, .is-orange.input:active, .is-orange.is-active.textarea, .is-orange.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(209, 171, 138, 0.25);
  }
  .is-red.textarea, .is-red.input {
    border-color: ' . $colors['red'] . ';
  }
  .is-red.textarea:focus, .is-red.input:focus, .is-red.is-focused.textarea, .is-red.is-focused.input, .is-red.textarea:active, .is-red.input:active, .is-red.is-active.textarea, .is-red.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
  }
  .is-green.textarea, .is-green.input {
    border-color: ' . $colors['green'] . ';
  }
  .is-green.textarea:focus, .is-green.input:focus, .is-green.is-focused.textarea, .is-green.is-focused.input, .is-green.textarea:active, .is-green.input:active, .is-green.is-active.textarea, .is-green.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
  }
  .is-yellow.textarea, .is-yellow.input {
    border-color: ' . $colors['yellow'] . ';
  }
  .is-yellow.textarea:focus, .is-yellow.input:focus, .is-yellow.is-focused.textarea, .is-yellow.is-focused.input, .is-yellow.textarea:active, .is-yellow.input:active, .is-yellow.is-active.textarea, .is-yellow.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
  }
  .is-cyan.textarea, .is-cyan.input {
    border-color: ' . $colors['cyan'] . ';
  }
  .is-cyan.textarea:focus, .is-cyan.input:focus, .is-cyan.is-focused.textarea, .is-cyan.is-focused.input, .is-cyan.textarea:active, .is-cyan.input:active, .is-cyan.is-active.textarea, .is-cyan.is-active.input {
    box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
  }
  .is-small.textarea, .is-small.input {
    border-radius: 2px;
    font-size: 0.75rem;
  }
  .is-medium.textarea, .is-medium.input {
    font-size: 1.25rem;
  }
  .is-large.textarea, .is-large.input {
    font-size: 1.5rem;
  }
  .is-fullwidth.textarea, .is-fullwidth.input {
    display: block;
    width: 100%;
  }
  .is-inline.textarea, .is-inline.input {
    display: inline;
    width: auto;
  }
  
  .input.is-rounded {
    border-radius: 290486px;
    padding-left: 1em;
    padding-right: 1em;
  }
  .input.is-static {
    background-color: transparent;
    border-color: transparent;
    box-shadow: none;
    padding-left: 0;
    padding-right: 0;
  }
  
  .textarea {
    display: block;
    max-width: 100%;
    min-width: 100%;
    padding: 0.625em;
    resize: vertical;
  }
  .textarea:not([rows]) {
    max-height: 600px;
    min-height: 120px;
  }
  .textarea[rows] {
    height: initial;
  }
  .textarea.has-fixed-size {
    resize: none;
  }
  
  .radio, .checkbox {
    cursor: pointer;
    display: inline-block;
    line-height: 1.25;
    position: relative;
  }
  .radio input, .checkbox input {
    cursor: pointer;
  }
  .radio:hover, .checkbox:hover {
    color: ' . $colors['white'] . ';
  }
  [disabled].radio, [disabled].checkbox, fieldset[disabled] .radio, fieldset[disabled] .checkbox {
    color: ' . $colors['white'] . ';
    cursor: not-allowed;
  }
  
  .radio + .radio {
    margin-left: 0.5em;
  }
  
  .select {
    display: inline-block;
    max-width: 100%;
    position: relative;
    vertical-align: top;
  }
  .select:not(.is-multiple) {
    height: 2.25em;
  }
  .select:not(.is-multiple):not(.is-loading)::after {
    border-color: ' . $colors['white'] . ';
    right: 1.125em;
    z-index: 4;
  }
  .select.is-rounded select {
    border-radius: 290486px;
    padding-left: 1em;
  }
  .select select {
    cursor: pointer;
    display: block;
    font-size: 1em;
    max-width: 100%;
    outline: none;
  }
  .select select::-ms-expand {
    display: none;
  }
  .select select[disabled]:hover, fieldset[disabled] .select select:hover {
    border-color: whitesmoke;
  }
  .select select:not([multiple]) {
    padding-right: 2.5em;
  }
  .select select[multiple] {
    height: auto;
    padding: 0;
  }
  .select select[multiple] option {
    padding: 0.5em 1em;
  }
  .select:not(.is-multiple):not(.is-loading):hover::after {
    border-color: ' . $colors['white'] . ';
  }
  .select.is-white:not(:hover)::after {
    border-color: ' . $colors['white'] . ';
  }
  .select.is-white select {
    border-color: ' . $colors['white'] . ';
  }
  .select.is-white select:hover, .select.is-white select.is-hovered {
    border-color: #f2f2f2;
  }
  .select.is-white select:focus, .select.is-white select.is-focused, .select.is-white select:active, .select.is-white select.is-active {
    box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25);
  }
  .select.is-black:not(:hover)::after {
    border-color: #0a0a0a;
  }
  .select.is-black select {
    border-color: #0a0a0a;
  }
  .select.is-black select:hover, .select.is-black select.is-hovered {
    border-color: black;
  }
  .select.is-black select:focus, .select.is-black select.is-focused, .select.is-black select:active, .select.is-black select.is-active {
    box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25);
  }
  .select.is-light:not(:hover)::after {
    border-color: whitesmoke;
  }
  .select.is-light select {
    border-color: whitesmoke;
  }
  .select.is-light select:hover, .select.is-light select.is-hovered {
    border-color: #e8e8e8;
  }
  .select.is-light select:focus, .select.is-light select.is-focused, .select.is-light select:active, .select.is-light select.is-active {
    box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25);
  }
  .select.is-dark:not(:hover)::after {
    border-color: #363636;
  }
  .select.is-dark select {
    border-color: #363636;
  }
  .select.is-dark select:hover, .select.is-dark select.is-hovered {
    border-color: #292929;
  }
  .select.is-dark select:focus, .select.is-dark select.is-focused, .select.is-dark select:active, .select.is-dark select.is-active {
    box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25);
  }
  .select.is-primary:not(:hover)::after {
    border-color: ' . $colors['primary'] . ';
  }
  .select.is-primary select {
    border-color: ' . $colors['primary'] . ';
  }
  .select.is-primary select:hover, .select.is-primary select.is-hovered {
    border-color: #9d9d9d;
  }
  .select.is-primary select:focus, .select.is-primary select.is-focused, .select.is-primary select:active, .select.is-primary select.is-active {
    box-shadow: 0 0 0 0.125em rgba(170, 170, 170, 0.25);
  }
  .select.is-link:not(:hover)::after {
    border-color: ' . $colors['complementary'] . ';
  }
  .select.is-link select {
    border-color: ' . $colors['complementary'] . ';
  }
  .select.is-link select:hover, .select.is-link select.is-hovered {
    border-color: #bfbfbf;
  }
  .select.is-link select:focus, .select.is-link select.is-focused, .select.is-link select:active, .select.is-link select.is-active {
    box-shadow: 0 0 0 0.125em rgba(204, 204, 204, 0.25);
  }
  .select.is-info:not(:hover)::after {
    border-color: ' . $colors['cyan'] . ';
  }
  .select.is-info select {
    border-color: ' . $colors['cyan'] . ';
  }
  .select.is-info select:hover, .select.is-info select.is-hovered {
    border-color: #4b6c70;
  }
  .select.is-info select:focus, .select.is-info select.is-focused, .select.is-info select:active, .select.is-info select.is-active {
    box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
  }
  .select.is-success:not(:hover)::after {
    border-color: ' . $colors['green'] . ';
  }
  .select.is-success select {
    border-color: ' . $colors['green'] . ';
  }
  .select.is-success select:hover, .select.is-success select.is-hovered {
    border-color: #5e9665;
  }
  .select.is-success select:focus, .select.is-success select.is-focused, .select.is-success select:active, .select.is-success select.is-active {
    box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
  }
  .select.is-warning:not(:hover)::after {
    border-color: ' . $colors['yellow'] . ';
  }
  .select.is-warning select {
    border-color: ' . $colors['yellow'] . ';
  }
  .select.is-warning select:hover, .select.is-warning select.is-hovered {
    border-color: #cac378;
  }
  .select.is-warning select:focus, .select.is-warning select.is-focused, .select.is-warning select:active, .select.is-warning select.is-active {
    box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
  }
  .select.is-danger:not(:hover)::after {
    border-color: ' . $colors['red'] . ';
  }
  .select.is-danger select {
    border-color: ' . $colors['red'] . ';
  }
  .select.is-danger select:hover, .select.is-danger select.is-hovered {
    border-color: #ca7b78;
  }
  .select.is-danger select:focus, .select.is-danger select.is-focused, .select.is-danger select:active, .select.is-danger select.is-active {
    box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
  }
  .select.is-lightblue:not(:hover)::after {
    border-color: ' . $colors['lightblue'] . ';
  }
  .select.is-lightblue select {
    border-color: ' . $colors['lightblue'] . ';
  }
  .select.is-lightblue select:hover, .select.is-lightblue select.is-hovered {
    border-color: #526678;
  }
  .select.is-lightblue select:focus, .select.is-lightblue select.is-focused, .select.is-lightblue select:active, .select.is-lightblue select.is-active {
    box-shadow: 0 0 0 0.125em rgba(92, 115, 135, 0.25);
  }
  .select.is-purple:not(:hover)::after {
    border-color: ' . $colors['purple'] . ';
  }
  .select.is-purple select {
    border-color: ' . $colors['purple'] . ';
  }
  .select.is-purple select:hover, .select.is-purple select.is-hovered {
    border-color: #69587f;
  }
  .select.is-purple select:focus, .select.is-purple select.is-focused, .select.is-purple select:active, .select.is-purple select.is-active {
    box-shadow: 0 0 0 0.125em rgba(117, 98, 142, 0.25);
  }
  .select.is-pink:not(:hover)::after {
    border-color: ' . $colors['pink'] . ';
  }
  .select.is-pink select {
    border-color: ' . $colors['pink'] . ';
  }
  .select.is-pink select:hover, .select.is-pink select.is-hovered {
    border-color: #ae6881;
  }
  .select.is-pink select:focus, .select.is-pink select.is-focused, .select.is-pink select:active, .select.is-pink select.is-active {
    box-shadow: 0 0 0 0.125em rgba(183, 121, 143, 0.25);
  }
  .select.is-blue:not(:hover)::after {
    border-color: ' . $colors['blue'] . ';
  }
  .select.is-blue select {
    border-color: ' . $colors['blue'] . ';
  }
  .select.is-blue select:hover, .select.is-blue select.is-hovered {
    border-color: #58617e;
  }
  .select.is-blue select:focus, .select.is-blue select.is-focused, .select.is-blue select:active, .select.is-blue select.is-active {
    box-shadow: 0 0 0 0.125em rgba(98, 109, 141, 0.25);
  }
  .select.is-orange:not(:hover)::after {
    border-color: ' . $colors['orange'] . ';
  }
  .select.is-orange select {
    border-color: ' . $colors['orange'] . ';
  }
  .select.is-orange select:hover, .select.is-orange select.is-hovered {
    border-color: #ca9e78;
  }
  .select.is-orange select:focus, .select.is-orange select.is-focused, .select.is-orange select:active, .select.is-orange select.is-active {
    box-shadow: 0 0 0 0.125em rgba(209, 171, 138, 0.25);
  }
  .select.is-red:not(:hover)::after {
    border-color: ' . $colors['red'] . ';
  }
  .select.is-red select {
    border-color: ' . $colors['red'] . ';
  }
  .select.is-red select:hover, .select.is-red select.is-hovered {
    border-color: #ca7b78;
  }
  .select.is-red select:focus, .select.is-red select.is-focused, .select.is-red select:active, .select.is-red select.is-active {
    box-shadow: 0 0 0 0.125em rgba(209, 141, 138, 0.25);
  }
  .select.is-green:not(:hover)::after {
    border-color: ' . $colors['green'] . ';
  }
  .select.is-green select {
    border-color: ' . $colors['green'] . ';
  }
  .select.is-green select:hover, .select.is-green select.is-hovered {
    border-color: #5e9665;
  }
  .select.is-green select:focus, .select.is-green select.is-focused, .select.is-green select:active, .select.is-green select.is-active {
    box-shadow: 0 0 0 0.125em rgba(107, 162, 114, 0.25);
  }
  .select.is-yellow:not(:hover)::after {
    border-color: ' . $colors['yellow'] . ';
  }
  .select.is-yellow select {
    border-color: ' . $colors['yellow'] . ';
  }
  .select.is-yellow select:hover, .select.is-yellow select.is-hovered {
    border-color: #cac378;
  }
  .select.is-yellow select:focus, .select.is-yellow select.is-focused, .select.is-yellow select:active, .select.is-yellow select.is-active {
    box-shadow: 0 0 0 0.125em rgba(209, 203, 138, 0.25);
  }
  .select.is-cyan:not(:hover)::after {
    border-color: ' . $colors['cyan'] . ';
  }
  .select.is-cyan select {
    border-color: ' . $colors['cyan'] . ';
  }
  .select.is-cyan select:hover, .select.is-cyan select.is-hovered {
    border-color: #4b6c70;
  }
  .select.is-cyan select:focus, .select.is-cyan select.is-focused, .select.is-cyan select:active, .select.is-cyan select.is-active {
    box-shadow: 0 0 0 0.125em rgba(85, 123, 127, 0.25);
  }
  .select.is-small {
    border-radius: 2px;
    font-size: 0.75rem;
  }
  .select.is-medium {
    font-size: 1.25rem;
  }
  .select.is-large {
    font-size: 1.5rem;
  }
  .select.is-disabled::after {
    border-color: ' . $colors['white'] . ';
  }
  .select.is-fullwidth {
    width: 100%;
  }
  .select.is-fullwidth select {
    width: 100%;
  }
  .select.is-loading::after {
    margin-top: 0;
    position: absolute;
    right: 0.625em;
    top: 0.625em;
    transform: none;
  }
  .select.is-loading.is-small:after {
    font-size: 0.75rem;
  }
  .select.is-loading.is-medium:after {
    font-size: 1.25rem;
  }
  .select.is-loading.is-large:after {
    font-size: 1.5rem;
  }
  
  .file {
    align-items: stretch;
    display: flex;
    justify-content: flex-start;
    position: relative;
  }
  .file.is-white .file-cta {
    background-color: ' . $colors['white'] . ';
    border-color: transparent;
    color: #0a0a0a;
  }
  .file.is-white:hover .file-cta, .file.is-white.is-hovered .file-cta {
    background-color: #f9f9f9;
    border-color: transparent;
    color: #0a0a0a;
  }
  .file.is-white:focus .file-cta, .file.is-white.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(255, 255, 255, 0.25);
    color: #0a0a0a;
  }
  .file.is-white:active .file-cta, .file.is-white.is-active .file-cta {
    background-color: #f2f2f2;
    border-color: transparent;
    color: #0a0a0a;
  }
  .file.is-black .file-cta {
    background-color: #0a0a0a;
    border-color: transparent;
    color: ' . $colors['white'] . ';
  }
  .file.is-black:hover .file-cta, .file.is-black.is-hovered .file-cta {
    background-color: #040404;
    border-color: transparent;
    color: ' . $colors['white'] . ';
  }
  .file.is-black:focus .file-cta, .file.is-black.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(10, 10, 10, 0.25);
    color: ' . $colors['white'] . ';
  }
  .file.is-black:active .file-cta, .file.is-black.is-active .file-cta {
    background-color: black;
    border-color: transparent;
    color: ' . $colors['white'] . ';
  }
  .file.is-light .file-cta {
    background-color: whitesmoke;
    border-color: transparent;
    color: #363636;
  }
  .file.is-light:hover .file-cta, .file.is-light.is-hovered .file-cta {
    background-color: #eeeeee;
    border-color: transparent;
    color: #363636;
  }
  .file.is-light:focus .file-cta, .file.is-light.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(245, 245, 245, 0.25);
    color: #363636;
  }
  .file.is-light:active .file-cta, .file.is-light.is-active .file-cta {
    background-color: #e8e8e8;
    border-color: transparent;
    color: #363636;
  }
  .file.is-dark .file-cta {
    background-color: #363636;
    border-color: transparent;
    color: whitesmoke;
  }
  .file.is-dark:hover .file-cta, .file.is-dark.is-hovered .file-cta {
    background-color: #2f2f2f;
    border-color: transparent;
    color: whitesmoke;
  }
  .file.is-dark:focus .file-cta, .file.is-dark.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(54, 54, 54, 0.25);
    color: whitesmoke;
  }
  .file.is-dark:active .file-cta, .file.is-dark.is-active .file-cta {
    background-color: #292929;
    border-color: transparent;
    color: whitesmoke;
  }
  .file.is-primary .file-cta {
    background-color: ' . $colors['primary'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-primary:hover .file-cta, .file.is-primary.is-hovered .file-cta {
    background-color: #a4a4a4;
    border-color: transparent;
    color: #fff;
  }
  .file.is-primary:focus .file-cta, .file.is-primary.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(170, 170, 170, 0.25);
    color: #fff;
  }
  .file.is-primary:active .file-cta, .file.is-primary.is-active .file-cta {
    background-color: #9d9d9d;
    border-color: transparent;
    color: #fff;
  }
  .file.is-link .file-cta {
    background-color: ' . $colors['complementary'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-link:hover .file-cta, .file.is-link.is-hovered .file-cta {
    background-color: #c6c6c6;
    border-color: transparent;
    color: #fff;
  }
  .file.is-link:focus .file-cta, .file.is-link.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(204, 204, 204, 0.25);
    color: #fff;
  }
  .file.is-link:active .file-cta, .file.is-link.is-active .file-cta {
    background-color: #bfbfbf;
    border-color: transparent;
    color: #fff;
  }
  .file.is-info .file-cta {
    background-color: ' . $colors['cyan'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-info:hover .file-cta, .file.is-info.is-hovered .file-cta {
    background-color: #507477;
    border-color: transparent;
    color: #fff;
  }
  .file.is-info:focus .file-cta, .file.is-info.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(85, 123, 127, 0.25);
    color: #fff;
  }
  .file.is-info:active .file-cta, .file.is-info.is-active .file-cta {
    background-color: #4b6c70;
    border-color: transparent;
    color: #fff;
  }
  .file.is-success .file-cta {
    background-color: ' . $colors['green'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-success:hover .file-cta, .file.is-success.is-hovered .file-cta {
    background-color: #639d6b;
    border-color: transparent;
    color: #fff;
  }
  .file.is-success:focus .file-cta, .file.is-success.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(107, 162, 114, 0.25);
    color: #fff;
  }
  .file.is-success:active .file-cta, .file.is-success.is-active .file-cta {
    background-color: #5e9665;
    border-color: transparent;
    color: #fff;
  }
  .file.is-warning .file-cta {
    background-color: ' . $colors['yellow'] . ';
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .file.is-warning:hover .file-cta, .file.is-warning.is-hovered .file-cta {
    background-color: #cdc781;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .file.is-warning:focus .file-cta, .file.is-warning.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(209, 203, 138, 0.25);
    color: rgba(0, 0, 0, 0.7);
  }
  .file.is-warning:active .file-cta, .file.is-warning.is-active .file-cta {
    background-color: #cac378;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .file.is-danger .file-cta {
    background-color: ' . $colors['red'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-danger:hover .file-cta, .file.is-danger.is-hovered .file-cta {
    background-color: #cd8481;
    border-color: transparent;
    color: #fff;
  }
  .file.is-danger:focus .file-cta, .file.is-danger.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(209, 141, 138, 0.25);
    color: #fff;
  }
  .file.is-danger:active .file-cta, .file.is-danger.is-active .file-cta {
    background-color: #ca7b78;
    border-color: transparent;
    color: #fff;
  }
  .file.is-lightblue .file-cta {
    background-color: ' . $colors['lightblue'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-lightblue:hover .file-cta, .file.is-lightblue.is-hovered .file-cta {
    background-color: #576d7f;
    border-color: transparent;
    color: #fff;
  }
  .file.is-lightblue:focus .file-cta, .file.is-lightblue.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(92, 115, 135, 0.25);
    color: #fff;
  }
  .file.is-lightblue:active .file-cta, .file.is-lightblue.is-active .file-cta {
    background-color: #526678;
    border-color: transparent;
    color: #fff;
  }
  .file.is-purple .file-cta {
    background-color: ' . $colors['purple'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-purple:hover .file-cta, .file.is-purple.is-hovered .file-cta {
    background-color: #6f5d86;
    border-color: transparent;
    color: #fff;
  }
  .file.is-purple:focus .file-cta, .file.is-purple.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(117, 98, 142, 0.25);
    color: #fff;
  }
  .file.is-purple:active .file-cta, .file.is-purple.is-active .file-cta {
    background-color: #69587f;
    border-color: transparent;
    color: #fff;
  }
  .file.is-pink .file-cta {
    background-color: ' . $colors['pink'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-pink:hover .file-cta, .file.is-pink.is-hovered .file-cta {
    background-color: #b37188;
    border-color: transparent;
    color: #fff;
  }
  .file.is-pink:focus .file-cta, .file.is-pink.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(183, 121, 143, 0.25);
    color: #fff;
  }
  .file.is-pink:active .file-cta, .file.is-pink.is-active .file-cta {
    background-color: #ae6881;
    border-color: transparent;
    color: #fff;
  }
  .file.is-blue .file-cta {
    background-color: ' . $colors['blue'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-blue:hover .file-cta, .file.is-blue.is-hovered .file-cta {
    background-color: #5d6785;
    border-color: transparent;
    color: #fff;
  }
  .file.is-blue:focus .file-cta, .file.is-blue.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(98, 109, 141, 0.25);
    color: #fff;
  }
  .file.is-blue:active .file-cta, .file.is-blue.is-active .file-cta {
    background-color: #58617e;
    border-color: transparent;
    color: #fff;
  }
  .file.is-orange .file-cta {
    background-color: ' . $colors['orange'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-orange:hover .file-cta, .file.is-orange.is-hovered .file-cta {
    background-color: #cda481;
    border-color: transparent;
    color: #fff;
  }
  .file.is-orange:focus .file-cta, .file.is-orange.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(209, 171, 138, 0.25);
    color: #fff;
  }
  .file.is-orange:active .file-cta, .file.is-orange.is-active .file-cta {
    background-color: #ca9e78;
    border-color: transparent;
    color: #fff;
  }
  .file.is-red .file-cta {
    background-color: ' . $colors['red'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-red:hover .file-cta, .file.is-red.is-hovered .file-cta {
    background-color: #cd8481;
    border-color: transparent;
    color: #fff;
  }
  .file.is-red:focus .file-cta, .file.is-red.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(209, 141, 138, 0.25);
    color: #fff;
  }
  .file.is-red:active .file-cta, .file.is-red.is-active .file-cta {
    background-color: #ca7b78;
    border-color: transparent;
    color: #fff;
  }
  .file.is-green .file-cta {
    background-color: ' . $colors['green'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-green:hover .file-cta, .file.is-green.is-hovered .file-cta {
    background-color: #639d6b;
    border-color: transparent;
    color: #fff;
  }
  .file.is-green:focus .file-cta, .file.is-green.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(107, 162, 114, 0.25);
    color: #fff;
  }
  .file.is-green:active .file-cta, .file.is-green.is-active .file-cta {
    background-color: #5e9665;
    border-color: transparent;
    color: #fff;
  }
  .file.is-yellow .file-cta {
    background-color: ' . $colors['yellow'] . ';
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .file.is-yellow:hover .file-cta, .file.is-yellow.is-hovered .file-cta {
    background-color: #cdc781;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .file.is-yellow:focus .file-cta, .file.is-yellow.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(209, 203, 138, 0.25);
    color: rgba(0, 0, 0, 0.7);
  }
  .file.is-yellow:active .file-cta, .file.is-yellow.is-active .file-cta {
    background-color: #cac378;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7);
  }
  .file.is-cyan .file-cta {
    background-color: ' . $colors['cyan'] . ';
    border-color: transparent;
    color: #fff;
  }
  .file.is-cyan:hover .file-cta, .file.is-cyan.is-hovered .file-cta {
    background-color: #507477;
    border-color: transparent;
    color: #fff;
  }
  .file.is-cyan:focus .file-cta, .file.is-cyan.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(85, 123, 127, 0.25);
    color: #fff;
  }
  .file.is-cyan:active .file-cta, .file.is-cyan.is-active .file-cta {
    background-color: #4b6c70;
    border-color: transparent;
    color: #fff;
  }
  .file.is-small {
    font-size: 0.75rem;
  }
  .file.is-medium {
    font-size: 1.25rem;
  }
  .file.is-medium .file-icon .fa {
    font-size: 21px;
  }
  .file.is-large {
    font-size: 1.5rem;
  }
  .file.is-large .file-icon .fa {
    font-size: 28px;
  }
  .file.has-name .file-cta {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
  }
  .file.has-name .file-name {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .file.has-name.is-empty .file-cta {
    border-radius: 4px;
  }
  .file.has-name.is-empty .file-name {
    display: none;
  }
  .file.is-boxed .file-label {
    flex-direction: column;
  }
  .file.is-boxed .file-cta {
    flex-direction: column;
    height: auto;
    padding: 1em 3em;
  }
  .file.is-boxed .file-name {
    border-width: 0 1px 1px;
  }
  .file.is-boxed .file-icon {
    height: 1.5em;
    width: 1.5em;
  }
  .file.is-boxed .file-icon .fa {
    font-size: 21px;
  }
  .file.is-boxed.is-small .file-icon .fa {
    font-size: 14px;
  }
  .file.is-boxed.is-medium .file-icon .fa {
    font-size: 28px;
  }
  .file.is-boxed.is-large .file-icon .fa {
    font-size: 35px;
  }
  .file.is-boxed.has-name .file-cta {
    border-radius: 4px 4px 0 0;
  }
  .file.is-boxed.has-name .file-name {
    border-radius: 0 0 4px 4px;
    border-width: 0 1px 1px;
  }
  .file.is-centered {
    justify-content: center;
  }
  .file.is-fullwidth .file-label {
    width: 100%;
  }
  .file.is-fullwidth .file-name {
    flex-grow: 1;
    max-width: none;
  }
  .file.is-right {
    justify-content: flex-end;
  }
  .file.is-right .file-cta {
    border-radius: 0 4px 4px 0;
  }
  .file.is-right .file-name {
    border-radius: 4px 0 0 4px;
    border-width: 1px 0 1px 1px;
    order: -1;
  }
  
  .file-label {
    align-items: stretch;
    display: flex;
    cursor: pointer;
    justify-content: flex-start;
    overflow: hidden;
    position: relative;
  }
  .file-label:hover .file-cta {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.02)) .';
    color: #8a92a9;
  }
  .file-label:hover .file-name {
    border-color: #d5d5d5;
  }
  .file-label:active .file-cta {
    background-color: ' . $colors['edark'] . ';
    color: #363636;
  }
  .file-label:active .file-name {
    border-color: #cfcfcf;
  }
  
  .file-input {
    height: 100%;
    left: 0;
    opacity: 0;
    outline: none;
    position: absolute;
    top: 0;
    width: 100%;
  }
  
  .file-cta,
  .file-name {
    border-color: ' . $colors['edark'] . ';
    border-radius: 4px;
    font-size: 1em;
    padding-left: 1em;
    padding-right: 1em;
    white-space: nowrap;
  }
  
  .file-cta {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    color: ' . $colors['white'] . ';
  }
  
  .file-name {
    border-color: #dbdbdb;
    border-style: solid;
    border-width: 1px 1px 1px 0;
    display: block;
    max-width: 16em;
    overflow: hidden;
    text-align: left;
    text-overflow: ellipsis;
  }
  
  .file-icon {
    align-items: center;
    display: flex;
    height: 1em;
    justify-content: center;
    margin-right: 0.5em;
    width: 1em;
  }
  .file-icon .fa {
    font-size: 14px;
  }
  
  .label {
    color: #363636;
    display: block;
    font-size: 1rem;
    font-weight: 700;
  }
  .label:not(:last-child) {
    margin-bottom: 0.5em;
  }
  .label.is-small {
    font-size: 0.75rem;
  }
  .label.is-medium {
    font-size: 1.25rem;
  }
  .label.is-large {
    font-size: 1.5rem;
  }
  
  .help {
    display: block;
    font-size: 0.75rem;
    margin-top: 0.25rem;
  }
  .help.is-white {
    color: ' . $colors['white'] . ';
  }
  .help.is-black {
    color: #0a0a0a;
  }
  .help.is-light {
    color: whitesmoke;
  }
  .help.is-dark {
    color: #363636;
  }
  .help.is-primary {
    color: ' . $colors['primary'] . ';
  }
  .help.is-link {
    color: ' . $colors['complementary'] . ';
  }
  .help.is-info {
    color: ' . $colors['cyan'] . ';
  }
  .help.is-success {
    color: ' . $colors['green'] . ';
  }
  .help.is-warning {
    color: ' . $colors['yellow'] . ';
  }
  .help.is-danger {
    color: ' . $colors['red'] . ';
  }
  .help.is-lightblue {
    color: ' . $colors['lightblue'] . ';
  }
  .help.is-purple {
    color: ' . $colors['purple'] . ';
  }
  .help.is-pink {
    color: ' . $colors['pink'] . ';
  }
  .help.is-blue {
    color: ' . $colors['blue'] . ';
  }
  .help.is-orange {
    color: ' . $colors['orange'] . ';
  }
  .help.is-red {
    color: ' . $colors['red'] . ';
  }
  .help.is-green {
    color: ' . $colors['green'] . ';
  }
  .help.is-yellow {
    color: ' . $colors['yellow'] . ';
  }
  .help.is-cyan {
    color: ' . $colors['cyan'] . ';
  }
  
  .field:not(:last-child) {
    margin-bottom: 0.75rem;
  }
  .field.has-addons {
    display: flex;
    justify-content: flex-start;
  }
  .field.has-addons .control:not(:last-child) {
    margin-right: -1px;
  }
  .field.has-addons .control:not(:first-child):not(:last-child) .button,
  .field.has-addons .control:not(:first-child):not(:last-child) .input,
  .field.has-addons .control:not(:first-child):not(:last-child) .select select {
    border-radius: 0;
  }
  .field.has-addons .control:first-child:not(:only-child) .button,
  .field.has-addons .control:first-child:not(:only-child) .input,
  .field.has-addons .control:first-child:not(:only-child) .select select {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
  }
  .field.has-addons .control:last-child:not(:only-child) .button,
  .field.has-addons .control:last-child:not(:only-child) .input,
  .field.has-addons .control:last-child:not(:only-child) .select select {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .field.has-addons .control .button:not([disabled]):hover, .field.has-addons .control .button:not([disabled]).is-hovered,
  .field.has-addons .control .input:not([disabled]):hover,
  .field.has-addons .control .input:not([disabled]).is-hovered,
  .field.has-addons .control .select select:not([disabled]):hover,
  .field.has-addons .control .select select:not([disabled]).is-hovered {
    z-index: 2;
  }
  .field.has-addons .control .button:not([disabled]):focus, .field.has-addons .control .button:not([disabled]).is-focused, .field.has-addons .control .button:not([disabled]):active, .field.has-addons .control .button:not([disabled]).is-active,
  .field.has-addons .control .input:not([disabled]):focus,
  .field.has-addons .control .input:not([disabled]).is-focused,
  .field.has-addons .control .input:not([disabled]):active,
  .field.has-addons .control .input:not([disabled]).is-active,
  .field.has-addons .control .select select:not([disabled]):focus,
  .field.has-addons .control .select select:not([disabled]).is-focused,
  .field.has-addons .control .select select:not([disabled]):active,
  .field.has-addons .control .select select:not([disabled]).is-active {
    z-index: 3;
  }
  .field.has-addons .control .button:not([disabled]):focus:hover, .field.has-addons .control .button:not([disabled]).is-focused:hover, .field.has-addons .control .button:not([disabled]):active:hover, .field.has-addons .control .button:not([disabled]).is-active:hover,
  .field.has-addons .control .input:not([disabled]):focus:hover,
  .field.has-addons .control .input:not([disabled]).is-focused:hover,
  .field.has-addons .control .input:not([disabled]):active:hover,
  .field.has-addons .control .input:not([disabled]).is-active:hover,
  .field.has-addons .control .select select:not([disabled]):focus:hover,
  .field.has-addons .control .select select:not([disabled]).is-focused:hover,
  .field.has-addons .control .select select:not([disabled]):active:hover,
  .field.has-addons .control .select select:not([disabled]).is-active:hover {
    z-index: 4;
  }
  .field.has-addons .control.is-expanded {
    flex-grow: 1;
    flex-shrink: 1;
  }
  .field.has-addons.has-addons-centered {
    justify-content: center;
  }
  .field.has-addons.has-addons-right {
    justify-content: flex-end;
  }
  .field.has-addons.has-addons-fullwidth .control {
    flex-grow: 1;
    flex-shrink: 0;
  }
  .field.is-grouped {
    display: flex;
    justify-content: flex-start;
  }
  .field.is-grouped > .control {
    flex-shrink: 0;
  }
  .field.is-grouped > .control:not(:last-child) {
    margin-bottom: 0;
    margin-right: 0.75rem;
  }
  .field.is-grouped > .control.is-expanded {
    flex-grow: 1;
    flex-shrink: 1;
  }
  .field.is-grouped.is-grouped-centered {
    justify-content: center;
  }
  .field.is-grouped.is-grouped-right {
    justify-content: flex-end;
  }
  .field.is-grouped.is-grouped-multiline {
    flex-wrap: wrap;
  }
  .field.is-grouped.is-grouped-multiline > .control:last-child, .field.is-grouped.is-grouped-multiline > .control:not(:last-child) {
    margin-bottom: 0.75rem;
  }
  .field.is-grouped.is-grouped-multiline:last-child {
    margin-bottom: -0.75rem;
  }
  .field.is-grouped.is-grouped-multiline:not(:last-child) {
    margin-bottom: 0;
  }
  @media screen and (min-width: 769px), print {
    .field.is-horizontal {
      display: flex;
    }
  }
  
  .field-label .label {
    font-size: inherit;
  }
  @media screen and (max-width: 768px) {
    .field-label {
      margin-bottom: 0.5rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .field-label {
      flex-basis: 0;
      flex-grow: 1;
      flex-shrink: 0;
      margin-right: 1.5rem;
      text-align: right;
    }
    .field-label.is-small {
      font-size: 0.75rem;
      padding-top: 0.375em;
    }
    .field-label.is-normal {
      padding-top: 0.375em;
    }
    .field-label.is-medium {
      font-size: 1.25rem;
      padding-top: 0.375em;
    }
    .field-label.is-large {
      font-size: 1.5rem;
      padding-top: 0.375em;
    }
  }
  
  .field-body .field .field {
    margin-bottom: 0;
  }
  @media screen and (min-width: 769px), print {
    .field-body {
      display: flex;
      flex-basis: 0;
      flex-grow: 5;
      flex-shrink: 1;
    }
    .field-body .field {
      margin-bottom: 0;
    }
    .field-body > .field {
      flex-shrink: 1;
    }
    .field-body > .field:not(.is-narrow) {
      flex-grow: 1;
    }
    .field-body > .field:not(:last-child) {
      margin-right: 0.75rem;
    }
  }
  
  .control {
    box-sizing: border-box;
    clear: both;
    font-size: 1rem;
    position: relative;
    text-align: left;
  }
  .control.has-icons-left .input:focus ~ .icon,
  .control.has-icons-left .select:focus ~ .icon, .control.has-icons-right .input:focus ~ .icon,
  .control.has-icons-right .select:focus ~ .icon {
    color: #7a7a7a;
  }
  .control.has-icons-left .input.is-small ~ .icon,
  .control.has-icons-left .select.is-small ~ .icon, .control.has-icons-right .input.is-small ~ .icon,
  .control.has-icons-right .select.is-small ~ .icon {
    font-size: 0.75rem;
  }
  .control.has-icons-left .input.is-medium ~ .icon,
  .control.has-icons-left .select.is-medium ~ .icon, .control.has-icons-right .input.is-medium ~ .icon,
  .control.has-icons-right .select.is-medium ~ .icon {
    font-size: 1.25rem;
  }
  .control.has-icons-left .input.is-large ~ .icon,
  .control.has-icons-left .select.is-large ~ .icon, .control.has-icons-right .input.is-large ~ .icon,
  .control.has-icons-right .select.is-large ~ .icon {
    font-size: 1.5rem;
  }
  .control.has-icons-left .icon, .control.has-icons-right .icon {
    color: #dbdbdb;
    height: 2.25em;
    pointer-events: none;
    position: absolute;
    top: 0;
    width: 2.25em;
    z-index: 4;
  }
  .control.has-icons-left .input,
  .control.has-icons-left .select select {
    padding-left: 2.25em;
  }
  .control.has-icons-left .icon.is-left {
    left: 0;
  }
  .control.has-icons-right .input,
  .control.has-icons-right .select select {
    padding-right: 2.25em;
  }
  .control.has-icons-right .icon.is-right {
    right: 0;
  }
  .control.is-loading::after {
    position: absolute !important;
    right: 0.625em;
    top: 0.625em;
    z-index: 4;
  }
  .control.is-loading.is-small:after {
    font-size: 0.75rem;
  }
  .control.is-loading.is-medium:after {
    font-size: 1.25rem;
  }
  .control.is-loading.is-large:after {
    font-size: 1.5rem;
  }
  
  .breadcrumb {
    font-size: 1rem;
    white-space: nowrap;
  }
  .breadcrumb a {
    align-items: center;
    color: ' . $colors['complementary'] . ';
    display: flex;
    justify-content: center;
    padding: 0 0.75em;
  }
  .breadcrumb a:hover {
    color: #DDDDDD;
  }
  .breadcrumb li {
    align-items: center;
    display: flex;
  }
  .breadcrumb li:first-child a {
    padding-left: 0;
  }
  .breadcrumb li.is-active a {
    color: white;
    cursor: default;
    pointer-events: none;
  }
  .breadcrumb li + li::before {
    color: #b5b5b5;
    content: "/";
  }
  .breadcrumb ul,
  .breadcrumb ol {
    align-items: flex-start;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
  }
  .breadcrumb .icon:first-child {
    margin-right: 0.5em;
  }
  .breadcrumb .icon:last-child {
    margin-left: 0.5em;
  }
  .breadcrumb.is-centered ol,
  .breadcrumb.is-centered ul {
    justify-content: center;
  }
  .breadcrumb.is-right ol,
  .breadcrumb.is-right ul {
    justify-content: flex-end;
  }
  .breadcrumb.is-small {
    font-size: 0.75rem;
  }
  .breadcrumb.is-medium {
    font-size: 1.25rem;
  }
  .breadcrumb.is-large {
    font-size: 1.5rem;
  }
  .breadcrumb.has-arrow-separator li + li::before {
    content: "→";
  }
  .breadcrumb.has-bullet-separator li + li::before {
    content: "•";
  }
  .breadcrumb.has-dot-separator li + li::before {
    content: "·";
  }
  .breadcrumb.has-succeeds-separator li + li::before {
    content: "≻";
  }
  
  .card {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
    color: ' . $colors['white'] . ';
    max-width: 100%;
    position: relative;
  }
  
  .card-header {
    background-color: transparent;
    align-items: stretch;
    box-shadow: 0 1px 2px rgba(10, 10, 10, 0.1);
    display: flex;
  }
  
  .card-header-title {
    align-items: center;
    color: white;
    display: flex;
    flex-grow: 1;
    font-weight: 700;
    padding: 0.75rem;
  }
  .card-header-title.is-centered {
    justify-content: center;
  }
  
  .card-header-icon {
    align-items: center;
    cursor: pointer;
    display: flex;
    justify-content: center;
    padding: 0.75rem;
  }
  
  .card-image {
    display: block;
    position: relative;
  }
  
  .card-content {
    background-color: transparent;
    padding: 1.5rem;
  }
  
  .card-footer {
    background-color: transparent;
    border-top: 1px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.12)) . ';
    align-items: stretch;
    display: flex;
  }
  
  .card-footer-item {
    align-items: center;
    display: flex;
    flex-basis: 0;
    flex-grow: 1;
    flex-shrink: 0;
    justify-content: center;
    padding: 0.75rem;
  }
  .card-footer-item:not(:last-child) {
    border-right: 1px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.12)) . ';
  }
  
  .card .media:not(:last-child) {
    margin-bottom: 1.5rem;
  }
  
  .dropdown {
    display: inline-flex;
    position: relative;
    vertical-align: top;
  }
  .dropdown.is-active .dropdown-menu, .dropdown.is-hoverable:hover .dropdown-menu {
    display: block;
  }
  .dropdown.is-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .dropdown.is-up .dropdown-menu {
    bottom: 100%;
    padding-bottom: 4px;
    padding-top: initial;
    top: auto;
  }
  
  .dropdown-menu {
    display: none;
    left: 0;
    min-width: 12rem;
    padding-top: 4px;
    position: absolute;
    top: 100%;
    z-index: 20;
  }
  
  .dropdown-content {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    border-radius: 0.5rem;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding-bottom: 0.5rem;
    padding-top: 0.5rem;
  }
  
  .dropdown-item {
    color: #e6e6e6;
    display: block;
    font-size: 0.875rem;
    line-height: 1.5;
    padding: 0.375rem 1rem;
    position: relative;
  }
  
  a.dropdown-item,
  button.dropdown-item {
    padding-right: 3rem;
    text-align: left;
    white-space: nowrap;
    width: 100%;
  }
  a.dropdown-item:hover,
  button.dropdown-item:hover {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    color: #e6e6e6;
  }
  a.dropdown-item.is-active,
  button.dropdown-item.is-active {
    background-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  
  .dropdown-divider {
    background-color: #363b4a;
    border: none;
    display: block;
    height: 1px;
    margin: 0.5rem 0;
  }
  
  .level {
    align-items: center;
    justify-content: space-between;
  }
  .level code {
    border-radius: 4px;
  }
  .level img {
    display: inline-block;
    vertical-align: top;
  }
  .level.is-mobile {
    display: flex;
  }
  .level.is-mobile .level-left,
  .level.is-mobile .level-right {
    display: flex;
  }
  .level.is-mobile .level-left + .level-right {
    margin-top: 0;
  }
  .level.is-mobile .level-item:not(:last-child) {
    margin-bottom: 0;
    margin-right: 0.75rem;
  }
  .level.is-mobile .level-item:not(.is-narrow) {
    flex-grow: 1;
  }
  @media screen and (min-width: 769px), print {
    .level {
      display: flex;
    }
    .level > .level-item:not(.is-narrow) {
      flex-grow: 1;
    }
  }
  
  .level-item {
    align-items: center;
    display: flex;
    flex-basis: auto;
    flex-grow: 0;
    flex-shrink: 0;
    justify-content: center;
  }
  .level-item .title,
  .level-item .subtitle {
    margin-bottom: 0;
  }
  @media screen and (max-width: 768px) {
    .level-item:not(:last-child) {
      margin-bottom: 0.75rem;
    }
  }
  
  .level-left,
  .level-right {
    flex-basis: auto;
    flex-grow: 0;
    flex-shrink: 0;
  }
  .level-left .level-item.is-flexible,
  .level-right .level-item.is-flexible {
    flex-grow: 1;
  }
  @media screen and (min-width: 769px), print {
    .level-left .level-item:not(:last-child),
  .level-right .level-item:not(:last-child) {
      margin-right: 0.75rem;
    }
  }
  
  .level-left {
    align-items: center;
    justify-content: flex-start;
  }
  @media screen and (max-width: 768px) {
    .level-left + .level-right {
      margin-top: 1.5rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .level-left {
      display: flex;
    }
  }
  
  .level-right {
    align-items: center;
    justify-content: flex-end;
  }
  @media screen and (min-width: 769px), print {
    .level-right {
      display: flex;
    }
  }
  
  .list {
    background-color: ' . $colors['white'] . ';
    border-radius: 4px;
    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
  }
  
  .list-item {
    display: block;
    padding: 0.5em 1em;
  }
  .list-item:not(a) {
    color: ' . $colors['white'] . ';
  }
  .list-item:first-child {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
  }
  .list-item:last-child {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
  }
  .list-item:not(:last-child) {
    border-bottom: 1px solid #dbdbdb;
  }
  .list-item.is-active {
    background-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  
  a.list-item {
    background-color: whitesmoke;
    cursor: pointer;
  }
  
  .media {
    align-items: flex-start;
    display: flex;
    text-align: left;
  }
  .media .content:not(:last-child) {
    margin-bottom: 0.75rem;
  }
  .media .media {
    border-top: 1px solid rgba(219, 219, 219, 0.5);
    display: flex;
    padding-top: 0.75rem;
  }
  .media .media .content:not(:last-child),
  .media .media .control:not(:last-child) {
    margin-bottom: 0.5rem;
  }
  .media .media .media {
    padding-top: 0.5rem;
  }
  .media .media .media + .media {
    margin-top: 0.5rem;
  }
  .media + .media {
    border-top: 1px solid rgba(219, 219, 219, 0.5);
    margin-top: 1rem;
    padding-top: 1rem;
  }
  .media.is-large + .media {
    margin-top: 1.5rem;
    padding-top: 1.5rem;
  }
  
  .media-left,
  .media-right {
    flex-basis: auto;
    flex-grow: 0;
    flex-shrink: 0;
  }
  
  .media-left {
    margin-right: 1rem;
  }
  
  .media-right {
    margin-left: 1rem;
  }
  
  .media-content {
    flex-basis: auto;
    flex-grow: 1;
    flex-shrink: 1;
    text-align: left;
  }
  
  @media screen and (max-width: 768px) {
    .media-content {
      overflow-x: auto;
    }
  }
  .menu {
    font-size: 1rem;
  }
  .menu.is-small {
    font-size: 0.75rem;
  }
  .menu.is-medium {
    font-size: 1.25rem;
  }
  .menu.is-large {
    font-size: 1.5rem;
  }
  
  .menu-list {
    line-height: 1.25;
  }
  .menu-list a {
    border-radius: 0.5rem;
    color: ' . $colors['white'] . ';
    display: block;
    padding: 0.5em 0.75em;
  }
  .menu-list a:hover {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    color: white;
  }
  .menu-list a.is-active {
    background-color: ' . $colors['blue'] . ';
    color: #fff;
  }
  .menu-list li ul {
    border-left: 1px solid #dbdbdb;
    margin: 0.75em;
    padding-left: 0.75em;
  }
  
  .menu-label {
    color: ' . $colors['white'] . ';
    font-size: 0.75em;
    letter-spacing: 0.1em;
    text-transform: uppercase;
  }
  .menu-label:not(:first-child) {
    margin-top: 1em;
  }
  .menu-label:not(:last-child) {
    margin-bottom: 1em;
  }
  
  .message {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.1)) . ';
    border-radius: 0.5rem;
    font-size: 1rem;
  }
  .message strong {
    color: currentColor;
  }
  .message a:not(.button):not(.tag):not(.dropdown-item) {
    color: currentColor;
    text-decoration: underline;
  }
  .message.is-small {
    font-size: 0.75rem;
  }
  .message.is-medium {
    font-size: 1.25rem;
  }
  .message.is-large {
    font-size: 1.5rem;
  }
  .message.is-white {
    background-color: white;
  }
  .message.is-white .message-header {
    background-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .message.is-white .message-body {
    border-color: ' . $colors['white'] . ';
    color: #4d4d4d;
  }
  .message.is-black {
    background-color: #fafafa;
  }
  .message.is-black .message-header {
    background-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .message.is-black .message-body {
    border-color: #0a0a0a;
    color: #0a0a0a;
  }
  .message.is-light {
    background-color: #fafafa;
  }
  .message.is-light .message-header {
    background-color: whitesmoke;
    color: #363636;
  }
  .message.is-light .message-body {
    border-color: whitesmoke;
    color: #4f4f4f;
  }
  .message.is-dark {
    background-color: #fafafa;
  }
  .message.is-dark .message-header {
    background-color: #363636;
    color: whitesmoke;
  }
  .message.is-dark .message-body {
    border-color: #363636;
    color: #2a2a2a;
  }
  .message.is-primary {
    background-color: #fafafa;
  }
  .message.is-primary .message-header {
    background-color: ' . $colors['primary'] . ';
    color: #fff;
  }
  .message.is-primary .message-body {
    border-color: ' . $colors['primary'] . ';
    color: #565656;
  }
  .message.is-link {
    background-color: #fafafa;
  }
  .message.is-link .message-header {
    background-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  .message.is-link .message-body {
    border-color: ' . $colors['complementary'] . ';
    color: #575757;
  }
  .message.is-info {
    background-color: #f9fbfb;
  }
  .message.is-info .message-header {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .message.is-info .message-body {
    border-color: ' . $colors['cyan'] . ';
    color: #384748;
  }
  .message.is-success {
    background-color: #f9fbf9;
  }
  .message.is-success .message-header {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .message.is-success .message-body {
    border-color: ' . $colors['green'] . ';
    color: #3d4d3f;
  }
  .message.is-warning {
    background-color: #fcfcf8;
  }
  .message.is-warning .message-header {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .message.is-warning .message-body {
    border-color: ' . $colors['yellow'] . ';
    color: #4b482d;
  }
  .message.is-danger {
    background-color: #fcf8f8;
  }
  .message.is-danger .message-header {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .message.is-danger .message-body {
    border-color: ' . $colors['red'] . ';
    color: #854845;
  }
  .message.is-lightblue {
    background-color: #f9fafb;
  }
  .message.is-lightblue .message-header {
    background-color: ' . $colors['lightblue'] . ';
    color: #fff;
  }
  .message.is-lightblue .message-body {
    border-color: ' . $colors['lightblue'] . ';
    color: #414b53;
  }
  .message.is-purple {
    background-color: #faf9fb;
  }
  .message.is-purple .message-header {
    background-color: ' . $colors['purple'] . ';
    color: #fff;
  }
  .message.is-purple .message-body {
    border-color: ' . $colors['purple'] . ';
    color: #534a5f;
  }
  .message.is-pink {
    background-color: #fbf8f9;
  }
  .message.is-pink .message-header {
    background-color: ' . $colors['pink'] . ';
    color: #fff;
  }
  .message.is-pink .message-body {
    border-color: ' . $colors['pink'] . ';
    color: #734c59;
  }
  .message.is-blue {
    background-color: #f9f9fb;
  }
  .message.is-blue .message-header {
    background-color: ' . $colors['blue'] . ';
    color: #fff;
  }
  .message.is-blue .message-body {
    border-color: ' . $colors['blue'] . ';
    color: #484d5c;
  }
  .message.is-orange {
    background-color: #fcfaf8;
  }
  .message.is-orange .message-header {
    background-color: ' . $colors['orange'] . ';
    color: #fff;
  }
  .message.is-orange .message-body {
    border-color: ' . $colors['orange'] . ';
    color: #6a513b;
  }
  .message.is-red {
    background-color: #fcf8f8;
  }
  .message.is-red .message-header {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .message.is-red .message-body {
    border-color: ' . $colors['red'] . ';
    color: #854845;
  }
  .message.is-green {
    background-color: #f9fbf9;
  }
  .message.is-green .message-header {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .message.is-green .message-body {
    border-color: ' . $colors['green'] . ';
    color: #3d4d3f;
  }
  .message.is-yellow {
    background-color: #fcfcf8;
  }
  .message.is-yellow .message-header {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .message.is-yellow .message-body {
    border-color: ' . $colors['yellow'] . ';
    color: #4b482d;
  }
  .message.is-cyan {
    background-color: #f9fbfb;
  }
  .message.is-cyan .message-header {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .message.is-cyan .message-body {
    border-color: ' . $colors['cyan'] . ';
    color: #384748;
  }
  
  .message-header {
    align-items: center;
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    border-radius: 0.5rem 0.5rem 0 0;
    color: ' . $colors['white'] . ';
    display: flex;
    font-weight: 700;
    justify-content: space-between;
    line-height: 1.25;
    padding: 0.75em 1em;
    position: relative;
  }
  .message-header .delete {
    flex-grow: 0;
    flex-shrink: 0;
    margin-left: 0.75em;
  }
  .message-header + .message-body {
    border-width: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  
  .message-body {
    border-color: #dbdbdb;
    border-radius: 4px;
    border-style: solid;
    border-width: 0 0 0 4px;
    color: ' . $colors['white'] . ';
    padding: 1.25em 1.5em;
  }
  .message-body code,
  .message-body pre {
    background-color: ' . $colors['white'] . ';
  }
  .message-body pre code {
    background-color: transparent;
  }
  
  .modal {
    align-items: center;
    display: none;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    position: fixed;
    z-index: 40;
  }
  .modal.is-active {
    display: flex;
  }
  
  .modal-background {
    background-color: rgba(10, 10, 10, 0.86);
  }
  
  .modal-content,
  .modal-card {
    margin: 0 20px;
    max-height: calc(100vh - 160px);
    overflow: auto;
    position: relative;
    width: 100%;
  }
  @media screen and (min-width: 769px), print {
    .modal-content,
  .modal-card {
      margin: 0 auto;
      max-height: calc(100vh - 40px);
      width: 640px;
    }
  }
  
  .modal-close {
    background: none;
    height: 40px;
    position: fixed;
    right: 20px;
    top: 20px;
    width: 40px;
  }
  
  .modal-card {
    display: flex;
    flex-direction: column;
    max-height: calc(100vh - 40px);
    overflow: hidden;
    -ms-overflow-y: visible;
  }
  
  .modal-card-head,
  .modal-card-foot {
    align-items: center;
    background-color: whitesmoke;
    display: flex;
    flex-shrink: 0;
    justify-content: flex-start;
    padding: 20px;
    position: relative;
  }
  
  .modal-card-head {
    border-bottom: 1px solid #dbdbdb;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
  }
  
  .modal-card-title {
    color: white;
    flex-grow: 1;
    flex-shrink: 0;
    font-size: 1.5rem;
    line-height: 1;
  }
  
  .modal-card-foot {
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    border-top: 1px solid #dbdbdb;
  }
  .modal-card-foot .button:not(:last-child) {
    margin-right: 0.5em;
  }
  
  .modal-card-body {
    -webkit-overflow-scrolling: touch;
    background-color: ' . $colors['white'] . ';
    flex-grow: 1;
    flex-shrink: 1;
    overflow: auto;
    padding: 20px;
  }
  
  .navbar {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
    min-height: 3.25rem;
    position: relative;
    z-index: 30;
  }
  .navbar.is-white {
    background-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .navbar.is-white .navbar-brand > .navbar-item,
  .navbar.is-white .navbar-brand .navbar-link {
    color: #0a0a0a;
  }
  .navbar.is-white .navbar-brand > a.navbar-item:focus, .navbar.is-white .navbar-brand > a.navbar-item:hover, .navbar.is-white .navbar-brand > a.navbar-item.is-active,
  .navbar.is-white .navbar-brand .navbar-link:focus,
  .navbar.is-white .navbar-brand .navbar-link:hover,
  .navbar.is-white .navbar-brand .navbar-link.is-active {
    background-color: #f2f2f2;
    color: #0a0a0a;
  }
  .navbar.is-white .navbar-brand .navbar-link::after {
    border-color: #0a0a0a;
  }
  .navbar.is-white .navbar-burger {
    color: #0a0a0a;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-white .navbar-start > .navbar-item,
  .navbar.is-white .navbar-start .navbar-link,
  .navbar.is-white .navbar-end > .navbar-item,
  .navbar.is-white .navbar-end .navbar-link {
      color: #0a0a0a;
    }
    .navbar.is-white .navbar-start > a.navbar-item:focus, .navbar.is-white .navbar-start > a.navbar-item:hover, .navbar.is-white .navbar-start > a.navbar-item.is-active,
  .navbar.is-white .navbar-start .navbar-link:focus,
  .navbar.is-white .navbar-start .navbar-link:hover,
  .navbar.is-white .navbar-start .navbar-link.is-active,
  .navbar.is-white .navbar-end > a.navbar-item:focus,
  .navbar.is-white .navbar-end > a.navbar-item:hover,
  .navbar.is-white .navbar-end > a.navbar-item.is-active,
  .navbar.is-white .navbar-end .navbar-link:focus,
  .navbar.is-white .navbar-end .navbar-link:hover,
  .navbar.is-white .navbar-end .navbar-link.is-active {
      background-color: #f2f2f2;
      color: #0a0a0a;
    }
    .navbar.is-white .navbar-start .navbar-link::after,
  .navbar.is-white .navbar-end .navbar-link::after {
      border-color: #0a0a0a;
    }
    .navbar.is-white .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-white .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-white .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #f2f2f2;
      color: #0a0a0a;
    }
    .navbar.is-white .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['white'] . ';
      color: #0a0a0a;
    }
  }
  .navbar.is-black {
    background-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .navbar.is-black .navbar-brand > .navbar-item,
  .navbar.is-black .navbar-brand .navbar-link {
    color: ' . $colors['white'] . ';
  }
  .navbar.is-black .navbar-brand > a.navbar-item:focus, .navbar.is-black .navbar-brand > a.navbar-item:hover, .navbar.is-black .navbar-brand > a.navbar-item.is-active,
  .navbar.is-black .navbar-brand .navbar-link:focus,
  .navbar.is-black .navbar-brand .navbar-link:hover,
  .navbar.is-black .navbar-brand .navbar-link.is-active {
    background-color: black;
    color: ' . $colors['white'] . ';
  }
  .navbar.is-black .navbar-brand .navbar-link::after {
    border-color: ' . $colors['white'] . ';
  }
  .navbar.is-black .navbar-burger {
    color: ' . $colors['white'] . ';
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-black .navbar-start > .navbar-item,
  .navbar.is-black .navbar-start .navbar-link,
  .navbar.is-black .navbar-end > .navbar-item,
  .navbar.is-black .navbar-end .navbar-link {
      color: ' . $colors['white'] . ';
    }
    .navbar.is-black .navbar-start > a.navbar-item:focus, .navbar.is-black .navbar-start > a.navbar-item:hover, .navbar.is-black .navbar-start > a.navbar-item.is-active,
  .navbar.is-black .navbar-start .navbar-link:focus,
  .navbar.is-black .navbar-start .navbar-link:hover,
  .navbar.is-black .navbar-start .navbar-link.is-active,
  .navbar.is-black .navbar-end > a.navbar-item:focus,
  .navbar.is-black .navbar-end > a.navbar-item:hover,
  .navbar.is-black .navbar-end > a.navbar-item.is-active,
  .navbar.is-black .navbar-end .navbar-link:focus,
  .navbar.is-black .navbar-end .navbar-link:hover,
  .navbar.is-black .navbar-end .navbar-link.is-active {
      background-color: black;
      color: ' . $colors['white'] . ';
    }
    .navbar.is-black .navbar-start .navbar-link::after,
  .navbar.is-black .navbar-end .navbar-link::after {
      border-color: ' . $colors['white'] . ';
    }
    .navbar.is-black .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-black .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-black .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: black;
      color: ' . $colors['white'] . ';
    }
    .navbar.is-black .navbar-dropdown a.navbar-item.is-active {
      background-color: #0a0a0a;
      color: ' . $colors['white'] . ';
    }
  }
  .navbar.is-light {
    background-color: whitesmoke;
    color: #363636;
  }
  .navbar.is-light .navbar-brand > .navbar-item,
  .navbar.is-light .navbar-brand .navbar-link {
    color: #363636;
  }
  .navbar.is-light .navbar-brand > a.navbar-item:focus, .navbar.is-light .navbar-brand > a.navbar-item:hover, .navbar.is-light .navbar-brand > a.navbar-item.is-active,
  .navbar.is-light .navbar-brand .navbar-link:focus,
  .navbar.is-light .navbar-brand .navbar-link:hover,
  .navbar.is-light .navbar-brand .navbar-link.is-active {
    background-color: #e8e8e8;
    color: #363636;
  }
  .navbar.is-light .navbar-brand .navbar-link::after {
    border-color: #363636;
  }
  .navbar.is-light .navbar-burger {
    color: #363636;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-light .navbar-start > .navbar-item,
  .navbar.is-light .navbar-start .navbar-link,
  .navbar.is-light .navbar-end > .navbar-item,
  .navbar.is-light .navbar-end .navbar-link {
      color: #363636;
    }
    .navbar.is-light .navbar-start > a.navbar-item:focus, .navbar.is-light .navbar-start > a.navbar-item:hover, .navbar.is-light .navbar-start > a.navbar-item.is-active,
  .navbar.is-light .navbar-start .navbar-link:focus,
  .navbar.is-light .navbar-start .navbar-link:hover,
  .navbar.is-light .navbar-start .navbar-link.is-active,
  .navbar.is-light .navbar-end > a.navbar-item:focus,
  .navbar.is-light .navbar-end > a.navbar-item:hover,
  .navbar.is-light .navbar-end > a.navbar-item.is-active,
  .navbar.is-light .navbar-end .navbar-link:focus,
  .navbar.is-light .navbar-end .navbar-link:hover,
  .navbar.is-light .navbar-end .navbar-link.is-active {
      background-color: #e8e8e8;
      color: #363636;
    }
    .navbar.is-light .navbar-start .navbar-link::after,
  .navbar.is-light .navbar-end .navbar-link::after {
      border-color: #363636;
    }
    .navbar.is-light .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-light .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-light .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #e8e8e8;
      color: #363636;
    }
    .navbar.is-light .navbar-dropdown a.navbar-item.is-active {
      background-color: whitesmoke;
      color: #363636;
    }
  }
  .navbar.is-dark {
    background-color: #363636;
    color: whitesmoke;
  }
  .navbar.is-dark .navbar-brand > .navbar-item,
  .navbar.is-dark .navbar-brand .navbar-link {
    color: whitesmoke;
  }
  .navbar.is-dark .navbar-brand > a.navbar-item:focus, .navbar.is-dark .navbar-brand > a.navbar-item:hover, .navbar.is-dark .navbar-brand > a.navbar-item.is-active,
  .navbar.is-dark .navbar-brand .navbar-link:focus,
  .navbar.is-dark .navbar-brand .navbar-link:hover,
  .navbar.is-dark .navbar-brand .navbar-link.is-active {
    background-color: #292929;
    color: whitesmoke;
  }
  .navbar.is-dark .navbar-brand .navbar-link::after {
    border-color: whitesmoke;
  }
  .navbar.is-dark .navbar-burger {
    color: whitesmoke;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-dark .navbar-start > .navbar-item,
  .navbar.is-dark .navbar-start .navbar-link,
  .navbar.is-dark .navbar-end > .navbar-item,
  .navbar.is-dark .navbar-end .navbar-link {
      color: whitesmoke;
    }
    .navbar.is-dark .navbar-start > a.navbar-item:focus, .navbar.is-dark .navbar-start > a.navbar-item:hover, .navbar.is-dark .navbar-start > a.navbar-item.is-active,
  .navbar.is-dark .navbar-start .navbar-link:focus,
  .navbar.is-dark .navbar-start .navbar-link:hover,
  .navbar.is-dark .navbar-start .navbar-link.is-active,
  .navbar.is-dark .navbar-end > a.navbar-item:focus,
  .navbar.is-dark .navbar-end > a.navbar-item:hover,
  .navbar.is-dark .navbar-end > a.navbar-item.is-active,
  .navbar.is-dark .navbar-end .navbar-link:focus,
  .navbar.is-dark .navbar-end .navbar-link:hover,
  .navbar.is-dark .navbar-end .navbar-link.is-active {
      background-color: #292929;
      color: whitesmoke;
    }
    .navbar.is-dark .navbar-start .navbar-link::after,
  .navbar.is-dark .navbar-end .navbar-link::after {
      border-color: whitesmoke;
    }
    .navbar.is-dark .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-dark .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-dark .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #292929;
      color: whitesmoke;
    }
    .navbar.is-dark .navbar-dropdown a.navbar-item.is-active {
      background-color: #363636;
      color: whitesmoke;
    }
  }
  .navbar.is-primary {
    background-color: ' . $colors['primary'] . ';
    color: #fff;
  }
  .navbar.is-primary .navbar-brand > .navbar-item,
  .navbar.is-primary .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-primary .navbar-brand > a.navbar-item:focus, .navbar.is-primary .navbar-brand > a.navbar-item:hover, .navbar.is-primary .navbar-brand > a.navbar-item.is-active,
  .navbar.is-primary .navbar-brand .navbar-link:focus,
  .navbar.is-primary .navbar-brand .navbar-link:hover,
  .navbar.is-primary .navbar-brand .navbar-link.is-active {
    background-color: #9d9d9d;
    color: #fff;
  }
  .navbar.is-primary .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-primary .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-primary .navbar-start > .navbar-item,
  .navbar.is-primary .navbar-start .navbar-link,
  .navbar.is-primary .navbar-end > .navbar-item,
  .navbar.is-primary .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-primary .navbar-start > a.navbar-item:focus, .navbar.is-primary .navbar-start > a.navbar-item:hover, .navbar.is-primary .navbar-start > a.navbar-item.is-active,
  .navbar.is-primary .navbar-start .navbar-link:focus,
  .navbar.is-primary .navbar-start .navbar-link:hover,
  .navbar.is-primary .navbar-start .navbar-link.is-active,
  .navbar.is-primary .navbar-end > a.navbar-item:focus,
  .navbar.is-primary .navbar-end > a.navbar-item:hover,
  .navbar.is-primary .navbar-end > a.navbar-item.is-active,
  .navbar.is-primary .navbar-end .navbar-link:focus,
  .navbar.is-primary .navbar-end .navbar-link:hover,
  .navbar.is-primary .navbar-end .navbar-link.is-active {
      background-color: #9d9d9d;
      color: #fff;
    }
    .navbar.is-primary .navbar-start .navbar-link::after,
  .navbar.is-primary .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-primary .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-primary .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-primary .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #9d9d9d;
      color: #fff;
    }
    .navbar.is-primary .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['primary'] . ';
      color: #fff;
    }
  }
  .navbar.is-link {
    background-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  .navbar.is-link .navbar-brand > .navbar-item,
  .navbar.is-link .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-link .navbar-brand > a.navbar-item:focus, .navbar.is-link .navbar-brand > a.navbar-item:hover, .navbar.is-link .navbar-brand > a.navbar-item.is-active,
  .navbar.is-link .navbar-brand .navbar-link:focus,
  .navbar.is-link .navbar-brand .navbar-link:hover,
  .navbar.is-link .navbar-brand .navbar-link.is-active {
    background-color: #bfbfbf;
    color: #fff;
  }
  .navbar.is-link .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-link .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-link .navbar-start > .navbar-item,
  .navbar.is-link .navbar-start .navbar-link,
  .navbar.is-link .navbar-end > .navbar-item,
  .navbar.is-link .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-link .navbar-start > a.navbar-item:focus, .navbar.is-link .navbar-start > a.navbar-item:hover, .navbar.is-link .navbar-start > a.navbar-item.is-active,
  .navbar.is-link .navbar-start .navbar-link:focus,
  .navbar.is-link .navbar-start .navbar-link:hover,
  .navbar.is-link .navbar-start .navbar-link.is-active,
  .navbar.is-link .navbar-end > a.navbar-item:focus,
  .navbar.is-link .navbar-end > a.navbar-item:hover,
  .navbar.is-link .navbar-end > a.navbar-item.is-active,
  .navbar.is-link .navbar-end .navbar-link:focus,
  .navbar.is-link .navbar-end .navbar-link:hover,
  .navbar.is-link .navbar-end .navbar-link.is-active {
      background-color: #bfbfbf;
      color: #fff;
    }
    .navbar.is-link .navbar-start .navbar-link::after,
  .navbar.is-link .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-link .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-link .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-link .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #bfbfbf;
      color: #fff;
    }
    .navbar.is-link .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['complementary'] . ';
      color: #fff;
    }
  }
  .navbar.is-info {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .navbar.is-info .navbar-brand > .navbar-item,
  .navbar.is-info .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-info .navbar-brand > a.navbar-item:focus, .navbar.is-info .navbar-brand > a.navbar-item:hover, .navbar.is-info .navbar-brand > a.navbar-item.is-active,
  .navbar.is-info .navbar-brand .navbar-link:focus,
  .navbar.is-info .navbar-brand .navbar-link:hover,
  .navbar.is-info .navbar-brand .navbar-link.is-active {
    background-color: #4b6c70;
    color: #fff;
  }
  .navbar.is-info .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-info .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-info .navbar-start > .navbar-item,
  .navbar.is-info .navbar-start .navbar-link,
  .navbar.is-info .navbar-end > .navbar-item,
  .navbar.is-info .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-info .navbar-start > a.navbar-item:focus, .navbar.is-info .navbar-start > a.navbar-item:hover, .navbar.is-info .navbar-start > a.navbar-item.is-active,
  .navbar.is-info .navbar-start .navbar-link:focus,
  .navbar.is-info .navbar-start .navbar-link:hover,
  .navbar.is-info .navbar-start .navbar-link.is-active,
  .navbar.is-info .navbar-end > a.navbar-item:focus,
  .navbar.is-info .navbar-end > a.navbar-item:hover,
  .navbar.is-info .navbar-end > a.navbar-item.is-active,
  .navbar.is-info .navbar-end .navbar-link:focus,
  .navbar.is-info .navbar-end .navbar-link:hover,
  .navbar.is-info .navbar-end .navbar-link.is-active {
      background-color: #4b6c70;
      color: #fff;
    }
    .navbar.is-info .navbar-start .navbar-link::after,
  .navbar.is-info .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-info .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-info .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-info .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #4b6c70;
      color: #fff;
    }
    .navbar.is-info .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
  }
  .navbar.is-success {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .navbar.is-success .navbar-brand > .navbar-item,
  .navbar.is-success .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-success .navbar-brand > a.navbar-item:focus, .navbar.is-success .navbar-brand > a.navbar-item:hover, .navbar.is-success .navbar-brand > a.navbar-item.is-active,
  .navbar.is-success .navbar-brand .navbar-link:focus,
  .navbar.is-success .navbar-brand .navbar-link:hover,
  .navbar.is-success .navbar-brand .navbar-link.is-active {
    background-color: #5e9665;
    color: #fff;
  }
  .navbar.is-success .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-success .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-success .navbar-start > .navbar-item,
  .navbar.is-success .navbar-start .navbar-link,
  .navbar.is-success .navbar-end > .navbar-item,
  .navbar.is-success .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-success .navbar-start > a.navbar-item:focus, .navbar.is-success .navbar-start > a.navbar-item:hover, .navbar.is-success .navbar-start > a.navbar-item.is-active,
  .navbar.is-success .navbar-start .navbar-link:focus,
  .navbar.is-success .navbar-start .navbar-link:hover,
  .navbar.is-success .navbar-start .navbar-link.is-active,
  .navbar.is-success .navbar-end > a.navbar-item:focus,
  .navbar.is-success .navbar-end > a.navbar-item:hover,
  .navbar.is-success .navbar-end > a.navbar-item.is-active,
  .navbar.is-success .navbar-end .navbar-link:focus,
  .navbar.is-success .navbar-end .navbar-link:hover,
  .navbar.is-success .navbar-end .navbar-link.is-active {
      background-color: #5e9665;
      color: #fff;
    }
    .navbar.is-success .navbar-start .navbar-link::after,
  .navbar.is-success .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-success .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-success .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-success .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #5e9665;
      color: #fff;
    }
    .navbar.is-success .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
  }
  .navbar.is-warning {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .navbar.is-warning .navbar-brand > .navbar-item,
  .navbar.is-warning .navbar-brand .navbar-link {
    color: rgba(0, 0, 0, 0.7);
  }
  .navbar.is-warning .navbar-brand > a.navbar-item:focus, .navbar.is-warning .navbar-brand > a.navbar-item:hover, .navbar.is-warning .navbar-brand > a.navbar-item.is-active,
  .navbar.is-warning .navbar-brand .navbar-link:focus,
  .navbar.is-warning .navbar-brand .navbar-link:hover,
  .navbar.is-warning .navbar-brand .navbar-link.is-active {
    background-color: #cac378;
    color: rgba(0, 0, 0, 0.7);
  }
  .navbar.is-warning .navbar-brand .navbar-link::after {
    border-color: rgba(0, 0, 0, 0.7);
  }
  .navbar.is-warning .navbar-burger {
    color: rgba(0, 0, 0, 0.7);
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-warning .navbar-start > .navbar-item,
  .navbar.is-warning .navbar-start .navbar-link,
  .navbar.is-warning .navbar-end > .navbar-item,
  .navbar.is-warning .navbar-end .navbar-link {
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-warning .navbar-start > a.navbar-item:focus, .navbar.is-warning .navbar-start > a.navbar-item:hover, .navbar.is-warning .navbar-start > a.navbar-item.is-active,
  .navbar.is-warning .navbar-start .navbar-link:focus,
  .navbar.is-warning .navbar-start .navbar-link:hover,
  .navbar.is-warning .navbar-start .navbar-link.is-active,
  .navbar.is-warning .navbar-end > a.navbar-item:focus,
  .navbar.is-warning .navbar-end > a.navbar-item:hover,
  .navbar.is-warning .navbar-end > a.navbar-item.is-active,
  .navbar.is-warning .navbar-end .navbar-link:focus,
  .navbar.is-warning .navbar-end .navbar-link:hover,
  .navbar.is-warning .navbar-end .navbar-link.is-active {
      background-color: #cac378;
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-warning .navbar-start .navbar-link::after,
  .navbar.is-warning .navbar-end .navbar-link::after {
      border-color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-warning .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-warning .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-warning .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #cac378;
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-warning .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
  }
  .navbar.is-danger {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .navbar.is-danger .navbar-brand > .navbar-item,
  .navbar.is-danger .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-danger .navbar-brand > a.navbar-item:focus, .navbar.is-danger .navbar-brand > a.navbar-item:hover, .navbar.is-danger .navbar-brand > a.navbar-item.is-active,
  .navbar.is-danger .navbar-brand .navbar-link:focus,
  .navbar.is-danger .navbar-brand .navbar-link:hover,
  .navbar.is-danger .navbar-brand .navbar-link.is-active {
    background-color: #ca7b78;
    color: #fff;
  }
  .navbar.is-danger .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-danger .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-danger .navbar-start > .navbar-item,
  .navbar.is-danger .navbar-start .navbar-link,
  .navbar.is-danger .navbar-end > .navbar-item,
  .navbar.is-danger .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-danger .navbar-start > a.navbar-item:focus, .navbar.is-danger .navbar-start > a.navbar-item:hover, .navbar.is-danger .navbar-start > a.navbar-item.is-active,
  .navbar.is-danger .navbar-start .navbar-link:focus,
  .navbar.is-danger .navbar-start .navbar-link:hover,
  .navbar.is-danger .navbar-start .navbar-link.is-active,
  .navbar.is-danger .navbar-end > a.navbar-item:focus,
  .navbar.is-danger .navbar-end > a.navbar-item:hover,
  .navbar.is-danger .navbar-end > a.navbar-item.is-active,
  .navbar.is-danger .navbar-end .navbar-link:focus,
  .navbar.is-danger .navbar-end .navbar-link:hover,
  .navbar.is-danger .navbar-end .navbar-link.is-active {
      background-color: #ca7b78;
      color: #fff;
    }
    .navbar.is-danger .navbar-start .navbar-link::after,
  .navbar.is-danger .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-danger .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-danger .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-danger .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #ca7b78;
      color: #fff;
    }
    .navbar.is-danger .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
  }
  .navbar.is-lightblue {
    background-color: ' . $colors['lightblue'] . ';
    color: #fff;
  }
  .navbar.is-lightblue .navbar-brand > .navbar-item,
  .navbar.is-lightblue .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-lightblue .navbar-brand > a.navbar-item:focus, .navbar.is-lightblue .navbar-brand > a.navbar-item:hover, .navbar.is-lightblue .navbar-brand > a.navbar-item.is-active,
  .navbar.is-lightblue .navbar-brand .navbar-link:focus,
  .navbar.is-lightblue .navbar-brand .navbar-link:hover,
  .navbar.is-lightblue .navbar-brand .navbar-link.is-active {
    background-color: #526678;
    color: #fff;
  }
  .navbar.is-lightblue .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-lightblue .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-lightblue .navbar-start > .navbar-item,
  .navbar.is-lightblue .navbar-start .navbar-link,
  .navbar.is-lightblue .navbar-end > .navbar-item,
  .navbar.is-lightblue .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-lightblue .navbar-start > a.navbar-item:focus, .navbar.is-lightblue .navbar-start > a.navbar-item:hover, .navbar.is-lightblue .navbar-start > a.navbar-item.is-active,
  .navbar.is-lightblue .navbar-start .navbar-link:focus,
  .navbar.is-lightblue .navbar-start .navbar-link:hover,
  .navbar.is-lightblue .navbar-start .navbar-link.is-active,
  .navbar.is-lightblue .navbar-end > a.navbar-item:focus,
  .navbar.is-lightblue .navbar-end > a.navbar-item:hover,
  .navbar.is-lightblue .navbar-end > a.navbar-item.is-active,
  .navbar.is-lightblue .navbar-end .navbar-link:focus,
  .navbar.is-lightblue .navbar-end .navbar-link:hover,
  .navbar.is-lightblue .navbar-end .navbar-link.is-active {
      background-color: #526678;
      color: #fff;
    }
    .navbar.is-lightblue .navbar-start .navbar-link::after,
  .navbar.is-lightblue .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-lightblue .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-lightblue .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-lightblue .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #526678;
      color: #fff;
    }
    .navbar.is-lightblue .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['lightblue'] . ';
      color: #fff;
    }
  }
  .navbar.is-purple {
    background-color: ' . $colors['purple'] . ';
    color: #fff;
  }
  .navbar.is-purple .navbar-brand > .navbar-item,
  .navbar.is-purple .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-purple .navbar-brand > a.navbar-item:focus, .navbar.is-purple .navbar-brand > a.navbar-item:hover, .navbar.is-purple .navbar-brand > a.navbar-item.is-active,
  .navbar.is-purple .navbar-brand .navbar-link:focus,
  .navbar.is-purple .navbar-brand .navbar-link:hover,
  .navbar.is-purple .navbar-brand .navbar-link.is-active {
    background-color: #69587f;
    color: #fff;
  }
  .navbar.is-purple .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-purple .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-purple .navbar-start > .navbar-item,
  .navbar.is-purple .navbar-start .navbar-link,
  .navbar.is-purple .navbar-end > .navbar-item,
  .navbar.is-purple .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-purple .navbar-start > a.navbar-item:focus, .navbar.is-purple .navbar-start > a.navbar-item:hover, .navbar.is-purple .navbar-start > a.navbar-item.is-active,
  .navbar.is-purple .navbar-start .navbar-link:focus,
  .navbar.is-purple .navbar-start .navbar-link:hover,
  .navbar.is-purple .navbar-start .navbar-link.is-active,
  .navbar.is-purple .navbar-end > a.navbar-item:focus,
  .navbar.is-purple .navbar-end > a.navbar-item:hover,
  .navbar.is-purple .navbar-end > a.navbar-item.is-active,
  .navbar.is-purple .navbar-end .navbar-link:focus,
  .navbar.is-purple .navbar-end .navbar-link:hover,
  .navbar.is-purple .navbar-end .navbar-link.is-active {
      background-color: #69587f;
      color: #fff;
    }
    .navbar.is-purple .navbar-start .navbar-link::after,
  .navbar.is-purple .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-purple .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-purple .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-purple .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #69587f;
      color: #fff;
    }
    .navbar.is-purple .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['purple'] . ';
      color: #fff;
    }
  }
  .navbar.is-pink {
    background-color: ' . $colors['pink'] . ';
    color: #fff;
  }
  .navbar.is-pink .navbar-brand > .navbar-item,
  .navbar.is-pink .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-pink .navbar-brand > a.navbar-item:focus, .navbar.is-pink .navbar-brand > a.navbar-item:hover, .navbar.is-pink .navbar-brand > a.navbar-item.is-active,
  .navbar.is-pink .navbar-brand .navbar-link:focus,
  .navbar.is-pink .navbar-brand .navbar-link:hover,
  .navbar.is-pink .navbar-brand .navbar-link.is-active {
    background-color: #ae6881;
    color: #fff;
  }
  .navbar.is-pink .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-pink .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-pink .navbar-start > .navbar-item,
  .navbar.is-pink .navbar-start .navbar-link,
  .navbar.is-pink .navbar-end > .navbar-item,
  .navbar.is-pink .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-pink .navbar-start > a.navbar-item:focus, .navbar.is-pink .navbar-start > a.navbar-item:hover, .navbar.is-pink .navbar-start > a.navbar-item.is-active,
  .navbar.is-pink .navbar-start .navbar-link:focus,
  .navbar.is-pink .navbar-start .navbar-link:hover,
  .navbar.is-pink .navbar-start .navbar-link.is-active,
  .navbar.is-pink .navbar-end > a.navbar-item:focus,
  .navbar.is-pink .navbar-end > a.navbar-item:hover,
  .navbar.is-pink .navbar-end > a.navbar-item.is-active,
  .navbar.is-pink .navbar-end .navbar-link:focus,
  .navbar.is-pink .navbar-end .navbar-link:hover,
  .navbar.is-pink .navbar-end .navbar-link.is-active {
      background-color: #ae6881;
      color: #fff;
    }
    .navbar.is-pink .navbar-start .navbar-link::after,
  .navbar.is-pink .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-pink .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-pink .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-pink .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #ae6881;
      color: #fff;
    }
    .navbar.is-pink .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['pink'] . ';
      color: #fff;
    }
  }
  .navbar.is-blue {
    background-color: ' . $colors['blue'] . ';
    color: #fff;
  }
  .navbar.is-blue .navbar-brand > .navbar-item,
  .navbar.is-blue .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-blue .navbar-brand > a.navbar-item:focus, .navbar.is-blue .navbar-brand > a.navbar-item:hover, .navbar.is-blue .navbar-brand > a.navbar-item.is-active,
  .navbar.is-blue .navbar-brand .navbar-link:focus,
  .navbar.is-blue .navbar-brand .navbar-link:hover,
  .navbar.is-blue .navbar-brand .navbar-link.is-active {
    background-color: #58617e;
    color: #fff;
  }
  .navbar.is-blue .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-blue .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-blue .navbar-start > .navbar-item,
  .navbar.is-blue .navbar-start .navbar-link,
  .navbar.is-blue .navbar-end > .navbar-item,
  .navbar.is-blue .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-blue .navbar-start > a.navbar-item:focus, .navbar.is-blue .navbar-start > a.navbar-item:hover, .navbar.is-blue .navbar-start > a.navbar-item.is-active,
  .navbar.is-blue .navbar-start .navbar-link:focus,
  .navbar.is-blue .navbar-start .navbar-link:hover,
  .navbar.is-blue .navbar-start .navbar-link.is-active,
  .navbar.is-blue .navbar-end > a.navbar-item:focus,
  .navbar.is-blue .navbar-end > a.navbar-item:hover,
  .navbar.is-blue .navbar-end > a.navbar-item.is-active,
  .navbar.is-blue .navbar-end .navbar-link:focus,
  .navbar.is-blue .navbar-end .navbar-link:hover,
  .navbar.is-blue .navbar-end .navbar-link.is-active {
      background-color: #58617e;
      color: #fff;
    }
    .navbar.is-blue .navbar-start .navbar-link::after,
  .navbar.is-blue .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-blue .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-blue .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-blue .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #58617e;
      color: #fff;
    }
    .navbar.is-blue .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['blue'] . ';
      color: #fff;
    }
  }
  .navbar.is-orange {
    background-color: ' . $colors['orange'] . ';
    color: #fff;
  }
  .navbar.is-orange .navbar-brand > .navbar-item,
  .navbar.is-orange .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-orange .navbar-brand > a.navbar-item:focus, .navbar.is-orange .navbar-brand > a.navbar-item:hover, .navbar.is-orange .navbar-brand > a.navbar-item.is-active,
  .navbar.is-orange .navbar-brand .navbar-link:focus,
  .navbar.is-orange .navbar-brand .navbar-link:hover,
  .navbar.is-orange .navbar-brand .navbar-link.is-active {
    background-color: #ca9e78;
    color: #fff;
  }
  .navbar.is-orange .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-orange .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-orange .navbar-start > .navbar-item,
  .navbar.is-orange .navbar-start .navbar-link,
  .navbar.is-orange .navbar-end > .navbar-item,
  .navbar.is-orange .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-orange .navbar-start > a.navbar-item:focus, .navbar.is-orange .navbar-start > a.navbar-item:hover, .navbar.is-orange .navbar-start > a.navbar-item.is-active,
  .navbar.is-orange .navbar-start .navbar-link:focus,
  .navbar.is-orange .navbar-start .navbar-link:hover,
  .navbar.is-orange .navbar-start .navbar-link.is-active,
  .navbar.is-orange .navbar-end > a.navbar-item:focus,
  .navbar.is-orange .navbar-end > a.navbar-item:hover,
  .navbar.is-orange .navbar-end > a.navbar-item.is-active,
  .navbar.is-orange .navbar-end .navbar-link:focus,
  .navbar.is-orange .navbar-end .navbar-link:hover,
  .navbar.is-orange .navbar-end .navbar-link.is-active {
      background-color: #ca9e78;
      color: #fff;
    }
    .navbar.is-orange .navbar-start .navbar-link::after,
  .navbar.is-orange .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-orange .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-orange .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-orange .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #ca9e78;
      color: #fff;
    }
    .navbar.is-orange .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['orange'] . ';
      color: #fff;
    }
  }
  .navbar.is-red {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .navbar.is-red .navbar-brand > .navbar-item,
  .navbar.is-red .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-red .navbar-brand > a.navbar-item:focus, .navbar.is-red .navbar-brand > a.navbar-item:hover, .navbar.is-red .navbar-brand > a.navbar-item.is-active,
  .navbar.is-red .navbar-brand .navbar-link:focus,
  .navbar.is-red .navbar-brand .navbar-link:hover,
  .navbar.is-red .navbar-brand .navbar-link.is-active {
    background-color: #ca7b78;
    color: #fff;
  }
  .navbar.is-red .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-red .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-red .navbar-start > .navbar-item,
  .navbar.is-red .navbar-start .navbar-link,
  .navbar.is-red .navbar-end > .navbar-item,
  .navbar.is-red .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-red .navbar-start > a.navbar-item:focus, .navbar.is-red .navbar-start > a.navbar-item:hover, .navbar.is-red .navbar-start > a.navbar-item.is-active,
  .navbar.is-red .navbar-start .navbar-link:focus,
  .navbar.is-red .navbar-start .navbar-link:hover,
  .navbar.is-red .navbar-start .navbar-link.is-active,
  .navbar.is-red .navbar-end > a.navbar-item:focus,
  .navbar.is-red .navbar-end > a.navbar-item:hover,
  .navbar.is-red .navbar-end > a.navbar-item.is-active,
  .navbar.is-red .navbar-end .navbar-link:focus,
  .navbar.is-red .navbar-end .navbar-link:hover,
  .navbar.is-red .navbar-end .navbar-link.is-active {
      background-color: #ca7b78;
      color: #fff;
    }
    .navbar.is-red .navbar-start .navbar-link::after,
  .navbar.is-red .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-red .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-red .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-red .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #ca7b78;
      color: #fff;
    }
    .navbar.is-red .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['red'] . ';
      color: #fff;
    }
  }
  .navbar.is-green {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .navbar.is-green .navbar-brand > .navbar-item,
  .navbar.is-green .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-green .navbar-brand > a.navbar-item:focus, .navbar.is-green .navbar-brand > a.navbar-item:hover, .navbar.is-green .navbar-brand > a.navbar-item.is-active,
  .navbar.is-green .navbar-brand .navbar-link:focus,
  .navbar.is-green .navbar-brand .navbar-link:hover,
  .navbar.is-green .navbar-brand .navbar-link.is-active {
    background-color: #5e9665;
    color: #fff;
  }
  .navbar.is-green .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-green .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-green .navbar-start > .navbar-item,
  .navbar.is-green .navbar-start .navbar-link,
  .navbar.is-green .navbar-end > .navbar-item,
  .navbar.is-green .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-green .navbar-start > a.navbar-item:focus, .navbar.is-green .navbar-start > a.navbar-item:hover, .navbar.is-green .navbar-start > a.navbar-item.is-active,
  .navbar.is-green .navbar-start .navbar-link:focus,
  .navbar.is-green .navbar-start .navbar-link:hover,
  .navbar.is-green .navbar-start .navbar-link.is-active,
  .navbar.is-green .navbar-end > a.navbar-item:focus,
  .navbar.is-green .navbar-end > a.navbar-item:hover,
  .navbar.is-green .navbar-end > a.navbar-item.is-active,
  .navbar.is-green .navbar-end .navbar-link:focus,
  .navbar.is-green .navbar-end .navbar-link:hover,
  .navbar.is-green .navbar-end .navbar-link.is-active {
      background-color: #5e9665;
      color: #fff;
    }
    .navbar.is-green .navbar-start .navbar-link::after,
  .navbar.is-green .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-green .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-green .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-green .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #5e9665;
      color: #fff;
    }
    .navbar.is-green .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['green'] . ';
      color: #fff;
    }
  }
  .navbar.is-yellow {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .navbar.is-yellow .navbar-brand > .navbar-item,
  .navbar.is-yellow .navbar-brand .navbar-link {
    color: rgba(0, 0, 0, 0.7);
  }
  .navbar.is-yellow .navbar-brand > a.navbar-item:focus, .navbar.is-yellow .navbar-brand > a.navbar-item:hover, .navbar.is-yellow .navbar-brand > a.navbar-item.is-active,
  .navbar.is-yellow .navbar-brand .navbar-link:focus,
  .navbar.is-yellow .navbar-brand .navbar-link:hover,
  .navbar.is-yellow .navbar-brand .navbar-link.is-active {
    background-color: #cac378;
    color: rgba(0, 0, 0, 0.7);
  }
  .navbar.is-yellow .navbar-brand .navbar-link::after {
    border-color: rgba(0, 0, 0, 0.7);
  }
  .navbar.is-yellow .navbar-burger {
    color: rgba(0, 0, 0, 0.7);
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-yellow .navbar-start > .navbar-item,
  .navbar.is-yellow .navbar-start .navbar-link,
  .navbar.is-yellow .navbar-end > .navbar-item,
  .navbar.is-yellow .navbar-end .navbar-link {
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-yellow .navbar-start > a.navbar-item:focus, .navbar.is-yellow .navbar-start > a.navbar-item:hover, .navbar.is-yellow .navbar-start > a.navbar-item.is-active,
  .navbar.is-yellow .navbar-start .navbar-link:focus,
  .navbar.is-yellow .navbar-start .navbar-link:hover,
  .navbar.is-yellow .navbar-start .navbar-link.is-active,
  .navbar.is-yellow .navbar-end > a.navbar-item:focus,
  .navbar.is-yellow .navbar-end > a.navbar-item:hover,
  .navbar.is-yellow .navbar-end > a.navbar-item.is-active,
  .navbar.is-yellow .navbar-end .navbar-link:focus,
  .navbar.is-yellow .navbar-end .navbar-link:hover,
  .navbar.is-yellow .navbar-end .navbar-link.is-active {
      background-color: #cac378;
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-yellow .navbar-start .navbar-link::after,
  .navbar.is-yellow .navbar-end .navbar-link::after {
      border-color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-yellow .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-yellow .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-yellow .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #cac378;
      color: rgba(0, 0, 0, 0.7);
    }
    .navbar.is-yellow .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['yellow'] . ';
      color: rgba(0, 0, 0, 0.7);
    }
  }
  .navbar.is-cyan {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .navbar.is-cyan .navbar-brand > .navbar-item,
  .navbar.is-cyan .navbar-brand .navbar-link {
    color: #fff;
  }
  .navbar.is-cyan .navbar-brand > a.navbar-item:focus, .navbar.is-cyan .navbar-brand > a.navbar-item:hover, .navbar.is-cyan .navbar-brand > a.navbar-item.is-active,
  .navbar.is-cyan .navbar-brand .navbar-link:focus,
  .navbar.is-cyan .navbar-brand .navbar-link:hover,
  .navbar.is-cyan .navbar-brand .navbar-link.is-active {
    background-color: #4b6c70;
    color: #fff;
  }
  .navbar.is-cyan .navbar-brand .navbar-link::after {
    border-color: #fff;
  }
  .navbar.is-cyan .navbar-burger {
    color: #fff;
  }
  @media screen and (min-width: 1024px) {
    .navbar.is-cyan .navbar-start > .navbar-item,
  .navbar.is-cyan .navbar-start .navbar-link,
  .navbar.is-cyan .navbar-end > .navbar-item,
  .navbar.is-cyan .navbar-end .navbar-link {
      color: #fff;
    }
    .navbar.is-cyan .navbar-start > a.navbar-item:focus, .navbar.is-cyan .navbar-start > a.navbar-item:hover, .navbar.is-cyan .navbar-start > a.navbar-item.is-active,
  .navbar.is-cyan .navbar-start .navbar-link:focus,
  .navbar.is-cyan .navbar-start .navbar-link:hover,
  .navbar.is-cyan .navbar-start .navbar-link.is-active,
  .navbar.is-cyan .navbar-end > a.navbar-item:focus,
  .navbar.is-cyan .navbar-end > a.navbar-item:hover,
  .navbar.is-cyan .navbar-end > a.navbar-item.is-active,
  .navbar.is-cyan .navbar-end .navbar-link:focus,
  .navbar.is-cyan .navbar-end .navbar-link:hover,
  .navbar.is-cyan .navbar-end .navbar-link.is-active {
      background-color: #4b6c70;
      color: #fff;
    }
    .navbar.is-cyan .navbar-start .navbar-link::after,
  .navbar.is-cyan .navbar-end .navbar-link::after {
      border-color: #fff;
    }
    .navbar.is-cyan .navbar-item.has-dropdown:focus .navbar-link,
  .navbar.is-cyan .navbar-item.has-dropdown:hover .navbar-link,
  .navbar.is-cyan .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: #4b6c70;
      color: #fff;
    }
    .navbar.is-cyan .navbar-dropdown a.navbar-item.is-active {
      background-color: ' . $colors['cyan'] . ';
      color: #fff;
    }
  }
  .navbar > .container {
    align-items: stretch;
    display: flex;
    min-height: 3.25rem;
    width: 100%;
  }
  .navbar.has-shadow {
    box-shadow: 0 2px 0 0 whitesmoke;
  }
  .navbar.is-fixed-bottom, .navbar.is-fixed-top {
    left: 0;
    position: fixed;
    right: 0;
    z-index: 30;
  }
  .navbar.is-fixed-bottom {
    bottom: 0;
  }
  .navbar.is-fixed-bottom.has-shadow {
    box-shadow: 0 -2px 0 0 whitesmoke;
  }
  .navbar.is-fixed-top {
    top: 0;
  }
  
  html.has-navbar-fixed-top,
  body.has-navbar-fixed-top {
    padding-top: 3.25rem;
  }
  html.has-navbar-fixed-bottom,
  body.has-navbar-fixed-bottom {
    padding-bottom: 3.25rem;
  }
  
  .navbar-brand,
  .navbar-tabs {
    align-items: stretch;
    display: flex;
    flex-shrink: 0;
    min-height: 3.25rem;
  }
  
  .navbar-brand a.navbar-item:focus, .navbar-brand a.navbar-item:hover {
    background-color: transparent;
  }
  
  .navbar-tabs {
    -webkit-overflow-scrolling: touch;
    max-width: 100vw;
    overflow-x: auto;
    overflow-y: hidden;
  }
  
  .navbar-burger {
    color: ' . $colors['white'] . ';
    cursor: pointer;
    display: block;
    height: 3.25rem;
    position: relative;
    width: 3.25rem;
    margin-left: auto;
  }
  .navbar-burger span {
    background-color: currentColor;
    display: block;
    height: 1px;
    left: calc(50% - 8px);
    position: absolute;
    transform-origin: center;
    transition-duration: 86ms;
    transition-property: background-color, opacity, transform;
    transition-timing-function: ease-out;
    width: 16px;
  }
  .navbar-burger span:nth-child(1) {
    top: calc(50% - 6px);
  }
  .navbar-burger span:nth-child(2) {
    top: calc(50% - 1px);
  }
  .navbar-burger span:nth-child(3) {
    top: calc(50% + 4px);
  }
  .navbar-burger:hover {
    background-color: rgba(0, 0, 0, 0.05);
  }
  .navbar-burger.is-active span:nth-child(1) {
    transform: translateY(5px) rotate(45deg);
  }
  .navbar-burger.is-active span:nth-child(2) {
    opacity: 0;
  }
  .navbar-burger.is-active span:nth-child(3) {
    transform: translateY(-5px) rotate(-45deg);
  }
  
  .navbar-menu {
    display: none;
  }
  
  .navbar-item,
  .navbar-link {
    color: ' . $colors['white'] . ';
    display: block;
    line-height: 1.5;
    padding: 0.5rem 0.75rem;
    position: relative;
  }
  .navbar-item .icon:only-child,
  .navbar-link .icon:only-child {
    margin-left: -0.25rem;
    margin-right: -0.25rem;
  }
  
  a.navbar-item,
  .navbar-link {
    cursor: pointer;
  }
  a.navbar-item:focus, a.navbar-item:focus-within, a.navbar-item:hover, a.navbar-item.is-active,
  .navbar-link:focus,
  .navbar-link:focus-within,
  .navbar-link:hover,
  .navbar-link.is-active {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    color: ' . $colors['primary'] . ';
  }
  
  .navbar-item {
    display: block;
    flex-grow: 0;
    flex-shrink: 0;
  }
  .navbar-item img {
    max-height: 1.75rem;
  }
  .navbar-item.has-dropdown {
    padding: 0;
  }
  .navbar-item.is-expanded {
    flex-grow: 1;
    flex-shrink: 1;
  }
  .navbar-item.is-tab {
    border-bottom: 1px solid transparent;
    min-height: 3.25rem;
    padding-bottom: calc(0.5rem - 1px);
  }
  .navbar-item.is-tab:focus, .navbar-item.is-tab:hover {
    background-color: transparent;
    border-bottom-color: ' . $colors['complementary'] . ';
  }
  .navbar-item.is-tab.is-active {
    background-color: transparent;
    border-bottom-color: ' . $colors['complementary'] . ';
    border-bottom-style: solid;
    border-bottom-width: 3px;
    color: ' . $colors['complementary'] . ';
    padding-bottom: calc(0.5rem - 3px);
  }
  
  .navbar-content {
    flex-grow: 1;
    flex-shrink: 1;
  }
  
  .navbar-link:not(.is-arrowless) {
    padding-right: 2.5em;
  }
  .navbar-link:not(.is-arrowless)::after {
    border-color: ' . $colors['complementary'] . ';
    margin-top: -0.375em;
    right: 1.125em;
  }
  
  .navbar-dropdown {
    font-size: 0.875rem;
    padding-bottom: 0.5rem;
    padding-top: 0.5rem;
  }
  .navbar-dropdown .navbar-item {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
  
  .navbar-divider {
    background-color: whitesmoke;
    border: none;
    display: none;
    height: 2px;
    margin: 0.5rem 0;
  }
  
  @media screen and (max-width: 1023px) {
    .navbar > .container {
      display: block;
    }
  
    .navbar-brand .navbar-item,
  .navbar-tabs .navbar-item {
      align-items: center;
      display: flex;
    }
  
    .navbar-link::after {
      display: none;
    }
  
    .navbar-menu {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
      box-shadow: 0 8px 16px rgba(10, 10, 10, 0.1);
      padding: 0.5rem 0;
    }
    .navbar-menu.is-active {
      display: block;
    }
  
    .navbar.is-fixed-bottom-touch, .navbar.is-fixed-top-touch {
      left: 0;
      position: fixed;
      right: 0;
      z-index: 30;
    }
    .navbar.is-fixed-bottom-touch {
      bottom: 0;
    }
    .navbar.is-fixed-bottom-touch.has-shadow {
      box-shadow: 0 -2px 3px rgba(10, 10, 10, 0.1);
    }
    .navbar.is-fixed-top-touch {
      top: 0;
    }
    .navbar.is-fixed-top .navbar-menu, .navbar.is-fixed-top-touch .navbar-menu {
      -webkit-overflow-scrolling: touch;
      max-height: calc(100vh - 3.25rem);
      overflow: auto;
    }
  
    html.has-navbar-fixed-top-touch,
  body.has-navbar-fixed-top-touch {
      padding-top: 3.25rem;
    }
    html.has-navbar-fixed-bottom-touch,
  body.has-navbar-fixed-bottom-touch {
      padding-bottom: 3.25rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .navbar,
  .navbar-menu,
  .navbar-start,
  .navbar-end {
      align-items: stretch;
      display: flex;
    }
  
    .navbar {
      min-height: 3.25rem;
    }
    .navbar.is-spaced {
      padding: 1rem 2rem;
    }
    .navbar.is-spaced .navbar-start,
  .navbar.is-spaced .navbar-end {
      align-items: center;
    }
    .navbar.is-spaced a.navbar-item,
  .navbar.is-spaced .navbar-link {
      border-radius: 4px;
    }
    .navbar.is-transparent a.navbar-item:focus, .navbar.is-transparent a.navbar-item:hover, .navbar.is-transparent a.navbar-item.is-active,
  .navbar.is-transparent .navbar-link:focus,
  .navbar.is-transparent .navbar-link:hover,
  .navbar.is-transparent .navbar-link.is-active {
      background-color: transparent !important;
    }
    .navbar.is-transparent .navbar-item.has-dropdown.is-active .navbar-link, .navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:focus .navbar-link, .navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:focus-within .navbar-link, .navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:hover .navbar-link {
      background-color: transparent !important;
    }
    .navbar.is-transparent .navbar-dropdown a.navbar-item:focus, .navbar.is-transparent .navbar-dropdown a.navbar-item:hover {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
      color: ' . $colors['primary'] . ';
    }
    .navbar.is-transparent .navbar-dropdown a.navbar-item.is-active {
      background-color: whitesmoke;
      color: ' . $colors['complementary'] . ';
    }
  
    .navbar-burger {
      display: none;
    }
  
    .navbar-item,
  .navbar-link {
      align-items: center;
      display: flex;
    }
  
    .navbar-item {
      display: flex;
    }
    .navbar-item.has-dropdown {
      align-items: stretch;
    }
    .navbar-item.has-dropdown-up .navbar-link::after {
      transform: rotate(135deg) translate(0.25em, -0.25em);
    }
    .navbar-item.has-dropdown-up .navbar-dropdown {
      border-bottom: 2px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.12)) . ';
      border-radius: 6px 6px 0 0;
      border-top: none;
      bottom: 100%;
      box-shadow: 0 -8px 8px rgba(10, 10, 10, 0.1);
      top: auto;
    }
    .navbar-item.is-active .navbar-dropdown, .navbar-item.is-hoverable:focus .navbar-dropdown, .navbar-item.is-hoverable:focus-within .navbar-dropdown, .navbar-item.is-hoverable:hover .navbar-dropdown {
      display: block;
    }
    .navbar.is-spaced .navbar-item.is-active .navbar-dropdown, .navbar-item.is-active .navbar-dropdown.is-boxed, .navbar.is-spaced .navbar-item.is-hoverable:focus .navbar-dropdown, .navbar-item.is-hoverable:focus .navbar-dropdown.is-boxed, .navbar.is-spaced .navbar-item.is-hoverable:focus-within .navbar-dropdown, .navbar-item.is-hoverable:focus-within .navbar-dropdown.is-boxed, .navbar.is-spaced .navbar-item.is-hoverable:hover .navbar-dropdown, .navbar-item.is-hoverable:hover .navbar-dropdown.is-boxed {
      opacity: 1;
      pointer-events: auto;
      transform: translateY(0);
    }
  
    .navbar-menu {
      flex-grow: 1;
      flex-shrink: 0;
    }
  
    .navbar-start {
      justify-content: flex-start;
      margin-right: auto;
    }
  
    .navbar-end {
      justify-content: flex-end;
      margin-left: auto;
    }
  
    .navbar-dropdown {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
      border-bottom-left-radius: 6px;
      border-bottom-right-radius: 6px;
      border-top: 2px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.12)) . ';
      box-shadow: 0 8px 8px rgba(10, 10, 10, 0.1);
      display: none;
      font-size: 0.875rem;
      left: 0;
      min-width: 100%;
      position: absolute;
      top: 100%;
      z-index: 20;
    }
    .navbar-dropdown .navbar-item {
      padding: 0.375rem 1rem;
      white-space: nowrap;
    }
    .navbar-dropdown a.navbar-item {
      padding-right: 3rem;
    }
    .navbar-dropdown a.navbar-item:focus, .navbar-dropdown a.navbar-item:hover {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
      color: ' . $colors['primary'] . ';
    }
    .navbar-dropdown a.navbar-item.is-active {
      background-color: whitesmoke;
      color: ' . $colors['complementary'] . ';
    }
    .navbar.is-spaced .navbar-dropdown, .navbar-dropdown.is-boxed {
      border-radius: 6px;
      border-top: none;
      box-shadow: 0 8px 8px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
      display: block;
      opacity: 0;
      pointer-events: none;
      top: calc(100% + (-4px));
      transform: translateY(-5px);
      transition-duration: 86ms;
      transition-property: opacity, transform;
    }
    .navbar-dropdown.is-right {
      left: auto;
      right: 0;
    }
  
    .navbar-divider {
      display: block;
    }
  
    .navbar > .container .navbar-brand,
  .container > .navbar .navbar-brand {
      margin-left: -0.75rem;
    }
    .navbar > .container .navbar-menu,
  .container > .navbar .navbar-menu {
      margin-right: -0.75rem;
    }
  
    .navbar.is-fixed-bottom-desktop, .navbar.is-fixed-top-desktop {
      left: 0;
      position: fixed;
      right: 0;
      z-index: 30;
    }
    .navbar.is-fixed-bottom-desktop {
      bottom: 0;
    }
    .navbar.is-fixed-bottom-desktop.has-shadow {
      box-shadow: 0 -2px 3px rgba(10, 10, 10, 0.1);
    }
    .navbar.is-fixed-top-desktop {
      top: 0;
    }
  
    html.has-navbar-fixed-top-desktop,
  body.has-navbar-fixed-top-desktop {
      padding-top: 3.25rem;
    }
    html.has-navbar-fixed-bottom-desktop,
  body.has-navbar-fixed-bottom-desktop {
      padding-bottom: 3.25rem;
    }
    html.has-spaced-navbar-fixed-top,
  body.has-spaced-navbar-fixed-top {
      padding-top: 5.25rem;
    }
    html.has-spaced-navbar-fixed-bottom,
  body.has-spaced-navbar-fixed-bottom {
      padding-bottom: 5.25rem;
    }
  
    a.navbar-item.is-active,
  .navbar-link.is-active {
      color: #0a0a0a;
    }
    a.navbar-item.is-active:not(:focus):not(:hover),
  .navbar-link.is-active:not(:focus):not(:hover) {
      background-color: transparent;
    }
  
    .navbar-item.has-dropdown:focus .navbar-link, .navbar-item.has-dropdown:hover .navbar-link, .navbar-item.has-dropdown.is-active .navbar-link {
      background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) . ';
    }
  }
  .hero.is-fullheight-with-navbar {
    min-height: calc(100vh - 3.25rem);
  }
  
  .pagination {
    font-size: 1rem;
    margin: -0.25rem;
  }
  .pagination.is-small {
    font-size: 0.75rem;
  }
  .pagination.is-medium {
    font-size: 1.25rem;
  }
  .pagination.is-large {
    font-size: 1.5rem;
  }
  .pagination.is-rounded .pagination-previous,
  .pagination.is-rounded .pagination-next {
    padding-left: 1em;
    padding-right: 1em;
    border-radius: 290486px;
  }
  .pagination.is-rounded .pagination-link {
    border-radius: 290486px;
  }
  
  .pagination,
  .pagination-list {
    align-items: center;
    display: flex;
    justify-content: center;
    text-align: center;
  }
  
  .pagination-previous,
  .pagination-next,
  .pagination-link,
  .pagination-ellipsis {
    font-size: 1em;
    justify-content: center;
    margin: 0.25rem;
    padding-left: 0.5em;
    padding-right: 0.5em;
    text-align: center;
  }
  
  .pagination-previous,
  .pagination-next,
  .pagination-link {
    border-color: #dbdbdb;
    color: #363636;
    min-width: 2.25em;
  }
  .pagination-previous:hover,
  .pagination-next:hover,
  .pagination-link:hover {
    border-color: #b5b5b5;
    color: #DDDDDD;
  }
  .pagination-previous:focus,
  .pagination-next:focus,
  .pagination-link:focus {
    border-color: ' . $colors['blue'] . ';
  }
  .pagination-previous:active,
  .pagination-next:active,
  .pagination-link:active {
    box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);
  }
  .pagination-previous[disabled],
  .pagination-next[disabled],
  .pagination-link[disabled] {
    background-color: #dbdbdb;
    border-color: #dbdbdb;
    box-shadow: none;
    color: #7a7a7a;
    opacity: 0.5;
  }
  
  .pagination-previous,
  .pagination-next {
    padding-left: 0.75em;
    padding-right: 0.75em;
    white-space: nowrap;
  }
  
  .pagination-link.is-current {
    background-color: ' . $colors['complementary'] . ';
    border-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  
  .pagination-ellipsis {
    color: #b5b5b5;
    pointer-events: none;
  }
  
  .pagination-list {
    flex-wrap: wrap;
  }
  
  @media screen and (max-width: 768px) {
    .pagination {
      flex-wrap: wrap;
    }
  
    .pagination-previous,
  .pagination-next {
      flex-grow: 1;
      flex-shrink: 1;
    }
  
    .pagination-list li {
      flex-grow: 1;
      flex-shrink: 1;
    }
  }
  @media screen and (min-width: 769px), print {
    .pagination-list {
      flex-grow: 1;
      flex-shrink: 1;
      justify-content: flex-start;
      order: 1;
    }
  
    .pagination-previous {
      order: 2;
    }
  
    .pagination-next {
      order: 3;
    }
  
    .pagination {
      justify-content: space-between;
    }
    .pagination.is-centered .pagination-previous {
      order: 1;
    }
    .pagination.is-centered .pagination-list {
      justify-content: center;
      order: 2;
    }
    .pagination.is-centered .pagination-next {
      order: 3;
    }
    .pagination.is-right .pagination-previous {
      order: 1;
    }
    .pagination.is-right .pagination-next {
      order: 2;
    }
    .pagination.is-right .pagination-list {
      justify-content: flex-end;
      order: 3;
    }
  }
  .panel {
    font-size: 1rem;
  }
  .panel:not(:last-child) {
    margin-bottom: 1.5rem;
  }
  
  .panel-heading,
  .panel-tabs,
  .panel-block {
    border-bottom: 1px solid #dbdbdb;
    border-left: 1px solid #dbdbdb;
    border-right: 1px solid #dbdbdb;
  }
  .panel-heading:first-child,
  .panel-tabs:first-child,
  .panel-block:first-child {
    border-top: 1px solid #dbdbdb;
  }
  
  .panel-heading {
    background-color: whitesmoke;
    border-radius: 4px 4px 0 0;
    color: white;
    font-size: 1.25em;
    font-weight: 300;
    line-height: 1.25;
    padding: 0.5em 0.75em;
  }
  
  .panel-tabs {
    align-items: flex-end;
    display: flex;
    font-size: 0.875em;
    justify-content: center;
  }
  .panel-tabs a {
    border-bottom: 1px solid #dbdbdb;
    margin-bottom: -1px;
    padding: 0.5em;
  }
  .panel-tabs a.is-active {
    border-bottom-color: #4a4a4a;
    color: #363636;
  }
  
  .panel-list a {
    color: ' . $colors['white'] . ';
  }
  .panel-list a:hover {
    color: ' . $colors['complementary'] . ';
  }
  
  .panel-block {
    align-items: center;
    color: white;
    display: flex;
    justify-content: flex-start;
    padding: 0.5em 0.75em;
  }
  .panel-block input[type=checkbox] {
    margin-right: 0.75em;
  }
  .panel-block > .control {
    flex-grow: 1;
    flex-shrink: 1;
    width: 100%;
  }
  .panel-block.is-wrapped {
    flex-wrap: wrap;
  }
  .panel-block.is-active {
    border-left-color: ' . $colors['complementary'] . ';
    color: #363636;
  }
  .panel-block.is-active .panel-icon {
    color: ' . $colors['complementary'] . ';
  }
  
  a.panel-block,
  label.panel-block {
    cursor: pointer;
  }
  a.panel-block:hover,
  label.panel-block:hover {
    background-color: whitesmoke;
  }
  
  .panel-icon {
    display: inline-block;
    font-size: 14px;
    height: 1em;
    line-height: 1em;
    text-align: center;
    vertical-align: top;
    width: 1em;
    color: ' . $colors['white'] . ';
    margin-right: 0.75em;
  }
  .panel-icon .fa {
    font-size: inherit;
    line-height: inherit;
  }
  
  .tabs {
    -webkit-overflow-scrolling: touch;
    align-items: stretch;
    display: flex;
    font-size: 1rem;
    justify-content: space-between;
    overflow: hidden;
    overflow-x: auto;
    white-space: nowrap;
  }
  .tabs a {
    align-items: center;
    border-bottom-color: #dbdbdb;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    color: ' . $colors['white'] . ';
    display: flex;
    justify-content: center;
    margin-bottom: -1px;
    padding: 0.5em 1em;
    vertical-align: top;
  }
  .tabs a:hover {
    border-bottom-color: white;
    color: white;
  }
  .tabs li {
    display: block;
  }
  .tabs li.is-active a {
    border-bottom-color: ' . $colors['complementary'] . ';
    color: ' . $colors['complementary'] . ';
  }
  .tabs ul {
    align-items: center;
    border-bottom-color: #dbdbdb;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    display: flex;
    flex-grow: 1;
    flex-shrink: 0;
    justify-content: flex-start;
  }
  .tabs ul.is-left {
    padding-right: 0.75em;
  }
  .tabs ul.is-center {
    flex: none;
    justify-content: center;
    padding-left: 0.75em;
    padding-right: 0.75em;
  }
  .tabs ul.is-right {
    justify-content: flex-end;
    padding-left: 0.75em;
  }
  .tabs .icon:first-child {
    margin-right: 0.5em;
  }
  .tabs .icon:last-child {
    margin-left: 0.5em;
  }
  .tabs.is-centered ul {
    justify-content: center;
  }
  .tabs.is-right ul {
    justify-content: flex-end;
  }
  .tabs.is-boxed a {
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
  }
  .tabs.is-boxed a:hover {
    background-color: whitesmoke;
    border-bottom-color: #dbdbdb;
  }
  .tabs.is-boxed li.is-active a {
    background-color: ' . $colors['white'] . ';
    border-color: #dbdbdb;
    border-bottom-color: transparent !important;
  }
  .tabs.is-fullwidth li {
    flex-grow: 1;
    flex-shrink: 0;
  }
  .tabs.is-toggle a {
    border-color: #dbdbdb;
    border-style: solid;
    border-width: 1px;
    margin-bottom: 0;
    position: relative;
  }
  .tabs.is-toggle a:hover {
    background-color: whitesmoke;
    border-color: #b5b5b5;
    z-index: 2;
  }
  .tabs.is-toggle li + li {
    margin-left: -1px;
  }
  .tabs.is-toggle li:first-child a {
    border-radius: 4px 0 0 4px;
  }
  .tabs.is-toggle li:last-child a {
    border-radius: 0 4px 4px 0;
  }
  .tabs.is-toggle li.is-active a {
    background-color: ' . $colors['complementary'] . ';
    border-color: ' . $colors['complementary'] . ';
    color: #fff;
    z-index: 1;
  }
  .tabs.is-toggle ul {
    border-bottom: none;
  }
  .tabs.is-toggle.is-toggle-rounded li:first-child a {
    border-bottom-left-radius: 290486px;
    border-top-left-radius: 290486px;
    padding-left: 1.25em;
  }
  .tabs.is-toggle.is-toggle-rounded li:last-child a {
    border-bottom-right-radius: 290486px;
    border-top-right-radius: 290486px;
    padding-right: 1.25em;
  }
  .tabs.is-small {
    font-size: 0.75rem;
  }
  .tabs.is-medium {
    font-size: 1.25rem;
  }
  .tabs.is-large {
    font-size: 1.5rem;
  }
  
  .column {
    display: block;
    flex-basis: 0;
    flex-grow: 1;
    flex-shrink: 1;
    padding: 0.75rem;
  }
  .columns.is-mobile > .column.is-narrow {
    flex: none;
  }
  .columns.is-mobile > .column.is-full {
    flex: none;
    width: 100%;
  }
  .columns.is-mobile > .column.is-three-quarters {
    flex: none;
    width: 75%;
  }
  .columns.is-mobile > .column.is-two-thirds {
    flex: none;
    width: 66.6666%;
  }
  .columns.is-mobile > .column.is-half {
    flex: none;
    width: 50%;
  }
  .columns.is-mobile > .column.is-one-third {
    flex: none;
    width: 33.3333%;
  }
  .columns.is-mobile > .column.is-one-quarter {
    flex: none;
    width: 25%;
  }
  .columns.is-mobile > .column.is-one-fifth {
    flex: none;
    width: 20%;
  }
  .columns.is-mobile > .column.is-two-fifths {
    flex: none;
    width: 40%;
  }
  .columns.is-mobile > .column.is-three-fifths {
    flex: none;
    width: 60%;
  }
  .columns.is-mobile > .column.is-four-fifths {
    flex: none;
    width: 80%;
  }
  .columns.is-mobile > .column.is-offset-three-quarters {
    margin-left: 75%;
  }
  .columns.is-mobile > .column.is-offset-two-thirds {
    margin-left: 66.6666%;
  }
  .columns.is-mobile > .column.is-offset-half {
    margin-left: 50%;
  }
  .columns.is-mobile > .column.is-offset-one-third {
    margin-left: 33.3333%;
  }
  .columns.is-mobile > .column.is-offset-one-quarter {
    margin-left: 25%;
  }
  .columns.is-mobile > .column.is-offset-one-fifth {
    margin-left: 20%;
  }
  .columns.is-mobile > .column.is-offset-two-fifths {
    margin-left: 40%;
  }
  .columns.is-mobile > .column.is-offset-three-fifths {
    margin-left: 60%;
  }
  .columns.is-mobile > .column.is-offset-four-fifths {
    margin-left: 80%;
  }
  .columns.is-mobile > .column.is-0 {
    flex: none;
    width: 0%;
  }
  .columns.is-mobile > .column.is-offset-0 {
    margin-left: 0%;
  }
  .columns.is-mobile > .column.is-1 {
    flex: none;
    width: 8.3333333333%;
  }
  .columns.is-mobile > .column.is-offset-1 {
    margin-left: 8.3333333333%;
  }
  .columns.is-mobile > .column.is-2 {
    flex: none;
    width: 16.6666666667%;
  }
  .columns.is-mobile > .column.is-offset-2 {
    margin-left: 16.6666666667%;
  }
  .columns.is-mobile > .column.is-3 {
    flex: none;
    width: 25%;
  }
  .columns.is-mobile > .column.is-offset-3 {
    margin-left: 25%;
  }
  .columns.is-mobile > .column.is-4 {
    flex: none;
    width: 33.3333333333%;
  }
  .columns.is-mobile > .column.is-offset-4 {
    margin-left: 33.3333333333%;
  }
  .columns.is-mobile > .column.is-5 {
    flex: none;
    width: 41.6666666667%;
  }
  .columns.is-mobile > .column.is-offset-5 {
    margin-left: 41.6666666667%;
  }
  .columns.is-mobile > .column.is-6 {
    flex: none;
    width: 50%;
  }
  .columns.is-mobile > .column.is-offset-6 {
    margin-left: 50%;
  }
  .columns.is-mobile > .column.is-7 {
    flex: none;
    width: 58.3333333333%;
  }
  .columns.is-mobile > .column.is-offset-7 {
    margin-left: 58.3333333333%;
  }
  .columns.is-mobile > .column.is-8 {
    flex: none;
    width: 66.6666666667%;
  }
  .columns.is-mobile > .column.is-offset-8 {
    margin-left: 66.6666666667%;
  }
  .columns.is-mobile > .column.is-9 {
    flex: none;
    width: 75%;
  }
  .columns.is-mobile > .column.is-offset-9 {
    margin-left: 75%;
  }
  .columns.is-mobile > .column.is-10 {
    flex: none;
    width: 83.3333333333%;
  }
  .columns.is-mobile > .column.is-offset-10 {
    margin-left: 83.3333333333%;
  }
  .columns.is-mobile > .column.is-11 {
    flex: none;
    width: 91.6666666667%;
  }
  .columns.is-mobile > .column.is-offset-11 {
    margin-left: 91.6666666667%;
  }
  .columns.is-mobile > .column.is-12 {
    flex: none;
    width: 100%;
  }
  .columns.is-mobile > .column.is-offset-12 {
    margin-left: 100%;
  }
  @media screen and (max-width: 768px) {
    .column.is-narrow-mobile {
      flex: none;
    }
    .column.is-full-mobile {
      flex: none;
      width: 100%;
    }
    .column.is-three-quarters-mobile {
      flex: none;
      width: 75%;
    }
    .column.is-two-thirds-mobile {
      flex: none;
      width: 66.6666%;
    }
    .column.is-half-mobile {
      flex: none;
      width: 50%;
    }
    .column.is-one-third-mobile {
      flex: none;
      width: 33.3333%;
    }
    .column.is-one-quarter-mobile {
      flex: none;
      width: 25%;
    }
    .column.is-one-fifth-mobile {
      flex: none;
      width: 20%;
    }
    .column.is-two-fifths-mobile {
      flex: none;
      width: 40%;
    }
    .column.is-three-fifths-mobile {
      flex: none;
      width: 60%;
    }
    .column.is-four-fifths-mobile {
      flex: none;
      width: 80%;
    }
    .column.is-offset-three-quarters-mobile {
      margin-left: 75%;
    }
    .column.is-offset-two-thirds-mobile {
      margin-left: 66.6666%;
    }
    .column.is-offset-half-mobile {
      margin-left: 50%;
    }
    .column.is-offset-one-third-mobile {
      margin-left: 33.3333%;
    }
    .column.is-offset-one-quarter-mobile {
      margin-left: 25%;
    }
    .column.is-offset-one-fifth-mobile {
      margin-left: 20%;
    }
    .column.is-offset-two-fifths-mobile {
      margin-left: 40%;
    }
    .column.is-offset-three-fifths-mobile {
      margin-left: 60%;
    }
    .column.is-offset-four-fifths-mobile {
      margin-left: 80%;
    }
    .column.is-0-mobile {
      flex: none;
      width: 0%;
    }
    .column.is-offset-0-mobile {
      margin-left: 0%;
    }
    .column.is-1-mobile {
      flex: none;
      width: 8.3333333333%;
    }
    .column.is-offset-1-mobile {
      margin-left: 8.3333333333%;
    }
    .column.is-2-mobile {
      flex: none;
      width: 16.6666666667%;
    }
    .column.is-offset-2-mobile {
      margin-left: 16.6666666667%;
    }
    .column.is-3-mobile {
      flex: none;
      width: 25%;
    }
    .column.is-offset-3-mobile {
      margin-left: 25%;
    }
    .column.is-4-mobile {
      flex: none;
      width: 33.3333333333%;
    }
    .column.is-offset-4-mobile {
      margin-left: 33.3333333333%;
    }
    .column.is-5-mobile {
      flex: none;
      width: 41.6666666667%;
    }
    .column.is-offset-5-mobile {
      margin-left: 41.6666666667%;
    }
    .column.is-6-mobile {
      flex: none;
      width: 50%;
    }
    .column.is-offset-6-mobile {
      margin-left: 50%;
    }
    .column.is-7-mobile {
      flex: none;
      width: 58.3333333333%;
    }
    .column.is-offset-7-mobile {
      margin-left: 58.3333333333%;
    }
    .column.is-8-mobile {
      flex: none;
      width: 66.6666666667%;
    }
    .column.is-offset-8-mobile {
      margin-left: 66.6666666667%;
    }
    .column.is-9-mobile {
      flex: none;
      width: 75%;
    }
    .column.is-offset-9-mobile {
      margin-left: 75%;
    }
    .column.is-10-mobile {
      flex: none;
      width: 83.3333333333%;
    }
    .column.is-offset-10-mobile {
      margin-left: 83.3333333333%;
    }
    .column.is-11-mobile {
      flex: none;
      width: 91.6666666667%;
    }
    .column.is-offset-11-mobile {
      margin-left: 91.6666666667%;
    }
    .column.is-12-mobile {
      flex: none;
      width: 100%;
    }
    .column.is-offset-12-mobile {
      margin-left: 100%;
    }
  }
  @media screen and (min-width: 769px), print {
    .column.is-narrow, .column.is-narrow-tablet {
      flex: none;
    }
    .column.is-full, .column.is-full-tablet {
      flex: none;
      width: 100%;
    }
    .column.is-three-quarters, .column.is-three-quarters-tablet {
      flex: none;
      width: 75%;
    }
    .column.is-two-thirds, .column.is-two-thirds-tablet {
      flex: none;
      width: 66.6666%;
    }
    .column.is-half, .column.is-half-tablet {
      flex: none;
      width: 50%;
    }
    .column.is-one-third, .column.is-one-third-tablet {
      flex: none;
      width: 33.3333%;
    }
    .column.is-one-quarter, .column.is-one-quarter-tablet {
      flex: none;
      width: 25%;
    }
    .column.is-one-fifth, .column.is-one-fifth-tablet {
      flex: none;
      width: 20%;
    }
    .column.is-two-fifths, .column.is-two-fifths-tablet {
      flex: none;
      width: 40%;
    }
    .column.is-three-fifths, .column.is-three-fifths-tablet {
      flex: none;
      width: 60%;
    }
    .column.is-four-fifths, .column.is-four-fifths-tablet {
      flex: none;
      width: 80%;
    }
    .column.is-offset-three-quarters, .column.is-offset-three-quarters-tablet {
      margin-left: 75%;
    }
    .column.is-offset-two-thirds, .column.is-offset-two-thirds-tablet {
      margin-left: 66.6666%;
    }
    .column.is-offset-half, .column.is-offset-half-tablet {
      margin-left: 50%;
    }
    .column.is-offset-one-third, .column.is-offset-one-third-tablet {
      margin-left: 33.3333%;
    }
    .column.is-offset-one-quarter, .column.is-offset-one-quarter-tablet {
      margin-left: 25%;
    }
    .column.is-offset-one-fifth, .column.is-offset-one-fifth-tablet {
      margin-left: 20%;
    }
    .column.is-offset-two-fifths, .column.is-offset-two-fifths-tablet {
      margin-left: 40%;
    }
    .column.is-offset-three-fifths, .column.is-offset-three-fifths-tablet {
      margin-left: 60%;
    }
    .column.is-offset-four-fifths, .column.is-offset-four-fifths-tablet {
      margin-left: 80%;
    }
    .column.is-0, .column.is-0-tablet {
      flex: none;
      width: 0%;
    }
    .column.is-offset-0, .column.is-offset-0-tablet {
      margin-left: 0%;
    }
    .column.is-1, .column.is-1-tablet {
      flex: none;
      width: 8.3333333333%;
    }
    .column.is-offset-1, .column.is-offset-1-tablet {
      margin-left: 8.3333333333%;
    }
    .column.is-2, .column.is-2-tablet {
      flex: none;
      width: 16.6666666667%;
    }
    .column.is-offset-2, .column.is-offset-2-tablet {
      margin-left: 16.6666666667%;
    }
    .column.is-3, .column.is-3-tablet {
      flex: none;
      width: 25%;
    }
    .column.is-offset-3, .column.is-offset-3-tablet {
      margin-left: 25%;
    }
    .column.is-4, .column.is-4-tablet {
      flex: none;
      width: 33.3333333333%;
    }
    .column.is-offset-4, .column.is-offset-4-tablet {
      margin-left: 33.3333333333%;
    }
    .column.is-5, .column.is-5-tablet {
      flex: none;
      width: 41.6666666667%;
    }
    .column.is-offset-5, .column.is-offset-5-tablet {
      margin-left: 41.6666666667%;
    }
    .column.is-6, .column.is-6-tablet {
      flex: none;
      width: 50%;
    }
    .column.is-offset-6, .column.is-offset-6-tablet {
      margin-left: 50%;
    }
    .column.is-7, .column.is-7-tablet {
      flex: none;
      width: 58.3333333333%;
    }
    .column.is-offset-7, .column.is-offset-7-tablet {
      margin-left: 58.3333333333%;
    }
    .column.is-8, .column.is-8-tablet {
      flex: none;
      width: 66.6666666667%;
    }
    .column.is-offset-8, .column.is-offset-8-tablet {
      margin-left: 66.6666666667%;
    }
    .column.is-9, .column.is-9-tablet {
      flex: none;
      width: 75%;
    }
    .column.is-offset-9, .column.is-offset-9-tablet {
      margin-left: 75%;
    }
    .column.is-10, .column.is-10-tablet {
      flex: none;
      width: 83.3333333333%;
    }
    .column.is-offset-10, .column.is-offset-10-tablet {
      margin-left: 83.3333333333%;
    }
    .column.is-11, .column.is-11-tablet {
      flex: none;
      width: 91.6666666667%;
    }
    .column.is-offset-11, .column.is-offset-11-tablet {
      margin-left: 91.6666666667%;
    }
    .column.is-12, .column.is-12-tablet {
      flex: none;
      width: 100%;
    }
    .column.is-offset-12, .column.is-offset-12-tablet {
      margin-left: 100%;
    }
  }
  @media screen and (max-width: 1023px) {
    .column.is-narrow-touch {
      flex: none;
    }
    .column.is-full-touch {
      flex: none;
      width: 100%;
    }
    .column.is-three-quarters-touch {
      flex: none;
      width: 75%;
    }
    .column.is-two-thirds-touch {
      flex: none;
      width: 66.6666%;
    }
    .column.is-half-touch {
      flex: none;
      width: 50%;
    }
    .column.is-one-third-touch {
      flex: none;
      width: 33.3333%;
    }
    .column.is-one-quarter-touch {
      flex: none;
      width: 25%;
    }
    .column.is-one-fifth-touch {
      flex: none;
      width: 20%;
    }
    .column.is-two-fifths-touch {
      flex: none;
      width: 40%;
    }
    .column.is-three-fifths-touch {
      flex: none;
      width: 60%;
    }
    .column.is-four-fifths-touch {
      flex: none;
      width: 80%;
    }
    .column.is-offset-three-quarters-touch {
      margin-left: 75%;
    }
    .column.is-offset-two-thirds-touch {
      margin-left: 66.6666%;
    }
    .column.is-offset-half-touch {
      margin-left: 50%;
    }
    .column.is-offset-one-third-touch {
      margin-left: 33.3333%;
    }
    .column.is-offset-one-quarter-touch {
      margin-left: 25%;
    }
    .column.is-offset-one-fifth-touch {
      margin-left: 20%;
    }
    .column.is-offset-two-fifths-touch {
      margin-left: 40%;
    }
    .column.is-offset-three-fifths-touch {
      margin-left: 60%;
    }
    .column.is-offset-four-fifths-touch {
      margin-left: 80%;
    }
    .column.is-0-touch {
      flex: none;
      width: 0%;
    }
    .column.is-offset-0-touch {
      margin-left: 0%;
    }
    .column.is-1-touch {
      flex: none;
      width: 8.3333333333%;
    }
    .column.is-offset-1-touch {
      margin-left: 8.3333333333%;
    }
    .column.is-2-touch {
      flex: none;
      width: 16.6666666667%;
    }
    .column.is-offset-2-touch {
      margin-left: 16.6666666667%;
    }
    .column.is-3-touch {
      flex: none;
      width: 25%;
    }
    .column.is-offset-3-touch {
      margin-left: 25%;
    }
    .column.is-4-touch {
      flex: none;
      width: 33.3333333333%;
    }
    .column.is-offset-4-touch {
      margin-left: 33.3333333333%;
    }
    .column.is-5-touch {
      flex: none;
      width: 41.6666666667%;
    }
    .column.is-offset-5-touch {
      margin-left: 41.6666666667%;
    }
    .column.is-6-touch {
      flex: none;
      width: 50%;
    }
    .column.is-offset-6-touch {
      margin-left: 50%;
    }
    .column.is-7-touch {
      flex: none;
      width: 58.3333333333%;
    }
    .column.is-offset-7-touch {
      margin-left: 58.3333333333%;
    }
    .column.is-8-touch {
      flex: none;
      width: 66.6666666667%;
    }
    .column.is-offset-8-touch {
      margin-left: 66.6666666667%;
    }
    .column.is-9-touch {
      flex: none;
      width: 75%;
    }
    .column.is-offset-9-touch {
      margin-left: 75%;
    }
    .column.is-10-touch {
      flex: none;
      width: 83.3333333333%;
    }
    .column.is-offset-10-touch {
      margin-left: 83.3333333333%;
    }
    .column.is-11-touch {
      flex: none;
      width: 91.6666666667%;
    }
    .column.is-offset-11-touch {
      margin-left: 91.6666666667%;
    }
    .column.is-12-touch {
      flex: none;
      width: 100%;
    }
    .column.is-offset-12-touch {
      margin-left: 100%;
    }
  }
  @media screen and (min-width: 1024px) {
    .column.is-narrow-desktop {
      flex: none;
    }
    .column.is-full-desktop {
      flex: none;
      width: 100%;
    }
    .column.is-three-quarters-desktop {
      flex: none;
      width: 75%;
    }
    .column.is-two-thirds-desktop {
      flex: none;
      width: 66.6666%;
    }
    .column.is-half-desktop {
      flex: none;
      width: 50%;
    }
    .column.is-one-third-desktop {
      flex: none;
      width: 33.3333%;
    }
    .column.is-one-quarter-desktop {
      flex: none;
      width: 25%;
    }
    .column.is-one-fifth-desktop {
      flex: none;
      width: 20%;
    }
    .column.is-two-fifths-desktop {
      flex: none;
      width: 40%;
    }
    .column.is-three-fifths-desktop {
      flex: none;
      width: 60%;
    }
    .column.is-four-fifths-desktop {
      flex: none;
      width: 80%;
    }
    .column.is-offset-three-quarters-desktop {
      margin-left: 75%;
    }
    .column.is-offset-two-thirds-desktop {
      margin-left: 66.6666%;
    }
    .column.is-offset-half-desktop {
      margin-left: 50%;
    }
    .column.is-offset-one-third-desktop {
      margin-left: 33.3333%;
    }
    .column.is-offset-one-quarter-desktop {
      margin-left: 25%;
    }
    .column.is-offset-one-fifth-desktop {
      margin-left: 20%;
    }
    .column.is-offset-two-fifths-desktop {
      margin-left: 40%;
    }
    .column.is-offset-three-fifths-desktop {
      margin-left: 60%;
    }
    .column.is-offset-four-fifths-desktop {
      margin-left: 80%;
    }
    .column.is-0-desktop {
      flex: none;
      width: 0%;
    }
    .column.is-offset-0-desktop {
      margin-left: 0%;
    }
    .column.is-1-desktop {
      flex: none;
      width: 8.3333333333%;
    }
    .column.is-offset-1-desktop {
      margin-left: 8.3333333333%;
    }
    .column.is-2-desktop {
      flex: none;
      width: 16.6666666667%;
    }
    .column.is-offset-2-desktop {
      margin-left: 16.6666666667%;
    }
    .column.is-3-desktop {
      flex: none;
      width: 25%;
    }
    .column.is-offset-3-desktop {
      margin-left: 25%;
    }
    .column.is-4-desktop {
      flex: none;
      width: 33.3333333333%;
    }
    .column.is-offset-4-desktop {
      margin-left: 33.3333333333%;
    }
    .column.is-5-desktop {
      flex: none;
      width: 41.6666666667%;
    }
    .column.is-offset-5-desktop {
      margin-left: 41.6666666667%;
    }
    .column.is-6-desktop {
      flex: none;
      width: 50%;
    }
    .column.is-offset-6-desktop {
      margin-left: 50%;
    }
    .column.is-7-desktop {
      flex: none;
      width: 58.3333333333%;
    }
    .column.is-offset-7-desktop {
      margin-left: 58.3333333333%;
    }
    .column.is-8-desktop {
      flex: none;
      width: 66.6666666667%;
    }
    .column.is-offset-8-desktop {
      margin-left: 66.6666666667%;
    }
    .column.is-9-desktop {
      flex: none;
      width: 75%;
    }
    .column.is-offset-9-desktop {
      margin-left: 75%;
    }
    .column.is-10-desktop {
      flex: none;
      width: 83.3333333333%;
    }
    .column.is-offset-10-desktop {
      margin-left: 83.3333333333%;
    }
    .column.is-11-desktop {
      flex: none;
      width: 91.6666666667%;
    }
    .column.is-offset-11-desktop {
      margin-left: 91.6666666667%;
    }
    .column.is-12-desktop {
      flex: none;
      width: 100%;
    }
    .column.is-offset-12-desktop {
      margin-left: 100%;
    }
  }
  @media screen and (min-width: 1216px) {
    .column.is-narrow-widescreen {
      flex: none;
    }
    .column.is-full-widescreen {
      flex: none;
      width: 100%;
    }
    .column.is-three-quarters-widescreen {
      flex: none;
      width: 75%;
    }
    .column.is-two-thirds-widescreen {
      flex: none;
      width: 66.6666%;
    }
    .column.is-half-widescreen {
      flex: none;
      width: 50%;
    }
    .column.is-one-third-widescreen {
      flex: none;
      width: 33.3333%;
    }
    .column.is-one-quarter-widescreen {
      flex: none;
      width: 25%;
    }
    .column.is-one-fifth-widescreen {
      flex: none;
      width: 20%;
    }
    .column.is-two-fifths-widescreen {
      flex: none;
      width: 40%;
    }
    .column.is-three-fifths-widescreen {
      flex: none;
      width: 60%;
    }
    .column.is-four-fifths-widescreen {
      flex: none;
      width: 80%;
    }
    .column.is-offset-three-quarters-widescreen {
      margin-left: 75%;
    }
    .column.is-offset-two-thirds-widescreen {
      margin-left: 66.6666%;
    }
    .column.is-offset-half-widescreen {
      margin-left: 50%;
    }
    .column.is-offset-one-third-widescreen {
      margin-left: 33.3333%;
    }
    .column.is-offset-one-quarter-widescreen {
      margin-left: 25%;
    }
    .column.is-offset-one-fifth-widescreen {
      margin-left: 20%;
    }
    .column.is-offset-two-fifths-widescreen {
      margin-left: 40%;
    }
    .column.is-offset-three-fifths-widescreen {
      margin-left: 60%;
    }
    .column.is-offset-four-fifths-widescreen {
      margin-left: 80%;
    }
    .column.is-0-widescreen {
      flex: none;
      width: 0%;
    }
    .column.is-offset-0-widescreen {
      margin-left: 0%;
    }
    .column.is-1-widescreen {
      flex: none;
      width: 8.3333333333%;
    }
    .column.is-offset-1-widescreen {
      margin-left: 8.3333333333%;
    }
    .column.is-2-widescreen {
      flex: none;
      width: 16.6666666667%;
    }
    .column.is-offset-2-widescreen {
      margin-left: 16.6666666667%;
    }
    .column.is-3-widescreen {
      flex: none;
      width: 25%;
    }
    .column.is-offset-3-widescreen {
      margin-left: 25%;
    }
    .column.is-4-widescreen {
      flex: none;
      width: 33.3333333333%;
    }
    .column.is-offset-4-widescreen {
      margin-left: 33.3333333333%;
    }
    .column.is-5-widescreen {
      flex: none;
      width: 41.6666666667%;
    }
    .column.is-offset-5-widescreen {
      margin-left: 41.6666666667%;
    }
    .column.is-6-widescreen {
      flex: none;
      width: 50%;
    }
    .column.is-offset-6-widescreen {
      margin-left: 50%;
    }
    .column.is-7-widescreen {
      flex: none;
      width: 58.3333333333%;
    }
    .column.is-offset-7-widescreen {
      margin-left: 58.3333333333%;
    }
    .column.is-8-widescreen {
      flex: none;
      width: 66.6666666667%;
    }
    .column.is-offset-8-widescreen {
      margin-left: 66.6666666667%;
    }
    .column.is-9-widescreen {
      flex: none;
      width: 75%;
    }
    .column.is-offset-9-widescreen {
      margin-left: 75%;
    }
    .column.is-10-widescreen {
      flex: none;
      width: 83.3333333333%;
    }
    .column.is-offset-10-widescreen {
      margin-left: 83.3333333333%;
    }
    .column.is-11-widescreen {
      flex: none;
      width: 91.6666666667%;
    }
    .column.is-offset-11-widescreen {
      margin-left: 91.6666666667%;
    }
    .column.is-12-widescreen {
      flex: none;
      width: 100%;
    }
    .column.is-offset-12-widescreen {
      margin-left: 100%;
    }
  }
  @media screen and (min-width: 1408px) {
    .column.is-narrow-fullhd {
      flex: none;
    }
    .column.is-full-fullhd {
      flex: none;
      width: 100%;
    }
    .column.is-three-quarters-fullhd {
      flex: none;
      width: 75%;
    }
    .column.is-two-thirds-fullhd {
      flex: none;
      width: 66.6666%;
    }
    .column.is-half-fullhd {
      flex: none;
      width: 50%;
    }
    .column.is-one-third-fullhd {
      flex: none;
      width: 33.3333%;
    }
    .column.is-one-quarter-fullhd {
      flex: none;
      width: 25%;
    }
    .column.is-one-fifth-fullhd {
      flex: none;
      width: 20%;
    }
    .column.is-two-fifths-fullhd {
      flex: none;
      width: 40%;
    }
    .column.is-three-fifths-fullhd {
      flex: none;
      width: 60%;
    }
    .column.is-four-fifths-fullhd {
      flex: none;
      width: 80%;
    }
    .column.is-offset-three-quarters-fullhd {
      margin-left: 75%;
    }
    .column.is-offset-two-thirds-fullhd {
      margin-left: 66.6666%;
    }
    .column.is-offset-half-fullhd {
      margin-left: 50%;
    }
    .column.is-offset-one-third-fullhd {
      margin-left: 33.3333%;
    }
    .column.is-offset-one-quarter-fullhd {
      margin-left: 25%;
    }
    .column.is-offset-one-fifth-fullhd {
      margin-left: 20%;
    }
    .column.is-offset-two-fifths-fullhd {
      margin-left: 40%;
    }
    .column.is-offset-three-fifths-fullhd {
      margin-left: 60%;
    }
    .column.is-offset-four-fifths-fullhd {
      margin-left: 80%;
    }
    .column.is-0-fullhd {
      flex: none;
      width: 0%;
    }
    .column.is-offset-0-fullhd {
      margin-left: 0%;
    }
    .column.is-1-fullhd {
      flex: none;
      width: 8.3333333333%;
    }
    .column.is-offset-1-fullhd {
      margin-left: 8.3333333333%;
    }
    .column.is-2-fullhd {
      flex: none;
      width: 16.6666666667%;
    }
    .column.is-offset-2-fullhd {
      margin-left: 16.6666666667%;
    }
    .column.is-3-fullhd {
      flex: none;
      width: 25%;
    }
    .column.is-offset-3-fullhd {
      margin-left: 25%;
    }
    .column.is-4-fullhd {
      flex: none;
      width: 33.3333333333%;
    }
    .column.is-offset-4-fullhd {
      margin-left: 33.3333333333%;
    }
    .column.is-5-fullhd {
      flex: none;
      width: 41.6666666667%;
    }
    .column.is-offset-5-fullhd {
      margin-left: 41.6666666667%;
    }
    .column.is-6-fullhd {
      flex: none;
      width: 50%;
    }
    .column.is-offset-6-fullhd {
      margin-left: 50%;
    }
    .column.is-7-fullhd {
      flex: none;
      width: 58.3333333333%;
    }
    .column.is-offset-7-fullhd {
      margin-left: 58.3333333333%;
    }
    .column.is-8-fullhd {
      flex: none;
      width: 66.6666666667%;
    }
    .column.is-offset-8-fullhd {
      margin-left: 66.6666666667%;
    }
    .column.is-9-fullhd {
      flex: none;
      width: 75%;
    }
    .column.is-offset-9-fullhd {
      margin-left: 75%;
    }
    .column.is-10-fullhd {
      flex: none;
      width: 83.3333333333%;
    }
    .column.is-offset-10-fullhd {
      margin-left: 83.3333333333%;
    }
    .column.is-11-fullhd {
      flex: none;
      width: 91.6666666667%;
    }
    .column.is-offset-11-fullhd {
      margin-left: 91.6666666667%;
    }
    .column.is-12-fullhd {
      flex: none;
      width: 100%;
    }
    .column.is-offset-12-fullhd {
      margin-left: 100%;
    }
  }
  
  .columns {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
    margin-top: -0.75rem;
  }
  .columns:last-child {
    margin-bottom: -0.75rem;
  }
  .columns:not(:last-child) {
    margin-bottom: calc(1.5rem - 0.75rem);
  }
  .columns.is-centered {
    justify-content: center;
  }
  .columns.is-gapless {
    margin-left: 0;
    margin-right: 0;
    margin-top: 0;
  }
  .columns.is-gapless > .column {
    margin: 0;
    padding: 0 !important;
  }
  .columns.is-gapless:not(:last-child) {
    margin-bottom: 1.5rem;
  }
  .columns.is-gapless:last-child {
    margin-bottom: 0;
  }
  .columns.is-mobile {
    display: flex;
  }
  .columns.is-multiline {
    flex-wrap: wrap;
  }
  .columns.is-vcentered {
    align-items: center;
  }
  @media screen and (min-width: 769px), print {
    .columns:not(.is-desktop) {
      display: flex;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-desktop {
      display: flex;
    }
  }
  
  .columns.is-variable {
    --columnGap: 0.75rem;
    margin-left: calc(-1 * var(--columnGap));
    margin-right: calc(-1 * var(--columnGap));
  }
  .columns.is-variable .column {
    padding-left: var(--columnGap);
    padding-right: var(--columnGap);
  }
  .columns.is-variable.is-0 {
    --columnGap: 0rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-0-mobile {
      --columnGap: 0rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-0-tablet {
      --columnGap: 0rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-0-tablet-only {
      --columnGap: 0rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-0-touch {
      --columnGap: 0rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-0-desktop {
      --columnGap: 0rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-0-desktop-only {
      --columnGap: 0rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-0-widescreen {
      --columnGap: 0rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-0-widescreen-only {
      --columnGap: 0rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-0-fullhd {
      --columnGap: 0rem;
    }
  }
  .columns.is-variable.is-1 {
    --columnGap: 0.25rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-1-mobile {
      --columnGap: 0.25rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-1-tablet {
      --columnGap: 0.25rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-1-tablet-only {
      --columnGap: 0.25rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-1-touch {
      --columnGap: 0.25rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-1-desktop {
      --columnGap: 0.25rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-1-desktop-only {
      --columnGap: 0.25rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-1-widescreen {
      --columnGap: 0.25rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-1-widescreen-only {
      --columnGap: 0.25rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-1-fullhd {
      --columnGap: 0.25rem;
    }
  }
  .columns.is-variable.is-2 {
    --columnGap: 0.5rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-2-mobile {
      --columnGap: 0.5rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-2-tablet {
      --columnGap: 0.5rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-2-tablet-only {
      --columnGap: 0.5rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-2-touch {
      --columnGap: 0.5rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-2-desktop {
      --columnGap: 0.5rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-2-desktop-only {
      --columnGap: 0.5rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-2-widescreen {
      --columnGap: 0.5rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-2-widescreen-only {
      --columnGap: 0.5rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-2-fullhd {
      --columnGap: 0.5rem;
    }
  }
  .columns.is-variable.is-3 {
    --columnGap: 0.75rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-3-mobile {
      --columnGap: 0.75rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-3-tablet {
      --columnGap: 0.75rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-3-tablet-only {
      --columnGap: 0.75rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-3-touch {
      --columnGap: 0.75rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-3-desktop {
      --columnGap: 0.75rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-3-desktop-only {
      --columnGap: 0.75rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-3-widescreen {
      --columnGap: 0.75rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-3-widescreen-only {
      --columnGap: 0.75rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-3-fullhd {
      --columnGap: 0.75rem;
    }
  }
  .columns.is-variable.is-4 {
    --columnGap: 1rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-4-mobile {
      --columnGap: 1rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-4-tablet {
      --columnGap: 1rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-4-tablet-only {
      --columnGap: 1rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-4-touch {
      --columnGap: 1rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-4-desktop {
      --columnGap: 1rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-4-desktop-only {
      --columnGap: 1rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-4-widescreen {
      --columnGap: 1rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-4-widescreen-only {
      --columnGap: 1rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-4-fullhd {
      --columnGap: 1rem;
    }
  }
  .columns.is-variable.is-5 {
    --columnGap: 1.25rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-5-mobile {
      --columnGap: 1.25rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-5-tablet {
      --columnGap: 1.25rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-5-tablet-only {
      --columnGap: 1.25rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-5-touch {
      --columnGap: 1.25rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-5-desktop {
      --columnGap: 1.25rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-5-desktop-only {
      --columnGap: 1.25rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-5-widescreen {
      --columnGap: 1.25rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-5-widescreen-only {
      --columnGap: 1.25rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-5-fullhd {
      --columnGap: 1.25rem;
    }
  }
  .columns.is-variable.is-6 {
    --columnGap: 1.5rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-6-mobile {
      --columnGap: 1.5rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-6-tablet {
      --columnGap: 1.5rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-6-tablet-only {
      --columnGap: 1.5rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-6-touch {
      --columnGap: 1.5rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-6-desktop {
      --columnGap: 1.5rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-6-desktop-only {
      --columnGap: 1.5rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-6-widescreen {
      --columnGap: 1.5rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-6-widescreen-only {
      --columnGap: 1.5rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-6-fullhd {
      --columnGap: 1.5rem;
    }
  }
  .columns.is-variable.is-7 {
    --columnGap: 1.75rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-7-mobile {
      --columnGap: 1.75rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-7-tablet {
      --columnGap: 1.75rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-7-tablet-only {
      --columnGap: 1.75rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-7-touch {
      --columnGap: 1.75rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-7-desktop {
      --columnGap: 1.75rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-7-desktop-only {
      --columnGap: 1.75rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-7-widescreen {
      --columnGap: 1.75rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-7-widescreen-only {
      --columnGap: 1.75rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-7-fullhd {
      --columnGap: 1.75rem;
    }
  }
  .columns.is-variable.is-8 {
    --columnGap: 2rem;
  }
  @media screen and (max-width: 768px) {
    .columns.is-variable.is-8-mobile {
      --columnGap: 2rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .columns.is-variable.is-8-tablet {
      --columnGap: 2rem;
    }
  }
  @media screen and (min-width: 769px) and (max-width: 1023px) {
    .columns.is-variable.is-8-tablet-only {
      --columnGap: 2rem;
    }
  }
  @media screen and (max-width: 1023px) {
    .columns.is-variable.is-8-touch {
      --columnGap: 2rem;
    }
  }
  @media screen and (min-width: 1024px) {
    .columns.is-variable.is-8-desktop {
      --columnGap: 2rem;
    }
  }
  @media screen and (min-width: 1024px) and (max-width: 1215px) {
    .columns.is-variable.is-8-desktop-only {
      --columnGap: 2rem;
    }
  }
  @media screen and (min-width: 1216px) {
    .columns.is-variable.is-8-widescreen {
      --columnGap: 2rem;
    }
  }
  @media screen and (min-width: 1216px) and (max-width: 1407px) {
    .columns.is-variable.is-8-widescreen-only {
      --columnGap: 2rem;
    }
  }
  @media screen and (min-width: 1408px) {
    .columns.is-variable.is-8-fullhd {
      --columnGap: 2rem;
    }
  }
  
  .tile {
    align-items: stretch;
    display: block;
    flex-basis: 0;
    flex-grow: 1;
    flex-shrink: 1;
    min-height: min-content;
  }
  .tile.is-ancestor {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
    margin-top: -0.75rem;
  }
  .tile.is-ancestor:last-child {
    margin-bottom: -0.75rem;
  }
  .tile.is-ancestor:not(:last-child) {
    margin-bottom: 0.75rem;
  }
  .tile.is-child {
    margin: 0 !important;
  }
  .tile.is-parent {
    padding: 0.75rem;
  }
  .tile.is-vertical {
    flex-direction: column;
  }
  .tile.is-vertical > .tile.is-child:not(:last-child) {
    margin-bottom: 1.5rem !important;
  }
  @media screen and (min-width: 769px), print {
    .tile:not(.is-child) {
      display: flex;
    }
    .tile.is-1 {
      flex: none;
      width: 8.3333333333%;
    }
    .tile.is-2 {
      flex: none;
      width: 16.6666666667%;
    }
    .tile.is-3 {
      flex: none;
      width: 25%;
    }
    .tile.is-4 {
      flex: none;
      width: 33.3333333333%;
    }
    .tile.is-5 {
      flex: none;
      width: 41.6666666667%;
    }
    .tile.is-6 {
      flex: none;
      width: 50%;
    }
    .tile.is-7 {
      flex: none;
      width: 58.3333333333%;
    }
    .tile.is-8 {
      flex: none;
      width: 66.6666666667%;
    }
    .tile.is-9 {
      flex: none;
      width: 75%;
    }
    .tile.is-10 {
      flex: none;
      width: 83.3333333333%;
    }
    .tile.is-11 {
      flex: none;
      width: 91.6666666667%;
    }
    .tile.is-12 {
      flex: none;
      width: 100%;
    }
  }
  
  .hero {
    align-items: stretch;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .hero .navbar {
    background: none;
  }
  .hero .tabs ul {
    border-bottom: none;
  }
  .hero.is-white {
    background-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .hero.is-white a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-white strong {
    color: inherit;
  }
  .hero.is-white .title {
    color: #0a0a0a;
  }
  .hero.is-white .subtitle {
    color: rgba(10, 10, 10, 0.9);
  }
  .hero.is-white .subtitle a:not(.button),
  .hero.is-white .subtitle strong {
    color: #0a0a0a;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-white .navbar-menu {
      background-color: ' . $colors['white'] . ';
    }
  }
  .hero.is-white .navbar-item,
  .hero.is-white .navbar-link {
    color: rgba(10, 10, 10, 0.7);
  }
  .hero.is-white a.navbar-item:hover, .hero.is-white a.navbar-item.is-active,
  .hero.is-white .navbar-link:hover,
  .hero.is-white .navbar-link.is-active {
    background-color: #f2f2f2;
    color: #0a0a0a;
  }
  .hero.is-white .tabs a {
    color: #0a0a0a;
    opacity: 0.9;
  }
  .hero.is-white .tabs a:hover {
    opacity: 1;
  }
  .hero.is-white .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-white .tabs.is-boxed a, .hero.is-white .tabs.is-toggle a {
    color: #0a0a0a;
  }
  .hero.is-white .tabs.is-boxed a:hover, .hero.is-white .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-white .tabs.is-boxed li.is-active a, .hero.is-white .tabs.is-boxed li.is-active a:hover, .hero.is-white .tabs.is-toggle li.is-active a, .hero.is-white .tabs.is-toggle li.is-active a:hover {
    background-color: #0a0a0a;
    border-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .hero.is-white.is-bold {
    background-image: linear-gradient(141deg, #e8e3e4 0%, ' . $colors['white'] . ' 71%, white 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-white.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #e8e3e4 0%, ' . $colors['white'] . ' 71%, white 100%);
    }
  }
  .hero.is-black {
    background-color: #0a0a0a;
    color: ' . $colors['white'] . ';
  }
  .hero.is-black a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-black strong {
    color: inherit;
  }
  .hero.is-black .title {
    color: ' . $colors['white'] . ';
  }
  .hero.is-black .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-black .subtitle a:not(.button),
  .hero.is-black .subtitle strong {
    color: ' . $colors['white'] . ';
  }
  @media screen and (max-width: 1023px) {
    .hero.is-black .navbar-menu {
      background-color: #0a0a0a;
    }
  }
  .hero.is-black .navbar-item,
  .hero.is-black .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-black a.navbar-item:hover, .hero.is-black a.navbar-item.is-active,
  .hero.is-black .navbar-link:hover,
  .hero.is-black .navbar-link.is-active {
    background-color: black;
    color: ' . $colors['white'] . ';
  }
  .hero.is-black .tabs a {
    color: ' . $colors['white'] . ';
    opacity: 0.9;
  }
  .hero.is-black .tabs a:hover {
    opacity: 1;
  }
  .hero.is-black .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-black .tabs.is-boxed a, .hero.is-black .tabs.is-toggle a {
    color: ' . $colors['white'] . ';
  }
  .hero.is-black .tabs.is-boxed a:hover, .hero.is-black .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-black .tabs.is-boxed li.is-active a, .hero.is-black .tabs.is-boxed li.is-active a:hover, .hero.is-black .tabs.is-toggle li.is-active a, .hero.is-black .tabs.is-toggle li.is-active a:hover {
    background-color: ' . $colors['white'] . ';
    border-color: ' . $colors['white'] . ';
    color: #0a0a0a;
  }
  .hero.is-black.is-bold {
    background-image: linear-gradient(141deg, black 0%, #0a0a0a 71%, #181616 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-black.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, black 0%, #0a0a0a 71%, #181616 100%);
    }
  }
  .hero.is-light {
    background-color: whitesmoke;
    color: #363636;
  }
  .hero.is-light a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-light strong {
    color: inherit;
  }
  .hero.is-light .title {
    color: #363636;
  }
  .hero.is-light .subtitle {
    color: rgba(54, 54, 54, 0.9);
  }
  .hero.is-light .subtitle a:not(.button),
  .hero.is-light .subtitle strong {
    color: #363636;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-light .navbar-menu {
      background-color: whitesmoke;
    }
  }
  .hero.is-light .navbar-item,
  .hero.is-light .navbar-link {
    color: rgba(54, 54, 54, 0.7);
  }
  .hero.is-light a.navbar-item:hover, .hero.is-light a.navbar-item.is-active,
  .hero.is-light .navbar-link:hover,
  .hero.is-light .navbar-link.is-active {
    background-color: #e8e8e8;
    color: #363636;
  }
  .hero.is-light .tabs a {
    color: #363636;
    opacity: 0.9;
  }
  .hero.is-light .tabs a:hover {
    opacity: 1;
  }
  .hero.is-light .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-light .tabs.is-boxed a, .hero.is-light .tabs.is-toggle a {
    color: #363636;
  }
  .hero.is-light .tabs.is-boxed a:hover, .hero.is-light .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-light .tabs.is-boxed li.is-active a, .hero.is-light .tabs.is-boxed li.is-active a:hover, .hero.is-light .tabs.is-toggle li.is-active a, .hero.is-light .tabs.is-toggle li.is-active a:hover {
    background-color: #363636;
    border-color: #363636;
    color: whitesmoke;
  }
  .hero.is-light.is-bold {
    background-image: linear-gradient(141deg, #dfd8d9 0%, whitesmoke 71%, white 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-light.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #dfd8d9 0%, whitesmoke 71%, white 100%);
    }
  }
  .hero.is-dark {
    background-color: #363636;
    color: whitesmoke;
  }
  .hero.is-dark a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-dark strong {
    color: inherit;
  }
  .hero.is-dark .title {
    color: whitesmoke;
  }
  .hero.is-dark .subtitle {
    color: rgba(245, 245, 245, 0.9);
  }
  .hero.is-dark .subtitle a:not(.button),
  .hero.is-dark .subtitle strong {
    color: whitesmoke;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-dark .navbar-menu {
      background-color: #363636;
    }
  }
  .hero.is-dark .navbar-item,
  .hero.is-dark .navbar-link {
    color: rgba(245, 245, 245, 0.7);
  }
  .hero.is-dark a.navbar-item:hover, .hero.is-dark a.navbar-item.is-active,
  .hero.is-dark .navbar-link:hover,
  .hero.is-dark .navbar-link.is-active {
    background-color: #292929;
    color: whitesmoke;
  }
  .hero.is-dark .tabs a {
    color: whitesmoke;
    opacity: 0.9;
  }
  .hero.is-dark .tabs a:hover {
    opacity: 1;
  }
  .hero.is-dark .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-dark .tabs.is-boxed a, .hero.is-dark .tabs.is-toggle a {
    color: whitesmoke;
  }
  .hero.is-dark .tabs.is-boxed a:hover, .hero.is-dark .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-dark .tabs.is-boxed li.is-active a, .hero.is-dark .tabs.is-boxed li.is-active a:hover, .hero.is-dark .tabs.is-toggle li.is-active a, .hero.is-dark .tabs.is-toggle li.is-active a:hover {
    background-color: whitesmoke;
    border-color: whitesmoke;
    color: #363636;
  }
  .hero.is-dark.is-bold {
    background-image: linear-gradient(141deg, #1f191a 0%, #363636 71%, #46403f 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-dark.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #1f191a 0%, #363636 71%, #46403f 100%);
    }
  }
  .hero.is-primary {
    background-color: ' . $colors['primary'] . ';
    color: #fff;
  }
  .hero.is-primary a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-primary strong {
    color: inherit;
  }
  .hero.is-primary .title {
    color: #fff;
  }
  .hero.is-primary .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-primary .subtitle a:not(.button),
  .hero.is-primary .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-primary .navbar-menu {
      background-color: ' . $colors['primary'] . ';
    }
  }
  .hero.is-primary .navbar-item,
  .hero.is-primary .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-primary a.navbar-item:hover, .hero.is-primary a.navbar-item.is-active,
  .hero.is-primary .navbar-link:hover,
  .hero.is-primary .navbar-link.is-active {
    background-color: #9d9d9d;
    color: #fff;
  }
  .hero.is-primary .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-primary .tabs a:hover {
    opacity: 1;
  }
  .hero.is-primary .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-primary .tabs.is-boxed a, .hero.is-primary .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-primary .tabs.is-boxed a:hover, .hero.is-primary .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-primary .tabs.is-boxed li.is-active a, .hero.is-primary .tabs.is-boxed li.is-active a:hover, .hero.is-primary .tabs.is-toggle li.is-active a, .hero.is-primary .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['primary'] . ';
  }
  .hero.is-primary.is-bold {
    background-image: linear-gradient(141deg, #9c8589 0%, ' . $colors['primary'] . ' 71%, #bab4b3 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-primary.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #9c8589 0%, ' . $colors['primary'] . ' 71%, #bab4b3 100%);
    }
  }
  .hero.is-link {
    background-color: ' . $colors['complementary'] . ';
    color: #fff;
  }
  .hero.is-link a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-link strong {
    color: inherit;
  }
  .hero.is-link .title {
    color: #fff;
  }
  .hero.is-link .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-link .subtitle a:not(.button),
  .hero.is-link .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-link .navbar-menu {
      background-color: ' . $colors['complementary'] . ';
    }
  }
  .hero.is-link .navbar-item,
  .hero.is-link .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-link a.navbar-item:hover, .hero.is-link a.navbar-item.is-active,
  .hero.is-link .navbar-link:hover,
  .hero.is-link .navbar-link.is-active {
    background-color: #bfbfbf;
    color: #fff;
  }
  .hero.is-link .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-link .tabs a:hover {
    opacity: 1;
  }
  .hero.is-link .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-link .tabs.is-boxed a, .hero.is-link .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-link .tabs.is-boxed a:hover, .hero.is-link .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-link .tabs.is-boxed li.is-active a, .hero.is-link .tabs.is-boxed li.is-active a:hover, .hero.is-link .tabs.is-toggle li.is-active a, .hero.is-link .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['complementary'] . ';
  }
  .hero.is-link.is-bold {
    background-image: linear-gradient(141deg, #baabad 0%, ' . $colors['complementary'] . ' 71%, #dbd7d7 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-link.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #baabad 0%, ' . $colors['complementary'] . ' 71%, #dbd7d7 100%);
    }
  }
  .hero.is-info {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .hero.is-info a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-info strong {
    color: inherit;
  }
  .hero.is-info .title {
    color: #fff;
  }
  .hero.is-info .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-info .subtitle a:not(.button),
  .hero.is-info .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-info .navbar-menu {
      background-color: ' . $colors['cyan'] . ';
    }
  }
  .hero.is-info .navbar-item,
  .hero.is-info .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-info a.navbar-item:hover, .hero.is-info a.navbar-item.is-active,
  .hero.is-info .navbar-link:hover,
  .hero.is-info .navbar-link.is-active {
    background-color: #4b6c70;
    color: #fff;
  }
  .hero.is-info .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-info .tabs a:hover {
    opacity: 1;
  }
  .hero.is-info .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-info .tabs.is-boxed a, .hero.is-info .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-info .tabs.is-boxed a:hover, .hero.is-info .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-info .tabs.is-boxed li.is-active a, .hero.is-info .tabs.is-boxed li.is-active a:hover, .hero.is-info .tabs.is-toggle li.is-active a, .hero.is-info .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['cyan'] . ';
  }
  .hero.is-info.is-bold {
    background-image: linear-gradient(141deg, #396865 0%, ' . $colors['cyan'] . ' 71%, #598594 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-info.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #396865 0%, ' . $colors['cyan'] . ' 71%, #598594 100%);
    }
  }
  .hero.is-success {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .hero.is-success a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-success strong {
    color: inherit;
  }
  .hero.is-success .title {
    color: #fff;
  }
  .hero.is-success .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-success .subtitle a:not(.button),
  .hero.is-success .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-success .navbar-menu {
      background-color: ' . $colors['green'] . ';
    }
  }
  .hero.is-success .navbar-item,
  .hero.is-success .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-success a.navbar-item:hover, .hero.is-success a.navbar-item.is-active,
  .hero.is-success .navbar-link:hover,
  .hero.is-success .navbar-link.is-active {
    background-color: #5e9665;
    color: #fff;
  }
  .hero.is-success .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-success .tabs a:hover {
    opacity: 1;
  }
  .hero.is-success .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-success .tabs.is-boxed a, .hero.is-success .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-success .tabs.is-boxed a:hover, .hero.is-success .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-success .tabs.is-boxed li.is-active a, .hero.is-success .tabs.is-boxed li.is-active a:hover, .hero.is-success .tabs.is-toggle li.is-active a, .hero.is-success .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['green'] . ';
  }
  .hero.is-success.is-bold {
    background-image: linear-gradient(141deg, #4c9149 0%, ' . $colors['green'] . ' 71%, #75b187 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-success.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #4c9149 0%, ' . $colors['green'] . ' 71%, #75b187 100%);
    }
  }
  .hero.is-warning {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-warning a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-warning strong {
    color: inherit;
  }
  .hero.is-warning .title {
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-warning .subtitle {
    color: rgba(0, 0, 0, 0.9);
  }
  .hero.is-warning .subtitle a:not(.button),
  .hero.is-warning .subtitle strong {
    color: rgba(0, 0, 0, 0.7);
  }
  @media screen and (max-width: 1023px) {
    .hero.is-warning .navbar-menu {
      background-color: ' . $colors['yellow'] . ';
    }
  }
  .hero.is-warning .navbar-item,
  .hero.is-warning .navbar-link {
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-warning a.navbar-item:hover, .hero.is-warning a.navbar-item.is-active,
  .hero.is-warning .navbar-link:hover,
  .hero.is-warning .navbar-link.is-active {
    background-color: #cac378;
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-warning .tabs a {
    color: rgba(0, 0, 0, 0.7);
    opacity: 0.9;
  }
  .hero.is-warning .tabs a:hover {
    opacity: 1;
  }
  .hero.is-warning .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-warning .tabs.is-boxed a, .hero.is-warning .tabs.is-toggle a {
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-warning .tabs.is-boxed a:hover, .hero.is-warning .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-warning .tabs.is-boxed li.is-active a, .hero.is-warning .tabs.is-boxed li.is-active a:hover, .hero.is-warning .tabs.is-toggle li.is-active a, .hero.is-warning .tabs.is-toggle li.is-active a:hover {
    background-color: rgba(0, 0, 0, 0.7);
    border-color: rgba(0, 0, 0, 0.7);
    color: ' . $colors['yellow'] . ';
  }
  .hero.is-warning.is-bold {
    background-image: linear-gradient(141deg, #cdb15b 0%, ' . $colors['yellow'] . ' 71%, #d6dc99 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-warning.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #cdb15b 0%, ' . $colors['yellow'] . ' 71%, #d6dc99 100%);
    }
  }
  .hero.is-danger {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .hero.is-danger a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-danger strong {
    color: inherit;
  }
  .hero.is-danger .title {
    color: #fff;
  }
  .hero.is-danger .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-danger .subtitle a:not(.button),
  .hero.is-danger .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-danger .navbar-menu {
      background-color: ' . $colors['red'] . ';
    }
  }
  .hero.is-danger .navbar-item,
  .hero.is-danger .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-danger a.navbar-item:hover, .hero.is-danger a.navbar-item.is-active,
  .hero.is-danger .navbar-link:hover,
  .hero.is-danger .navbar-link.is-active {
    background-color: #ca7b78;
    color: #fff;
  }
  .hero.is-danger .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-danger .tabs a:hover {
    opacity: 1;
  }
  .hero.is-danger .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-danger .tabs.is-boxed a, .hero.is-danger .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-danger .tabs.is-boxed a:hover, .hero.is-danger .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-danger .tabs.is-boxed li.is-active a, .hero.is-danger .tabs.is-boxed li.is-active a:hover, .hero.is-danger .tabs.is-toggle li.is-active a, .hero.is-danger .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['red'] . ';
  }
  .hero.is-danger.is-bold {
    background-image: linear-gradient(141deg, #cd5b69 0%, ' . $colors['red'] . ' 71%, #dca799 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-danger.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #cd5b69 0%, ' . $colors['red'] . ' 71%, #dca799 100%);
    }
  }
  .hero.is-lightblue {
    background-color: ' . $colors['lightblue'] . ';
    color: #fff;
  }
  .hero.is-lightblue a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-lightblue strong {
    color: inherit;
  }
  .hero.is-lightblue .title {
    color: #fff;
  }
  .hero.is-lightblue .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-lightblue .subtitle a:not(.button),
  .hero.is-lightblue .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-lightblue .navbar-menu {
      background-color: ' . $colors['lightblue'] . ';
    }
  }
  .hero.is-lightblue .navbar-item,
  .hero.is-lightblue .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-lightblue a.navbar-item:hover, .hero.is-lightblue a.navbar-item.is-active,
  .hero.is-lightblue .navbar-link:hover,
  .hero.is-lightblue .navbar-link.is-active {
    background-color: #526678;
    color: #fff;
  }
  .hero.is-lightblue .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-lightblue .tabs a:hover {
    opacity: 1;
  }
  .hero.is-lightblue .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-lightblue .tabs.is-boxed a, .hero.is-lightblue .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-lightblue .tabs.is-boxed a:hover, .hero.is-lightblue .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-lightblue .tabs.is-boxed li.is-active a, .hero.is-lightblue .tabs.is-boxed li.is-active a:hover, .hero.is-lightblue .tabs.is-toggle li.is-active a, .hero.is-lightblue .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['lightblue'] . ';
  }
  .hero.is-lightblue.is-bold {
    background-image: linear-gradient(141deg, #3f6271 0%, ' . $colors['lightblue'] . ' 71%, #60769c 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-lightblue.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #3f6271 0%, ' . $colors['lightblue'] . ' 71%, #60769c 100%);
    }
  }
  .hero.is-purple {
    background-color: ' . $colors['purple'] . ';
    color: #fff;
  }
  .hero.is-purple a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-purple strong {
    color: inherit;
  }
  .hero.is-purple .title {
    color: #fff;
  }
  .hero.is-purple .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-purple .subtitle a:not(.button),
  .hero.is-purple .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-purple .navbar-menu {
      background-color: ' . $colors['purple'] . ';
    }
  }
  .hero.is-purple .navbar-item,
  .hero.is-purple .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-purple a.navbar-item:hover, .hero.is-purple a.navbar-item.is-active,
  .hero.is-purple .navbar-link:hover,
  .hero.is-purple .navbar-link.is-active {
    background-color: #69587f;
    color: #fff;
  }
  .hero.is-purple .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-purple .tabs a:hover {
    opacity: 1;
  }
  .hero.is-purple .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-purple .tabs.is-boxed a, .hero.is-purple .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-purple .tabs.is-boxed a:hover, .hero.is-purple .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-purple .tabs.is-boxed li.is-active a, .hero.is-purple .tabs.is-boxed li.is-active a:hover, .hero.is-purple .tabs.is-toggle li.is-active a, .hero.is-purple .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['purple'] . ';
  }
  .hero.is-purple.is-bold {
    background-image: linear-gradient(141deg, #524479 0%, ' . $colors['purple'] . ' 71%, #8a68a1 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-purple.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #524479 0%, ' . $colors['purple'] . ' 71%, #8a68a1 100%);
    }
  }
  .hero.is-pink {
    background-color: ' . $colors['pink'] . ';
    color: #fff;
  }
  .hero.is-pink a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-pink strong {
    color: inherit;
  }
  .hero.is-pink .title {
    color: #fff;
  }
  .hero.is-pink .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-pink .subtitle a:not(.button),
  .hero.is-pink .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-pink .navbar-menu {
      background-color: ' . $colors['pink'] . ';
    }
  }
  .hero.is-pink .navbar-item,
  .hero.is-pink .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-pink a.navbar-item:hover, .hero.is-pink a.navbar-item.is-active,
  .hero.is-pink .navbar-link:hover,
  .hero.is-pink .navbar-link.is-active {
    background-color: #ae6881;
    color: #fff;
  }
  .hero.is-pink .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-pink .tabs a:hover {
    opacity: 1;
  }
  .hero.is-pink .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-pink .tabs.is-boxed a, .hero.is-pink .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-pink .tabs.is-boxed a:hover, .hero.is-pink .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-pink .tabs.is-boxed li.is-active a, .hero.is-pink .tabs.is-boxed li.is-active a:hover, .hero.is-pink .tabs.is-toggle li.is-active a, .hero.is-pink .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['pink'] . ';
  }
  .hero.is-pink.is-bold {
    background-image: linear-gradient(141deg, #b14c81 0%, ' . $colors['pink'] . ' 71%, #c48591 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-pink.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #b14c81 0%, ' . $colors['pink'] . ' 71%, #c48591 100%);
    }
  }
  .hero.is-blue {
    background-color: ' . $colors['blue'] . ';
    color: #fff;
  }
  .hero.is-blue a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-blue strong {
    color: inherit;
  }
  .hero.is-blue .title {
    color: #fff;
  }
  .hero.is-blue .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-blue .subtitle a:not(.button),
  .hero.is-blue .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-blue .navbar-menu {
      background-color: ' . $colors['blue'] . ';
    }
  }
  .hero.is-blue .navbar-item,
  .hero.is-blue .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-blue a.navbar-item:hover, .hero.is-blue a.navbar-item.is-active,
  .hero.is-blue .navbar-link:hover,
  .hero.is-blue .navbar-link.is-active {
    background-color: #58617e;
    color: #fff;
  }
  .hero.is-blue .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-blue .tabs a:hover {
    opacity: 1;
  }
  .hero.is-blue .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-blue .tabs.is-boxed a, .hero.is-blue .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-blue .tabs.is-boxed a:hover, .hero.is-blue .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-blue .tabs.is-boxed li.is-active a, .hero.is-blue .tabs.is-boxed li.is-active a:hover, .hero.is-blue .tabs.is-toggle li.is-active a, .hero.is-blue .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['blue'] . ';
  }
  .hero.is-blue.is-bold {
    background-image: linear-gradient(141deg, #445a78 0%, ' . $colors['blue'] . ' 71%, #686da0 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-blue.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #445a78 0%, ' . $colors['blue'] . ' 71%, #686da0 100%);
    }
  }
  .hero.is-orange {
    background-color: ' . $colors['orange'] . ';
    color: #fff;
  }
  .hero.is-orange a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-orange strong {
    color: inherit;
  }
  .hero.is-orange .title {
    color: #fff;
  }
  .hero.is-orange .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-orange .subtitle a:not(.button),
  .hero.is-orange .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-orange .navbar-menu {
      background-color: ' . $colors['orange'] . ';
    }
  }
  .hero.is-orange .navbar-item,
  .hero.is-orange .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-orange a.navbar-item:hover, .hero.is-orange a.navbar-item.is-active,
  .hero.is-orange .navbar-link:hover,
  .hero.is-orange .navbar-link.is-active {
    background-color: #ca9e78;
    color: #fff;
  }
  .hero.is-orange .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-orange .tabs a:hover {
    opacity: 1;
  }
  .hero.is-orange .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-orange .tabs.is-boxed a, .hero.is-orange .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-orange .tabs.is-boxed a:hover, .hero.is-orange .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-orange .tabs.is-boxed li.is-active a, .hero.is-orange .tabs.is-boxed li.is-active a:hover, .hero.is-orange .tabs.is-toggle li.is-active a, .hero.is-orange .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['orange'] . ';
  }
  .hero.is-orange.is-bold {
    background-image: linear-gradient(141deg, #cd7d5b 0%, ' . $colors['orange'] . ' 71%, #dcc399 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-orange.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #cd7d5b 0%, ' . $colors['orange'] . ' 71%, #dcc399 100%);
    }
  }
  .hero.is-red {
    background-color: ' . $colors['red'] . ';
    color: #fff;
  }
  .hero.is-red a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-red strong {
    color: inherit;
  }
  .hero.is-red .title {
    color: #fff;
  }
  .hero.is-red .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-red .subtitle a:not(.button),
  .hero.is-red .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-red .navbar-menu {
      background-color: ' . $colors['red'] . ';
    }
  }
  .hero.is-red .navbar-item,
  .hero.is-red .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-red a.navbar-item:hover, .hero.is-red a.navbar-item.is-active,
  .hero.is-red .navbar-link:hover,
  .hero.is-red .navbar-link.is-active {
    background-color: #ca7b78;
    color: #fff;
  }
  .hero.is-red .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-red .tabs a:hover {
    opacity: 1;
  }
  .hero.is-red .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-red .tabs.is-boxed a, .hero.is-red .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-red .tabs.is-boxed a:hover, .hero.is-red .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-red .tabs.is-boxed li.is-active a, .hero.is-red .tabs.is-boxed li.is-active a:hover, .hero.is-red .tabs.is-toggle li.is-active a, .hero.is-red .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['red'] . ';
  }
  .hero.is-red.is-bold {
    background-image: linear-gradient(141deg, #cd5b69 0%, ' . $colors['red'] . ' 71%, #dca799 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-red.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #cd5b69 0%, ' . $colors['red'] . ' 71%, #dca799 100%);
    }
  }
  .hero.is-green {
    background-color: ' . $colors['green'] . ';
    color: #fff;
  }
  .hero.is-green a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-green strong {
    color: inherit;
  }
  .hero.is-green .title {
    color: #fff;
  }
  .hero.is-green .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-green .subtitle a:not(.button),
  .hero.is-green .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-green .navbar-menu {
      background-color: ' . $colors['green'] . ';
    }
  }
  .hero.is-green .navbar-item,
  .hero.is-green .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-green a.navbar-item:hover, .hero.is-green a.navbar-item.is-active,
  .hero.is-green .navbar-link:hover,
  .hero.is-green .navbar-link.is-active {
    background-color: #5e9665;
    color: #fff;
  }
  .hero.is-green .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-green .tabs a:hover {
    opacity: 1;
  }
  .hero.is-green .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-green .tabs.is-boxed a, .hero.is-green .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-green .tabs.is-boxed a:hover, .hero.is-green .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-green .tabs.is-boxed li.is-active a, .hero.is-green .tabs.is-boxed li.is-active a:hover, .hero.is-green .tabs.is-toggle li.is-active a, .hero.is-green .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['green'] . ';
  }
  .hero.is-green.is-bold {
    background-image: linear-gradient(141deg, #4c9149 0%, ' . $colors['green'] . ' 71%, #75b187 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-green.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #4c9149 0%, ' . $colors['green'] . ' 71%, #75b187 100%);
    }
  }
  .hero.is-yellow {
    background-color: ' . $colors['yellow'] . ';
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-yellow a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-yellow strong {
    color: inherit;
  }
  .hero.is-yellow .title {
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-yellow .subtitle {
    color: rgba(0, 0, 0, 0.9);
  }
  .hero.is-yellow .subtitle a:not(.button),
  .hero.is-yellow .subtitle strong {
    color: rgba(0, 0, 0, 0.7);
  }
  @media screen and (max-width: 1023px) {
    .hero.is-yellow .navbar-menu {
      background-color: ' . $colors['yellow'] . ';
    }
  }
  .hero.is-yellow .navbar-item,
  .hero.is-yellow .navbar-link {
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-yellow a.navbar-item:hover, .hero.is-yellow a.navbar-item.is-active,
  .hero.is-yellow .navbar-link:hover,
  .hero.is-yellow .navbar-link.is-active {
    background-color: #cac378;
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-yellow .tabs a {
    color: rgba(0, 0, 0, 0.7);
    opacity: 0.9;
  }
  .hero.is-yellow .tabs a:hover {
    opacity: 1;
  }
  .hero.is-yellow .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-yellow .tabs.is-boxed a, .hero.is-yellow .tabs.is-toggle a {
    color: rgba(0, 0, 0, 0.7);
  }
  .hero.is-yellow .tabs.is-boxed a:hover, .hero.is-yellow .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-yellow .tabs.is-boxed li.is-active a, .hero.is-yellow .tabs.is-boxed li.is-active a:hover, .hero.is-yellow .tabs.is-toggle li.is-active a, .hero.is-yellow .tabs.is-toggle li.is-active a:hover {
    background-color: rgba(0, 0, 0, 0.7);
    border-color: rgba(0, 0, 0, 0.7);
    color: ' . $colors['yellow'] . ';
  }
  .hero.is-yellow.is-bold {
    background-image: linear-gradient(141deg, #cdb15b 0%, ' . $colors['yellow'] . ' 71%, #d6dc99 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-yellow.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #cdb15b 0%, ' . $colors['yellow'] . ' 71%, #d6dc99 100%);
    }
  }
  .hero.is-cyan {
    background-color: ' . $colors['cyan'] . ';
    color: #fff;
  }
  .hero.is-cyan a:not(.button):not(.dropdown-item):not(.tag):not(.pagination-link.is-current),
  .hero.is-cyan strong {
    color: inherit;
  }
  .hero.is-cyan .title {
    color: #fff;
  }
  .hero.is-cyan .subtitle {
    color: rgba(255, 255, 255, 0.9);
  }
  .hero.is-cyan .subtitle a:not(.button),
  .hero.is-cyan .subtitle strong {
    color: #fff;
  }
  @media screen and (max-width: 1023px) {
    .hero.is-cyan .navbar-menu {
      background-color: ' . $colors['cyan'] . ';
    }
  }
  .hero.is-cyan .navbar-item,
  .hero.is-cyan .navbar-link {
    color: rgba(255, 255, 255, 0.7);
  }
  .hero.is-cyan a.navbar-item:hover, .hero.is-cyan a.navbar-item.is-active,
  .hero.is-cyan .navbar-link:hover,
  .hero.is-cyan .navbar-link.is-active {
    background-color: #4b6c70;
    color: #fff;
  }
  .hero.is-cyan .tabs a {
    color: #fff;
    opacity: 0.9;
  }
  .hero.is-cyan .tabs a:hover {
    opacity: 1;
  }
  .hero.is-cyan .tabs li.is-active a {
    opacity: 1;
  }
  .hero.is-cyan .tabs.is-boxed a, .hero.is-cyan .tabs.is-toggle a {
    color: #fff;
  }
  .hero.is-cyan .tabs.is-boxed a:hover, .hero.is-cyan .tabs.is-toggle a:hover {
    background-color: rgba(10, 10, 10, 0.1);
  }
  .hero.is-cyan .tabs.is-boxed li.is-active a, .hero.is-cyan .tabs.is-boxed li.is-active a:hover, .hero.is-cyan .tabs.is-toggle li.is-active a, .hero.is-cyan .tabs.is-toggle li.is-active a:hover {
    background-color: #fff;
    border-color: #fff;
    color: ' . $colors['cyan'] . ';
  }
  .hero.is-cyan.is-bold {
    background-image: linear-gradient(141deg, #396865 0%, ' . $colors['cyan'] . ' 71%, #598594 100%);
  }
  @media screen and (max-width: 768px) {
    .hero.is-cyan.is-bold .navbar-menu {
      background-image: linear-gradient(141deg, #396865 0%, ' . $colors['cyan'] . ' 71%, #598594 100%);
    }
  }
  .hero.is-small .hero-body {
    padding-bottom: 1.5rem;
    padding-top: 1.5rem;
  }
  @media screen and (min-width: 769px), print {
    .hero.is-medium .hero-body {
      padding-bottom: 9rem;
      padding-top: 9rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .hero.is-large .hero-body {
      padding-bottom: 18rem;
      padding-top: 18rem;
    }
  }
  .hero.is-halfheight .hero-body, .hero.is-fullheight .hero-body, .hero.is-fullheight-with-navbar .hero-body {
    align-items: center;
    display: flex;
  }
  .hero.is-halfheight .hero-body > .container, .hero.is-fullheight .hero-body > .container, .hero.is-fullheight-with-navbar .hero-body > .container {
    flex-grow: 1;
    flex-shrink: 1;
  }
  .hero.is-halfheight {
    min-height: 50vh;
  }
  .hero.is-fullheight {
    min-height: 100vh;
  }
  
  .hero-video {
    overflow: hidden;
  }
  .hero-video video {
    left: 50%;
    min-height: 100%;
    min-width: 100%;
    position: absolute;
    top: 50%;
    transform: translate3d(-50%, -50%, 0);
  }
  .hero-video.is-transparent {
    opacity: 0.3;
  }
  @media screen and (max-width: 768px) {
    .hero-video {
      display: none;
    }
  }
  
  .hero-buttons {
    margin-top: 1.5rem;
  }
  @media screen and (max-width: 768px) {
    .hero-buttons .button {
      display: flex;
    }
    .hero-buttons .button:not(:last-child) {
      margin-bottom: 0.75rem;
    }
  }
  @media screen and (min-width: 769px), print {
    .hero-buttons {
      display: flex;
      justify-content: center;
    }
    .hero-buttons .button:not(:last-child) {
      margin-right: 1.5rem;
    }
  }
  
  .hero-head,
  .hero-foot {
    flex-grow: 0;
    flex-shrink: 0;
  }
  
  .hero-body {
    flex-grow: 1;
    flex-shrink: 0;
    padding: 3rem 1.5rem;
  }
  
  .section {
    padding: 3rem 1.5rem;
  }
  @media screen and (min-width: 1024px) {
    .section.is-medium {
      padding: 9rem 1.5rem;
    }
    .section.is-large {
      padding: 18rem 1.5rem;
    }
  }
  
  .footer {
    background-color: ' . Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.025)) . ';
    padding: 3rem 1.5rem 6rem;
  }

  a.read-btn.button.card-footer-item.is-primary {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) .' !important;
  }

  a.read-btn.button.card-footer-item.is-primary:active,
  a.read-btn.button.card-footer-item.is-primary:focus {
    background-color: '. Color::toHexString(Color::darken(Color::get($colors['edark']), 0.025)) .' !important;
  }

  .content blockquote {
    background-color: '. $colors['edark'] .' !important;
    border-left: 5px solid '. $colors['white'] .';
  }

  .content pre {
    background-color: '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) .' !important;
  }

  .esky-author {
    border: 3px solid '. Color::toHexString(Color::lighten(Color::get($colors['edark']), 0.05)) .' !important;
  }

  div.navbar-item a:hover {
    color: '. $colors['primary'] .';
  }

  div.navbar-item a {
    color: '. $colors['white'] .';
  }
  </style>';
}
?>