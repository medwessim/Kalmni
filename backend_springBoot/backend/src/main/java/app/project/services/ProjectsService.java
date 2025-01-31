package app.project.services;

import java.util.List;

import app.project.entities.Personne;
import app.project.entities.Projects;

public interface ProjectsService {
	void deleteProject(Long id);
	Projects saveProject(Projects project);
	Projects findProjectById(Long id);
	List<Projects> findAllProjects();
    List<Projects> findProjectsByPerson(Personne person);
    Personne findPersonById(Long id);


}
