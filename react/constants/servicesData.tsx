import { ServiceType } from 'src/types';
import { EmphasizedText } from 'src/ui-kit';
import { StrategyIcon } from 'src/assets/icons/StrategyIcon';
import { ArchitectureIcon } from 'src/assets/icons/ArchitectureIcon';
import { ManagementIcon } from 'src/assets/icons/ManagementIcon';
import { SoftwareDevIcon } from 'src/assets/icons/SoftwareDevIcon';

export const CTO_SERVICE_DATA: ServiceType = {
  title: 'Get expert technical leadership and guidance',
  description: (
    <>
      Our <EmphasizedText title="Chief Technology Officer" /> will work closely
      with you to understand your specific needs and goals. We can help you
      identify and prioritize new projects, evaluate new technologies, and
      develop a long-term technology strategy.
    </>
  ),
  features: [
    {
      id: 'strategy_feat',
      icon: (
        <StrategyIcon className="w-[68px] h-14 stroke-blue-warm xs:w-11 xs:h-9" />
      ),
      text: (
        <>
          Technical <EmphasizedText title="strategy" /> and roadmap development
        </>
      ),
    },
    {
      id: 'architecture_feat',
      icon: (
        <ArchitectureIcon className="w-16 h-[70px] stroke-blue-warm xs:w-10 xs:h-11" />
      ),
      text: (
        <>
          <EmphasizedText title="Architecture" />
          <br />
          and infrastructure design
        </>
      ),
    },
    {
      id: 'management_feat',
      icon: (
        <ManagementIcon className="w-[60px] h-14 stroke-blue-warm xs:w-[38px] xs:h-9" />
      ),
      text: (
        <>
          Technical project <EmphasizedText title="management" /> and team
          leadership
        </>
      ),
    },
    {
      id: 'software_dev_feat',
      icon: (
        <SoftwareDevIcon className=" w-16 h-14 stroke-blue-warm xs:w-10 xs:h-9" />
      ),
      text: (
        <>
          Software <EmphasizedText title="development" /> and ongoing
          maintenance
        </>
      ),
    },
  ],
  link: '#',
};
