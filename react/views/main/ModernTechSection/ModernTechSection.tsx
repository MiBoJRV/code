import React from 'react';
import { TECHNOLOGY } from './constants';
import {
  BorderedBox,
  EmphasizedText,
  Heading2,
  PageSection,
  Text2,
} from 'src/ui-kit';
import { TechnologyCard } from 'src/components';

export const ModernTechSection: React.FC = (): JSX.Element => {
  return (
    <PageSection>
      <div className="flex flex-col justify-center mx-auto text-center max-w-full 1xl:px-52 xxl:px-0">
        <Heading2>
          Unlock the potential of
          <EmphasizedText title=" modern" />
          <EmphasizedText title=" technology " />
          for your business
        </Heading2>
        <Text2
          className="mt-10 sm:ml-0 sm:w-auto 1xl:px-12"
          title="Our team specializes in integrating technologies like OpenAI APIs, blockchain, and RPA to help businesses unlock new opportunities for efficiency and growth.
"
        />
      </div>
      <ul className="grid grid-cols-1 xs:grid-cols-2-1 1xl:grid-cols-4-1 gap-5 mx-auto mt-6 lg:mt-14 1xl:flex 1xl:justify-between">
        {TECHNOLOGY.map((technology) => (
          <BorderedBox
            key={technology.id}
            className="group/withHover transition-all justify-self-center hover:filter-shadow hover:bg-box-hover hover:bg-center hover:bg-cover xs:odd:justify-self-end xs:even:justify-self-start"
          >
            <TechnologyCard {...technology} />
          </BorderedBox>
        ))}
      </ul>
    </PageSection>
  );
};
