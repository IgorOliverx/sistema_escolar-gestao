<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ativo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AtivoController extends Controller
{
    public readonly Ativo $ativo;

    public function __construct()
    {
        $this->ativo = new Ativo();
    }

    /**
     * Lista os Ativos
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try{
            $todosAtivos = $this->ativo->retornarAtivos();

            return response()->json([
                'message' => true,
                'data' => $todosAtivos,
            ], 200);

        }catch(\Exception $e){

            return response()->json([
                'message' => false,
                'error' => 'Ocorreu um erro inesperado.',
                'details' => $e->getMessage(),
            ], 500);

        }


    }

    /**
     * Retorna os ativos com base no id passado no endpoint
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id)
    {
        try{
            if(!$this->ativo->idExiste($id))
            {
                return response()->json([
                    'message' => false,
                    'error' => 'O ID informado não consta na base de dados.',
                ], 400);
            }

           $ativo = $this->ativo->retornarAtivo($id);
            return response()->json([
                'status' => true,
                'message' => $ativo
            ], 200);
        }
        catch(\Exception $e){
            return response()->json([
                'message' => false,
                'error' => 'Ocorreu um erro inesperado',
                'details' => $e->getMessage(),
            ], 500);
        }

    }

    /**
     * Cria um novo ativo a partir da requisição
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $data = $request->validate([
                'nome' => ['string', 'required', 'max:255'],
                'patrimonio' => ['integer']
            ]);

            $novoAtivo = $this->ativo->cadastrarAtivo($data);

            return response()->json([
                'status' => true,
                'data' => $novoAtivo
            ], 200);

        } catch (ValidationException $e) {

            return response()->json([
                'status' => false,
                'error' => 'Erro de validação',
                'message' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            // Captura outras exceções
            return response()->json([
                'status' => false,
                'error' => 'Ocorreu um erro inesperado.',
                'details' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Atualiza um ativo
     * @param Request $request
     * @param string $id
     * @return JsonResponse
     */
    public function update(Request $request, string $id): JsonResponse
    {
        try {
            $data = $request->validate([
                'nome' => ['string', 'required', 'max:255'],
                'patrimonio' => ['integer']
            ]);

            $ativoAtualizado = $this->ativo->atualizarAtivo($id, $data);

            return response()->json([
                'status' => true,
                'data' => $ativoAtualizado
            ], 200);

        } catch (ValidationException $e) {

            return response()->json([
                'status' => false,
                'error' => 'Erro de validação',
                'message' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            // Captura outras exceções
            return response()->json([
                'status' => false,
                'error' => 'Ocorreu um erro inesperado.',
                'details' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Excluir Ativo da base de Dados
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id)
    {
        try{

            if(!$this->ativo->idExiste($id))
            {
                return response()->json([
                    'message' => false,
                    'error' => 'O ID informado não consta na base de dados.',
                ], 400);
            }

            $this->ativo->apagarAtivo($id);
            return response()->json([
                'status' => true,
                'message' => 'Ativo apagado com sucesso!'
            ], 200);

        }catch(\Exception $e){
            return response()->json([
                'message' => false,
                'error' => 'Ocorreu um erro inesperado',
                'details' => $e->getMessage(),
            ], 500);
        }
    }


    /**
     * Listar ativos individuais
     */
    public function retornaAtivoSala(String $sala): JsonResponse
    {
        try{
            //Arrumar este metodo no Model
            //if(!$this->ativo->salaExiste($sala)){
             //   return response()->json([
            //        'message' => false,
           //         'error' => 'A sala informada não existe'
          //      ], 400);
         //   }
            $ativoSalas = $this->ativo->retornaAtivoSala($sala);
            return response()->json([
                'status' => true,
                'dados' => $ativoSalas,
            ], 200);

        }catch(\Exception $e){

            return response()->json([
                'message' => false,
                'error' => 'erro do catch.' . $e->getMessage(),
            ], 500);

        }
    }
}
