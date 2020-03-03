<?php
    include "cabecalho.php";
?>
        <h1>Criar objeto carro</h1>
        <form method="post" action="instanciarCarro.php">
            <fieldset>
                <legend>Detalhes</legend>
                <label>Cor:
                    <input type="color" name="cor" required />
                </label><br />
                <label>Quantidade de Portas:
                    <input type="number" name="qtd_porta" required min="1" max="5" />
                </label><br />
                <label>Velocidade Máxima:
                    <input type="number" name="velocidade_max" required step="20" min="20" max="500" />
                </label><br />
            </fieldset>
            <input type="submit" value="Criar Carro" />
        </form>
    </body>
</html>