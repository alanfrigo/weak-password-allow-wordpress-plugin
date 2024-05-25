# Weak Password Allow

**Weak Password Allow** é um plugin para WordPress que permite aos clientes se cadastrarem no WooCommerce utilizando senhas fracas. Este plugin ajusta a política de força de senha do WooCommerce para aceitar senhas de qualquer força.

## Informações do Plugin

- **Nome do Plugin:** Weak Password Allow
- **Versão:** 1.0.0
- **Autor:** Alan Frigo
- **Licença:** GPL-2.0+
- **URI da Licença:** http://www.gnu.org/licenses/gpl-2.0.txt

## Descrição

Por padrão, o WooCommerce exige que os clientes utilizem senhas fortes ao se cadastrarem. Este plugin ajusta a força mínima da senha para zero, permitindo que os clientes utilizem senhas fracas.

## Instalação

1. Faça o download do plugin e extraia os arquivos.
2. Faça o upload da pasta `weak-password-allow` para o diretório `/wp-content/plugins/` no seu servidor.
3. No painel administrativo do WordPress, navegue até `Plugins > Plugins instalados`.
4. Encontre o plugin "Weak Password Allow" na lista e clique em "Ativar".

## Utilização

Após a ativação do plugin, a política de força de senha do WooCommerce será ajustada automaticamente para permitir senhas fracas. Não há configurações adicionais necessárias.

## Funcionalidades

- Permite que os clientes se cadastrem utilizando senhas de qualquer força.
- Ajusta a força mínima da senha no WooCommerce para zero.

## Filtros

O plugin utiliza o filtro `woocommerce_min_password_strength` para definir a força mínima da senha. Este filtro retorna um valor inteiro que representa a força mínima da senha:

- **0**: Muito fraca
- **1**: Fraca
- **2**: Média
- **3**: Forte (padrão)

## Autor

**Alan Frigo**

- [Website](https://alanfrigo.com.br)
- [Perfil do WordPress](https://profiles.wordpress.org/alanmf)

## Licença

Este plugin está licenciado sob a licença GPL-2.0+. Para mais informações, consulte o arquivo `LICENSE` ou visite [GPL-2.0+ License](http://www.gnu.org/licenses/gpl-2.0.txt).

---

_Weak Password Allow_ © 2024 Alan Frigo. Todos os direitos reservados.
