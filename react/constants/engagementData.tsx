import { EngagementServiceType } from 'src/types';
import { EmphasizedText } from 'src/ui-kit';
import { ArchitectureIcon } from 'src/assets/icons/ArchitectureIcon';
import { TeamworkIcon } from 'src/assets/icons/TeamworkIcon';

export const ENGAGEMENT_DATA: EngagementServiceType = {
  title: 'Opt for an engagement model that suits you best',
  description: (
    <>
      We offer <EmphasizedText title="SaaS application development services " />
      using flexible engagement models. We can build your project from start to
      finish or add extra talent to your in-house team.
    </>
  ),
  services: [
    {
      id: 'entire_project',
      icon: (
        <ArchitectureIcon
          width={46}
          className="w-16 h-[70px] xs:w-10 xs:h-11"
        />
      ),
      title: 'Let us build an entire project',
      text: 'Build your product from start to finish with our team of SaaS development experts. We take full responsibility for your project delivery. ',
    },
    {
      id: 'saas_developers',
      icon: (
        <TeamworkIcon className="w-16 h-[70px] stroke-blue-warm xs:w-10 xs:h-11" />
      ),
      title: 'Add SaaS developers to your team',
      text: 'Hire as many qualified software developers as you need to complete your project and not add a single employee to your payroll. ',
    },
  ],
  buttonText: 'Get in touch',
  buttonClassName: 'max-w-[190px] w-full justify-center',
};
