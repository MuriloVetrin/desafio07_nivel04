# desafio07_nivel04

7. Referente a **DDD**, seguir o passo a passo abaixo para a conclusão do desafio:
    1. Criar um repositório no **GitHub** chamado **desafio07_nivel04**
    2. Clonar localmente o repositório
        - OBS: Para cada task concluida, faça o commit. 
    3. Criar o **composer.json** inicial e configurar o **autoload** da **psr-4** defindo um namespace padrão para a src.
    4. Criar na raiz do projeto o **index.php** para testar as classes. Além disso, carregue o auload para facilitar os imports das classes da src.
    5. Criar a pasta **src** onde ficará os **modulos** e a camada de **dominio** para cada módulo. Por Exemplo: **Financeiro/Domain/Entity**
    6. Na src, desenvolver o módulo que vai representar a parte **Academica**. Como requisito para esse exercicio deve conter a classe **Aluno** como entidade de dominio.
        1. Coloque as seguintes propriedades: **nome, idade, cpf**
        2. Adicione as seguintes regras: **O nome pode conter no minimo 5 caracteres, idade acima de 18 e cpf com 11 digitos.**
    7. Na src, desenvolver o módulo que vai representar a **Contabilidade**. Como requisito para esse exericicio deve conter a classe **Cliente** como entidade de dominio.
        - **OBS: Para o pessoal de contabilidade, o Aluno é um Cliente.**
        1. Coloque as seguintes propriedades iniciais: **nome, idade, cpf, boletosEmAtraso, boletos**
        2. Adicione as seguintes regras dentro do dominio: **O nome pode conter no minimo 5 caracteres, idade acima de 18 e cpf com 11 digitos, buscar todos os boletos em atraso, na propriedade boletos trazer todos os boletos.**
    8. Na src, desenvolver o módulo que vai representar a parte **Financeira**. Como requisito para esse exericicio deve conter a classe **Cliente** como entidade de dominio.
        1. Implemente nessa entidade os seguintes atributos: **nome, idade, cpf, datamatricula**
        2. Adicione as seguintes regras dentro do dominio: **O nome pode conter no minimo 5 caracteres, idade acima de 18 e cpf com 11 digitos, datamatricula não pode ser vazio**
    9. Nosso sistema evoluiu conforme o tempo e agora foi solicitado pelo negocio adicionar uma nova **feature**. Quando o cliente completar 2 anos de matricula, adicionar para esse cliente **10% de desconto** nos boletos. Como sugestão, pode conter na classe um método que dispara para gerar o boleto, recebendo o cpf, valor. Antes de disparar para gerar o boleto devem chamar um método que será capaz de verificar a matricula e caso tenha mais que 2 anos adicione o desconto no valor, em seguida envie o novo valor na funcionalidade de gerar o boleto.
    10. Faça o commit de cada tarefa e como resposta, em um markdown coloque o repositório.
