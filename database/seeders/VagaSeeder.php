<?php

namespace Database\Seeders;

use App\Models\Vaga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createVaga();
    }

    public function createVaga()
    {
        Vaga::create([
            'nome' => 'Software Engineer',
            'pais' => 'Brasil',
            'cidade' => 'São Paulo',
            'estado' => 'São Paulo',
            'departamento' => 'Tecnologia',
            'tipo' => 'Período Integral',
            'remoto' => 1,
            'user_id' => 1,
            'descricao' => 'Desenvolver (micro-) serviços independentes para soluções específicas;
            Contribua não apenas com os desafios imediatos de sua equipe, mas com toda a equipe de produto -
            compartilhando inputs / código / etc;
            Melhorar a experiência de desenvolvimento na UOTZ aprimorando as ferramentas, cobertura de teste
            e / ou estrutura de código;
            Participar ativamente de discussões e decisões de design de software. Contruindo e ajudando a criar
            documentações;
            Criar soluções escaláveis, de fácil manutenção e direcionadas ao usuário. Usamos várias tecnologias
            diferentes: PHP sobre banco de dados SQL, MongoDB e Firebase. Também temos microserviços
            escritos em Node e PHP, além de aplicativos com Android. Você não precisa saber tudo isso de antemão,
            mas daremos a você espaço para aprender e melhorar;
            Para se destacar:
            Requisitos
            Proficiência em pelo menos uma linguagem de programação e banco de dados relacional;
            Experiência em criação e utilização de RESTfull APIs;
            Pessoas que buscam aprender e gerar impacto real por meio de software estruturado de alta qualidade,
            valorizando o equilíbrio entre vida profissional e pessoal;
            Conhecimento em Inglês - nós utilizamos o inglês para escrever nosso código, documentação, ferramentas
            e eventualmente conversamos com fornecedores de outros países.
            O que estamos procurando:
            Conhecimento em teoria da computação, incluindo otimização de algoritmos e sistemas distribuídos;
            Já ter desenvolvido soluções escaláveis;
            Possuir experiência com plataformas de serviços em cloud (AWS, GCP, Azure, etc);
            Conhecimento em CD/CI;
            Experiência com Docker;
            Compreender que o trabalho nunca termina; estamos sempre cuidado e evoluindo nossos serviços;
            Localização
            Nosso escritório está em São Paulo, no bairro de Pinheiros, próximo ao metrô Fradique Coutinho.',
            'created_at' => '2020-10-15 13:00:15',
            'updated_at' => '2020-10-15 13:00:15'
        ]);

        $this->command->info('Vaga Software Engineer criada');

        Vaga::create([
            'nome' => 'Assistente de Comunicação',
            'pais' => 'Brasil',
            'cidade' => 'São Paulo',
            'estado' => 'São Paulo',
            'departamento' => 'Marketing',
            'tipo' => 'Estágio',
            'remoto' => 1,
            'user_id' => 1,
            'descricao' => 'Desenvolver (micro-) serviços independentes para soluções específicas;
            Contribua não apenas com os desafios imediatos de sua equipe, mas com toda a equipe de produto -
            compartilhando inputs / código / etc;
            Melhorar a experiência de desenvolvimento na UOTZ aprimorando as ferramentas, cobertura de teste
            e / ou estrutura de código;
            Participar ativamente de discussões e decisões de design de software. Contruindo e ajudando a criar
            documentações;
            Criar soluções escaláveis, de fácil manutenção e direcionadas ao usuário. Usamos várias tecnologias
            diferentes: PHP sobre banco de dados SQL, MongoDB e Firebase. Também temos microserviços
            escritos em Node e PHP, além de aplicativos com Android. Você não precisa saber tudo isso de antemão,
            mas daremos a você espaço para aprender e melhorar;
            Para se destacar:
            Requisitos
            Proficiência em pelo menos uma linguagem de programação e banco de dados relacional;
            Experiência em criação e utilização de RESTfull APIs;
            Pessoas que buscam aprender e gerar impacto real por meio de software estruturado de alta qualidade,
            valorizando o equilíbrio entre vida profissional e pessoal;
            Conhecimento em Inglês - nós utilizamos o inglês para escrever nosso código, documentação, ferramentas
            e eventualmente conversamos com fornecedores de outros países.
            O que estamos procurando:
            Conhecimento em teoria da computação, incluindo otimização de algoritmos e sistemas distribuídos;
            Já ter desenvolvido soluções escaláveis;
            Possuir experiência com plataformas de serviços em cloud (AWS, GCP, Azure, etc);
            Conhecimento em CD/CI;
            Experiência com Docker;
            Compreender que o trabalho nunca termina; estamos sempre cuidado e evoluindo nossos serviços;
            Localização
            Nosso escritório está em São Paulo, no bairro de Pinheiros, próximo ao metrô Fradique Coutinho.',
            'created_at' => '2020-10-15 13:00:15',
            'updated_at' => '2020-10-15 13:00:15'
        ]);

        $this->command->info('Vaga Assistente de Comunicação criada');

        Vaga::create([
            'nome' => 'Assistente de Projetos - Avaliação da Jornada Digital',
            'pais' => 'Brasil',
            'cidade' => 'São Paulo',
            'estado' => 'São Paulo',
            'departamento' => 'Operações',
            'tipo' => 'Período Integral',
            'user_id' => 1,
            'descricao' => 'Desenvolver (micro-) serviços independentes para soluções específicas;
            Contribua não apenas com os desafios imediatos de sua equipe, mas com toda a equipe de produto -
            compartilhando inputs / código / etc;
            Melhorar a experiência de desenvolvimento na UOTZ aprimorando as ferramentas, cobertura de teste
            e / ou estrutura de código;
            Participar ativamente de discussões e decisões de design de software. Contruindo e ajudando a criar
            documentações;
            Criar soluções escaláveis, de fácil manutenção e direcionadas ao usuário. Usamos várias tecnologias
            diferentes: PHP sobre banco de dados SQL, MongoDB e Firebase. Também temos microserviços
            escritos em Node e PHP, além de aplicativos com Android. Você não precisa saber tudo isso de antemão,
            mas daremos a você espaço para aprender e melhorar;
            Para se destacar:
            Requisitos
            Proficiência em pelo menos uma linguagem de programação e banco de dados relacional;
            Experiência em criação e utilização de RESTfull APIs;
            Pessoas que buscam aprender e gerar impacto real por meio de software estruturado de alta qualidade,
            valorizando o equilíbrio entre vida profissional e pessoal;
            Conhecimento em Inglês - nós utilizamos o inglês para escrever nosso código, documentação, ferramentas
            e eventualmente conversamos com fornecedores de outros países.
            O que estamos procurando:
            Conhecimento em teoria da computação, incluindo otimização de algoritmos e sistemas distribuídos;
            Já ter desenvolvido soluções escaláveis;
            Possuir experiência com plataformas de serviços em cloud (AWS, GCP, Azure, etc);
            Conhecimento em CD/CI;
            Experiência com Docker;
            Compreender que o trabalho nunca termina; estamos sempre cuidado e evoluindo nossos serviços;
            Localização
            Nosso escritório está em São Paulo, no bairro de Pinheiros, próximo ao metrô Fradique Coutinho.',
            'created_at' => '2020-10-15 13:00:15',
            'updated_at' => '2020-10-15 13:00:15'
        ]);

        $this->command->info('Vaga Assistente de Projetos - Avaliação da Jornada Digital criada');

        Vaga::create([
            'nome' => 'Assistente de Projetos - Inteligência Competitiva',
            'pais' => 'Brasil',
            'cidade' => 'São Paulo',
            'estado' => 'São Paulo',
            'departamento' => 'Marketing',
            'tipo' => 'Período Integral',
            'user_id' => 1,
            'descricao' => 'Desenvolver (micro-) serviços independentes para soluções específicas;
            Contribua não apenas com os desafios imediatos de sua equipe, mas com toda a equipe de produto -
            compartilhando inputs / código / etc;
            Melhorar a experiência de desenvolvimento na UOTZ aprimorando as ferramentas, cobertura de teste
            e / ou estrutura de código;
            Participar ativamente de discussões e decisões de design de software. Contruindo e ajudando a criar
            documentações;
            Criar soluções escaláveis, de fácil manutenção e direcionadas ao usuário. Usamos várias tecnologias
            diferentes: PHP sobre banco de dados SQL, MongoDB e Firebase. Também temos microserviços
            escritos em Node e PHP, além de aplicativos com Android. Você não precisa saber tudo isso de antemão,
            mas daremos a você espaço para aprender e melhorar;
            Para se destacar:
            Requisitos
            Proficiência em pelo menos uma linguagem de programação e banco de dados relacional;
            Experiência em criação e utilização de RESTfull APIs;
            Pessoas que buscam aprender e gerar impacto real por meio de software estruturado de alta qualidade,
            valorizando o equilíbrio entre vida profissional e pessoal;
            Conhecimento em Inglês - nós utilizamos o inglês para escrever nosso código, documentação, ferramentas
            e eventualmente conversamos com fornecedores de outros países.
            O que estamos procurando:
            Conhecimento em teoria da computação, incluindo otimização de algoritmos e sistemas distribuídos;
            Já ter desenvolvido soluções escaláveis;
            Possuir experiência com plataformas de serviços em cloud (AWS, GCP, Azure, etc);
            Conhecimento em CD/CI;
            Experiência com Docker;
            Compreender que o trabalho nunca termina; estamos sempre cuidado e evoluindo nossos serviços;
            Localização
            Nosso escritório está em São Paulo, no bairro de Pinheiros, próximo ao metrô Fradique Coutinho.',
            'created_at' => '2020-10-15 13:00:15',
            'updated_at' => '2020-10-15 13:00:15'
        ]);

        $this->command->info('Vaga Assistente de Projetos - Inteligência Competitiva criada');
    }
}
