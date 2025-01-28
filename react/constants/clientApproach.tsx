import { ClientApproachType } from 'src/types';
import { CentricApproachIcon } from '../assets/icons/CentricApproachIcon';
import { TeamScalingIcon } from '../assets/icons/TeamScalingIcon';
import { UpdatesIcon } from '../assets/icons/UpdatesIcon';
import { TeamworkIcon } from '../assets/icons/TeamworkIcon';

export const CLIENT_APPROACH_DATA: ClientApproachType = {
  id: 'approach',
  title: 'Unique approach to each client',
  description:
    'At Wetelo, we put our clients first and ensure they have full control over our processes.',
  approaches: [
    {
      id: 'centric',
      text: 'Customer-centric approach',
      icon: <CentricApproachIcon />,
    },
    {
      id: 'scaling',
      text: 'On-demand team scaling',
      icon: <TeamScalingIcon />,
    },
    {
      id: 'updates',
      text: 'Regular reporting and updates',
      icon: <UpdatesIcon />,
    },
    {
      id: 'teamwork',
      text: 'Well-coordinated teamwork',
      icon: <TeamworkIcon />,
    },
  ],
};
