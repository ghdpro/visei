<?php get_header(); ?>

<main class="container my-5" lang="nl">
	<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/profiel_foto.jpg" class="rounded-circle float-right m-5" style="width: 8vw; height: 8vw; object-fit: cover" alt="Gerard Krijgsman">
	<div class="jumbotron">
		<h1>Gerard Krijgsman</h1>
		<p class="lead">Web Developer</p>
		<p>
			Hallo, mijn naam is Gerard Krijgsman en ik ben web developer.
		</p>
	</div>

	<div class="text-center my-3">
		<a href="https://github.com/ghdpro" class="btn btn-primary rounded mx-1"><i class="fab fa-github"></i> Github</a>
		<a href="https://hg.sr.ht/~ghdpro/" class="btn btn-primary rounded mx-1"><i class="fas fa-code"></i> Sourcehut</a>
		<a href="https://www.linkedin.com/in/gerard-krijgsman/" class="btn btn-primary rounded mx-1"><i class="fab fa-linkedin"></i> LinkedIn</a>
		<a href="mailto:gerard@visei.com" class="btn btn-primary rounded mx-1"><i class="far fa-paper-plane"></i> Email</a>
	</div>

	<div class="my-3">
		<h2>Kennis &amp; Vaardigheden</h2>
		<div class="row">

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><i class="fab fa-python text-primary"></i> Python &amp; Django</h5>
						<p class="card-text">
							Op dit moment is Python mijn favoriete programmeertaal en Django mijn geprefereerde web framework.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><i class="fab fa-php text-secondary"></i> PHP</h5>
						<p class="card-text">
							Ik heb in het verleden ook PHP gebruikt, maar ik heb helaas geen recente ervaring met
							moderne PHP web frameworks.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><i class="fab fa-java text-danger"></i> Java</h5>
						<p class="card-text">
							Ik heb via de Open Universiteit een certificaat voor Object-georiënteerd programmeren in Java.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><i class="fab fa-html5 text-success"></i> HTML &amp; CSS</h5>
						<p class="card-text">
							Ik heb ervaring met schrijven van HTML en CSS. Het is misschien cliché, maar voor CSS
							gebruik ik vaak Bootstrap als basis.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><i class="fab fa-js-square text-danger"></i> Javascript</h5>
						<p class="card-text">
							Ik heb enige kennis en ervaring met het schrijven van Javascript, maar helaas nog geen
							ervaring met grote frameworks.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><i class="fas fa-terminal text-dark"></i> Dev Ops</h5>
						<p class="card-text">
							Ik heb ervaring met Linux en het installeren en configureren van web servers via de terminal.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="my-3">
		<h2>Portofolio</h2>
		<p>
			Ik heb in de afgelopen ~20 jaar meerdere sites gemaakt, maar helaas zijn niet al deze sites meer operationeel,
			door verschillende omstandigheden.
		</p>
		<div class="row">

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><a href="https://www.emulator-zone.com/">The Emulator Zone</a></h5>
						<p class="card-text">
							Gaming gerelateerde site over emulators. Een van mijn oudste sites en nog steeds populair.
							Deze site maakt gebruik van een zelf gemaakt CMS systeem geschreven in PHP.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><a href="https://rpguru.com/">RPGuru</a> <a
									href="https://github.com/ghdpro/rpguru" class="text-secondary"><i
										class="fab fa-github"></i></a></h5>
						<p class="card-text">
							Database voor dual audio (Engels & Japans) RPG games. Geschreven in Python &amp; Django web	framework.
							In de toekomst wil ik het mogelijk maken om à la Wikipedia iedereen content aan de site te
							laten toevoegen.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><a href="https://github.com/ghdpro/django-changerequest">django-changerequest</a>
							<a href="https://github.com/ghdpro/django-changerequest" class="text-secondary"><i
										class="fab fa-github"></i></a></h5>
						<p class="card-text">
							Auditing & staged edit package voor het Django web framework. Deze is nog niet maar wordt
							al wel gebruikt door RPGuru (zie hiernaast) voor het bijhouden van edit history.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><a href="https://github.com/ghdpro/django-artwork">django-artwork</a> <a
									href="https://github.com/ghdpro/django-artwork" class="text-secondary"><i
										class="fab fa-github"></i></a></h5>
						<p class="card-text">
							Artwork package voor het Django web framework. Deze is nog niet maar wordt
							al wel gebruikt door RPGuru (zie hierboven) voor het uploaden van images.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><a href="https://pypi.org/project/django-template-toolkit/">django-template-toolkit</a>
							<a href="https://github.com/ghdpro/django-template-toolkit" class="text-secondary"><i
										class="fab fa-github"></i></a></h5>
						<p class="card-text">
							Enkele templates &amp; template tags voor het Django framework die ik vaak in mijn projecten
							gebruik. Gepubliceerd op de Python Package Index (PyPI).
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><a href="https://animesuki.com/">AnimeSuki</a> <em
									class="text-secondary">(gesloten)</em></h5>
						<p class="card-text">
							BitTorrent index voor anime. Door streaming (Netflix e.d.) overbodig geworden.
							Backend was geschreven in PHP.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><a href="http://imagehost.org/">ImageHost.org</a> <em
									class="text-secondary">(gesloten)</em></h5>
						<p class="card-text">
							Image hosting website. Helaas maakte deze site verlies en kostte het verwijderen van
							ontoelaatbare content te veel tijd. Was geschreven in PHP.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><a href="http://fanzub.com/">fanzub</a> <em class="text-secondary">(gesloten)</em>
							<a href="https://github.com/fanzub/fanzub" class="text-secondary"><i
										class="fab fa-github"></i></a></h5>
						<p class="card-text">
							Usenet index voor anime. O.a. door streaming (Netflix e.d.) overbodig geworden.
							Was geschreven in PHP. De source code (zie Github logo) is openbaar.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title"><span class="text-secondary">Checkspam.net</span> <em
									class="text-secondary">(gesloten)</em></h5>
						<p class="card-text">
							Deze site was bedoeld als een API voor het snel checken van een IP of email adres om te zien
							of deze was opgenomen in bepaalde spam databases. Was geschreven in Python &amp; Django web
							framework.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="my-3">
		<h2>Vraag &amp; Antwoord</h2>
		<dl class="row my-3">
			<dt class="col-12"><em>Op je Github pagina is niet veel historische activiteit, waarom?</em></dt>
			<dd class="col-12">
				Ik heb een lange tijd niet Github, maar BitBucket gebruikt. Met het idee van "security door obscurity"
				had ik vele <em class="d-inline">private</em> Mercurial repositories op BitBucket. Inmiddels heb ik deze repositories
				naar <a href="https://hg.sr.ht/~ghdpro/" class="d-inline">Sourcehut</a> verhuisd, maar omdat vele van deze
				repositories "secrets" (passwords en dergelijke) bevatten kan ik deze repositories niet openbaar maken.
			</dd>
		</dl>
	</div>
</main>

<?php get_footer(); ?>
