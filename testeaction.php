<?php
$senha = "senha123";
$senha_digitada = '$argon2id$v=19$m=65536,t=4,p=1$TkN2L3Z4NC9ReERqbW01Vg$p2oGey9Wbvd8Db/OTFNP1hKs2jCERyyYuTooQDi5JJ4';

$hash = password_hash($senha, PASSWORD_ARGON2ID, ['cost' => 3]);
if (password_verify($senha_digitada, $hash)) {
    echo"sim $hash";
    } else {
        echo"nao $hash";
    }

?>
<script>
const result = {}
const ook = () => axios.get(url)
                  .then(resp => resp.data)
                  .then(res => {
                    Object.assign(result, re.filter(({ id }) => id == '10')[0])
                  })

const outR = async () => {
    await ook()
    return result;
}

const result = {};

const ook = async () => {
  const resp = await axios.get(url);
  const res = resp.data;
  Object.assign(result, res.filter(({ id }) => id === '10')[0]);
};

const outR = async () => {
  await ook();
  return result;
};
</script>

