<?php

namespace Gstt\Achievements\Event;

use Gstt\Achievements\Model\AchievementProgress;
use Illuminate\Queue\SerializesModels;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Unlocked 
{
    use SerializesModels;

    public $progress;

    /**
     * Create a new event instance.
     *
     * @param  AchievementProgress $progress
     */
    public function __construct(AchievementProgress $progress)
    {
        $this->progress = $progress;
    }

    // public function broadcastAs()
    // {
    //     return 'progress-unlock';
    // }

    // public function broadcastOn()
    // {
    //     return new PrivateChannel('badge-earned.' . $this->progress->achiever_id);        
    // }
    
}