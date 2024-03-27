    <div class="bg-tertiary-900">
        <!-- Background color split screen for large screens -->
        <div class="fixed left-0 top-0 hidden h-full w-1/2 bg-tertiary-900 lg:block" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden h-full w-1/2 bg-tertiary-800 lg:block" aria-hidden="true"></div>


        <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 lg:pt-16">

            <section aria-labelledby="summary-heading" class="bg-tertiary-800 py-12 text-indigo-300 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">

                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">

                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>

                    <x-checkout.produto-lista>
                        <x-checkout.produto-item
                        
                        nome="Boneca Nandinha"
                        preco="210,00"
                        :detalhes="[
                            'Tecido de pano cru',
                            'Altura 28cm',
                            'Acompanha Vestido',
                            ]"
                        imagem="https://www.artesdaceci.com.br/Fotos/Media/Artes_da_Ceci_15-1635587821.jpg"
                        quantidade="5"
                        >
                            
                        </x-checkout.produto-item>
                    </x-checkout.produto-lista>

                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">

                        <x-checkout.subtotal-item titulo="Subtotal" valor="1050,00" />
                        <x-checkout.subtotal-item titulo="Frete" valor="150,00" />
                        <x-checkout.subtotal-item titulo="Total" valor="150,00" :ultimo="true" />


                       
                    </dl>
                </div>
            </section>

            <section aria-labelledby="payment-and-shipping-heading" class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <x-sessao-titulo titulo="Informações de contato" />

                            <div class="mt-6">
                                <x-input-label for="email" value="E-mail" />
                                <div class="mt-1">
                                    <x-text-input
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        autocomplete="email" 
                                        placeholder="E-mail"
                                    />
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-10">
                            <x-sessao-titulo titulo="Detalhes do pagamento" />
                            
                            <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                <div class="col-span-3 sm:col-span-4">
                                    <x-input-label for="card-number" value="Numero do cartao" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text"     
                                            id="card-number" 
                                            name="card-number" 
                                            autocomplete="cc-number" 
                                            placeholder="Número do cartão" 
                                        />
                                    </div>
                                </div>

                                <div class="col-span-2 sm:col-span-3">
                                    <x-input-label for="data-expiracao" value="Data de expiração (MM/YY)"/>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text" 
                                            name="data-expiracao" 
                                            id="data-expiracao" 
                                            placeholder="DD/MM"
                                            maxlength="5"
                                            />
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <x-input-label for="cvc" value="CVC"/>
                                    <div class="mt-1">
                                        <x-text-input 
                                        type="text" 
                                        name="cvc" 
                                        id="cvc" 
                                        placeholder="XXX" 
                                        maxlength="3"
                                        />
                                    </div>
                                </div>

                                <div class="col-span-3 sm:col-span-4">
                                    <x-input-label for="cpf" value="CPF" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text"     
                                            id="cpf" 
                                            name="cpf" 
                                            placeholder="Digite seu CPF: ___-___-___-__" 
                                            required 
                                            pattern="^\d{3}\.\d{3}\.\d{3}-\d{2}$"
                                            maxlength="14"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <x-sessao-titulo titulo="Endereço" />

                            <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-3">
                                <div class="sm:col-span-3">
                                    <x-input-label for="rua" value="Rua"/>
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="rua" 
                                            name="rua" 
                                            autocomplete="Rua"
                                            placeholder="Rua" 
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="cidade" value="Cidade" />
                                    <div class="mt-1">
                                        <x-text-input 
                                        type="text" 
                                        id="cidade" 
                                        name="cidade" 
                                        placeholder="Cidade" 
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="estado" value="Estado"/>
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="estado" 
                                            name="estado"
                                            autocomplete="Estado" 
                                            placeholder="XX"
                                            maxlength="2"

                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="cep" value="CEP"/>
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="tel" 
                                            id="cep"
                                            name="cep"
                                            autocomplete="CEP" 
                                            placeholder="Somente Números"
                                            maxlength="8"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 flex justify-end border-t border-tertiary-800-200 pt-6">
                            <button 
                                type="submit" class="rounded-md border border-transparent bg-primary-200 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-tertiary-800-50">
                                Comprar
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>