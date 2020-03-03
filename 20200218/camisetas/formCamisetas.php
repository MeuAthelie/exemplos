<?php
    include "cabecalho.php";
?>
        <h1>Criar Camisetas</h1>
        <form method="post" action="instanciarCamisetas.php">
            <fieldset>
                <legend>Detalhes</legend>
                <label>Cor:
                    <input type="color" name="cor" required />
                </label><br />
                <label>Tamanho:
                    <select name="tamanho">
                        <option>PP</option>
                        <option>P</option>
                        <option>M</option>
                        <option>G</option>
                        <option>GG</option>
                    </select>
                </label><br />
                <label>Quantidade:
                    <input type="number" name="qtd" required min="0" max="100" />
                </label><br />
            </fieldset>
            <input type="submit" value="Criar Camiseta" />
        </form>
    </body>
</html>