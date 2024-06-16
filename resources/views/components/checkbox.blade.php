<style>
    .checkbox-container {
        display: inline-block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 16px;
        user-select: none;
    }

    .custom-checkbox {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: transparent;
        border: 1px solid gray;
        border-radius: 50%;
        transition: background-color 0.3s;
        box-shadow: none;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        left: 7px;
        top: 3px;
        width: 5px;
        height: 24px;
        border: solid white;
        border-width: 0 3px 3px 0;
        transform: rotate(45deg);
    }

    .custom-checkbox:checked~.checkmark {
        background-color: #2196F3;
        box-shadow: none;
    }

    .custom-checkbox:checked~.checkmark:after {
        display: block;
    }

    @keyframes checkAnim {
        0% {
            height: 0;
        }

        100% {
            height: 10px;
        }
    }

    .custom-checkbox:checked~.checkmark:after {
        animation: checkAnim 0.2s forwards;
    }
</style>
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox">
    <span class="checkmark"></span>
</label>
