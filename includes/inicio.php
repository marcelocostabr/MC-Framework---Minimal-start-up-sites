<div class="slider slider--full">
	<div class="slider__inner">
		<input checked type="radio" name="slider__radiobox" id="slider__radiobox--1" class="slider__radiobox slider__radiobox--1"><label for="slider__radiobox--1" class="slider__radiobox-label slider__radiobox-label--item slider__radiobox-label--item--1"></label><label for="slider__radiobox--4" class="slider__radiobox-label slider__radiobox-label--prev slider__radiobox-label--prev--4"></label><label for="slider__radiobox--2" class="slider__radiobox-label slider__radiobox-label--next slider__radiobox-label--next--2"></label>
		<input         type="radio" name="slider__radiobox" id="slider__radiobox--2" class="slider__radiobox slider__radiobox--2"><label for="slider__radiobox--2" class="slider__radiobox-label slider__radiobox-label--item slider__radiobox-label--item--2"></label><label for="slider__radiobox--1" class="slider__radiobox-label slider__radiobox-label--prev slider__radiobox-label--prev--1"></label><label for="slider__radiobox--3" class="slider__radiobox-label slider__radiobox-label--next slider__radiobox-label--next--3"></label>

		<div class="slider__slides">
			<div class="slider__slide slider__slide--1" style="background-image: url('<?php echo $urlPath ?>img/Slide-Home1.jpg');"></div>
			<div class="slider__slide slider__slide--2" style="background-image: url('<?php echo $urlPath ?>img/Slide-Home2.jpg');"></div>
		</div>
	</div>
</div>

<div class="apresentacao">
	<div class="container">
		<h1>MÁRMORES, GRANITOS, VIDROS E ESQUADRIAS</h1>
		<p>A marmoraria Castelo das Pedras busca oferecer soluções em serviços de mármores e granitos.  Atuando há mais de 08 anos no mercado de São Roque e região procura sempre se manter atualizada frente as novidades e tendências de design e opções de materiais. </p>
		<p>Dispõe  ainda de maquinário e ferramentas atualizadas, profissionais devidamente capacitados que passam periodicamente por treinamentos, além de trabalhar somente com matérias-primas de qualidade.</p>
	</div>
</div>

<div class="container containerHome">
	<div class="row">
		<div class="column column-6 homeBox">
			<h2>
				CONHEÇA  <strong>NOSSAS PEDRAS </strong>
			</h2>
			<div class="texto">
				São mais de 30 tipos de pedras entre mármores e granitos, para projetos de alto padrão ou cotidianos, com certeza teremos uma que lhe agradará.
			</div>
			<a href="<?php echo $urlPath ?>pedras">VEJA TODAS AS PEDRAS</a>
		</div>
		<div class="column column-6 homeBox1">
			<h2>
				TRABALHOS <strong>RECENTES</strong>
			</h2>
			<div class="projetos">
				<!-- 5 últimos trabalhos -->
				<?php
				$tabela = 'port_posts' ;
				$where = "rascunho != 's'";
				$orderby = 'id DESC';
				$limit = 'LIMIT 0,5';
				$dados = dbfGetReg($pdo, $tabela, $where, $orderby, $limit);
				foreach ($dados as $reg) {
					?>
					<a href="<?php echo $urlPath ?>nossos-trabalhos/projeto/<?php echo $reg['idurl'] ?>">
						<img src="<?php echo $cfg_raiz_upload_dir_view.'portifolio/g'.$reg['imagem'] ?>"  alt="<?php echo $reg['titulo'] ?>" title="<?php echo $reg['titulo'] ?>" />
					</a>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

<div class="container tiposPedras pb30">
	Amarelo Florença, Amarelo Icaraí, Amarelo Maracujá, Amarelo Ornamental, Amarelo Santa Cecília, Amarelo Santa Light, Aqualux, Arabesco, Ardósia, Branco Carrara, Branco Dallas, Branco Norte, Branco Polar, Branco Siena, Cinza Absoluto, Cinza Andorinha, Cinza Corumba, Crema Marfil, Itaúnas, Mármore Branco, Marrom Absoluto, Marrom Café, Ocre, Preto Absoluto, Preto Indiano, Preto Via Láctea, Prime Branco, Prime Crema, Rosa Raíssa, Terracota, Travertino Romano, Verde Candeias, Verde Ubatuba, Vermelho Jacarandá.
</div>