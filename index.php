<html>
    <head></head>
    <body>
        <div class="main-body">
            <h4>Select your 'Pig Latin' dialect</h4>
            <div class="controls">
                <span>Dialect for second rule: </span>
                <input type="radio" id="way" name="rule2" value="way" checked> <label for="way">Way</label>
                <input type="radio" id="yay" name="rule2" value="yay"> <label for="yay">Yay</label>
                <input type="radio" id="hay" name="rule2" value="hay"> <label for="hay">Hay</label>
                <input type="radio" id="ay" name="rule2" value="ay">   <label for="ay">Ay</label>
            </div>
            <div class="controls">
                <span>Dialect for third rule: </span>
                <input type="radio" id="without-e" name="rule3" value="without-e">   <label for="without-e">Without 'e'</label>
                <input type="radio" id="with-e" name="rule3" value="with-e" checked>   <label for="with-e">With 'e'</label>
            </div>

            <div class="text-to-translate">
                <input id="eng-text" placeholder="Enter text to translate" type="text">
            </div>
            <div class="result-text">
                <textarea id="pig-latin-text" placeholder="Pig Latin Version"></textarea>
            </div>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/site.js"></script>
        <link rel="stylesheet" href="css/site.css">
    </body>
</html>
