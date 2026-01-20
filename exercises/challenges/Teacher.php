<?php
class Teacher {
	private string $nom;
	private string $subject;

	public function __construct($nom, $subject)
	{
		$this->nom = $nom;
		$this->subject = $subject;
	}

	public function getName()
	{
		return $this->nom;
	}

	public function getSubject()
	{	
		return $this->nom;
	}

}

class TeacherRepository {
	
	private PDO $pdo;
	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	public function add(Teacher $teacher)
	{
		$sql = "INSERT INTO Teachers (nom, subject) 
			VALUES (?, ?, ?)";
		
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$teacher->getName(),
			$teacher->getSubject()
		]);
	}
}

$pdo = new PDO("pgsql:host=localhost;dbname=athena;", "postgres", "typhussama5T!");
$repo = new TeacherRepository($pdo);

$t = new Teacher("aymane", "quantum");
$repo->add($t);
?>
