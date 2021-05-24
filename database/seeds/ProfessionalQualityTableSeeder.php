<?php

use Illuminate\Database\Seeder;

class ProfessionalQualityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \Illuminate\Support\Facades\DB::table('professional_qualities')->insert([
       	[ 'quality' => 'Adventurous:  I take risks.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Ambitious:  I am driven to succeed.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Approachable:  I work well with others.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Articulate:  I can express myself well in front of groups.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Autonomous:  I use initiative.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Calm:  I stay levelheaded in a crisis.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Charismatic:  I can be a leader when need be.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Cheerful:  I develop a positive work environment.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Clever:  I can juggle multiple tasks.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Competitive:   I thrive under pressure.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Confident:  I am not afraid to ask questions.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Cooperative:  I get along well in a team setting.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Courteous:  I care about workplace atmosphere.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Creative:  I think outside the box.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Curiosity:  I am eager to learn.              ','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Determined:   I am self-motivated.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Devoted:  I am committed to the company’s success. ','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Diligent:   I always work my hardest.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Easygoing:  I easily adapt to new situations. ','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Educated:  I possess formal training.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Efficient:  I have very quick turnover time.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Eloquent:  I have strong communication skills.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Energetic: I am able to work long and hard hours.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Enthusiastic:  I put my all into every project.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Flexible:  I am able to adapt my priorities.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Focused:  I am goal-oriented.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Friendly:   I am easy to work with.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Honest:  I value integrity.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Imaginative:  I am inventive in my work process.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Independent:  I need little direction.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Inexperienced:  I am a blank pallet.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Inquisitive:  I am excellent at gathering information.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Insightful:  I can read between the lines.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Intuitive:  I can sense when there is a problem.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Meticulous:  I pay attention to the small details.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Neurotic:  I am a perfectionist.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Open-minded:  I take constructive criticism well.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Opinionated:  I am comfortable voicing opinions.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Organized:  I am a meticulous planner.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Patient:  I am not easily ruffled.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Perceptive:  I can read people effortlessly.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Persuasive:  I am a natural salesperson.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Procedural:  I work best with structure.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Punctual:  I have great time management skills.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Quiet:  I am a great listener. ','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Relaxed:  I do not stress easily.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Resourceful:  I use every tool at hand.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Responsible:  I always finish a task on time.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Talkative:  I am comfortable initiating a dialogue.','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'quality' => 'Technological:  I am industrially savvy.','status' => '0','created_at' => \Carbon\Carbon::now()]
       
       	
        ]);
    }
}
