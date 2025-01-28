import { ObstaclesType } from 'src/types';
import { EmphasizedText } from 'src/ui-kit';
import { FundingIcon } from 'src/assets/icons/FundingIcon';
import { IntegratingIcon } from 'src/assets/icons/IntegratingIcon';
import { ModernizeIcon } from 'src/assets/icons/ModernizeIcon';

export const OBSTACLES_DATA: ObstaclesType = {
  features: [
    {
      id: 'funding',
      icon: <FundingIcon />,
      text: (
        <>
          Can’t get the <EmphasizedText title="next round of funding" /> without
          working software
        </>
      ),
    },
    {
      id: 'services',
      icon: <IntegratingIcon />,
      text: (
        <>
          Struggling with
          <EmphasizedText title=" integrating external services" />
          to boost your app's capabilities
        </>
      ),
    },
    {
      id: 'modernize',
      icon: <ModernizeIcon />,
      text: (
        <>
          Don’t have experts to
          <EmphasizedText title=" modernize legacy software " /> code
        </>
      ),
    },
  ],
};
