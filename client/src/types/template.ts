import { ExerciseReference } from "./exercise";

export interface WorkoutTemplate {
  id: string;
  name: string;
  exercises: ExerciseReference[];
}
