<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php $this->assign('title', 'Religion - Dii Consentes'); ?>
<section id="highlights" class="wrapper style3">
	<h1 class="title is-1">Dii Consentes</h1>
	<div class="columns">
		<div class="column">
			<h2 class="subtitle is-2">The Twelve Olympians, being the primary gods of Ancient Rome</h2>
			<ul style="list-style-type: upper-roman; list-style-position: inside;">
				<li><?= $this->Html->link('Jupiter, King of the Gods', ['action' => 'jupiter']) ?></li>
				<li><?= $this->Html->link('Juno, Queen of the Gods', ['action' => 'juno']) ?></li>
				<li><?= $this->Html->link('Neptune, God of the Seas', ['action' => 'neptune']) ?></li>
				<li><?= $this->Html->link('Minerva, Goddess of Wisdom', ['action' => 'minerva']) ?></li>
				<li><?= $this->Html->link('Mars, God of War', ['action' => 'mars']) ?></li>
				<li><?= $this->Html->link('Venus, Goddess of Love', ['action' => 'venus']) ?></li>
				<li><?= $this->Html->link('Apollo, God of Healing', ['action' => 'apollo']) ?></li>
				<li><?= $this->Html->link('Diana, Goddess of the Hunt', ['action' => 'diana']) ?></li>
				<li><?= $this->Html->link('Vulcan, God of the Forge', ['action' => 'vulcan']) ?></li>
				<li><?= $this->Html->link('Vesta, Goddess of the Hearth', ['action' => 'vesta']) ?></li>
				<li><?= $this->Html->link('Mercury, King of Travellers', ['action' => 'mercury']) ?></li>
				<li><?= $this->Html->link('Ceres, Goddess of Agriculture', ['action' => 'ceres']) ?></li>
			</ul>
			<div class="has-text-centered">
				<?= $this->Html->link('Return to Roman Religion Portal', ['controller' => 'religion', 'action' => 'index'], ['class' => 'button is-primary']) ?>
			</div>
		</div>
		<div class="column" style="background-image:url(/img/dii-consentes.jpg); background-size:cover;">
		<p style="font-size: 0.4em"><?= $this->Html->link('Maierstrom.org', 'https://maierstorm.org/Vampire/images/f/ff/Alter_of_the_Twelve_Gods.jpg'); ?></p>
		</div>
	</div>
</section>