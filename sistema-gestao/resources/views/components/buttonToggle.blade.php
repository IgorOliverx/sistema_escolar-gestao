<style>

    .toggle > input {
        display: none;
    }

    .toggle > label {
        position: relative;
        display: block;
        height: 20px;
        width: 44px;
        background: #898989;
        border-radius: 100px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .toggle > label:after {
        position: absolute;
        left: -2px;
        top: -3px;
        display: block;
        width: 26px;
        height: 26px;
        border-radius: 100px;
        background: black;
        box-shadow: 0px 3px 3px rgba(0,0,0,0.05);
        content: '';
        transition: all 0.3s ease;
    }
    .toggle > label:active:after {
        transform: scale(1.15, 0.85);
    }
    .toggle > input:checked ~ label {
        background: #898989;
    }
    .toggle > input:checked ~ label:after {
        left: 20px;
        background: #fff;
    }
    .toggle > input:disabled ~ label {
        background: #d5d5d5;
        pointer-events: none;
    }
    .toggle > input:disabled ~ label:after {
        background: #bcbdbc;
    }
</style>

<div class="toggle">
    <input type="checkbox" id="foo">
    <label for="foo"></label>
</div>


