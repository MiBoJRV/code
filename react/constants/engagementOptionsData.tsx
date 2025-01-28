import { EngagementOptionServiceType } from 'src/types';
import { EmphasizedText } from 'src/ui-kit';
import { ArchitectureIcon } from 'src/assets/icons/ArchitectureIcon';
import { TeamworkIcon } from 'src/assets/icons/TeamworkIcon';

export const ENGAGEMENT_OPTIONS_DATA: EngagementOptionServiceType = {
  title: (
    <>
      <EmphasizedText title="Flexible " />
      engagement options
    </>
  ),
  description:
    'Whether you need a full-time CTO to manage the development process from start to finish or require senior technology expertise for a specific area of your project, we offer flexible engagement models to meet your current project needs.',
  services_one: [
    {
      id: 'full_time_cto',
      icon: (
        <ArchitectureIcon
          width={46}
          className="w-16 h-[70px] xs:w-10 xs:h-11"
        />
      ),
      title: 'Full-time CTO ',
      text: (
        <>
          Our CTO is available full-time to
          <EmphasizedText
            className="font-normal"
            title=" provide expert technical support and effective team management "
          />
          at any stage of your project.
          <br />
          <br />
          Whether it's the discovery phase, technical audit, roadmap planning,
          or feasibility assessment, we
          <EmphasizedText
            className="font-normal"
            title=" cover
          all technical aspects to ensure your project's success."
          />
        </>
      ),
    },
    {
      id: 'fractional_cto',
      icon: (
        <TeamworkIcon className="w-16 h-[70px] stroke-blue-warm xs:w-10 xs:h-11" />
      ),
      title: 'Fractional CTO',
      text: (
        <>
          You can get a CTO
          <EmphasizedText
            className="font-normal"
            title=" to fuel a specific area of  your project "
          />
          and work alongside your technical cofounder.
          <br />
          <br />
          Whether it's
          <EmphasizedText
            className="font-normal"
            title=" migrating to a new tech stack, "
          />
          integrating complex APIs, or
          <EmphasizedText
            className="font-normal"
            title=" managing technical debt, "
          />
          we can help you fill technology gaps while achieving specific project
          milestones.
        </>
      ),
    },
  ],
  services_two: [
    {
      id: 'interim_cto',
      icon: (
        <ArchitectureIcon
          width={46}
          className="w-16 h-[70px] xs:w-10 xs:h-11"
        />
      ),
      title: 'Interim CTO',
      text: (
        <>
          Before hiring a full-time Chief Technology Officer, you can
          <EmphasizedText
            className="font-normal"
            title=" work with our technical adviser. "
          />
          <br />
          <br />
          Our CTO will conduct tech interviews
          <EmphasizedText
            className="font-normal"
            title=" to help assemble a high-performing team, set up and fine-tune processes, "
          />
          and manage development until you find the right candidate.
        </>
      ),
    },
    {
      id: 'cto_team',
      icon: (
        <TeamworkIcon className="w-16 h-[70px] stroke-blue-warm xs:w-10 xs:h-11" />
      ),
      title: 'CTO + Team',
      text: (
        <>
          We can
          <EmphasizedText
            className="font-normal"
            title=" provide you with a complete team consisting "
          />
          of a CTO, software developers, QA, and DevOps engineers.
          <br />
          <br />
          In this configuration, our in-house
          <EmphasizedText
            className="font-normal"
            title=" developers work under the leadership of our CTO, "
          />
          who takes full responsibility for delivering your project end to end.
        </>
      ),
    },
  ],
};
