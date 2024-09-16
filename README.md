# olivas Tema WordPress

Um tema personalizado para exibição de projetos em WordPress, utilizando SASS/SCSS e o plugin JetEngine.

## Estrutura do Tema

/olivas/
|-- /assets/
| |-- /scss/
| | |-- style.scss
| |-- /css/
| | |-- style.css (gerado a partir do SASS)
|-- /template-parts/
| |-- content-projeto.php (template para exibir projetos)
| |-- archive-projeto.php
| |-- single-projeto.php
|-- functions.php
|-- style.css (gerado automaticamente)

## Pré-requisitos

- WordPress instalado
- Plugin JetEngine (para campos personalizados e post types)

## Instalação

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/meu-tema.git



2. **Ative o tema:**

    Vá para o painel do WordPress.
    Navegue até Aparência > Temas.
    Ative o tema "Meu Tema".

3. **Configuração do JetEngine:**

    Crie um novo tipo de post chamado "Projetos".
    Adicione os campos personalizados necessários, como "tipo" e "link_externo".

4. **Compilação do SASS:**

    Certifique-se de ter o SASS instalado (você pode usar npm install -g sass).

    Navegue até a pasta do tema e execute:
    bash

    sass assets/scss/style.scss assets/css/style.css --watch

Isso irá compilar o SASS sempre que você fizer alterações.