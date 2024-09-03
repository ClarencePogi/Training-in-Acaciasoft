<style>
    @charset "UTF-8";
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

    body {
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
        line-height: 1.42em;
        color: #A7A1AE;
        background-color: #1F2739;
    }

    h1 {
        font-size: 3em;
        font-weight: 300;
        line-height: 1em;
        text-align: center;
        color: #4DC3FA;
    }

    h2 {
        font-size: 1em;
        font-weight: 300;
        text-align: center;
        display: block;
        line-height: 1em;
        padding-bottom: 2em;
        color: #FB667A;
    }

    h2 a {
        font-weight: 700;
        text-transform: uppercase;
        color: #FB667A;
        text-decoration: none;
    }

    .blue {
        color: #185875;
    }

    .yellow {
        color: #FFF842;
    }



    @media (max-width: 800px) {

        #table td:nth-child(4),
        #table th:nth-child(4) {
            display: none;
        }
    }

    */ #registration-form {
        font-family: 'Open Sans Condensed', sans-serif;
        width: 400px;
        min-width: 250px;
        margin: 20px auto;
        position: relative;
    }

    #registration-form .fieldset {
        background-color: #d5d5d5;

        border-radius: 3px;

    }

    #registration-form legend {
        text-align: center;
        background: #364351;
        width: 100%;
        padding: 30px 0;
        border-radius: 3px 3px 0 0;
        color: white;
        font-size: 2em;
    }

    .fieldset form {
        border: 1px solid #2f2f2f;
        margin: 0 auto;
        display: block;
        width: 100%;
        padding: 30px 20px;
        box-sizing: border-box;
        border-radius: 0 0 3px 3px;
    }

    .placeholder #registration-form label {
        display: none;
    }

    .no-placeholder #registration-form label {
        margin-left: 5px;
        position: relative;
        display: block;
        color: grey;
        text-shadow: 0 1px white;
        font-weight: bold;
    }

    /* all */
    ::-webkit-input-placeholder {
        text-shadow: 1px 1px 1px white;
        font-weight: bold;
    }

    ::-moz-placeholder {
        text-shadow: 0 1px 1px white;
        font-weight: bold;
    }

    /* firefox 19+ */
    :-ms-input-placeholder {
        text-shadow: 0 1px 1px white;
        font-weight: bold;
    }

    /* ie */
    #registration-form input[type=text],
    #registration-form input[type=email],
    #registration-form input[type=number] {
        padding: 15px 20px;
        border-radius: 1px;
        margin: 5px auto;
        background-color: #f7f7f7;
        border: 1px solid silver;
        color: black;
        -webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.2);
        box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, .8);
        width: 100%;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: background-color .5s ease;
        -moz-transition: background-color .5s ease;
        -o-transition: background-color .5s ease;
        -ms-transition: background-color .5s ease;
        transition: background-color .5s ease;
    }

    .no-placeholder #registration-form input[type=text],
    .no-placeholder #registration-form input[type=email],
    .no-placeholder #registration-form input[type=number] {
        padding: 10px 20px;
    }

    #registration-form input[type=text]:active,
    #registration-form input[type=email]:active,
    #registration-form input[type=number]:active .placeholder #registration-form input[type=text]:focus {
        outline: none;
        border-color: silver;
        background-color: white;
    }

    #registration-form input[type=submit],
    #registration-form input[type=button] {
        font-family: 'Open Sans Condensed', sans-serif;
        text-transform: uppercase;
        outline: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        width: 100%;
        background-color: #5C8CA7;
        padding: 10px;
        color: white;
        border: 1px solid #3498db;
        border-radius: 3px;
        font-size: 1.5em;
        font-weight: bold;
        margin-top: 5px;
        cursor: pointer;
        position: relative;
        top: 0;
    }

    #registration-form input[type=submit]:hover,
    #registration-form input[type=button]:hover {
        background-color: #2980b9;
    }

    #registration-form input[type=submit]:active,
    #registration-form input[type=button]:hover {
        background: #5C8CA7;
    }


    .parsley-error-list {
        background-color: #C34343;
        padding: 5px 11px;
        margin: 0;
        list-style: none;
        border-radius: 0 0 3px 3px;
        margin-top: -5px;
        margin-bottom: 5px;
        color: white;
        border: 1px solid #870d0d;
        border-top: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        position: relative;
        top: -1px;
        text-shadow: 0px 1px 1px #460909;
        font-weight: 700;
        font-size: 12px;
    }

    .parsley-error {
        border-color: #870d0d !important;
        border-bottom: none;
    }

    #registration-form select {
        width: 100%;
        padding: 5px;
    }

    ::-moz-focus-inner {
        border: 0;
    }

    .modal-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        display: none;
    }

    .modal {
        height: auto;
        width: auto;
        z-index: 10;

    }

    .wrapper {
        height: 100vh;
        width: 100vw;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 15% 5% 54% 26%;
    }

    .wrapper>.search-container {
        display: grid;
        justify-items: center;
        align-content: center;
        grid-template-columns: 1fr 1fr;
    }

    .table-container {
        display: grid;
        grid-template-rows: 80% 20%;
        grid-template-columns: 1fr;
        width: 100%;
        height: 100%;
        justify-items: center;
        max-height: 100%;
        overflow-y: hidden;
    }

    .footer-table {
        display: grid;
        justify-items: center;
    }

    .pagination button {
        background-color: #323c50;
        color: white;
        box-shadow: none;
        border: none;
        padding: 1rem;
        font-weight: bolder;
    }

    .pagination button:hover {
        background-color: white;
        color: black;
    }

    #modal {
        position: absolute;
        left: 40%;
        width: 20%;
        top: 12%;
    }

    table {
        max-width: 100%;
        min-width: 60%;
        overflow-y: scroll;
        height: fit-content;
    }

    table tr:nth-child(even) {
        background-color: #72777554;
        color: black;
    }

    thead {
        color: cornflowerblue;
    }

    tr {
        min-height: 60px !important;
    }
   
    /* tr:hover {
        background-color: #fff842c9;
    } */

    table td:nth-child(odd) {
        color: #FB667A;
    }

    table td:nth-child(even) {
        color: white;
    }

    table td,
    th {
        padding: 2rem;
        
    }

    .pagination button.active-btn {
        background-color: white;
        color: black;
    }

    #searchInput {
        width: 26%;
        height: 38px;
        color: black;
        font-weight: bold;
    }
</style>